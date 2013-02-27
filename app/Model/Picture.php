<?php
App::uses('AppModel', 'Model');
/**
 * Picture Model
 *
 * @property User $User
 */
class Picture extends AppModel {

	public $useTable = 'pictures';
	public $validate = array(
		'url' => array(
			'rule' => '/^.*\.(jpg|png|jpeg)$/',
			'allowEmpty' => true,
			'message' => 'le fichier est pas valide'
			)
	);

/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'url';


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
		)
	);
}
