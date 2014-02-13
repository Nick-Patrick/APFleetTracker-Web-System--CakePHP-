<?php
App::uses('Job', 'Model');

/**
 * Job Test Case
 *
 */
class JobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job',
		'app.job_package',
		'app.package',
		'app.job_signature',
		'app.driver',
		'app.user',
		'app.driver_daily_activity',
		'app.driver_location',
		'app.driver_vehicle_job',
		'app.vehicle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Job = ClassRegistry::init('Job');
	}

	public function testFindAll(){
		$result = $this->Job->find('all');

		$expected = array(
			'0' => array(
				'Job' => array(
					'id' => 1,
					'name' => 'Lorem ipsum dolor sit amet',
					'collection_point' => 1,
					'dropoff_point' => 1,
					'status' => 'Lorem ip',
					'completed_date' => '2014-01-02 09:53:05',
					'created' => '2014-01-02 09:53:05',
					'modified' => '2014-01-02 09:53:05'
				),
				'JobPackage' => array(
					'0' => array(
           				 'id' => '1',
           				 'job_id' => '1',
           				 'package_id' => '1',
           				 'notes' => 'Lorem ipsum dolor sit amet',
           				 'status' => 'Lorem ipsum dolor ',
           				 'created' => '2014-01-02 09:52:50',
          				 'modified' => '2014-01-02 09:52:50'
					)
				),
				'JobSignature' => array(
					'0' => array(
						'id' => '1',
		                'driver_id' => '1',
		                'job_id' => '1',
		                'driver_signature' => 'Lorem ipsum dolor sit amet',
		                'customer_signature' => 'Lorem ipsum dolor sit amet',
		                'created' => '2014-01-02 09:52:56',
		                'modified' => '2014-01-02 09:52:56'
					)
				),
				'DriverVehicleJob' => array(
				   '0' => array(
    			   'id' => '1',
            	   'driver_id' => '1',
            	   'job_id' => '1',
         	       'vehicle_id' => '1',
           	       'created' => '2014-01-02 09:52:26',
          	       'modified' => '2014-01-02 09:52:26'
					)
				)
			)
		);

		$this->assertEqual($expected, $result);
		
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Job);

		parent::tearDown();
	}

}
