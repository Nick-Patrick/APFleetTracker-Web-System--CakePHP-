<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 */
class JobsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');

/**
 * Other Models
 * Job
 */
    var $uses = array('Job','Location','Package','Driver','Vehicle','User','Job_Package','DriverLocation','UpdateLog');

/**
* Helpers
*/
	var $helpers = array('Js' => array('Jquery'));

    public function beforeFilter(){
        parent::beforeFilter();
       $this->Auth->allow('addJob','assignedJobsByDriverId','updateActiveJob');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Job->recursive = 0;
		$this->set('jobs', $this->Paginator->paginate());

		$activeJobs = $this->Job->getActiveJobs();
		$assignedJobs = $this->Job->getAssignedJobs();
		$pendingJobs = $this->Job->getPendingJobs();

		$this->set('activeJobs',$activeJobs);
		$this->set('assignedJobs', $assignedJobs);
		$this->set('pendingJobs', $pendingJobs);

        $activeDrivers = $this->Driver->getActiveDrivers();
		$activeDriverLocations[] = array();

		$availableDrivers = $this->Driver->getAvailableDrivers();
		$this->set('availableDrivers', $availableDrivers);
		$availableVehicles = $this->Vehicle->getAvailableVehicles();
        $this->set('availableVehicles',$availableVehicles);

        foreach($activeDrivers as $activeDriver){
            $activeDriverLocations[] = $this->Driver->DriverLocation->find('first', array(
                'conditions' => array('DriverLocation.driver_id' => $activeDriver['Driver']['id']),
                'order' => array('DriverLocation.date_time_stamp' => 'desc')
            ));
        }
        
        $this->set('activeDriverLocations', $activeDriverLocations);


    //Default Google Map Config
        $map_options = array(
            'id' => 'map_canvas',
            'width' => '100%',
            'height' => '900px',
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
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}

/**
 * add method
 * 
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$data = array(
				'Job' => $this->request->data['Job'],
				'JobPackage' => array(),
			);

			foreach($this->request->data['JobPackage']['package_id'] as $jobPackage){
				$data['JobPackage'][] = array('package_id' => $jobPackage, 'status' => 'Pending');
			}
			if($this->request->data['DriverVehicleJob']['driver_id'] == ''){
				$data['Job']['status'] = 'Pending';
				$this->Job->saveAssociated($data);
			}
			else {
				$data['Job']['status'] = 'Assigned';
				$this->Job->saveAssociated($data);
				$this->request->data['DriverVehicleJob']['job_id'] = $this->Job->id;
				$this->Job->DriverVehicleJob->save($this->request->data);
				$this->Driver->id = $this->request->data['DriverVehicleJob']['driver_id'];
				$this->Vehicle->id = $this->request->data['DriverVehicleJob']['vehicle_id'];
				$this->Driver->saveField('available','Assigned');
				$this->Vehicle->saveField('available','Assigned');
				$this->Job->saveField('driver_id', $this->request->data['DriverVehicleJob']['driver_id']);
				$this->Job->saveField('vehicle_id', $this->request->data['DriverVehicleJob']['vehicle_id']);
			}

			return $this->redirect(array('action' => 'index'));

		}
	}

	public function assign(){

			$this->Job->id = $this->request->data['Job']['id'];
			$this->Driver->id = $this->request->data['Driver']['id'];
			$this->Vehicle->id = $this->request->data['Vehicle']['id'];
			$this->Job->saveField('status','Assigned');
			$this->Job->saveField('driver_id', $this->Driver->id);
			$this->Job->saveField('vehicle_id', $this->Vehicle->id);
			//$this->Job->saveAssociated($data);
			$this->request->data['DriverVehicleJob']['job_id'] = $this->Job->id;
			$this->request->data['DriverVehicleJob']['vehicle_id'] = $this->Vehicle->id;
			$this->request->data['DriverVehicleJob']['driver_id'] = $this->Driver->id;
			$this->Job->DriverVehicleJob->save($this->request->data);
			$this->Driver->id = $this->request->data['DriverVehicleJob']['driver_id'];
			$this->Vehicle->id = $this->request->data['DriverVehicleJob']['vehicle_id'];
			$this->Driver->saveField('available','Assigned');
			$this->Vehicle->saveField('available','Assigned');
		
			return $this->redirect($this->referer());

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$this->request->data = $this->Job->find('first', $options);
		}
        $collectionPoints = $this->Location->find('list', array('id','name'));
        $this->set('collectionPoints',$collectionPoints);
        $dropoffPoints = $this->Location->find('list', array('id','name'));
        $this->set('dropoffPoints',$dropoffPoints);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Job->id = $id;
		if (!$this->Job->exists()) {
			throw new NotFoundException(__('Invalid job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Job->delete()) {
			$this->Session->setFlash(__('The job has been deleted.'));
		} else {
			$this->Session->setFlash(__('The job could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function manage($id = null){
		$this->Job->id = $id;
		$jobs = $this->Job->find('all');
		$this->set('jobs', $jobs);

		$dropoffPoint = $this->Location->find('all', array(
		//	'contain' => array('Job'),
     		'conditions' => array('Location.id' => $this->Job->id)
     		)
     	);
     	$this->set('dropoffPoint', $dropoffPoint);


	}

	public function addJob(){
		$currentUserId = CakeSession::read("Auth.User.id");
		$currentUser = $this->User->find('first', array(
			'fields' => array('User.first_name','User.last_name'),
			'conditions' => array('User.id' => $currentUserId)
			)
		);
            //$id = $this->Driver->find('first', array('id'), array('conditions' => array('email' => $this->request->data['email'])));

		$this->set('currentUserName', $currentUser);

     	$locations = $this->Location->find('list', array(
     		'fields' => array('id','name'), 'order' => array('created' => 'desc')
     		)
     	);

     	$packages = $this->Package->find('list', array(
     		'fields' => array('id','name'), 'order' => array('created' => 'desc')
     		)
     	);

     	/*$drivers = $this->Driver->find('list', array(
     		'fields' => array('id','first_name','last_name'),
     		'conditions' => array('available' => 'Available')
     		)
     	);*/

		$drivers = $this->Driver->find('all', array(
			//'conditions' => array('available' => 'Available')
			)
		);

     	$vehicles = $this->Vehicle->find('list', array(
     		'fields' => array('id', 'name'),
     		//'conditions' => array('available' => 'Yes')
     		)
     	);

     	$this->set('locations', $locations);
     	$this->set('packages', $packages);
     	$this->set('drivers', $drivers);
     	$this->set('vehicles', $vehicles);


     }

     public function getActiveLocationsByDriver(){
        $driverId = $this->request->data['driverId'];
        $this->set('locations', $this->Job->getActiveJobByDriverId($driverId));

        $this->set('_serialize', array('locations'));
     }

     public function viewCurrentActiveJob($driverId){
     	$activeJob = $this->Job->getActiveJobByDriverId($driverId);
        $this->set('activeJob', $activeJob);

        $activeDrivers = $this->Driver->findAllById($driverId);
        $this->set('activeDrivers',$activeDrivers);

        $activeDriverLocations[] = array();

        foreach($activeDrivers as $activeDriver){
            $activeDriverLocations[] = $this->DriverLocation->find('first', array(
                'conditions' => array('DriverLocation.driver_id' => $activeDriver['Driver']['id']),
                'order' => array('DriverLocation.date_time_stamp' => 'desc')
            ));
        }
        
        $this->set('activeDriverLocations', $activeDriverLocations);

        $jobCollection = $this->Location->findAllById($activeJob[0]['Job']['collection_id']);
        $this->set('jobCollection',$jobCollection);
        $jobDropoff = $this->Location->findAllById($activeJob[0]['Job']['dropoff_id']);
        $this->set('jobDropoff', $jobDropoff);

        $vehicle = $this->Vehicle->findAllById($activeJob[0]['DriverVehicleJob'][0]['vehicle_id']);
        $this->set('vehicle', $vehicle);

        $packages[] = array();
        foreach($activeJob[0]['JobPackage'] as $jobPackage){
            $packages[] = $this->Package->findAllById($jobPackage['package_id']);
        }
        $this->set('packages', $packages);

        //Default Google Map Config
        $map_options = array(
            'id' => 'map_canvas',
            'width' => '100%',
            'height' => '900px',
            'style' => '',
            'zoom' => 6,
            'type' => 'ROADMAP',
            'custom' => null,
            'localize' => true,
            'marker' => false
        );

        $this->set('map_options', $map_options);
     }

     public function assignedJobsByDriverId(){

     	if($this->request->is('post')){
     		$key = $this->request->data['key'];
     		$driverId = $this->request->data['driver_id'];

			/*$message = $this->Job->DriverVehicleJob->find('all', array(
     			'conditions' => array(
     				array('DriverVehicleJob.driver_id' => $driverId)
     				)
     			)
     		);*/

			$driverJobs = $this->Job->find('all', array(
				'conditions' => array(
					array('driver_id' => $driverId)
					)
				));

     	
     		if($driverJobs == "[]") {
     			$driverJobs = "No jobs found.";
     		}
     	}
     	else  {
     		$driverJobs = "You are not authorized for this page.";
     	}
     	
     	$this->set('message', $driverJobs);
     	$this->set('_serialize', array('message'));
     }

    public function updateActiveJob($job_id = null) {

    	if($this->request->is('post')){

        	if($this->request->data['key'] == "9c36c7108a73324100bc9305f581979071d45ee9"){
        	   //$this->Job->id = $this->request->data['job_id'];
        		$this->Job->id = $job_id;
        		$job = $this->Job->findAllById($job_id);
        		$this->Vehicle->id = $job[0]['Job']['vehicle_id'];
        		$this->Job->save($this->request->data);

        		if($this->request->data['status'] == 'Complete'){
        			$this->Vehicle->saveField('available','Available');
        			$jobLog = 'Job Completed - <a href="">' + $this->request->data['job_id'] + '</a>';
        	        $this->UpdateLog->set('log',$jobLog);
        	        $this->UpdateLog->save();
        		}
        		if($this->request->data['status'] == 'Active'){
        			$this->Vehicle->saveField('available', 'Active');
        			$jobLog = 'Job Started - <a href="">' + $this->request->data['job_id'] + ' (Click)</a>';
        	        $this->UpdateLog->set('log',$jobLog);
        	        $this->UpdateLog->save();
        		}
        		else {
        			$this->Vehicle->saveField('available', 'Available');
        		}

						
        	   /* if ($this->Job->save($this->request->data)) {
        	        $jobMessage = 'Job Updated';
        	        //if($this->request->data['status'] == 'Complete'){
        	        	
        	        //}
        	         //$log = 'Job Updated - ' . $this->request->data['available'];
        	        // $this->UpdateLog->set('log',$log);
                	 //$this->UpdateLog->set('driver_id', $this->request->data['driver_id']);
                	 //$this->UpdateLog->save();
        	    } else {
        	        $jobMessage = 'Error';
        	    }*/
	
        	}
        	else {
        	    $jobMessage = 'Authentication Needed';
        	}
        	$this->set('jobMessage', $jobMessage);
        	$this->set('_serialize', array('jobMessage'));
        }
    }

}

