<?php
App::uses('JobPackage', 'Model');

/**
 * JobPackage Test Case
 *
 */
class JobPackageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job_package',
		'app.job',
		'app.package'
	);


/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JobPackage = ClassRegistry::init('JobPackage');
	}



/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JobPackage);

		parent::tearDown();
	}

public function testFindAll(){
		$result = $this->JobPackage->find('all');

		$expected = array(
			0 => array(
				'JobPackage' => Array (
					'id' => '112',
		           'job_id' => '96',
		           'package_id' => '12',
		           'notes' => null,
		           'status' => 'Pending',
		           'created' => '2014-03-10 18:08:45',
		           'modified' => '2014-03-10 18:08:45'
				),
		        'Job' => Array (
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
		        'Package' => Array (
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
			),
			1 => array(
				'JobPackage' => Array (
					'id' => '113',
		            'job_id' => '96',
		            'package_id' => '13',
		            'notes' => null,
		            'status' => 'Pending',
		            'created' => '2014-03-10 18:08:45',
		            'modified' => '2014-03-10 18:08:45'
				),
		        'Job' => Array (
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
		        'Package' => Array (
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
			),
		);

		$this->assertEqual($expected, $result);
		
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}
}
