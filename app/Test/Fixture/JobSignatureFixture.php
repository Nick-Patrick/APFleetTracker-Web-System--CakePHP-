<?php
/**
 * JobSignatureFixture
 *
 */
class JobSignatureFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'driver_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'job_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'driver_signature' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'customer_signature' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'driver_id' => array('column' => 'driver_id', 'unique' => 0),
			'job_id' => array('column' => 'job_id', 'unique' => 0)
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
			'driver_signature' => 'Lorem ipsum dolor sit amet',
			'customer_signature' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-01-02 09:52:56',
			'modified' => '2014-01-02 09:52:56'
		),
	);

}
