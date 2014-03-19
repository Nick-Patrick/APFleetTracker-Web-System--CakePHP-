<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'User');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '7',
			'username' => 'nickManager',
			'password' => '9c36c7108a73324100bc9305f581979071d45ee9',
			'role' => 'Manager',
			'created' => '2014-01-12 06:05:44',
			'modified' => '2014-01-12 06:05:44',
			'first_name' => 'Nick',
			'last_name' => 'Manager',
			'email' => 'nick@email.com',
			'telephone' => '123456789',
			'status' => 'Active',
			'group_id' => '5',
			'driver_id' => ''
		),
		array(
			'id' => '6',
			'username' => 'test',
			'password' => '9c36c7108a73324100bc9305f581979071d45ee9',
			'role' => 'Administrator',
			'created' => '2014-01-12 05:37:05',
			'modified' => '2014-01-12 06:05:58',
			'first_name' => 'Test',
			'last_name' => 'Admin',
			'email' => 'test@test.com',
			'telephone' => '0123456789',
			'status' => 'Active',
			'group_id' => '4',
			'driver_id' => ''
		),
	);

}
