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
				'Driver' => array(
					'id' => 1,
					'user_id' => 1,
					'license_type_id' => '1',
					'available' => 'Active',
					'last_logged_in' => '2007-03-18 10:41:23',
					'created' => '2007-03-18 10:41:23',
					'modified' => '2007-03-18 10:41:23',
					'first_name' => 'Fred',
					'last_name' => 'Jones',
					'email' => 'fred@email.com',
					'telephone' => '01234 564789'
				),
				'User' => array(
					'id' => 1,
					'username' => 'fred@email.com',
					'password' => 'password',
					'role' => 'Driver',
					'created' => '2014-01-02 09:53:27',
					'modified' => '2014-01-02 09:53:27',
					'first_name' => 'Fred',
					'last_name' => 'Jones',
					'email' => 'fred@email.com',
					'telephone' => '0123456789',
					'status' => 'Active',
					'group_id' => '6'
				),
				'DriverDailyActivity' => array(
					'0' => array(
						'id' => 1,
						'driver_id' => 1,
						'date_timestamp' => '2014-01-02 09:51:13',
						'miles_driven' => 1,
						'time_minutes_driven' => 1,
						'time_minutes_break' => 1,
						'jobs_completed' => 1
					)
				),
				'DriverLocation' => array(
					'0' => array(
						'id' => 1,
						'driver_id' => 1,
						'date_time_stamp' => '2014-01-02 09:52:03',
						'latitude' => 1,
						'longitude' => 1
					)
				 ),
				'DriverVehicleJob' => array(
					'0' => array(
						'id' => 1,
						'driver_id' => 1,
						'job_id' => 1,
						'vehicle_id' => 1,
						'created' => '2014-01-02 09:52:26',
						'modified' => '2014-01-02 09:52:26'
					)
				),
				'JobSignature' => array(
					'0' => array(
						'id' => 1,
						'driver_id' => 1,
						'job_id' => 1,
						'driver_signature' => 'Lorem ipsum dolor sit amet',
						'customer_signature' => 'Lorem ipsum dolor sit amet',
						'created' => '2014-01-02 09:52:56',
						'modified' => '2014-01-02 09:52:56'
					)
				),
				'LicenseType' => array(
					'id' => 1,
					'license_type' => 'Lorem ipsum dolor sit amet'
				)
			),
			'1' =>	array(
				'Driver' => array(
					'id' => 3,
					'user_id' => 3,
					'license_type_id' => '1',
					'available' => 'Active',
					'last_logged_in' => '2007-03-18 10:41:23',
					'created' => '2007-03-18 10:41:23',
					'modified' => '2007-03-18 10:41:23',
					'first_name' => 'Tom',
					'last_name' => 'Well',
					'email' => 'tom@email.com',
					'telephone' => '45671 456789'
				),
				'User' => array(
					'id' => 3,
					'username' => 'tom@email.com',
					'password' => 'password',
					'role' => 'Driver',
					'created' => '2014-01-02 09:53:27',
					'modified' => '2014-01-02 09:53:27',
					'first_name' => 'Tom',
					'last_name' => 'Well',
					'email' => 'tom@email.com',
					'telephone' => '0123456789',
					'status' => 'Active',
					'group_id' => '6'
				),
				'DriverDailyActivity' => array(),
				'DriverLocation' => array(),
				'DriverVehicleJob' => array(),
				'JobSignature' => array(),
				'LicenseType' => array(
					'id' => 1,
					'license_type' => 'Lorem ipsum dolor sit amet'
				)
			)
		);

		$this->assertEquals($expected, $result);

	}

	public function testGetAvailableDrivers(){
		$result = $this->Driver->getAvailableDrivers();
		
		$expected = array(
			'0' => array(
				'Driver' => array(
					'id' => 2,
					'user_id' => 2,
					'license_type_id' => '2',
					'available' => 'Available',
					'last_logged_in' => '2007-03-18 10:41:23',
					'created' => '2007-03-18 10:41:23',
					'modified' => '2007-03-18 10:41:23',
					'first_name' => 'Ian',
					'last_name' => 'Gwyn',
					'email' => 'ian@email.com',
					'telephone' => '45671 456789'
				),
				'User' => array(
					'id' => 2,
					'username' => 'ian@email.com',
					'password' => 'password',
					'role' => 'Driver',
					'created' => '2014-01-02 09:53:27',
					'modified' => '2014-01-02 09:53:27',
					'first_name' => 'Ian',
					'last_name' => 'Gwyn',
					'email' => 'ian@email.com',
					'telephone' => '0123456789',
					'status' => 'Active',
					'group_id' => '6'
				),
				'DriverDailyActivity' => array(),
				'DriverLocation' => array(),
				'DriverVehicleJob' => array(),
				'JobSignature' => array(),
				'LicenseType' => array(
					'id' => 2,
					'license_type' => 'Lorem ipsum dolor sit amet'
				)
			)

		);

		$this->assertEquals($expected, $result);
	}

	public function testGetUnavailableDrivers(){
		$result = $this->Driver->getUnavailableDrivers();

		$expected = array(
			'0' => array(
				'Driver' => array(
					'id' => 4,
					'user_id' => 4,
					'license_type_id' => '2',
					'available' => 'Inactive',
					'last_logged_in' => '2007-03-18 10:41:23',
					'created' => '2007-03-18 10:41:23',
					'modified' => '2007-03-18 10:41:23',
					'first_name' => 'Maie',
					'last_name' => 'Luo',
					'email' => 'Maie@email.com',
					'telephone' => '45671 456789'
				),
				'User' => array(
					'id' => 4,
					'username' => 'Maie@email.com',
					'password' => 'password',
					'role' => 'Driver',
					'created' => '2014-01-02 09:53:27',
					'modified' => '2014-01-02 09:53:27',
					'first_name' => 'Maie',
					'last_name' => 'Luo',
					'email' => 'Maie@email.com',
					'telephone' => '0123456789',
					'status' => 'Active',
					'group_id' => '6'
				),
				'DriverDailyActivity' => array(),
				'DriverLocation' => array(),
				'DriverVehicleJob' => array(),
				'JobSignature' => array(),
				'LicenseType' => array(
					'id' => 2,
					'license_type' => 'Lorem ipsum dolor sit amet'
				)
			)
		);

		$this->assertEquals($expected, $result);
	}


/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Driver);

		parent::tearDown();
	}

}
