<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Driver $Driver
 */
class User extends AppModel {

    public $name = 'User';


    public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode(){
        if(!$this->id && empty($this->data)){
            return null;
        }
        if(isset($this->data['User']['group_id'])){
            $groupId = $this->data['User']['group_id'];
        }
        else {
            $groupId = $this->field('group_id');
        }
        if(!$groupId){
            return null;
        }
        else{
            return array('Group' => array('id' => $groupId));
        }
    }

    public function bindNode($user){
        return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
    }

	//The Associations below have been created with all possible keys, those that are not needed can be removed

    public $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'group_id',
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
	public $hasOne = array(
		'Driver' => array(
			'className' => 'Driver',
			'foreignKey' => 'user_id',
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


    public function beforeSave($options = array()){
        $this->data['User']['password'] = AuthComponent::password(
            $this->data['User']['password']
        );
        return true;
    }

    public function getUserByEmail($email){
        $conditions = array('User.Email' => $email);
        return $this->find('first', compact('conditions'));
    }
}
