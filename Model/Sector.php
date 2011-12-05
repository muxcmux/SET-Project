<?php
App::uses('AppModel', 'Model');
/**
 * Sector Model
 *
 * @property ProfessionalQualification $ProfessionalQualification
 * @property JobTitle $JobTitle
 */
class Sector extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idSectors';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sectorTitle';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
 
  public $validate = array(
    'sectorTitle' => 'notEmpty'
  );
 
	public $hasMany = array(
		'ProfessionalQualification' => array(
			'className' => 'ProfessionalQualification',
			'foreignKey' => 'Sectors_idSectors',
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
		'JobTitle' => array(
			'className' => 'JobTitle',
			'foreignKey' => 'Sectors_idSectors',
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
