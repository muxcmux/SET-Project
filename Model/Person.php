<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 * @property EducationLevel $EducationLevel
 * @property Skill $Skill
 * @property Referee $Referee
 * @property ProfessionalQualification $ProfessionalQualification
 * @property Experience $Experience
 * @property EducationalQualification $EducationalQualification
 */
class Person extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'persons';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idUser';
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
		'EducationLevel' => array(
			'className' => 'EducationLevel',
			'foreignKey' => 'EducationLevels_idEducationLevel',
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
		'Skill' => array(
			'className' => 'Skill',
			'foreignKey' => 'Persons_idUser',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Referee' => array(
			'className' => 'Referee',
			'foreignKey' => 'Persons_idUser',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ProfessionalQualification' => array(
			'className' => 'ProfessionalQualification',
			'foreignKey' => 'Persons_idUser',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Experience' => array(
			'className' => 'Experience',
			'foreignKey' => 'Persons_idUser',
			'dependent' => true,
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
			'foreignKey' => 'Persons_idUser',
			'dependent' => true,
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
