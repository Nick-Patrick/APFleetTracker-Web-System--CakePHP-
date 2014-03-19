<?php
/**
 * PackageFixture
 *
 */
class PackageFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Package');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '13',
			'name' => 'Robotic Tractor',
			'length' => '',
			'width' => '',
			'height' => '',
			'weight' => '8000kg',
			'special_reqs' => '',
			'created' => '2014-03-06 19:32:48',
			'modified' => '2014-03-06 19:32:48'
		),
		array(
			'id' => '12',
			'name' => 'Crate',
			'length' => '2.5m',
			'width' => '1.5m',
			'height' => '1.25m',
			'weight' => '3.55',
			'special_reqs' => 'It\'s a crate.',
			'created' => '2014-02-16 08:46:53',
			'modified' => '2014-02-16 08:46:53'
		),
	);

}
