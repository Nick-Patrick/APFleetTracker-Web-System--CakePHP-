<?php
App::uses('AppController', 'Controller');
/**
 * VehicleTypes Controller
 *
 * @property VehicleType $VehicleType
 * @property PaginatorComponent $Paginator
 */
class VehicleTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->VehicleType->recursive = 0;
		$this->set('vehicleTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VehicleType->exists($id)) {
			throw new NotFoundException(__('Invalid vehicle type'));
		}
		$options = array('conditions' => array('VehicleType.' . $this->VehicleType->primaryKey => $id));
		$this->set('vehicleType', $this->VehicleType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VehicleType->create();
			if ($this->VehicleType->save($this->request->data)) {
				$this->Session->setFlash(__('The vehicle type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle type could not be saved. Please, try again.'));
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
		if (!$this->VehicleType->exists($id)) {
			throw new NotFoundException(__('Invalid vehicle type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VehicleType->save($this->request->data)) {
				$this->Session->setFlash(__('The vehicle type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VehicleType.' . $this->VehicleType->primaryKey => $id));
			$this->request->data = $this->VehicleType->find('first', $options);
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
		$this->VehicleType->id = $id;
		if (!$this->VehicleType->exists()) {
			throw new NotFoundException(__('Invalid vehicle type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VehicleType->delete()) {
			$this->Session->setFlash(__('The vehicle type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vehicle type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
