<?php
App::uses('AppModel', 'Model');
/**
 * EducationalQualification Model
 *
 * @property Person $Person
 * @property EducationalLevel $EducationalLevel
 */
class EducationalQualification extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idEducationalQualifications';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'qualificationType';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'Persons_idUser',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EducationLevel' => array(
			'className' => 'EducationLevel',
			'foreignKey' => 'EducationLevels_idEducationLevel',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
