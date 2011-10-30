<?php
App::uses('AppModel', 'Model');
/**
 * EducationLevel Model
 *
 * @property Person $Person
 * @property EducationalQualification $EducationalQualification
 */
class EducationLevel extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idEducationLevel';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'educationLevel';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'EducationLevels_idEducationLevel',
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
		'EducationalQualification' => array(
			'className' => 'EducationalQualification',
			'foreignKey' => 'EducationLevels_idEducationLevel',
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
