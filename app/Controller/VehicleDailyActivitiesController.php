<?php
App::uses('AppController', 'Controller');
/**
 * VehicleDailyActivities Controller
 *
 * @property VehicleDailyActivity $VehicleDailyActivity
 * @property PaginatorComponent $Paginator
 */
class VehicleDailyActivitiesController extends AppController {

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
		$this->VehicleDailyActivity->recursive = 0;
		$this->set('vehicleDailyActivities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VehicleDailyActivity->exists($id)) {
			throw new NotFoundException(__('Invalid vehicle daily activity'));
		}
		$options = array('conditions' => array('VehicleDailyActivity.' . $this->VehicleDailyActivity->primaryKey => $id));
		$this->set('vehicleDailyActivity', $this->VehicleDailyActivity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VehicleDailyActivity->create();
			if ($this->VehicleDailyActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The vehicle daily activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle daily activity could not be saved. Please, try again.'));
			}
		}
		$vehicles = $this->VehicleDailyActivity->Vehicle->find('list');
		$this->set(compact('vehicles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VehicleDailyActivity->exists($id)) {
			throw new NotFoundException(__('Invalid vehicle daily activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VehicleDailyActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The vehicle daily activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehicle daily activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VehicleDailyActivity.' . $this->VehicleDailyActivity->primaryKey => $id));
			$this->request->data = $this->VehicleDailyActivity->find('first', $options);
		}
		$vehicles = $this->VehicleDailyActivity->Vehicle->find('list');
		$this->set(compact('vehicles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VehicleDailyActivity->id = $id;
		if (!$this->VehicleDailyActivity->exists()) {
			throw new NotFoundException(__('Invalid vehicle daily activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VehicleDailyActivity->delete()) {
			$this->Session->setFlash(__('The vehicle daily activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vehicle daily activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
