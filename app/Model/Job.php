<?php
App::uses('AppModel', 'Model', 'CakeSession', 'Model/Datasource');
/**
 * Job Model
 *
 * @property JobPackage $JobPackage
 * @property JobSignature $JobSignature
 */
class Job extends AppModel {


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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'JobPackage' => array(
			'className' => 'JobPackage',
			'foreignKey' => 'job_id',
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
			'foreignKey' => 'job_id',
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
			'foreignKey' => 'job_id',
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

	/*public function getCompletedJobs(){
		$currentDate = date("Y-m-d");
		$conditions = array(
			array('Job.Status' => 'Completed')
			array('Job.Completed_date' => $currentDate)
			);
		 return $this->find('all', compact('conditions'));
	}*/

		public function getCompletedJobs(){
			$conditions = array('Job.Status' => 'Complete');
			 return $this->find('all', compact('conditions'));
		}

		public function getCompletedJobsByDay($date){
			$conditions = array(
				array('Job.Status' => 'Complete'),
				array('DATE(Job.completed_date)' => $date)
			);
			return $this->find('all', compact('conditions'));
		}

		public function getActiveJobs(){
			$conditions = array('Job.Status' => 'Active');
			return $this->find('all', compact('conditions'));
		}

		public function getAssignedJobs(){
			$conditions = array('Job.Status' => 'Assigned');
			return $this->find('all', compact('conditions'));
		}

		public function getPendingJobs(){
			$conditions = array('Job.Status' => 'Pending');
			return $this->find('all', compact('conditions'));
		}




		 

}
