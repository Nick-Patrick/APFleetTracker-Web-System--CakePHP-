<?php
/**
 * JobFixture
 *
 */
class JobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'collection_point' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'dropoff_point' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'completed_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'collection_point' => array('column' => 'collection_point', 'unique' => 0),
			'dropoff_point' => array('column' => 'dropoff_point', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'collection_point' => 1,
			'dropoff_point' => 1,
			'status' => 'Lorem ip',
			'completed_date' => '2014-01-02 09:53:05',
			'created' => '2014-01-02 09:53:05',
			'modified' => '2014-01-02 09:53:05'
		),
	);

}
