<?php
App::uses('AppModel', 'Model');
/**
 * LicenseType Model
 *
 */
class LicenseType extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'license_type';

	public $name = 'LicenseType';


/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Driver' => array(
			'className' => 'Driver',
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
