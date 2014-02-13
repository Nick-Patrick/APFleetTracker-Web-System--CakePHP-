<?php
App::uses('AppModel', 'Model');
/**
 * VehicleDailyActivity Model
 *
 * @property Vehicle $Vehicle
 */
class VehicleDailyActivity extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'vehicle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
