<?php
App::uses('UpdateLogsController', 'Controller');

/**
 * UpdateLogsController Test Case
 *
 */
class UpdateLogsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.update_log',
		'app.driver',
		'app.user',
		'app.group',
		'app.license_type',
		'app.vehicle',
		'app.vehicle_type',
		'app.driver_vehicle_job',
		'app.job',
		'app.location',
		'app.location_opening_time',
		'app.job_package',
		'app.package',
		'app.job_signature',
		'app.vehicle_daily_activity',
		'app.driver_daily_activity',
		'app.driver_location'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/update_logs/index');
		debug($result);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/update_logs/view/13');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$data = array(
			'id' => '107',
			'log' => 'Driver is now: Active',
			'created' => '2014-03-10 18:18:11',
			'driver_id' => '458',
			'error' => ''
			
		);


		$result = $this->testAction('/update_logs/add',
			array('data' => $data, 'method' => 'post')
			);
		debug($result);
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$data = array(
			'id' => '107',
			'log' => 'Driver is now: Active',
			'created' => '2014-03-10 18:18:11',
			'driver_id' => '458',
			'error' => ''
		);


		$result = $this->testAction('/update_logs/edit/107',
			array('data' => $data, 'method' => 'post')
			);
		debug($result);
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$result = $this->testAction('/update_logs/delete/107');
		debug($result);
	}

}
