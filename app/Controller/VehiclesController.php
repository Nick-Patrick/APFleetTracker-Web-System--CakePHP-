<?php
App::uses('AppController', 'Controller');
/**
 * Vehicles Controller
 *
 * @property Vehicle $Vehicle
 * @property PaginatorComponent $Paginator
 */
class VehiclesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');

/**
 * Other Models
 * User
 */
    var $uses = array('Vehicle');

    public function beforeFilter(){
        parent::beforeFilter();
       $this->Auth->allow('getAllVehicles');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vehicle->recursive = 0;
		$this->set('vehicles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vehicle->exists($id)) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		$options = array('conditions' => array('Vehicle.' . $this->Vehicle->primaryKey => $id));
		$this->set('vehicle', $this->Vehicle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$this->Vehicle->create();
			$this->Vehicle->set('status', 'Inactive');

			if(isset($data['Vehicle']['crane']) != 'Yes'){ $this->Vehicle->set('crane', 'No'); }
			if(isset($data['Vehicle']['trailer']) != 'Yes'){ $this->Vehicle->set('trailer','No'); }
			if(isset($data['Vehicle']['hydraulic_beavertail']) != 'Yes'){ $this->Vehicle->set('hydraulic_beavertail', 'No'); }
			if(isset($data['Vehicle']['available']) != 'Yes'){ $this->Vehicle->set('available', 'No'); }

			if ($this->Vehicle->save($this->request->data)) {
				$this->Session->setFlash(__('The vehicle has been saved.'));
				return $this->redirect(array('action' => 'manage'));
			} 
			else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vehicle->exists($id)) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vehicle->save($this->request->data)) {
				$this->Session->setFlash(__('The vehicle has been saved.'));
				return $this->redirect(array('action' => 'manage'));
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vehicle.' . $this->Vehicle->primaryKey => $id));
			$this->request->data = $this->Vehicle->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vehicle->id = $id;
		if (!$this->Vehicle->exists()) {
			throw new NotFoundException(__('Invalid vehicle'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vehicle->delete()) {
			$this->Session->setFlash(__('The vehicle has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vehicle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'manage'));
	}

	public function manage(){
		$this->set('vehicles', $this->Vehicle->find('all'));

     	$licenseTypes = $this->Vehicle->LicenseType->find('list', array('id','license_type'));
     	$this->set('licenseTypes', $licenseTypes);

     	$vehicleTypes = $this->Vehicle->VehicleType->find('list', array('id','vehicle_type'));
     	$this->set('vehicleTypes', $vehicleTypes);
	}


     public function getAllVehicles(){

     	if($this->request->is('post')){
     		$key = $this->request->data['key'];

     		$vehicles = $this->Vehicle->find('all');
     		
     		$message = $vehicles;
     		if($message == ""){
     			$message = "No vehicles found.";
     		}
     	}
     	else  {
     		$message = "You are not authorized for this page.";
     	}
     	$this->set('message', $message);
     	$this->set('_serialize', array('message'));
     }

}
