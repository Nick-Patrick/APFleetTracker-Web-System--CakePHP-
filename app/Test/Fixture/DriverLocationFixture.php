<?php
/**
 * DriverLocationFixture
 *
 */
class DriverLocationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'driver_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'date_time_stamp' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'latitude' => array('type' => 'integer', 'null' => true, 'default' => null),
		'longitude' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'driver_id' => array('column' => 'driver_id', 'unique' => 0)
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
			'date_time_stamp' => '2014-01-02 09:52:03',
			'latitude' => 1,
			'longitude' => 1
		),
	);

}
