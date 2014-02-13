<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.driver',
		'app.driver_daily_activity',
		'app.driver_location',
		'app.driver_vehicle_job',
		'app.job',
		'app.job_package',
		'app.package',
		'app.job_signature',
		'app.vehicle',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

	public function testGetUserByEmail(){
		$result = $this->User->getUserByEmail('tom@email.com');

		$expected = array(
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
			'Group' => array(
				'id' => 6,
				'name' => 'Driver',
				'created' => '2014-01-11 10:55:58',
				'modified' => '2014-01-11 10:55:58'
			),
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
			)
		);

		$this->assertEqual($expected, $result);
		
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
