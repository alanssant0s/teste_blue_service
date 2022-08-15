<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Requests Controller
 *
 * @property \App\Model\Table\RequestsTable $Requests
 * @method \App\Model\Entity\Request[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('ecommerce');
        $this->paginate = [
            'contain' => ['RequestProducts'],
        ];
        $requests = $this->paginate($this->Requests->find()->where(['user_id' => $this->getUserId()]));

        $this->set(compact('requests'));
    }

    /**
     * View method
     *
     * @param string|null $id Request id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('ecommerce');
        $request = $this->Requests->get($id, [
            'contain' => ['RequestProducts.Products.ProductCategories.Categories', 'RequestProducts.Products.ProductFeatures.Features'],
        ]);

        $this->set(compact('request'));
    }

}
