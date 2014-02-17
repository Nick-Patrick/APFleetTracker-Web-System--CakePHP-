<?php
App::uses('AppController', 'Controller');
/**
 * Locations Controller
 *
 * @property Location $Location
 * @property PaginatorComponent $Paginator
 */
class LocationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');


/**
 * Other Models
 * Location
 */
    var $uses = array('Location','LocationOpeningTime');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		/*$this->Location->recursive = 0;
		$this->set('locations', $this->Paginator->paginate());
		$this->set('locationOpeningTimes', $this->Location->LocationOpeningTime->find('all');
		$this->set('_serialize', array('locations','locationOpeningTimes'));
		*/
		  $allLocations = $this->Location->find('threaded');
          $this->set('allLocations', $allLocations);
          $this->set('_serialize', array('allLocations'));
	}

    public function beforeFilter(){
        parent::beforeFilter();
       $this->Auth->allow('getAllLocations');
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Location->exists($id)) {
			throw new NotFoundException(__('Invalid location'));
		}
		$options = array('conditions' => array('Location.' . $this->Location->primaryKey => $id));
		$this->set('location', $this->Location->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//$this->autoRender = false;

		//if($this->request->isAjax()){
			Configure::write('debug',0);

				if(!empty($this->request->data)){
						
						// Get lat/lng from Google.
						$postcode = $this->request->data['Location']['postcode'];
						
						$search_code = urlencode($postcode);
						$url = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . $search_code . '&sensor=false';
						$json = json_decode(file_get_contents($url));
						
						$lat = $json->results[0]->geometry->location->lat;
						$lng = $json->results[0]->geometry->location->lng;
	
						// End get lat/lng from Google.
						$this->Location->set('longitude', $lng);
						$this->Location->set('latitude', $lat);
											$location = $this->Location->save($this->request->data);

					if(!empty($location)){

						$this->set('location_id',$this->Location->id);
						$this->request->data['LocationOpeningTime']['location_id'] = $this->Location->id;
						$this->Location->LocationOpeningTime->save($this->request->data);
						return $this->redirect(array('action'=>'index'));
						//return false;
					}
				}	
				//return false;	
	/*	}
		else {
			if(!empty($this->request->data)){
				$location = $this->Location->save($this->request->data);

				if(!empty($location)){
					$this->request->data['LocationOpeningTime']['location_id'] = $this->Location->id;
					$this->Location->LocationOpeningTime->save($this->request->data);
				}
			}
		}
		*/

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Location->exists($id)) {
			throw new NotFoundException(__('Invalid location'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Location->save($this->request->data)) {
				$this->Session->setFlash(__('The location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The location could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Location.' . $this->Location->primaryKey => $id));
			$this->request->data = $this->Location->find('first', $options);
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
		$this->Location->id = $id;
		if (!$this->Location->exists()) {
			throw new NotFoundException(__('Invalid location'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Location->delete()) {
			$this->Session->setFlash(__('The location has been deleted.'));
		} else {
			$this->Session->setFlash(__('The location could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


     public function getAllLocations(){

     	if($this->request->is('post')){
     		$key = $this->request->data['key'];

     		$locations = $this->Location->find('all');
     		
     		$message = $locations;
     		if($message == ""){
     			$message = "No locations found.";
     		}
     	}
     	else  {
     		$message = "You are not authorized for this page.";
     	}
     	$this->set('message', $message);
     	$this->set('_serialize', array('message'));
     }

}
