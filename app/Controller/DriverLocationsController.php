<?php
App::uses('AppController', 'Controller');
/**
 * DriverLocations Controller
 *
 * @property DriverLocation $DriverLocation
 * @property PaginatorComponent $Paginator
 */
class DriverLocationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DriverLocation->recursive = 0;
		$this->set('driverLocations', $this->Paginator->paginate());
        $this->set('_serialize',array('driverLocations'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DriverLocation->exists($id)) {
			throw new NotFoundException(__('Invalid driver location'));
		}
		$options = array('conditions' => array('DriverLocation.' . $this->DriverLocation->primaryKey => $id));
		$this->set('driverLocation', $this->DriverLocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DriverLocation->create();
			if ($this->DriverLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The driver location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver location could not be saved. Please, try again.'));
			}
		}
		$drivers = $this->DriverLocation->Driver->find('list');
		$this->set(compact('drivers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DriverLocation->exists($id)) {
			throw new NotFoundException(__('Invalid driver location'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DriverLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The driver location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver location could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DriverLocation.' . $this->DriverLocation->primaryKey => $id));
			$this->request->data = $this->DriverLocation->find('first', $options);
		}
		$drivers = $this->DriverLocation->Driver->find('list');
		$this->set(compact('drivers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DriverLocation->id = $id;
		if (!$this->DriverLocation->exists()) {
			throw new NotFoundException(__('Invalid driver location'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DriverLocation->delete()) {
			$this->Session->setFlash(__('The driver location has been deleted.'));
		} else {
			$this->Session->setFlash(__('The driver location could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
