<?php
/**
 * LicenseTypeFixture
 *
 */
class LicenseTypeFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'LicenseType');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'license_type' => 'Cat B'
		),
		array(
			'id' => '2',
			'license_type' => 'Cat B+E'
		),
	);

}
