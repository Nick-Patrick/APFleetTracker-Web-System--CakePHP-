<?php
/**
 * VehicleTypeFixture
 *
 */
class VehicleTypeFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'VehicleType');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'vehicle_type' => '3.5t Flatbed'
		),
		array(
			'id' => '2',
			'vehicle_type' => '7.5t Flatbed'
		),
	);

}
