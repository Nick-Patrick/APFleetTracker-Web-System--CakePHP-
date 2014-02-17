<?php


App::uses('AppController', 'Controller');

/**
 * Drivers Controller
 *
 * @property Driver $Driver
 * @property Paginator Component $Paginator
 */
class DriversController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $components = array('Paginator','RequestHandler');

/**
 * Helpers
 */
    public $helpers = array('GoogleMap');


    public function beforeFilter(){
        parent::beforeFilter();
       $this->Auth->allow('update','driversByEmail');
    }

/**
 * Other Models
 * Driver
 */
    var $uses = array('Driver','User','DriverLocation','Group','LicenseType','Vehicle');


    /**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Driver->recursive = 0;
		$this->set('drivers', $this->Paginator->paginate());

        $activeDrivers = $this->Driver->getActiveDrivers();
        $availableDrivers = $this->Driver->getAvailableDrivers();
        $unavailableDrivers = $this->Driver->getUnavailableDrivers();

        $this->set('activeDrivers', $activeDrivers);
        $this->set('availableDrivers', $availableDrivers);
        $this->set('unavailableDrivers', $unavailableDrivers);

        $activeDriverLocations[] = array();

        foreach($activeDrivers as $activeDriver){
            $activeDriverLocations[] = $this->DriverLocation->find('first', array(
                'conditions' => array('DriverLocation.driver_id' => $activeDriver['Driver']['id']),
                'order' => array('DriverLocation.date_time_stamp' => 'desc')
            ));
        }
        
        $this->set('activeDriverLocations', $activeDriverLocations);

        //Default Google Map Config
        $map_options = array(
            'id' => 'map_canvas',
            'width' => '100%',
            'height' => '700px',
            'style' => '',
            'zoom' => 6,
            'type' => 'ROADMAP',
            'custom' => null,
            'localize' => true,
            'marker' => false
        );

        $this->set('map_options', $map_options);
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Driver->exists($id)) {
			throw new NotFoundException(__('Invalid driver'));
		}
		$options = array('conditions' => array('Driver.' . $this->Driver->primaryKey => $id));
		$this->set('driver', $this->Driver->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
            $data['Driver']['available'] = 'Inactive';
            $data['User']['username'] = $this->request->data['email'];
            $data['User']['password'] = 'password';
            $data['User']['role'] = 'Driver';
            $data['User']['first_name'] = $this->request->data['first_name'];
            $data['User']['last_name'] = $this->request->data['last_name'];
            $data['User']['email'] = $this->request->data['email'];
            $data['User']['telephone'] = $this->request->data['telephone'];
            $data['User']['status'] = 'Active';
            $data['User']['group_id'] = '6';
			$this->Driver->create();
            $this->User->create();
            $this->User->save($data);
            $this->Driver->set('available','Inactive');
            $driverId = $this->User->getUserByEmail($this->request->data['email']);
            $this->Driver->set('user_id', $driverId['User']['id']);
			
            if ($this->Driver->save($this->request->data)) {   
                $this->Session->setFlash(__('Driver Added!'));
                $this->User->set('driver_id', $this->Driver->id);
                $this->User->save($data);

                return $this->redirect('manage');			
            } 
            else {
				$this->Session->setFlash(__('The driver could not be saved. Please, try again.'));
			}
		}

		$users = $this->Driver->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Driver->exists($id)) {
			throw new NotFoundException(__('Invalid driver'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Driver->save($this->request->data)) {
				$this->Session->setFlash(__('The driver has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Driver.' . $this->Driver->primaryKey => $id));
			$this->request->data = $this->Driver->find('first', $options);
		}
		$users = $this->Driver->User->find('list');
		$this->set(compact('users'));
        $licenseTypes = $this->Driver->LicenseType->find('list',array('id','license_type'));
        $this->set('licenseTypes',$licenseTypes);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Driver->id = $id;
		if (!$this->Driver->exists()) {
			throw new NotFoundException(__('Invalid driver'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Driver->delete()) {
			$this->Session->setFlash(__('The driver has been deleted.'));
		} else {
			$this->Session->setFlash(__('The driver could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * manage drivers
 *
 *
 */
    public function manage(){
        $licenseTypes = $this->Driver->LicenseType->find('list', array('id','license_type'));
        $this->set('licenseTypes', $licenseTypes);
        $this->set('drivers', $this->Driver->find('all'));

    }

    public function update($email = null) {
        if($this->request->data['key'] == "9c36c7108a73324100bc9305f581979071d45ee9"){
            $driver = $this->Driver->find('first', array('conditions' => array('Driver.email' => $this->request->data['email'])));
           // $this->Driver->id = $this->request->data['id'];
            $this->Driver->id = $driver['Driver']['id'];
               // $this->request->data = $this->Driver->findById($this->request->data['id']);

            if ($this->Driver->save($this->request->data)) {
                $message = 'Driver Updated';
            } else {
                $message = 'Error';
            }

        }
        else {
            $message = 'Authentication Needed';
        }
        $this->set('message', $message);
        $this->set('_serialize', array('message'));
    }

    public function driversByEmail(){


        if($this->request->is('post')){
            $key = $this->request->data['key'];

            if($key == "9c36c7108a73324100bc9305f581979071d45ee9"){
                $email = $this->request->data['email'];
        
                $message =  $this->Driver->find('Driver.id', array(
                    'conditions' => array('Driver.email' => $email)
                    )
                );

                if($message == ""){
                    $message = "Error";
                }
            }
            else {
                $message = "You are not authorized for this page.";
            }
            $this->set('message',$message);
            $this->set('_serialize', array('message'));
        }
    }
}