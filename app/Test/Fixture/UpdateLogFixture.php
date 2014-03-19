<?php
/**
 * UpdateLogFixture
 *
 */
class UpdateLogFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'UpdateLog');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '107',
			'log' => 'Driver is now: Active',
			'created' => '2014-03-10 18:18:11',
			'driver_id' => '458',
			'error' => ''
		),
		array(
			'id' => '108',
			'log' => 'Driver is now: Available',
			'created' => '2014-03-10 18:18:23',
			'driver_id' => '458',
			'error' => ''
		),
	);

}
