<?php
/**
 * JobPackageFixture
 *
 */
class JobPackageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'job_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'package_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'job_id' => array('column' => 'job_id', 'unique' => 0),
			'package_id' => array('column' => 'package_id', 'unique' => 0)
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
			'job_id' => 1,
			'package_id' => 1,
			'notes' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor ',
			'created' => '2014-01-02 09:52:50',
			'modified' => '2014-01-02 09:52:50'
		),
	);

}
