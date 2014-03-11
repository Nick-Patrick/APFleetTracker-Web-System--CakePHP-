<?php
App::uses('AppController', 'Controller');
/**
 * UpdateLogs Controller
 *
 * @property UpdateLog $UpdateLog
 * @property PaginatorComponent $Paginator
 */
class UpdateLogsController extends AppController {

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
		$this->UpdateLog->recursive = 0;
		$this->set('updateLogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UpdateLog->exists($id)) {
			throw new NotFoundException(__('Invalid update log'));
		}
		$options = array('conditions' => array('UpdateLog.' . $this->UpdateLog->primaryKey => $id));
		$this->set('updateLog', $this->UpdateLog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UpdateLog->create();
			if ($this->UpdateLog->save($this->request->data)) {
				$this->Session->setFlash(__('The update log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The update log could not be saved. Please, try again.'));
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
		if (!$this->UpdateLog->exists($id)) {
			throw new NotFoundException(__('Invalid update log'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UpdateLog->save($this->request->data)) {
				$this->Session->setFlash(__('The update log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The update log could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UpdateLog.' . $this->UpdateLog->primaryKey => $id));
			$this->request->data = $this->UpdateLog->find('first', $options);
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
		$this->UpdateLog->id = $id;
		if (!$this->UpdateLog->exists()) {
			throw new NotFoundException(__('Invalid update log'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UpdateLog->delete()) {
			$this->Session->setFlash(__('The update log has been deleted.'));
		} else {
			$this->Session->setFlash(__('The update log could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UpdateLog->recursive = 0;
		$this->set('updateLogs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UpdateLog->exists($id)) {
			throw new NotFoundException(__('Invalid update log'));
		}
		$options = array('conditions' => array('UpdateLog.' . $this->UpdateLog->primaryKey => $id));
		$this->set('updateLog', $this->UpdateLog->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UpdateLog->create();
			if ($this->UpdateLog->save($this->request->data)) {
				$this->Session->setFlash(__('The update log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The update log could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->UpdateLog->exists($id)) {
			throw new NotFoundException(__('Invalid update log'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UpdateLog->save($this->request->data)) {
				$this->Session->setFlash(__('The update log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The update log could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UpdateLog.' . $this->UpdateLog->primaryKey => $id));
			$this->request->data = $this->UpdateLog->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->UpdateLog->id = $id;
		if (!$this->UpdateLog->exists()) {
			throw new NotFoundException(__('Invalid update log'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UpdateLog->delete()) {
			$this->Session->setFlash(__('The update log has been deleted.'));
		} else {
			$this->Session->setFlash(__('The update log could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
