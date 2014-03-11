<?php
App::uses('AppModel', 'Model');
/**
 * Vehicle Model
 *
 * @property DriverVehicleJob $DriverVehicleJob
 * @property VehicleDailyActivity $VehicleDailyActivity
 */
class Vehicle extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'LicenseType' => array(
			'className' => 'LicenseType',
			'foreignKey' => 'license_type_id',
			'conditions' => '',
			'order' => ''
		),
		'VehicleType' => array(
			'className' => 'VehicleType',
			'foreignKey' => 'vehicle_type_id',
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
		'DriverVehicleJob' => array(
			'className' => 'DriverVehicleJob',
			'foreignKey' => 'vehicle_id',
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
		'VehicleDailyActivity' => array(
			'className' => 'VehicleDailyActivity',
			'foreignKey' => 'vehicle_id',
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

	public function getActiveVehicles(){
		$conditions = array('Vehicle.Available' => 'Active');
		 return $this->find('all', compact('conditions'));
	}

	public function getAvailableVehicles(){
		$conditions = array(
			array('Vehicle.Available' => array('Available','Assigned'))
		);
		return $this->find('all', compact('conditions'));
	}

	public function getUnavailableVehicles(){
		$conditions = array('Vehicle.Available' => 'Inactive');
		return $this->find('all', compact('conditions'));
	}

	
}
