<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carts Controller
 *
 * @property \App\Model\Table\CartsTable $Carts
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Products'],
        ];
        $carts = $this->paginate($this->Carts);

        $this->set(compact('carts'));
    }

    /**
     * View method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => ['Users', 'Products'],
        ]);

        $this->set(compact('cart'));
    }



    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function finish()
    {
        $this->viewBuilder()->setLayout('ecommerce');
        $user = $this->Carts->Users->get($this->getUserId(), [
            'contain' => ['Carts.Products.ProductCategories.Categories', 'Carts.Products.ProductFeatures.Features'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
//            $request = $this->Carts->Users->Requests->newEmptyEntity(); //Crio o pedido para ter o ID
//            $request->user_id = $this->getUserId();
//            $request->total = 0;
//            $this->Carts->Users->Requests->save($request);

            $data = $this->request->getData(); //Manipulo o array de dados para criar os objetos de pedidos
//            debug($data);
            $data['requests'][0]['request_products'] = [];
            $data['requests'][0]['user_id'] = $this->getUserId();
            $data['requests'][0]['total'] = 0;
            foreach ($data['carts'] as $cart){
                $cart['total'] = $cart['qtd'] * $cart['price'];
                $data['requests'][0]['total']+=$cart['total'];
                $data['requests'][0]['request_products'][] = $cart;
            }
            unset($data['carts']);//Removo a referencia ao carrinho para evitar inconsistências
            $user = $this->Carts->Users->patchEntity($user, $data, ['associated' => ['Requests.RequestProducts']]);//Utilizo o modelo de usuário para montar os objetos de pedidos
            $user->requests[0]->rua = $user->rua;
            $user->requests[0]->numero = $user->numero;
            $user->requests[0]->cidade = $user->cidade;
            $user->requests[0]->bairro = $user->bairro;
            $user->requests[0]->cep = $user->cep;
            $user->requests[0]->estado = $user->estado;
//            debug($user);exit;
            if ($this->Carts->Users->save($user)) {
                $this->Carts->deleteAll(['user_id' => $this->getUserId()]);
                $this->Flash->success(__('Pedido realizado com sucesso.'));
                return $this->redirect(['controller' => 'requests', 'action' => 'view', $user->requests[0]->id]); //Retorno para a tela de resumo do pedido
            }else {
                $this->Flash->error(__('Erro ao tentar cadastrar seu pedido, tente novamente'));
            }
        }

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($product_id)
    {
        $result = [];
        $cart = $this->Carts->find()->where(['product_id' => $product_id, 'user_id' => $this->getUserId()])->first();
        if(!$cart) {//Verifico se já existe um desses adicionado ao carrinho do cliente, se não exisistir eu crio;
            $product = $this->Carts->Products->get($product_id);
            $cart = $this->Carts->newEmptyEntity();
            $cart->product_id = $product_id;
            $cart->user_id = $this->getUserId();
            $cart->price = $product->price;
            $cart->qtd = 1;
            $cart->total = $cart->price;
        }else{
            $cart->qtd++;
            $cart->total += $cart->price;
        }
        if ($this->Carts->save($cart)) {
            $result['message'] = __('Produto adicionado ao carrinho.');
            $result['status'] = 1;
        }else {
            $result['message'] = __('Erro ao adicionar produto ao carrinho.');
            $result['status'] = 0;
        }
        echo json_encode($result);
        exit;
    }

    /**
     * Remove method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function remove($product_id, $all = false) // Flag all por padrão é false
    {
        $result = [];
        $cart = $this->Carts->find()->where(['product_id' => $product_id, 'user_id' => $this->getUserId()])->first();
        if($cart) {
            if($cart->qtd <= 1 || $all == true){
                if ($this->Carts->delete($cart)) {
                    $result['message'] = __('Produto removido do carrinho.');
                    $result['status'] = 1;
                } else {
                    echo __('Erro ao remover item do carrinho');
                    $result['status'] = 0;
                }
            } else { //Remove item totalmente do carrinho caso quantidade seja iqual a 1 ou flash de all seja true
                $cart->qtd--;
                $cart->total -= $cart->price;
                if ($this->Carts->save($cart)) {
                    $result['message'] = __('Item do produto removido do carrinho.');
                    $result['status'] = 1;
                }else {
                    $result['message'] =  __('Erro ao remover item do carrinho.');
                    $result['status'] = 0;
                }
            }
        }else{
            $result['message'] = __('Esse produto não está no carrinho!');
            $result['status'] = 0;
        }
        echo json_encode($result);
        exit;
    }
}
