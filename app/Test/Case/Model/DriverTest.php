<?php 
App::uses('Driver', 'Model');

/**
 * Driver Test Case
 *
 */
class DriverTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver',
		'app.user',
		'app.driver_daily_activity',
		'app.driver_location',
		'app.driver_vehicle_job',
		'app.job',
		'app.vehicle',
		'app.job_signature',
		'app.license_type'
	);



/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Driver = ClassRegistry::init('Driver');
	}

	public function testGetActiveDrivers(){
		$result = $this->Driver->getActiveDrivers();
		$expected = array(
			'0' => array(
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
		        'User' => Array (
		        	'id' => '7',
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
		            'driver_id' => ''
				),
		        'LicenseType' => Array (
		        	'id' => null,
		            'license_type' => null
		        ),
		        'DriverDailyActivity' => Array (),
		        'DriverLocation' => Array (
		        	0 => Array (
		        		'id' => '19029',
		                'driver_id' => '458',
		                'date_time_stamp' => '2014-03-01 04:06:05',
		                'latitude' => '52.815',
		                'longitude' => '-2.09746',
		        	),
		        	1 => Array (
		        		'id' => '19030',
		                'driver_id' => '458',
		                'date_time_stamp' => '2014-03-01 04:06:05',
		                'latitude' => '52.815',
		                'longitude' => '-2.09746'
					)
		        ),
		        'DriverVehicleJob' => Array (
		        	0 => Array (
		        		'id' => '84',
		                'driver_id' => '458',
		                'job_id' => '105',
		                'vehicle_id' => '44',
		                'created' => '2014-03-11 14:44:05',
		                'modified' => '2014-03-11 14:44:05',
		                'status' => ''
		        	),
		        	1 => Array (
		        		'id' => '83',
		                'driver_id' => '458',
		                'job_id' => '104',
		                'vehicle_id' => '44',
		                'created' => '2014-03-11 14:43:21',
		                'modified' => '2014-03-11 14:43:21',
		                'status' => ''
		        	)
		        ),
		        'JobSignature' => Array ()
			)
		);
		$this->assertEquals($expected, $result);
	}
 			

	public function testGetAvailableDrivers(){
		$result = $this->Driver->getAvailableDrivers();
		
		$expected = array(
			0 => Array (
				'Driver' => Array (
					'id' => '459',
		            'user_id' => '52',
		            'license_type_id' => '3',
		            'available' => 'Available',
		            'last_logged_in' => null,
		            'created' => '2014-02-16 08:04:28',
		            'modified' => '2014-03-10 18:37:57',
		            'first_name' => 'John',
		            'last_name' => 'Doe',
		            'email' => 'john@email.com',
		            'telephone' => '01234 567891'
				),
		        'User' => Array (
					'id' => null,
		            'username' => null,
		            'password' => null,
		            'role' => null,
		            'created' => null,
		            'modified' => null,
		            'first_name' => null,
		            'last_name' => null,
		            'email' => null,
		            'telephone' => null,
		            'status' => null,
		            'group_id' => null,
		            'driver_id' => null
		        ),
		        'LicenseType' => Array (
					'id' => null,
            		'license_type' => null
		        ),
		        'DriverDailyActivity' => Array (),
		        'DriverLocation' => Array (),
		        'DriverVehicleJob' => Array (),
		        'JobSignature' => Array (),
			)
		);

		$this->assertEquals($expected, $result);
 	}

	public function testGetUnavailableDrivers(){
		$result = $this->Driver->getUnavailableDrivers();

		$expected = array();

		$this->assertEquals($expected, $result);
 	}


// /**
//  * tearDown method
//  *
//  * @return void
//  */
// 	public function tearDown() {
// 		unset($this->Driver);

// 		parent::tearDown();
// 	}

}
