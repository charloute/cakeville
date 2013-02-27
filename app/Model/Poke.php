<?php
App::uses('AppModel', 'Model');
/**
 * Poke Model
 *
 * @property User $User
 */
class Poke extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dest'=>array(
			'className'=>'User',
			'foreignKey'=>'dest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

		
	);
}
