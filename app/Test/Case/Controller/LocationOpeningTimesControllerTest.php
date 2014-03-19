<?php
App::uses('LocationOpeningTimesController', 'Controller');

/**
 * LocationOpeningTimesController Test Case
 *
 */
class LocationOpeningTimesControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/location_opening_times/index');
		debug($result);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/location_opening_times/view/17');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$data = array(
			'id' => '17',
			'location_id' => '204',
			'monday_open' => '7:00am',
			'monday_close' => '5:00pm',
			'tuesday_open' => '7:00am',
			'tuesday_close' => '5:00pm',
			'wednesday_open' => '7:00am',
			'wednesday_close' => '5:00pm',
			'thursday_open' => '7:00am',
			'thursday_close' => '5:00pm',
			'friday_open' => '7:00am',
			'friday_close' => '5:00pm',
			'saturday_open' => '7:00am',
			'saturday_close' => '5:00pm',
			'sunday_open' => '10:00am',
			'sunday_close' => '12:00pm'		
		);


		$result = $this->testAction('/location_opening_times/add',
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
			'id' => '17',
			'location_id' => '204',
			'monday_open' => '7:00am',
			'monday_close' => '5:00pm',
			'tuesday_open' => '7:00am',
			'tuesday_close' => '5:00pm',
			'wednesday_open' => '7:00am',
			'wednesday_close' => '5:00pm',
			'thursday_open' => '7:00am',
			'thursday_close' => '5:00pm',
			'friday_open' => '7:00am',
			'friday_close' => '5:00pm',
			'saturday_open' => '7:00am',
			'saturday_close' => '5:00pm',
			'sunday_open' => '10:00am',
			'sunday_close' => '12:00pm'		
		);


		$result = $this->testAction('/location_opening_times/edit/17',
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
		$result = $this->testAction('/location_opening_times/delete/17');
		debug($result);
	}

}
