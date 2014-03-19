<?php
App::uses('Package', 'Model');

/**
 * Package Test Case
 *
 */
class PackageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.package'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Package = ClassRegistry::init('Package');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Package);

		parent::tearDown();
	}

	public function testFindAll(){
	$result = $this->Package->find('all');

	$expected = array(
		0 => array(
			'Package' => array(
				'id' => '13',
	            'name' => 'Robotic Tractor',
	            'length' => '',
	            'width' => '',
	            'height' => '',
	            'weight' => '8000kg',
	            'special_reqs' => '',
	            'created' => '2014-03-06 19:32:48',
	            'modified' => '2014-03-06 19:32:48'
			)
		),
		1 => array(
			'Package' => array(
				'id' => '12',
	            'name' => 'Crate',
	            'length' => '2.5m',
	            'width' => '1.5m',
	            'height' => '1.25m',
	            'weight' => '3.55',
	            'special_reqs' => 'It\'s a crate.',
	            'created' => '2014-02-16 08:46:53',
	            'modified' => '2014-02-16 08:46:53',
			)
		)
	);
	$this->assertEqual($result,$expected);
}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}
}
