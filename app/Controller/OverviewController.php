<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 14/01/14
 * Time: 12:55
 */


App::uses('AppController', 'Controller');

/**
 * Drivers Controller
 *
 * @property Driver $Driver
 * @property Paginator Component $Paginator
 */
class OverviewController extends AppController {

    /**
     * Components
     *
     * @var array
     */

    public $components = array('Paginator');

    /**
     * Helpers
     */
    public $helpers = array('GoogleMap');


    public function beforeFilter(){
        parent::beforeFilter();
    }

    /**
     * Other Models
     * User
     */
    var $uses = array('Driver','User','DriverLocation','Job');


    /**
     * index method
     *
     * @return void
     */
    public function index() {

        $activeDrivers[] = array();
        $activeDriverLocations[] = array();

        $activeDrivers = $this->Driver->getActiveDrivers();

        foreach($activeDrivers as $activeDriver){
            $activeDriverLocations[] = $this->DriverLocation->find('first', array(
                'conditions' => array('DriverLocation.driver_id' => $activeDriver['Driver']['id']),
                'order' => array('DriverLocation.date_time_stamp' => 'desc')
            ));

        }
        $this->set('activeDrivers', $activeDrivers);
        $this->set('activeDriverLocations', $activeDriverLocations);

        $todaysDate = date('Y-m-d');
        $completedJobsToday = $this->Job->getCompletedJobsByDay($todaysDate);
        $this->set('completedJobsToday',$completedJobsToday);

        $activeJobs = $this->Job->getActiveJobs();
        $this->set('activeJobs', $activeJobs);

        //Default Google Map Config
        $map_options = array(
            'id' => 'map_canvas',
            'width' => '100%',
            'height' => '800px',
            'style' => '',
            'zoom' => 6,
            'type' => 'ROADMAP',
            'custom' => null,
            'localize' => true,
            'marker' => false
        );

        $this->set('map_options', $map_options);
    }

    public function viewActivityMap(){

        $activeDrivers = $this->Driver->getActiveDrivers();

        $activeDriverLocations[] = array();        

        foreach($activeDrivers as $activeDriver){

            $activeDriverLocations[] = $this->DriverLocation->find('first', array(
                'conditions' => array('DriverLocation.driver_id' => $activeDriver['Driver']['id']),
                'order' => array('DriverLocation.date_time_stamp' => 'desc')
            ));
            
        }

        $this->set('activeDrivers', $activeDrivers);
        $this->set('activeDriverLocations', $activeDriverLocations);

        $availableDrivers = $this->Driver->getAvailableDrivers();

        $availableDriverLocations[] = array();        

        foreach($availableDrivers as $availableDriver){
            $availableDriverLocations[] = $this->DriverLocation->find('first', array(
                'conditions' => array('DriverLocation.driver_id' => $availableDriver['Driver']['id']),
                'order' => array('DriverLocation.date_time_stamp' => 'desc')
            ));   
        }

        $this->set('availableDrivers', $availableDrivers);
        $this->set('availableDriverLocations', $availableDriverLocations);

        $completedJobs = $this->Job->getCompletedJobs();
        $this->set('completedJobs', $completedJobs);

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
            'marker' => false,
            'custom' => 'panControl: false, zoomControl: false'
        );

        $this->set('map_options', $map_options);


    }
}