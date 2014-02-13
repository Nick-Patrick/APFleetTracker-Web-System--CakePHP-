<?php
App::uses('AppModel', 'Model');
/**
 * VehicleType Model
 *
 */
class VehicleType extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'vehicle_type';

	public $name = 'VehicleType';


/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
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

}
