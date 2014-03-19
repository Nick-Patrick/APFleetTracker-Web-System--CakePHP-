<?php
App::uses('PackagesController', 'Controller');

/**
 * PackagesController Test Case
 *
 */
class PackagesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.package'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/packages/index');
		debug($result);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/packages/view/13');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$data = array(
			'id' => '13',
			'name' => 'Robotic Tractor',
			'length' => '',
			'width' => '',
			'height' => '',
			'weight' => '8000kg',
			'special_reqs' => '',
			'created' => '2014-03-06 19:32:48',
			'modified' => '2014-03-06 19:32:48'	
			
		);


		$result = $this->testAction('/packages/add',
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
			'id' => '13',
			'name' => 'Robotic Tractor',
			'length' => '',
			'width' => '',
			'height' => '',
			'weight' => '8000kg',
			'special_reqs' => '',
			'created' => '2014-03-06 19:32:48',
			'modified' => '2014-03-06 19:32:48'	
		);


		$result = $this->testAction('/packages/edit/13',
			array('data' => $data, 'method' => 'post')
			);
		debug($result);
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$result = $this->testAction('/packages/delete/13');
		debug($result);
	}

}
