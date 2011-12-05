<?php
App::uses('AppModel', 'Model');
/**
 * Experience Model
 *
 * @property Person $Person
 * @property EmploymentLevel $EmploymentLevel
 * @property JobTitle $JobTitle
 */
class Experience extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idExperiences';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'employerName';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
 
  public $validate = array(
    'keyDuties' => 'notEmpty',
    'employerName' => 'notEmpty'
  );
 
	public $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'Persons_idUser',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EmploymentLevel' => array(
			'className' => 'EmploymentLevel',
			'foreignKey' => 'EmploymentLevels_idLevelsOfEmployment',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'JobTitle' => array(
			'className' => 'JobTitle',
			'foreignKey' => 'JobTitles_idJobTitles',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
