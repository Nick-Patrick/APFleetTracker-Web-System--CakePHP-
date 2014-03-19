<?php
/**
 * JobFixture
 *
 */
class JobFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Job');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '96',
			'name' => 'Job One',
			'collection_id' => '213',
			'dropoff_id' => '210',
			'status' => 'Complete',
			'completed_date' => '2014-03-11 08:24:04',
			'created' => '2014-03-10 18:08:45',
			'modified' => '2014-03-11 08:22:05',
			'additional_details' => '',
			'due_date' => null,
			'created_by' => 'Test Admin',
			'driver_id' => '458',
			'vehicle_id' => '45'
		),
		array(
			'id' => '102',
			'name' => 'Job Five',
			'collection_id' => '210',
			'dropoff_id' => '212',
			'status' => 'Assigned',
			'completed_date' => null,
			'created' => '2014-03-11 08:59:42',
			'modified' => '2014-03-11 08:59:42',
			'additional_details' => '',
			'due_date' => null,
			'created_by' => 'Test Admin',
			'driver_id' => '458',
			'vehicle_id' => '44'
		),
	);

}
