<?php
/**
 * VehicleDailyActivityFixture
 *
 */
class VehicleDailyActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'vehicle_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'date_time_stamp' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'miles_driven' => array('type' => 'integer', 'null' => true, 'default' => null),
		'time_minutes_driven' => array('type' => 'integer', 'null' => true, 'default' => null),
		'jobs_completed' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
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
			'vehicle_id' => 1,
			'date_time_stamp' => '2014-01-02 09:53:34',
			'miles_driven' => 1,
			'time_minutes_driven' => 1,
			'jobs_completed' => 1
		),
	);

}
