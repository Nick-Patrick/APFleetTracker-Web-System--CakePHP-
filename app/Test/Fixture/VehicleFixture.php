<?php
/**
 * VehicleFixture
 *
 */
class VehicleFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Vehicle');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
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
		array(
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
	);

}
