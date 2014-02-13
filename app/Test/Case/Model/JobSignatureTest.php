<?php
App::uses('JobSignature', 'Model');

/**
 * JobSignature Test Case
 *
 */
class JobSignatureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job_signature',
		'app.driver',
		'app.user',
		'app.driver_daily_activity',
		'app.driver_location',
		'app.driver_vehicle_job',
		'app.job',
		'app.vehicle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobSignature = ClassRegistry::init('JobSignature');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobSignature);

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
