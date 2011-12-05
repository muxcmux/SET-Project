<?php
App::uses('AppModel', 'Model');
/**
 * Skill Model
 *
 * @property Person $Person
 */
class Skill extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idSkills';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'skillName';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
 public $validate = array(
   'skillName' => 'notEmpty'
 );
 
	public $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'Persons_idUser',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
