<?php
App::uses('AppModel', 'Model');
/**
 * ProfessionalQualification Model
 *
 * @property Person $Person
 * @property Sector $Sector
 */
class ProfessionalQualification extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idProfessionalQualifications';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'qualificationName';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
  public $validate = array(
    'qualificationName' => 'notEmpty'
  );
	public $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'Persons_idUser',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sector' => array(
			'className' => 'Sector',
			'foreignKey' => 'Sectors_idSectors',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
