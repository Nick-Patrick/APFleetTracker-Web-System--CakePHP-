<?php
App::uses('AppController', 'Controller');
/**
 * LicenseTypes Controller
 *
 * @property LicenseType $LicenseType
 * @property PaginatorComponent $Paginator
 */
class LicenseTypesController extends AppController {

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
		$this->LicenseType->recursive = 0;
		$this->set('licenseTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LicenseType->exists($id)) {
			throw new NotFoundException(__('Invalid license type'));
		}
		$options = array('conditions' => array('LicenseType.' . $this->LicenseType->primaryKey => $id));
		$this->set('licenseType', $this->LicenseType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LicenseType->create();
			if ($this->LicenseType->save($this->request->data)) {
				$this->Session->setFlash(__('The license type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The license type could not be saved. Please, try again.'));
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
		if (!$this->LicenseType->exists($id)) {
			throw new NotFoundException(__('Invalid license type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LicenseType->save($this->request->data)) {
				$this->Session->setFlash(__('The license type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The license type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LicenseType.' . $this->LicenseType->primaryKey => $id));
			$this->request->data = $this->LicenseType->find('first', $options);
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
		$this->LicenseType->id = $id;
		if (!$this->LicenseType->exists()) {
			throw new NotFoundException(__('Invalid license type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LicenseType->delete()) {
			$this->Session->setFlash(__('The license type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The license type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
