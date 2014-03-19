<?php
App::uses('JobsController', 'Controller');

/**
 * JobsController Test Case
 *
 */
class JobsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job',
		'app.job_package',
		'app.package',
		'app.job_signature',
		'app.driver',
		'app.user',
		'app.driver_daily_activity',
		'app.driver_location',
		'app.driver_vehicle_job',
		'app.vehicle',
		'app.location',
		'app.license_type',
		'app.vehicle_type',
		'app.vehicle_daily_activity',
		'app.group',
		'app.location_opening_time'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/jobs/index');
		debug($result);
	}


/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/jobs/view/96');
		debug($result);
	}


/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

		$data = array(
			'id' => '96',
			'name' => 'Job One',
			'collection_id' => '213',
			'dropoff_id' => '210',
			'status' => 'Complete',
			'completed_date' => '2014-03-11 08:24:04',
			'created' => '2014-03-10 18:08:45',
			'modified' => '2014-03-11 08:22:05',
			'additional_details' => '',
			'due_date' => null,
			'created_by' => 'Test Admin',
			'driver_id' => '458',
			'vehicle_id' => '45'
		);

		$result = $this->testAction('/jobs/edit/96',
			array('data' => $data));
		debug($result);
	}


/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$result = $this->testAction('/jobs/delete/96');
		debug($result);
	}


	public function testAssign(){
		$data = array(
		'DriverVehicleJob' => Array (
			'id' => '84',
    		'driver_id' => '458',
  			'job_id' => '105',
  			'vehicle_id' => '44',
  			'created' => '2014-03-11 14:44:05',
  			'modified' => '2014-03-11 14:44:05',
  			'status' => ''
         ),
         'Driver' => Array (
             'id' => '458',
             'user_id' => '7',
             'license_type_id' => '4',
             'available' => 'Active',
             'last_logged_in' => null,
             'created' => '2014-02-16 08:03:16',
             'modified' => '2014-03-11 14:45:08',
             'first_name' => 'Nick',
             'last_name' => 'Patrick',
             'email' => 'nick@email.com',
             'telephone' => '01546 782132'
         ),
         'Job' => Array (
             'id' => null,
             'name' => null,
             'collection_id' => null,
             'dropoff_id' => null,
             'status' => null,
             'completed_date' => null,
             'created' => null,
             'modified' => null,
             'additional_details' => null,
             'due_date' => null,
             'created_by' => null,
             'driver_id' => null,
             'vehicle_id' => null
         ),
         'Vehicle' => Array (
             'id' => '44',
             'name' => 'Ford Transit',
             'vehicle_type_id' => '1',
             'reg_number' => 'MN07 1SJ',
             'license_type_id' => '1',
             'crane' => 'No',
             'status' => 'Available',
             'available' => 'Available',
             'created' => '2014-02-08 13:23:58',
             'modified' => '2014-03-11 14:45:07',
             'trailer' => 'No',
             'hydraulic_beavertail' => 'No',
             'description' => 'Just a ford transit'
			),
		);
		$result = $this->testAction('/jobs/assign',
			array('data' => $data));
		debug($result);
	}

	public function testAddJob(){
		$data = array(
				'Job' => Array (
					'id' => '96',
		            'name' => 'Job One',
		            'collection_id' => '213',
		            'dropoff_id' => '210',
		            'status' => 'Complete',
		            'completed_date' => '2014-03-11 08:24:04',
		            'created' => '2014-03-10 18:08:45',
		            'modified' => '2014-03-11 08:22:05',
		            'additional_details' => '',
		            'due_date' => null,
		            'created_by' => 'Test Admin',
		            'driver_id' => '458',
		            'vehicle_id' => '45',
				),
		        'Driver' => Array (
		        	'id' => '458',
		            'user_id' => '7',
		            'license_type_id' => '4',
		            'available' => 'Active',
		            'last_logged_in' => null,
		            'created' => '2014-02-16 08:03:16',
		            'modified' => '2014-03-11 14:45:08',
		            'first_name' => 'Nick',
		            'last_name' => 'Patrick',
		            'email' => 'nick@email.com',
		            'telephone' => '01546 782132',
		        ),
		        'Collection' => Array (
		        	'id' => null,
		            'name' => null,
		            'address1' => null,
		            'address2' => null,
		            'address3' => null,
		            'town' => null,
		            'county' => null,
		            'postcode' => null,
		            'location_opening_times_id' => null,
		            'telephone' => null,
		            'created' => null,
		            'modified' => null,
		            'latitude' => null,
		            'longitude' => null,
		        ),
		        'Dropoff' => Array (
	        	   'id' => null,
		           'name' => null,
		           'address1' => null,
		           'address2' => null,
		           'address3' => null,
		           'town' => null,
		           'county' => null,
		           'postcode' => null,
		           'location_opening_times_id' => null,
		           'telephone' => null,
		           'created' => null,
		           'modified' => null,
		           'latitude' => null,
		           'longitude' => null,
		        ),
		        'JobPackage' => Array (
		        	0 => array(
						'id' => '112',
		                'job_id' => '96',
		                'package_id' => '12',
		                'notes' => null,
		                'status' => 'Pending',
		                'created' => '2014-03-10 18:08:45',
		                'modified' => '2014-03-10 18:08:45'
		        	),
		        	1 => array(
						'id' => '113',
		                'job_id' => '96',
		                'package_id' => '13',
		                'notes' => null,
		                'status' => 'Pending',
		                'created' => '2014-03-10 18:08:45',
		                'modified' => '2014-03-10 18:08:45',
		        	)
		        ),
		       'User' => array( 'id' => '7',
					'username' => 'nickManager',
					'password' => '9c36c7108a73324100bc9305f581979071d45ee9',
					'role' => 'Manager',
					'created' => '2014-01-12 06:05:44',
					'modified' => '2014-01-12 06:05:44',
					'first_name' => 'Nick',
					'last_name' => 'Manager',
					'email' => 'nick@email.com',
					'telephone' => '123456789',
					'status' => 'Active',
					'group_id' => '5',
					'driver_id' => '',
		      	    'JobSignature' => Array (),
		       	    'DriverVehicleJob' => Array ()
		        )

		);

		$result = $this->testAction('/jobs/addJob',
			array('data' => $data));
		debug($result);
	}
	

	

}
