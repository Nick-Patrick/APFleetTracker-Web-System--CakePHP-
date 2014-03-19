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
		$result = $this->User->getUserByEmail('test@test.com');

		$expected = array(
			'User' => Array (
				'id' => '6',
		        'username' => 'test',
		        'password' => '9c36c7108a73324100bc9305f581979071d45ee9',
		        'role' => 'Administrator',
		        'created' => '2014-01-12 05:37:05',
		        'modified' => '2014-01-12 06:05:58',
		        'first_name' => 'Test',
		        'last_name' => 'Admin',
		        'email' => 'test@test.com',
		        'telephone' => '0123456789',
		        'status' => 'Active',
		        'group_id' => '4',
		        'driver_id' => '',
			),
		    'Group' => Array (
		    	'id' => '4',
		        'name' => 'Administrator',
		        'created' => '2014-01-12 05:42:46',
		        'modified' => '2014-01-12 05:42:46',
		    ),
		    'Driver' => Array (
		    	'id' => null,
		       'user_id' => null,
		       'license_type_id' => null,
		       'available' => null,
		       'last_logged_in' => null,
		       'created' => null,
		       'modified' => null,
		       'first_name' => null,
		       'last_name' => null,
		       'email' => null,
		       'telephone' => null,
		    ),
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
