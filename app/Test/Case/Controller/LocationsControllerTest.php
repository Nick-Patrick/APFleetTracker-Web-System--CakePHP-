<?php
App::uses('LocationsController', 'Controller');

/**
 * LocationsController Test Case
 *
 */
class LocationsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.location',
		'app.location_opening_time',
		'app.job'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/locations/index');
		debug($result);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/locations/view/209');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$data = array(
			'Location' => array(
			'id' => '219',
			'name' => 'Tartin',
			'address1' => 'Ashby Road',
			'address2' => 'Twicross',
			'address3' => '',
			'town' => 'Atherston',
			'county' => 'Warwickshire',
			'postcode' => 'CV9 3PW',
			'location_opening_times_id' => null,
			'telephone' => '01234 567891',
			'created' => '2014-03-01 13:18:29',
			'modified' => '2014-03-01 13:18:29',
			'latitude' => '52.6428',
			'longitude' => '-1.50516'	
			)
		);


		$result = $this->testAction('/locations/add',
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
			'id' => '209',
			'name' => 'Tartin',
			'address1' => 'Ashby Road',
			'address2' => 'Twicross',
			'address3' => '',
			'town' => 'Atherston',
			'county' => 'Warwickshire',
			'postcode' => 'CV9 3PW',
			'location_opening_times_id' => null,
			'telephone' => '01234 567891',
			'created' => '2014-03-01 13:18:29',
			'modified' => '2014-03-01 13:18:29',
			'latitude' => '52.6428',
			'longitude' => '-1.50516'		
		);


		$result = $this->testAction('/locations/edit/209',
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
		$result = $this->testAction('/locations/delete/209');
		debug($result);
	}

}
