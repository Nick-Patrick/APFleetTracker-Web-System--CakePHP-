<?php
/**
 * JobPackageFixture
 *
 */
class JobPackageFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'JobPackage');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '112',
			'job_id' => '96',
			'package_id' => '12',
			'notes' => null,
			'status' => 'Pending',
			'created' => '2014-03-10 18:08:45',
			'modified' => '2014-03-10 18:08:45'
		),
		array(
			'id' => '113',
			'job_id' => '96',
			'package_id' => '13',
			'notes' => null,
			'status' => 'Pending',
			'created' => '2014-03-10 18:08:45',
			'modified' => '2014-03-10 18:08:45'
		),
	);

}
