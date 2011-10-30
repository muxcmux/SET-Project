<?php
App::uses('AppModel', 'Model');
/**
 * EmploymentLevel Model
 *
 * @property Experience $Experience
 */
class EmploymentLevel extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idLevelsOfEmployment';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'employmentLevel';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Experience' => array(
			'className' => 'Experience',
			'foreignKey' => 'EmploymentLevels_idLevelsOfEmployment',
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

}
