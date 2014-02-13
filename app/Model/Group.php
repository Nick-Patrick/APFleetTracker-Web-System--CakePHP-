<?php
App::uses('AppModel', 'Model');
/**
 * Group Model
 *
 */
class Group extends AppModel {

    public $name = 'Group';

    public $hasMany = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'group_id',
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

    public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode(){
        return null;
    }


}
