<?php
/**
 * ArosAcoFixture
 *
 */
class ArosAcoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'ArosAco');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '2',
			'aro_id' => '8',
			'aco_id' => '1',
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => '3',
			'aro_id' => '8',
			'aco_id' => '70',
			'_create' => '-1',
			'_read' => '-1',
			'_update' => '-1',
			'_delete' => '-1'
		),
	);

}
