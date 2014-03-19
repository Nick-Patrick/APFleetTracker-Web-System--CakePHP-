<?php
App::uses('DriverLocation', 'Model');

/**
 * DriverLocation Test Case
 *
 */
class DriverLocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.driver_location',
		'app.driver'
	);
	public $dropTables = false; 


/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DriverLocation = ClassRegistry::init('DriverLocation');
	}

	public function testFindAll(){
		$result = $this->DriverLocation->find('all');

		$expected = array(
       		0 => Array(
       			'DriverLocation' => Array (
					'id' => '19029',
		            'driver_id' => '458',
		            'date_time_stamp' => '2014-03-01 04:06:05',
		            'latitude' => '52.815',
		            'longitude' => '-2.09746'
       			),
		        'Driver' => Array (
					'id' => '458',
		            'user_id' => '7',
		            'license_type_id' => '4',
		            'available' => 'Active',
		            'last_logged_in' => null,
		            'created' => '2014-02-16 08:03:16',
		            'modified' => '2014-03-11 14:45:08',
		            'first_name' => 'Nick',
		            'last_name' => 'Patrick',
		            'email' => 'nick@email.com',
		            'telephone' => '01546 782132'
		        )
       		),
       		1 => Array(
       			'DriverLocation' => Array (
       				'id' => '19030',
		            'driver_id' => '458',
		            'date_time_stamp' => '2014-03-01 04:06:05',
		            'latitude' => '52.815',
		            'longitude' => '-2.09746'
       			),
		        'Driver' => Array (
					'id' => '458',
		            'user_id' => '7',
		            'license_type_id' => '4',
		            'available' => 'Active',
		            'last_logged_in' => null,
		            'created' => '2014-02-16 08:03:16',
		            'modified' => '2014-03-11 14:45:08',
		            'first_name' => 'Nick',
		            'last_name' => 'Patrick',
		            'email' => 'nick@email.com',
		            'telephone' => '01546 782132'
		        )
       		)
		);

		$this->assertEqual($expected, $result);
		
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DriverLocation);

		parent::tearDown();
	}

}
