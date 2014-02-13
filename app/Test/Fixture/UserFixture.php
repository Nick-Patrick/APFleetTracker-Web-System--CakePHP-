<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'role' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'group_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'username' => 'fred@email.com',
			'password' => 'password',
			'role' => 'Driver',
			'created' => '2014-01-02 09:53:27',
			'modified' => '2014-01-02 09:53:27',
			'first_name' => 'Fred',
			'last_name' => 'Jones',
			'email' => 'fred@email.com',
			'telephone' => '0123456789',
			'status' => 'Active',
			'group_id' => '6'
		),
		array(
			'id' => 2,
			'username' => 'ian@email.com',
			'password' => 'password',
			'role' => 'Driver',
			'created' => '2014-01-02 09:53:27',
			'modified' => '2014-01-02 09:53:27',
			'first_name' => 'Ian',
			'last_name' => 'Gwyn',
			'email' => 'ian@email.com',
			'telephone' => '0123456789',
			'status' => 'Active',
			'group_id' => '6'
		),
		array(
			'id' => 3,
			'username' => 'tom@email.com',
			'password' => 'password',
			'role' => 'Driver',
			'created' => '2014-01-02 09:53:27',
			'modified' => '2014-01-02 09:53:27',
			'first_name' => 'Tom',
			'last_name' => 'Well',
			'email' => 'tom@email.com',
			'telephone' => '0123456789',
			'status' => 'Active',
			'group_id' => '6'
		),
		array(
			'id' => 4,
			'username' => 'Maie@email.com',
			'password' => 'password',
			'role' => 'Driver',
			'created' => '2014-01-02 09:53:27',
			'modified' => '2014-01-02 09:53:27',
			'first_name' => 'Maie',
			'last_name' => 'Luo',
			'email' => 'Maie@email.com',
			'telephone' => '0123456789',
			'status' => 'Active',
			'group_id' => '6'
		),
	);

}
