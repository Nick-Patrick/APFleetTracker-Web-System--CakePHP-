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
