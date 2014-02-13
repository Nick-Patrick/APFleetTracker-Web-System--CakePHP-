<?php
/**
 * VehicleFixture
 *
 */
class VehicleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'vehicle_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 25),
		'reg_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10),
		'license_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 25),
		'crane' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'available' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit a',
			'vehicle_type_id' => 1,
			'reg_number' => 'Lorem ip',
			'license_type_id' => 1,
			'crane' => 'Lor',
			'status' => 'Lorem ip',
			'available' => 'Lorem ip',
			'created' => '2014-01-02 09:53:42',
			'modified' => '2014-01-02 09:53:42'
		),
	);

}
