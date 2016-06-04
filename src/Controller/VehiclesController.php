<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Vehicles Controller
 *
 * @property \App\Model\Table\VehiclesTable $Vehicles
 */
class VehiclesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public $paginate = [
        'contain' => ['Types'],
        'limit' => 4

    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
        //$t=$this->Auth->config('authError', "Woopsie, you are not authorized to access this area.");
    }


     public function isAuthorized($user)
    {
            if (isset($user['role']) && $user['role'] === 'admin') {
                if (in_array($this->request->action, ['index', 'view', 'edit', 'delete']))
                {
                    return true;
                }
                else
                {
                    return false;

                }
            }

        return parent::isAuthorized($user);
    }


    public function index()
    {

        $vehicles = $this->paginate($this->Vehicles);

        $this->set(compact('vehicles'));
        $this->set('_serialize', ['vehicles']);

        $this->loadComponent('Search.Prg');


        $query = $this->Vehicles
        ->find('search', $this->request->query);




        $this->set('vehicles', $this->paginate($query));

        /**if($search = $this->request->query('q')){

            $conditions = array(
                'conditions' => array(
                    'or' => array(
                        'Vehicles.id LIKE' => "%$search%",
                        'Vehicles.name LIKE' => "%$search%",
                        'Vehicles.price LIKE' => "%$search%",
                    )
                )
            );

            $this->set('vehicles', $this->paginate($this->Vehicles->find('all', $conditions)));

         }else{
            $this->set('vehicles', $this->paginate($this->Vehicles));
         }**/

    }

    /**
     * View method
     *
     * @param string|null $id Vehicle id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicle = $this->Vehicles->get($id, [
            'contain' => ['Types', 'Orders']
        ]);

        $this->set('vehicle', $vehicle);
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicle = $this->Vehicles->newEntity();
        if ($this->request->is('post')) {
            $vehicle = $this->Vehicles->patchEntity($vehicle, $this->request->data);
            $vehicle->user_id = $this->Auth->user('id');
            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('El Vehiculo fue guardado con Exito.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicle could not be saved. Please, try again.'));
            }
        }
        $types = $this->Vehicles->Types->find('list', ['limit' => 200]);
        $orders = $this->Vehicles->Orders->find('list', ['limit' => 200]);
        $this->set(compact('vehicle', 'types', 'orders'));
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicle = $this->Vehicles->get($id, [
            'contain' => ['Orders']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicle = $this->Vehicles->patchEntity($vehicle, $this->request->data);
            $vehicle->user_id = $this->Auth->user('id');
            if ($this->Vehicles->save($vehicle)) {
                $this->Flash->success(__('The vehicle has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicle could not be saved. Please, try again.'));
            }
        }
        $types = $this->Vehicles->Types->find('list', ['limit' => 200]);
        $orders = $this->Vehicles->Orders->find('list', ['limit' => 200]);
        $this->set(compact('vehicle', 'types', 'orders'));
        $this->set('_serialize', ['vehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicle = $this->Vehicles->get($id);
        if ($this->Vehicles->delete($vehicle)) {
            $this->Flash->success(__('The vehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
