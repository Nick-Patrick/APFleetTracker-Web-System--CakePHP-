<?php
/**
 * DriverFixture
 *
 */
class DriverFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Driver');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '458',
			'user_id' => '7',
			'license_type_id' => '4',
			'available' => 'Active',
			'last_logged_in' => null,
			'created' => '2014-02-16 08:03:16',
			'modified' => '2014-03-11 14:45:08',
			'first_name' => 'Nick',
			'last_name' => 'Patrick',
			'email' => 'nick@email.com',
			'telephone' => '01546 782132'
		),
		array(
			'id' => '459',
			'user_id' => '52',
			'license_type_id' => '3',
			'available' => 'Available',
			'last_logged_in' => null,
			'created' => '2014-02-16 08:04:28',
			'modified' => '2014-03-10 18:37:57',
			'first_name' => 'John',
			'last_name' => 'Doe',
			'email' => 'john@email.com',
			'telephone' => '01234 567891'
		),
	);

}
