<?php
App::uses('AppController', 'Controller');
/**
 * DriverDailyActivities Controller
 *
 * @property DriverDailyActivity $DriverDailyActivity
 * @property PaginatorComponent $Paginator
 */
class DriverDailyActivitiesController extends AppController {

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
		$this->DriverDailyActivity->recursive = 0;
		$this->set('driverDailyActivities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DriverDailyActivity->exists($id)) {
			throw new NotFoundException(__('Invalid driver daily activity'));
		}
		$options = array('conditions' => array('DriverDailyActivity.' . $this->DriverDailyActivity->primaryKey => $id));
		$this->set('driverDailyActivity', $this->DriverDailyActivity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DriverDailyActivity->create();
			if ($this->DriverDailyActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The driver daily activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver daily activity could not be saved. Please, try again.'));
			}
		}
		$drivers = $this->DriverDailyActivity->Driver->find('list');
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
		if (!$this->DriverDailyActivity->exists($id)) {
			throw new NotFoundException(__('Invalid driver daily activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DriverDailyActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The driver daily activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver daily activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DriverDailyActivity.' . $this->DriverDailyActivity->primaryKey => $id));
			$this->request->data = $this->DriverDailyActivity->find('first', $options);
		}
		$drivers = $this->DriverDailyActivity->Driver->find('list');
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
		$this->DriverDailyActivity->id = $id;
		if (!$this->DriverDailyActivity->exists()) {
			throw new NotFoundException(__('Invalid driver daily activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DriverDailyActivity->delete()) {
			$this->Session->setFlash(__('The driver daily activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The driver daily activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
