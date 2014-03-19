<?php
App::uses('UsersController', 'Controller');

/**
 * UsersController Test Case
 *
 */
class UsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.group',
		'app.driver',
		'app.driver_daily_activity',
		'app.driver_location',
		'app.driver_vehicle_job',
		'app.job',
		'app.job_package',
		'app.package',
		'app.job_signature',
		'app.vehicle',
		'app.vehicle_daily_activity'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/users/index');
		debug($result);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/users/view/7');
		debug($result);
	}




}
