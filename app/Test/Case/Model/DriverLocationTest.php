<?php
App::uses('DriverLocation', 'Model');

/**
 * DriverLocation Test Case
 *
 */
class DriverLocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver_location',
		'app.driver'
	);
	public $dropTables = false; 


/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DriverLocation = ClassRegistry::init('DriverLocation');
	}

	public function testFindAll(){
		$result = $this->DriverLocation->find('all');

		$expected = array(
			'0' => array(
				'DriverLocation' => array(
					'id' => 1,
					'driver_id' => 1,
					'date_time_stamp' => '2014-01-02 09:52:03',
					'latitude' => 1,
					'longitude' => 1
				),
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
				)
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
		unset($this->DriverLocation);

		parent::tearDown();
	}

}
