<?php
App::uses('DriverVehicleJob', 'Model');

/**
 * DriverVehicleJob Test Case
 *
 */
class DriverVehicleJobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver_vehicle_job',
		'app.driver',
		'app.job',
		'app.vehicle'
	);
	public $dropTables = false; 

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DriverVehicleJob = ClassRegistry::init('DriverVehicleJob');
	}

	public function testFindAll(){
		$result = $this->DriverVehicleJob->find('all');

		$expected = array(
			0 => Array(
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
     ),
     1 => Array (
         'DriverVehicleJob' => Array (
             'id' => '83',
             'driver_id' => '458',
             'job_id' => '104',
             'vehicle_id' => '44',
             'created' => '2014-03-11 14:43:21',
             'modified' => '2014-03-11 14:43:21',
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
			)
		)
		);
		$this->assertEqual($result,$expected);
	}
/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DriverVehicleJob);

		parent::tearDown();
	}

}
