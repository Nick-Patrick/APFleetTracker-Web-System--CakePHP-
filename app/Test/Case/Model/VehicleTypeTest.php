<?php
App::uses('VehicleType', 'Model');

/**
 * VehicleType Test Case
 *
 */
class VehicleTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vehicle_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VehicleType = ClassRegistry::init('VehicleType');
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
		unset($this->VehicleType);

		parent::tearDown();
	}

}
