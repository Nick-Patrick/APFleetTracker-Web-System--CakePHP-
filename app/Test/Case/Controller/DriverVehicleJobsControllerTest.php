<?php
App::uses('DriverVehicleJobsController', 'Controller');

/**
 * DriverVehicleJobsController Test Case
 *
 */
class DriverVehicleJobsControllerTest extends ControllerTestCase {

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

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/driverVehicleJobs/index');
		debug($result);
	}


/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/driverVehicleJobs/view/83');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	$data = array(
			'id' => '83',
			'driver_id' => '458',
			'job_id' => '104',
			'vehicle_id' => '44',
			'created' => '2014-03-11 14:43:21',
			'modified' => '2014-03-11 14:43:21',
			'status' => ''		
		);


		$result = $this->testAction('/driverVehicleJobs/add',
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
			'id' => '83',
			'driver_id' => '458',
			'job_id' => '104',
			'vehicle_id' => '44',
			'created' => '2014-03-11 14:43:21',
			'modified' => '2014-03-11 14:43:21',
			'status' => ''
		);

		$result = $this->testAction('/driverVehicleJobs/edit/83',
			array('data' => $data));
		debug($result);
	}


/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$result = $this->testAction('/driverVehicleJobs/delete/83');
		debug($result);
	}



	


}
