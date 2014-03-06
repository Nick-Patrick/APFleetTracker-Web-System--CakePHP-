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


    public function beforeFilter(){
        parent::beforeFilter();
       $this->Auth->allow('addDriverLocation');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DriverLocation->recursive = 0;
		//$this->set('driverLocations', $this->Paginator->paginate());
		$this->set('driverLocations', $this->DriverLocation->find('all', array(
			'order' => array('date_time_stamp' => 'desc')
			)
		));
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
	}

    public function addDriverLocation() {
        if($this->request->data['key'] == "9c36c7108a73324100bc9305f581979071d45ee9"){

            if ($this->DriverLocation->save($this->request->data)) {
                $message = 'Driver Location Added';
            } else {
                $message = 'Error';
            }

        }
        else {
            $message = 'Authentication Needed';
        }
        $this->set('message', $message) ;
        $this->set('_serialize', array('message'));
    }

}
