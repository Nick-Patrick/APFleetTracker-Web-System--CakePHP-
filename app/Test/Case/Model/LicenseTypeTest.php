<?php
App::uses('LicenseType', 'Model');

/**
 * LicenseType Test Case
 *
 */
class LicenseTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.license_type',
		'app.driver',
		'app.vehicle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LicenseType = ClassRegistry::init('LicenseType');
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}



/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LicenseType);

		parent::tearDown();
	}

}
