<?php
App::uses('Group', 'Model');

/**
 * Group Test Case
 *
 */
class GroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group',
		'app.user',
	);


/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Group = ClassRegistry::init('Group');
	}

public function testFindAll(){
		$result = $this->Group->find('all');

		$expected = array(
			0 => array(
				'Group' => Array (
					'id' => '4',
		            'name' => 'Administrator',
		            'created' => '2014-01-12 05:42:46',
		            'modified' => '2014-01-12 05:42:46'
				),
		        'User' => Array (
		        	0 => Array(
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
		                'driver_id' => '',
		        	)
		        ),
			),
			1 => array(
				'Group' => Array (
					'id' => '5',
		            'name' => 'Manager',
		            'created' => '2014-01-12 05:42:52',
		            'modified' => '2014-01-12 05:42:52'
				),
		        'User' => Array (
		        	0 => Array(
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
		                'driver_id' => '',
		        	)
		        ),
			),
		);
		$this->assertEquals($result,$expected);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Group);

		parent::tearDown();
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}

}
