<?php
App::uses('AppController', 'Controller');
/**
 * JobPackages Controller
 *
 * @property JobPackage $JobPackage
 * @property PaginatorComponent $Paginator
 */
class JobPackagesController extends AppController {

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
		$this->JobPackage->recursive = 0;
		$this->set('jobPackages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobPackage->exists($id)) {
			throw new NotFoundException(__('Invalid job package'));
		}
		$options = array('conditions' => array('JobPackage.' . $this->JobPackage->primaryKey => $id));
		$this->set('jobPackage', $this->JobPackage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobPackage->create();
			if ($this->JobPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The job package has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job package could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->JobPackage->Job->find('list');
		$packages = $this->JobPackage->Package->find('list');
		$this->set(compact('jobs', 'packages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobPackage->exists($id)) {
			throw new NotFoundException(__('Invalid job package'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JobPackage->save($this->request->data)) {
				$this->Session->setFlash(__('The job package has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job package could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobPackage.' . $this->JobPackage->primaryKey => $id));
			$this->request->data = $this->JobPackage->find('first', $options);
		}
		$jobs = $this->JobPackage->Job->find('list');
		$packages = $this->JobPackage->Package->find('list');
		$this->set(compact('jobs', 'packages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JobPackage->id = $id;
		if (!$this->JobPackage->exists()) {
			throw new NotFoundException(__('Invalid job package'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobPackage->delete()) {
			$this->Session->setFlash(__('The job package has been deleted.'));
		} else {
			$this->Session->setFlash(__('The job package could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
