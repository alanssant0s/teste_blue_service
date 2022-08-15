<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['home', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function home()
    {
        $this->viewBuilder()->setLayout('ecommerce');
        $categories = $this->Products->ProductCategories->Categories->find('list');
        $features = $this->Products->ProductFeatures->Features->find('list');

        $products = $this->Products->find()->contain(['ProductCategories.Categories']);

        $query = $this->request->getQuery();
        $q = $this->Products->newEmptyEntity();
        if(sizeof($query) > 0){

            $q = $this->Products->patchEntity($q, $query);
            if($q->category_id)
                $products = $products->andWhere(['ProductCategories.category_id' => $q->category_id])->matching('ProductCategories');
            if($q->feature_id)
                $products = $products->andWhere(['ProductFeatures.feature_id' => $q->feature_id])->matching('ProductFeatures');
            if($q->name)
                $products = $products->andWhere(['name LIKE' => "%$q->name%"]);

        }

        $products = $this->paginate($products);
        $this->set(compact('products', 'categories', 'features', 'q'));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('ecommerce');
        $product = $this->Products->get($id, [
            'contain' => ['ProductCategories.Categories', 'ProductFeatures.Features'],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data = $this->setProductRelationData($data);
            $product = $this->Products->patchEntity($product, $data);

            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $order = $this->Products->Requests->find('list', ['limit' => 200])->all();
        $categories = $this->Products->ProductCategories->Categories->find('list', ['limit' => 200])->all();
        $features = $this->Products->ProductFeatures->Features->find('list', ['limit' => 200])->all();
        $this->set(compact('product', 'order', 'categories', 'features'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Requests', 'ProductCategories.Categories', 'ProductFeatures.Features'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data = $this->setProductRelationData($data);
            $product = $this->Products->patchEntity($product, $data);

            if(isset($data['imagem_upload'])) {
                $file_name = $data['imagem_upload']->getClientFilename();

                if ($file_name) {
                    if (!is_dir(WWW_ROOT . 'product_images'))
                        mkdir(WWW_ROOT . 'product_images', 0775);

                    if (!is_dir(WWW_ROOT . 'product_images' . DS . $product->id))
                        mkdir(WWW_ROOT . 'product_images' . DS . $product->id, 0775);

                    $targetPath = WWW_ROOT . 'product_images' . DS . $product->id . DS . $file_name;


                    $data['imagem_upload']->moveTo($targetPath);


                    $product->imagem = DS . 'product_images' . DS . $product->id . DS . $file_name;
                }
            }

            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $order = $this->Products->Requests->find('list', ['limit' => 200])->all();
        $categories = $this->Products->ProductCategories->Categories->find('list', ['limit' => 200])->all();
        $features = $this->Products->ProductFeatures->Features->find('list', ['limit' => 200])->all();
        $this->set(compact('product', 'order', 'categories', 'features'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Transforma o array gerado pelo Select2, no array reconhecido pelo CAKE
     * @param $data
     * @return array
     */
    private function setProductRelationData($data)
    {
        if (isset($data['categories'])) { //Transforma o array gerado pelo Select2, no array reconhecido pelo CAKE
            $categories = $data['categories'];
            $data['product_categories'] = [];
            if ($categories != '')
                foreach ($categories as $category)
                    $data['product_categories'][] = ['category_id' => $category];
        }

        if (isset($data['features'])) { //Transforma o array gerado pelo Select2, no array reconhecido pelo CAKE
            $features = $data['features'];
            $data['product_features'] = [];
            if ($features != '')
                foreach ($features as $feature)
                    $data['product_features'][] = ['feature_id' => $feature];
        }
        return $data;
    }
}
