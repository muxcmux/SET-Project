<?php
App::uses('AppModel', 'Model');
/**
 * JobTitle Model
 *
 * @property Sector $Sector
 * @property Experience $Experience
 */
class JobTitle extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idJobTitles';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'jobTitle';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
 
  public $validate = array(
    'jobTitle' => 'notEmpty'
  );
  
	public $belongsTo = array(
		'Sector' => array(
			'className' => 'Sector',
			'foreignKey' => 'Sectors_idSectors',
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
		'Experience' => array(
			'className' => 'Experience',
			'foreignKey' => 'JobTitles_idJobTitles',
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
