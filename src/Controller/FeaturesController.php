<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Features Controller
 *
 * @property \App\Model\Table\FeaturesTable $Features
 * @method \App\Model\Entity\Feature[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FeaturesController extends AppController
{

//    public $paginate = [
//        'limit' => 1,
//        'order' => [
//        ]
//    ];
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $features = $this->paginate($this->Features);

        $this->set(compact('features'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feature = $this->Features->newEmptyEntity();
        if ($this->request->is('post')) {
            $feature = $this->Features->patchEntity($feature, $this->request->getData());
            if ($this->Features->save($feature)) {
                $this->Flash->success(__('The feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feature could not be saved. Please, try again.'));
        }
        $this->set(compact('feature'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Feature id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feature = $this->Features->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feature = $this->Features->patchEntity($feature, $this->request->getData());
            if ($this->Features->save($feature)) {
                $this->Flash->success(__('The feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feature could not be saved. Please, try again.'));
        }
        $this->set(compact('feature'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Feature id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feature = $this->Features->get($id);
        if ($this->Features->delete($feature)) {
            $this->Flash->success(__('The feature has been deleted.'));
        } else {
            $this->Flash->error(__('The feature could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
