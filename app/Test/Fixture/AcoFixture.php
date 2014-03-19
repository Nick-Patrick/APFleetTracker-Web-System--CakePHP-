<?php
/**
 * AcoFixture
 *
 */
class AcoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Aco');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'parent_id' => null,
			'model' => null,
			'foreign_key' => null,
			'alias' => 'controllers',
			'lft' => '1',
			'rght' => '292'
		),
		array(
			'id' => '2',
			'parent_id' => '1',
			'model' => null,
			'foreign_key' => null,
			'alias' => 'DriverDailyActivities',
			'lft' => '2',
			'rght' => '13'
		),
	);

}
