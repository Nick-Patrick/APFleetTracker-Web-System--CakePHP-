<?php
App::uses('AppController', 'Controller');
/**
 * LocationOpeningTimes Controller
 *
 * @property LocationOpeningTime $LocationOpeningTime
 * @property PaginatorComponent $Paginator
 */
class LocationOpeningTimesController extends AppController {

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
		$this->LocationOpeningTime->recursive = 0;
		$this->set('locationOpeningTimes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LocationOpeningTime->exists($id)) {
			throw new NotFoundException(__('Invalid location opening time'));
		}
		$options = array('conditions' => array('LocationOpeningTime.' . $this->LocationOpeningTime->primaryKey => $id));
		$this->set('locationOpeningTime', $this->LocationOpeningTime->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->autoRender=false;
		if ($this->request->is('post')) {
			$this->LocationOpeningTime->create();
			if ($this->LocationOpeningTime->save($this->request->data)) {
				$this->Session->setFlash(__('The location opening time has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The location opening time could not be saved. Please, try again.'));
			}
		}
		$locations = $this->LocationOpeningTime->Location->find('list');
		$this->set(compact('locations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LocationOpeningTime->exists($id)) {
			throw new NotFoundException(__('Invalid location opening time'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LocationOpeningTime->save($this->request->data)) {
				$this->Session->setFlash(__('The location opening time has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The location opening time could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LocationOpeningTime.' . $this->LocationOpeningTime->primaryKey => $id));
			$this->request->data = $this->LocationOpeningTime->find('first', $options);
		}
		$locations = $this->LocationOpeningTime->Location->find('list');
		$this->set(compact('locations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LocationOpeningTime->id = $id;
		if (!$this->LocationOpeningTime->exists()) {
			throw new NotFoundException(__('Invalid location opening time'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LocationOpeningTime->delete()) {
			$this->Session->setFlash(__('The location opening time has been deleted.'));
		} else {
			$this->Session->setFlash(__('The location opening time could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
