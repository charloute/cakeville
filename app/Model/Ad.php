<?php
App::uses('AppModel', 'Model');
/**
 * Ad Model
 *
 * @property User $User
 * @property Revue $Revue
 */
class Ad extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


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
		'Revue' => array(
			'className' => 'Revue',
			'foreignKey' => 'revue_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
