<?php
App::uses('DriverDailyActivity', 'Model');

/**
 * DriverDailyActivity Test Case
 *
 */
class DriverDailyActivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver_daily_activity',
		'app.driver'
	);


/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DriverDailyActivity = ClassRegistry::init('DriverDailyActivity');
	}

	public function testFindAll(){
		$result = $this->DriverDailyActivity->find('all');

		$expected = array(
			'0' => array(
				'DriverDailyActivity' => array(
					'id' => 1,
					'driver_id' => 1,
					'date_timestamp' => '2014-01-02 09:51:13',
					'miles_driven' => 1,
					'time_minutes_driven' => 1,
					'time_minutes_break' => 1,
					'jobs_completed' => 1
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
		unset($this->DriverDailyActivity);

		parent::tearDown();
	}

}
