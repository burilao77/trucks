<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdersVehicles Controller
 *
 * @property \App\Model\Table\OrdersVehiclesTable $OrdersVehicles
 */
class OrdersVehiclesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Vehicles']
        ];
        $ordersVehicles = $this->paginate($this->OrdersVehicles);

        $this->set(compact('ordersVehicles'));
        $this->set('_serialize', ['ordersVehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Orders Vehicle id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordersVehicle = $this->OrdersVehicles->get($id, [
            'contain' => ['Orders', 'Vehicles']
        ]);

        $this->set('ordersVehicle', $ordersVehicle);
        $this->set('_serialize', ['ordersVehicle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordersVehicle = $this->OrdersVehicles->newEntity();
        if ($this->request->is('post')) {
            $ordersVehicle = $this->OrdersVehicles->patchEntity($ordersVehicle, $this->request->data);
            if ($this->OrdersVehicles->save($ordersVehicle)) {
                $this->Flash->success(__('The orders vehicle has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orders vehicle could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrdersVehicles->Orders->find('list', ['limit' => 200]);
        $vehicles = $this->OrdersVehicles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('ordersVehicle', 'orders', 'vehicles'));
        $this->set('_serialize', ['ordersVehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orders Vehicle id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordersVehicle = $this->OrdersVehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordersVehicle = $this->OrdersVehicles->patchEntity($ordersVehicle, $this->request->data);
            if ($this->OrdersVehicles->save($ordersVehicle)) {
                $this->Flash->success(__('The orders vehicle has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orders vehicle could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrdersVehicles->Orders->find('list', ['limit' => 200]);
        $vehicles = $this->OrdersVehicles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('ordersVehicle', 'orders', 'vehicles'));
        $this->set('_serialize', ['ordersVehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orders Vehicle id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordersVehicle = $this->OrdersVehicles->get($id);
        if ($this->OrdersVehicles->delete($ordersVehicle)) {
            $this->Flash->success(__('The orders vehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The orders vehicle could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
