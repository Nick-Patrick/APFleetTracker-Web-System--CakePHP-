<?php
/**
 * AroFixture
 *
 */
class AroFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Aro');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '8',
			'parent_id' => null,
			'model' => 'Group',
			'foreign_key' => '4',
			'alias' => null,
			'lft' => '1',
			'rght' => '4'
		),
		array(
			'id' => '9',
			'parent_id' => null,
			'model' => 'Group',
			'foreign_key' => '6',
			'alias' => null,
			'lft' => '5',
			'rght' => '274'
		),
	);

}
