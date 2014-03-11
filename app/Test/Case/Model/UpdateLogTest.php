<?php
App::uses('UpdateLog', 'Model');

/**
 * UpdateLog Test Case
 *
 */
class UpdateLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.update_log'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UpdateLog = ClassRegistry::init('UpdateLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UpdateLog);

		parent::tearDown();
	}

}
