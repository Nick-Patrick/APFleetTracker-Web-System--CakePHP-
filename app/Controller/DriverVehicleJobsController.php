<?php
App::uses('AppController', 'Controller');
/**
 * DriverVehicleJobs Controller
 *
 * @property DriverVehicleJob $DriverVehicleJob
 * @property PaginatorComponent $Paginator
 */
class DriverVehicleJobsController extends AppController {

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
		$this->DriverVehicleJob->recursive = 0;
		$this->set('driverVehicleJobs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DriverVehicleJob->exists($id)) {
			throw new NotFoundException(__('Invalid driver vehicle job'));
		}
		$options = array('conditions' => array('DriverVehicleJob.' . $this->DriverVehicleJob->primaryKey => $id));
		$this->set('driverVehicleJob', $this->DriverVehicleJob->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DriverVehicleJob->create();
			if ($this->DriverVehicleJob->save($this->request->data)) {
				$this->Session->setFlash(__('The driver vehicle job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver vehicle job could not be saved. Please, try again.'));
			}
		}
		$drivers = $this->DriverVehicleJob->Driver->find('list');
		$jobs = $this->DriverVehicleJob->Job->find('list');
		$vehicles = $this->DriverVehicleJob->Vehicle->find('list');
		$this->set(compact('drivers', 'jobs', 'vehicles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DriverVehicleJob->exists($id)) {
			throw new NotFoundException(__('Invalid driver vehicle job'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DriverVehicleJob->save($this->request->data)) {
				$this->Session->setFlash(__('The driver vehicle job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver vehicle job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DriverVehicleJob.' . $this->DriverVehicleJob->primaryKey => $id));
			$this->request->data = $this->DriverVehicleJob->find('first', $options);
		}
		$drivers = $this->DriverVehicleJob->Driver->find('list');
		$jobs = $this->DriverVehicleJob->Job->find('list');
		$vehicles = $this->DriverVehicleJob->Vehicle->find('list');
		$this->set(compact('drivers', 'jobs', 'vehicles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DriverVehicleJob->id = $id;
		if (!$this->DriverVehicleJob->exists()) {
			throw new NotFoundException(__('Invalid driver vehicle job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DriverVehicleJob->delete()) {
			$this->Session->setFlash(__('The driver vehicle job has been deleted.'));
		} else {
			$this->Session->setFlash(__('The driver vehicle job could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
