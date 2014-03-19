<?php
App::uses('LocationOpeningTime', 'Model');

/**
 * LocationOpeningTime Test Case
 *
 */
class LocationOpeningTimeTest extends CakeTestCase {

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
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LocationOpeningTime = ClassRegistry::init('LocationOpeningTime');
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}

public function testFindAll(){
	$result = $this->LocationOpeningTime->find('all');

	$expected = array(
		0 => array(
			'LocationOpeningTime' => Array (
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
	            'sunday_close' => '12:00pm',
			),
	        'Location' => Array (
	        	'id' => null,
	            'name' => null,
	            'address1' => null,
	            'address2' => null,
	            'address3' => null,
	            'town' => null,
	            'county' => null,
	            'postcode' => null,
	            'location_opening_times_id' => null,
	            'telephone' => null,
	            'created' => null,
	            'modified' => null,
	            'latitude' => null,
	            'longitude' => null
	        )
		),
		1 => array(
			'LocationOpeningTime' => Array (
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
	            'sunday_close' => '',
			 ),
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
	        )
		)
	);

	$this->assertEqual($result,$expected);
}


/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LocationOpeningTime);

		parent::tearDown();
	}

}
