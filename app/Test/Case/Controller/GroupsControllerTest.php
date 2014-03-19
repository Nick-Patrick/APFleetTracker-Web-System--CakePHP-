<?php
App::uses('GroupsController', 'Controller');

/**
 * GroupsController Test Case
 *
 */
class GroupsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group',
		'app.user'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/groups/index');
		debug($result);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$result = $this->testAction('/groups/view/4');
		debug($result);
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$data = array(
			'id' => '6',
			'name' => 'Administrator',
			'created' => '2014-01-12 05:42:46',
			'modified' => '2014-01-12 05:42:46'
		);

		$result = $this->testAction('/groups/add',
			array('data' => $data, 'method' => 'post')
			);
		debug($result);

	}



/**
 * testAdminIndex method
 *
 * @return void
 */
	public function testAdminIndex() {
	}

/**
 * testAdminView method
 *
 * @return void
 */
	public function testAdminView() {
	}

/**
 * testAdminAdd method
 *
 * @return void
 */
	public function testAdminAdd() {
	}

/**
 * testAdminEdit method
 *
 * @return void
 */
	public function testAdminEdit() {
	}

/**
 * testAdminDelete method
 *
 * @return void
 */
	public function testAdminDelete() {
	}

}
