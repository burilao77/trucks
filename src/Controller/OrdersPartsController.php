<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdersParts Controller
 *
 * @property \App\Model\Table\OrdersPartsTable $OrdersParts
 */
class OrdersPartsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Parts']
        ];
        $ordersParts = $this->paginate($this->OrdersParts);

        $this->set(compact('ordersParts'));
        $this->set('_serialize', ['ordersParts']);
    }

    /**
     * View method
     *
     * @param string|null $id Orders Part id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordersPart = $this->OrdersParts->get($id, [
            'contain' => ['Orders', 'Parts']
        ]);

        $this->set('ordersPart', $ordersPart);
        $this->set('_serialize', ['ordersPart']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordersPart = $this->OrdersParts->newEntity();
        if ($this->request->is('post')) {
            $ordersPart = $this->OrdersParts->patchEntity($ordersPart, $this->request->data);
            if ($this->OrdersParts->save($ordersPart)) {
                $this->Flash->success(__('The orders part has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orders part could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrdersParts->Orders->find('list', ['limit' => 200]);
        $parts = $this->OrdersParts->Parts->find('list', ['limit' => 200]);
        $this->set(compact('ordersPart', 'orders', 'parts'));
        $this->set('_serialize', ['ordersPart']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orders Part id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordersPart = $this->OrdersParts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordersPart = $this->OrdersParts->patchEntity($ordersPart, $this->request->data);
            if ($this->OrdersParts->save($ordersPart)) {
                $this->Flash->success(__('The orders part has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orders part could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrdersParts->Orders->find('list', ['limit' => 200]);
        $parts = $this->OrdersParts->Parts->find('list', ['limit' => 200]);
        $this->set(compact('ordersPart', 'orders', 'parts'));
        $this->set('_serialize', ['ordersPart']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orders Part id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordersPart = $this->OrdersParts->get($id);
        if ($this->OrdersParts->delete($ordersPart)) {
            $this->Flash->success(__('The orders part has been deleted.'));
        } else {
            $this->Flash->error(__('The orders part could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
