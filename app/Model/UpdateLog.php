<?php
App::uses('AppModel', 'Model');
/**
 * UpdateLog Model
 *
 */
class UpdateLog extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'log';

public $belongsTo = array(
		'Driver' => array(
			'className' => 'Driver',
			'foreignKey' => 'driver_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'log' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'created' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

		public function getUpdateLogErrors(){
			$conditions = array('UpdateLog.error' => 'Login Fail');
			$order = array('UpdateLog.created' => 'DESC');
			 return $this->find('all', compact('conditions','order'));
		}

		public function getUpdateLogDrivers(){
			$conditions = array("not" => array('UpdateLog.driver_id' => null));
			$order = array('UpdateLog.created' => 'DESC');
			 return $this->find('all', compact('conditions','order'));
		}
}
