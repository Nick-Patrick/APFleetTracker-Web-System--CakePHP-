<?php
App::uses('AppModel', 'Model');
/**
 * Location Model
 *
 */
class Location extends AppModel {


/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'LocationOpeningTime' => array(
			'className' => 'LocationOpeningTime',
			'foreignKey' => 'location_id',
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
			'Dropoff' => array(
			'className' => 'Job',
			'foreignKey' => 'dropoff_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => '',
			'table' => 'locations'
		),
			'Collection' => array(
			'className' => 'Job',
			'foreignKey' => 'collection_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => '',
			'table' => 'locations'
		)
	);
}
