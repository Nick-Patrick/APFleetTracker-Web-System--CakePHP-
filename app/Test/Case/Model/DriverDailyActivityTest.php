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

		$expected = array();

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
