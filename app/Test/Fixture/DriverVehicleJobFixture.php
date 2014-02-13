<?php
/**
 * DriverVehicleJobFixture
 *
 */
class DriverVehicleJobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'driver_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'job_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'vehicle_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'driver_id' => array('column' => 'driver_id', 'unique' => 0),
			'job_id' => array('column' => 'job_id', 'unique' => 0),
			'vehicle_id' => array('column' => 'vehicle_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'driver_id' => 1,
			'job_id' => 1,
			'vehicle_id' => 1,
			'created' => '2014-01-02 09:52:26',
			'modified' => '2014-01-02 09:52:26'
		),
	);

}
