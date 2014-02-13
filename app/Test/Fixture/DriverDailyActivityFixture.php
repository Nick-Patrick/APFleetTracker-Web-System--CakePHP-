<?php
/**
 * DriverDailyActivityFixture
 *
 */
class DriverDailyActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'driver_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'date_timestamp' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'miles_driven' => array('type' => 'integer', 'null' => true, 'default' => null),
		'time_minutes_driven' => array('type' => 'integer', 'null' => true, 'default' => null),
		'time_minutes_break' => array('type' => 'integer', 'null' => true, 'default' => null),
		'jobs_completed' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'date_timestamp' => '2014-01-02 09:51:13',
			'miles_driven' => 1,
			'time_minutes_driven' => 1,
			'time_minutes_break' => 1,
			'jobs_completed' => 1
		),
	);

}
