<?php
App::uses('DriverLocationsController', 'Controller');

/**
 * DriverLocationsController Test Case
 *
 */
class DriverLocationsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver_location',
		'app.driver'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	    $post_data = array('inputDate' => DATE("2014-03-11 08:24:04"));
		$result = $this->testAction('/driverLocations/index',
			array('data' => $post_data, 'method' => 'post')
			);
		debug($result);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/driverLocations/view/19030');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$data = array(
			'id' => '19030',
			'driver_id' => '458',
			'date_time_stamp' => '2014-03-01 04:06:05',
			'latitude' => '52.815',
			'longitude' => '-2.09746'
		);
		$result = $this->testAction('/driverLocations/add',
			array('data' => $data, 'method' => 'post'));
		debug($result);
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$data = array(
			'id' => '19030',
			'driver_id' => '458',
			'date_time_stamp' => '2014-03-01 04:06:05',
			'latitude' => '52.815',
			'longitude' => '-2.09746'
		);
		$result = $this->testAction('/driverLocations/edit/19030',
			array('data' => $data));
		debug($result);
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$result = $this->testAction('driverLocations/delete/19030');
		debug($result);
	}

	public function testAddDriverLocation(){
		$data = array(
			'key' => '9c36c7108a73324100bc9305f581979071d45ee9',
			'id' => '1',
			'driver_id' => '458',
			'date_time_stamp' => '2014-03-01 04:06:05',
			'latitude' => '52.815',
			'longitude' => '-2.09746'
		);	
		$result = $this->testAction('/driverLocations/addDriverLocation',
			array('data' => $data, 'method' => 'post')
		);
		debug($result);
	}

}
