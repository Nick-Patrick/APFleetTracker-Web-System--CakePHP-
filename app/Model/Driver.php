<?php
App::uses('AppModel', 'Model');
/**
 * Driver Model
 *
 * @property User $User
 * @property DriverDailyActivity $DriverDailyActivity
 * @property DriverLocation $DriverLocation
 * @property DriverVehicleJob $DriverVehicleJob
 * @property JobSignature $JobSignature
 */
class Driver extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LicenseType' => array(
			'className' => 'LicenseType',
			'foreignKey' => 'license_type_id',
			'conditions' => '',
			'conditions' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DriverDailyActivity' => array(
			'className' => 'DriverDailyActivity',
			'foreignKey' => 'driver_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'DriverLocation' => array(
			'className' => 'DriverLocation',
			'foreignKey' => 'driver_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'DriverVehicleJob' => array(
			'className' => 'DriverVehicleJob',
			'foreignKey' => 'driver_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'JobSignature' => array(
			'className' => 'JobSignature',
			'foreignKey' => 'driver_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function getActiveDrivers(){
		$conditions = array('Driver.Available' => 'Active');
		 return $this->find('all', compact('conditions'));
	}

	public function getAvailableDrivers(){
		$conditions = array('Driver.Available' => array('Available','Assigned'));
		return $this->find('all', compact('conditions'));
	}

	public function getUnavailableDrivers(){
		$conditions = array('Driver.Available' => 'Inactive');
		return $this->find('all', compact('conditions'));
	}
}
