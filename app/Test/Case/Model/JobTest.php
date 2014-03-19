<?php
App::uses('Job', 'Model');

/**
 * Job Test Case
 *
 */
class JobTest extends CakeTestCase {

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
		'app.location'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Job = ClassRegistry::init('Job');
	}

	public function testFindAll(){
		$result = $this->Job->find('all');

		$expected = array(
			0 => array(
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
		        'JobSignature' => Array (),
		        'DriverVehicleJob' => Array ()
			),
			1 => array(
				'Job' => Array (
					'id' => '102',
		            'name' => 'Job Five',
		            'collection_id' => '210',
		            'dropoff_id' => '212',
		            'status' => 'Assigned',
		            'completed_date' => null,
		            'created' => '2014-03-11 08:59:42',
		            'modified' => '2014-03-11 08:59:42',
		            'additional_details' => '',
		            'due_date' => null,
		            'created_by' => 'Test Admin',
		            'driver_id' => '458',
		            'vehicle_id' => '44',
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
		            'longitude' => null
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
		        ),
		        'JobSignature' => Array (),
		        'DriverVehicleJob' => Array ()
			)
		);

		$this->assertEqual($expected, $result);
		
	}

	public function testCompletedJobsByDay(){
		$aDate = DATE("2014-03-11 08:24:04");
		$result = $this->Job->getCompletedJobsByDay($aDate);


		$expected = array();

		$this->assertEqual($expected, $result);

	}

	public function testGetCompletedJobs(){
		$result = $this->Job->getCompletedJobs();
		$expected = array(
			0 => array(
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
		        'JobSignature' => Array (),
		        'DriverVehicleJob' => Array ()
			)
		);
		$this->assertEqual($result, $expected);
		
	}

	public function testGetActiveJobs(){
		$result = $this->Job->getActiveJobs();
		$expected = array();
		$this->assertEqual($expected, $result);
	}

	public function testGetAssignedJobs(){
		$result = $this->Job->getAssignedJobs();
		$expected = array(
			0 => array(
				'Job' => Array (
					'id' => '102',
		            'name' => 'Job Five',
		            'collection_id' => '210',
		            'dropoff_id' => '212',
		            'status' => 'Assigned',
		            'completed_date' => null,
		            'created' => '2014-03-11 08:59:42',
		            'modified' => '2014-03-11 08:59:42',
		            'additional_details' => '',
		            'due_date' => null,
		            'created_by' => 'Test Admin',
		            'driver_id' => '458',
		            'vehicle_id' => '44',
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
		            'longitude' => null
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
		        ),
		        'JobSignature' => Array (),
		        'DriverVehicleJob' => Array ()
			)
		);
		$this->assertEqual($result, $expected);
		
	}

	public function testGetPendingJobs(){
		$result = $this->Job->getPendingJobs();
		$expected = array();
		$this->assertEqual($result, $expected);	
	}

	public function testGetActiveJobByDriver(){
		$driverId = 458;
		$result = $this->Job->getActiveJobByDriverId($driverId);
		$expected = array();
		$this->assertEqual($result, $expected);
	}

	public function testGetActiveJobByVehicleId(){
		$vehicleId = 44;
		$result = $this->Job->getActiveJobByVehicleId($vehicleId);
		$expected = array();
		$this->assertEqual($result, $expected);
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Job);

		parent::tearDown();
	}

}
