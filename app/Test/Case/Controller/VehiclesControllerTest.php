<?php
App::uses('VehiclesController', 'Controller');

/**
 * VehiclesController Test Case
 *
 */
class VehiclesControllerTest extends ControllerTestCase {

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
		'app.vehicle_daily_activity',
		'app.license_type',
		'app.vehicle_type',
		'app.location'
	);
/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/vehicles/index');
		debug($result);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/vehicles/view/44');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$data = array(
			'id' => '44',
			'name' => 'Ford Transit',
			'vehicle_type_id' => '1',
			'reg_number' => 'MN07 1SJ',
			'license_type_id' => '1',
			'crane' => 'No',
			'status' => 'Available',
			'available' => 'Available',
			'created' => '2014-02-08 13:23:58',
			'modified' => '2014-03-11 14:45:07',
			'trailer' => 'No',
			'hydraulic_beavertail' => 'No',
			'description' => 'Just a ford transit'
			
		);


		$result = $this->testAction('/vehicles/add',
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
			'id' => '44',
			'name' => 'Ford Transit',
			'vehicle_type_id' => '1',
			'reg_number' => 'MN07 1SJ',
			'license_type_id' => '1',
			'crane' => 'No',
			'status' => 'Available',
			'available' => 'Available',
			'created' => '2014-02-08 13:23:58',
			'modified' => '2014-03-11 14:45:07',
			'trailer' => 'No',
			'hydraulic_beavertail' => 'No',
			'description' => 'Just a ford transit'	
		);


		$result = $this->testAction('/vehicles/edit/44',
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
		$result = $this->testAction('/vehicles/delete/44');
		debug($result);
	}

}
