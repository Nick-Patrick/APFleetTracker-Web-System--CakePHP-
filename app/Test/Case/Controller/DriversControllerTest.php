<?php
App::uses('DriversController', 'Controller');

/**
 * DriversController Test Case
 *
 */
class DriversControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver',
		'app.user',
		'app.location',
		'app.job_package',
		'app.vehicle_type',
		'app.driver_daily_activity',
		'app.vehicle_daily_activity',
		'app.driver_location',
		'app.driver_vehicle_job',
		'app.job',
		'app.vehicle',
		'app.job_signature',
		'app.group',
		'app.license_type',
		'app.update_log'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/drivers/index');
		debug($result);
	}


/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/drivers/view/459');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	$data = array(
				'id' => 1,
				'user_id' => 2,
				'license_type' => '7.5',
				'available' => 'Active',
				'created' => '2014-03-17 10:43:23',
				'first_name' => 'nick',
				'last_name' => 'doe',
				'email' => 'nick@email.com',
				'telephone' => '01234 123456'		
		);


		$result = $this->testAction('/drivers/add',
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
			'Driver' => array(
				'id' => '459',
				'user_id' => '52',
				'license_type_id' => '3',
				'available' => 'Available',
				'last_logged_in' => null,
				'created' => '2014-02-16 08:04:28',
				'modified' => '2014-03-10 18:37:57',
				'first_name' => 'John',
				'last_name' => 'Doe',
				'email' => 'john@email.com',
				'telephone' => '01234 567891'
			)
		);

		$result = $this->testAction('/drivers/edit/459',
			array('data' => $data));
		debug($result);
	}


/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$result = $this->testAction('/drivers/delete/459');
		debug($result);
	}

/**
 * testManage method
 *
 * @return void
 */
	public function testManage() {
		$result = $this->testAction('/drivers/manage');
		debug($result);
	}

	


}
