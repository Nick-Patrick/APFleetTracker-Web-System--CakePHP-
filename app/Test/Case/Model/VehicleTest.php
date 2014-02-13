<?php
App::uses('Vehicle', 'Model');

/**
 * Vehicle Test Case
 *
 */
class VehicleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vehicle',
		'app.driver_vehicle_job',
		'app.driver',
		'app.user',
		'app.driver_daily_activity',
		'app.driver_location',
		'app.job_signature',
		'app.job',
		'app.job_package',
		'app.package',
		'app.vehicle_daily_activity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vehicle = ClassRegistry::init('Vehicle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vehicle);

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
