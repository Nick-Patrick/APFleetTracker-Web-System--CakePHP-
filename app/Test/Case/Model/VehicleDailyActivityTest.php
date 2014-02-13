<?php
App::uses('VehicleDailyActivity', 'Model');

/**
 * VehicleDailyActivity Test Case
 *
 */
class VehicleDailyActivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vehicle_daily_activity',
		'app.vehicle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VehicleDailyActivity = ClassRegistry::init('VehicleDailyActivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VehicleDailyActivity);

		parent::tearDown();
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}
}
