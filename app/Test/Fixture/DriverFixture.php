<?php
/**
 * DriverFixture
 *
 */
class DriverFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */

	
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'license_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'available' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_logged_in' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null),
		'email' => array('type' => 'string', 'null' => true, 'default' => null),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'license_type_id' => array('column' => 'license_type_id', 'unique' => 0)
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
			'user_id' => 1,
			'license_type_id' => 1,
			'available' => 'Active',
			'last_logged_in' => '2007-03-18 10:41:23',
			'created' => '2007-03-18 10:41:23',
			'modified' => '2007-03-18 10:41:23',
			'first_name' => 'Fred',
			'last_name' => 'Jones',
			'email' => 'fred@email.com',
			'telephone' => '01234 564789'
		),
		array(
			'id' => 2,
			'user_id' => 2,
			'license_type_id' => 2,
			'available' => 'Available',
			'last_logged_in' => '2007-03-18 10:41:23',
			'created' => '2007-03-18 10:41:23',
			'modified' => '2007-03-18 10:41:23',
			'first_name' => 'Ian',
			'last_name' => 'Gwyn',
			'email' => 'ian@email.com',
			'telephone' => '45671 456789'
		),
		array(
			'id' => 3,
			'user_id' => 3,
			'license_type_id' => 1,
			'available' => 'Active',
			'last_logged_in' => '2007-03-18 10:41:23',
			'created' => '2007-03-18 10:41:23',
			'modified' => '2007-03-18 10:41:23',
			'first_name' => 'Tom',
			'last_name' => 'Well',
			'email' => 'tom@email.com',
			'telephone' => '45671 456789'
		),
		array(
			'id' => 4,
			'user_id' => 4,
			'license_type_id' => 2,
			'available' => 'Inactive',
			'last_logged_in' => '2007-03-18 10:41:23',
			'created' => '2007-03-18 10:41:23',
			'modified' => '2007-03-18 10:41:23',
			'first_name' => 'Maie',
			'last_name' => 'Luo',
			'email' => 'Maie@email.com',
			'telephone' => '45671 456789'
		)
	);

}
