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


/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}
}
