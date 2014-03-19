<?php
App::uses('Location', 'Model');

/**
 * Location Test Case
 *
 */
class LocationTest extends CakeTestCase {

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
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Location = ClassRegistry::init('Location');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Location);

		parent::tearDown();
	}

public function testFindAll(){
	$result = $this->Location->find('all');

	$expected = array(
		0 => array(
			'Location' => Array (
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
			),
	        'LocationOpeningTime' => Array (),
	        'Dropoff' => Array (),
	        'Collection' => Array ()
		),
		1 => array(
			'Location' => Array (
				'id' => '205',
	            'name' => 'Telford Shopping Center',
	            'address1' => 'Telford',
	            'address2' => 'Longbridge Road',
	            'address3' => '',
	            'town' => 'Telford',
	            'county' => 'Shropshire',
	            'postcode' => 'TF3 4BX',
	            'location_opening_times_id' => null,
	            'telephone' => '02456 987456',
	            'created' => '2014-02-16 08:41:58',
	            'modified' => '2014-02-16 08:41:58',
	            'latitude' => '52.6766',
	            'longitude' => '-2.44678'
			),
			'LocationOpeningTime' => Array (
				0 => array(
					'id' => '18',
	                'location_id' => '205',
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
	                'sunday_open' => '',
	                'sunday_close' => ''
				)
			),
	        'Dropoff' => Array (),
	        'Collection' => Array ()
	     )
	);
	$this->assertEqual($result,$expected);
}
/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}
}
