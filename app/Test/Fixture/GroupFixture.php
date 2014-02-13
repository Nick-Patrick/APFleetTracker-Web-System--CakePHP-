<?php
/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 6,
			'name' => 'Driver',
			'created' => '2014-01-11 10:55:58',
			'modified' => '2014-01-11 10:55:58'
		),
		array(
			'id' => 5,
			'name' => 'Manager',
			'created' => '2014-01-11 10:55:58',
			'modified' => '2014-01-11 10:55:58'
		),
		array(
			'id' => 4,
			'name' => 'Administrator',
			'created' => '2014-01-11 10:55:58',
			'modified' => '2014-01-11 10:55:58'
		)
	);

}
