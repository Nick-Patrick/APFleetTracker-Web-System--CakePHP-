<?php
App::uses('AppController', 'Controller');
/**
 * JobSignatures Controller
 *
 * @property JobSignature $JobSignature
 * @property PaginatorComponent $Paginator
 */
class JobSignaturesController extends AppController {

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
		$this->JobSignature->recursive = 0;
		$this->set('jobSignatures', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobSignature->exists($id)) {
			throw new NotFoundException(__('Invalid job signature'));
		}
		$options = array('conditions' => array('JobSignature.' . $this->JobSignature->primaryKey => $id));
		$this->set('jobSignature', $this->JobSignature->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobSignature->create();
			if ($this->JobSignature->save($this->request->data)) {
				$this->Session->setFlash(__('The job signature has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job signature could not be saved. Please, try again.'));
			}
		}
		$drivers = $this->JobSignature->Driver->find('list');
		$jobs = $this->JobSignature->Job->find('list');
		$this->set(compact('drivers', 'jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobSignature->exists($id)) {
			throw new NotFoundException(__('Invalid job signature'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JobSignature->save($this->request->data)) {
				$this->Session->setFlash(__('The job signature has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job signature could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobSignature.' . $this->JobSignature->primaryKey => $id));
			$this->request->data = $this->JobSignature->find('first', $options);
		}
		$drivers = $this->JobSignature->Driver->find('list');
		$jobs = $this->JobSignature->Job->find('list');
		$this->set(compact('drivers', 'jobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JobSignature->id = $id;
		if (!$this->JobSignature->exists()) {
			throw new NotFoundException(__('Invalid job signature'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobSignature->delete()) {
			$this->Session->setFlash(__('The job signature has been deleted.'));
		} else {
			$this->Session->setFlash(__('The job signature could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
