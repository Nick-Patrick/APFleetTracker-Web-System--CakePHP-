<?php
App::uses('OverviewController', 'Controller');

/**
 * DriversController Test Case
 *
 */
class OverviewControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver',
		'app.user',
		'app.driver_daily_activity',
		'app.driver_location',
		'app.driver_vehicle_job',
		'app.job',
		'app.vehicle',
		'app.job_signature',
		'app.group'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/overview/index');
		debug($result);
	}

/**
 * testViewActivityMap method
 *
 * @return void
 */
	public function testViewActivityMap() {
		$result = $this->testAction('/overview/viewActivityMap');
		debug($result);
	}
}

?>