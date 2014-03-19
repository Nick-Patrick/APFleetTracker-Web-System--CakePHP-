<?php
/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Group');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '4',
			'name' => 'Administrator',
			'created' => '2014-01-12 05:42:46',
			'modified' => '2014-01-12 05:42:46'
		),
		array(
			'id' => '5',
			'name' => 'Manager',
			'created' => '2014-01-12 05:42:52',
			'modified' => '2014-01-12 05:42:52'
		),
	);

}
