<?php
App::uses('Vehicle', 'Model');

/**
 * Vehicle Test Case
 *
 */
class VehicleTest extends CakeTestCase {

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
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vehicle = ClassRegistry::init('Vehicle');
	}

public function testFindAll(){
	$result = $this->Vehicle->find('all');

	$expected = array(
		0 => array(
			'Vehicle' => Array (
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
			),
	        'LicenseType' => Array (
	        	'id' => '1',
	            'license_type' => 'Cat B'
	        ),
	        'VehicleType' => Array (
	        	'id' => '1',
	            'vehicle_type' => '3.5t Flatbed'
	        ),
	        'DriverVehicleJob' => Array (
	        	0 => array(
	        		'id' => '84',
	                'driver_id' => '458',
	                'job_id' => '105',
	                'vehicle_id' => '44',
	                'created' => '2014-03-11 14:44:05',
	                'modified' => '2014-03-11 14:44:05',
	                'status' => ''
	        	),
	        	1 => array(
	        		'id' => '83',
	                'driver_id' => '458',
	                'job_id' => '104',
	                'vehicle_id' => '44',
	                'created' => '2014-03-11 14:43:21',
	                'modified' => '2014-03-11 14:43:21',
	                'status' => ''
	        	)
	        ),
	        'VehicleDailyActivity' => Array ()
		),
		1 => array(
			'Vehicle' => Array (
				'id' => '45',
	            'name' => 'Merc Sprinter',
	            'vehicle_type_id' => '1',
	            'reg_number' => 'AA1 BCC',
	            'license_type_id' => '1',
	            'crane' => 'No',
	            'status' => 'Available',
	            'available' => 'Available',
	            'created' => '2014-03-01 13:04:50',
	            'modified' => '2014-03-11 08:22:05',
	            'trailer' => 'Yes',
	            'hydraulic_beavertail' => 'No',
	            'description' => 'Mercedes Sprinter Flatbed'
			),
	        'LicenseType' => Array (
	        	'id' => '1',
	            'license_type' => 'Cat B'
	        ),
	        'VehicleType' => Array (
	        	'id' => '1',
	            'vehicle_type' => '3.5t Flatbed'
	        ),
	        'DriverVehicleJob' => Array (),
	        'VehicleDailyActivity' => Array ()
		)
	);

	$this->assertEqual($result,$expected);

}

	public function testGetActiveVehicles(){
		$result = $this->Vehicle->getActiveVehicles();
		$expected = array();
		$this->assertEqual($result, $expected);
	}

	public function testGetAvailableVehicles(){
		$result = $this->Vehicle->getAvailableVehicles();
		$expected = array(
			0 => array(
			'Vehicle' => Array (
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
			),
	        'LicenseType' => Array (
	        	'id' => '1',
	            'license_type' => 'Cat B'
	        ),
	        'VehicleType' => Array (
	        	'id' => '1',
	            'vehicle_type' => '3.5t Flatbed'
	        ),
	        'DriverVehicleJob' => Array (
	        	0 => array(
	        		'id' => '84',
	                'driver_id' => '458',
	                'job_id' => '105',
	                'vehicle_id' => '44',
	                'created' => '2014-03-11 14:44:05',
	                'modified' => '2014-03-11 14:44:05',
	                'status' => ''
	        	),
	        	1 => array(
	        		'id' => '83',
	                'driver_id' => '458',
	                'job_id' => '104',
	                'vehicle_id' => '44',
	                'created' => '2014-03-11 14:43:21',
	                'modified' => '2014-03-11 14:43:21',
	                'status' => ''
	        	)
	        ),
	        'VehicleDailyActivity' => Array ()
			),
			1 => array(
				'Vehicle' => Array (
					'id' => '45',
		            'name' => 'Merc Sprinter',
		            'vehicle_type_id' => '1',
		            'reg_number' => 'AA1 BCC',
		            'license_type_id' => '1',
		            'crane' => 'No',
		            'status' => 'Available',
		            'available' => 'Available',
		            'created' => '2014-03-01 13:04:50',
		            'modified' => '2014-03-11 08:22:05',
		            'trailer' => 'Yes',
		            'hydraulic_beavertail' => 'No',
		            'description' => 'Mercedes Sprinter Flatbed'
				),
		        'LicenseType' => Array (
		        	'id' => '1',
		            'license_type' => 'Cat B'
		        ),
		        'VehicleType' => Array (
		        	'id' => '1',
		            'vehicle_type' => '3.5t Flatbed'
		        ),
		        'DriverVehicleJob' => Array (),
		        'VehicleDailyActivity' => Array ()
			)
		);
		$this->assertEqual($result, $expected);
	}

	public function testGetUnavailableVehicles(){
		$result = $this->Vehicle->getUnavailableVehicles();
		$expected = array();
		$this->assertEqual($result, $expected);
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vehicle);

		parent::tearDown();
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}
}
