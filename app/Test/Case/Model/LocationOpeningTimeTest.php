<?php
App::uses('LocationOpeningTime', 'Model');

/**
 * LocationOpeningTime Test Case
 *
 */
class LocationOpeningTimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.location_opening_time',
		'app.location'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LocationOpeningTime = ClassRegistry::init('LocationOpeningTime');
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
		unset($this->LocationOpeningTime);

		parent::tearDown();
	}

}
