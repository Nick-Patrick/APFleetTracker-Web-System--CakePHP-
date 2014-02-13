<?php
App::uses('AppModel', 'Model');
/**
 * LocationOpeningTime Model
 *
 * @property Location $Location
 */
class LocationOpeningTime extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'location_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
