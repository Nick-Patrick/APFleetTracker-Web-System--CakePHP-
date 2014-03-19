<?php
App::uses('JobPackagesController', 'Controller');

/**
 * JobPackagesController Test Case
 *
 */
class JobPackagesControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/jobPackages/index');
		debug($result);
	}


/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/jobPackages/view/112');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	$data = array(
			'id' => '113',
			'job_id' => '96',
			'package_id' => '13',
			'notes' => null,
			'status' => 'Pending',
			'created' => '2014-03-10 18:08:45',
			'modified' => '2014-03-10 18:08:45'		
		);


		$result = $this->testAction('/jobPackages/add',
			array('data' => $data, 'method' => 'post')
			);
		debug($result);
	}


/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

		$data = array(
			'id' => '113',
			'job_id' => '96',
			'package_id' => '13',
			'notes' => null,
			'status' => 'Pending',
			'created' => '2014-03-10 18:08:45',
			'modified' => '2014-03-10 18:08:45'
		);

		$result = $this->testAction('/jobPackages/edit/113',
			array('data' => $data));
		debug($result);
	}


/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$result = $this->testAction('/jobPackages/delete/112');
		debug($result);
	}



	


}
