<?php
App::uses('AppModel', 'Model');
/**
 * DriverLocation Model
 *
 * @property Driver $Driver
 */
class DriverLocation extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Driver' => array(
			'className' => 'Driver',
			'foreignKey' => 'driver_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


}
