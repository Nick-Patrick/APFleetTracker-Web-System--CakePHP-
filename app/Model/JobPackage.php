<?php
App::uses('AppModel', 'Model');
/**
 * JobPackage Model
 *
 * @property Job $Job
 * @property Package $Package
 */
class JobPackage extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Package' => array(
			'className' => 'Package',
			'foreignKey' => 'package_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
