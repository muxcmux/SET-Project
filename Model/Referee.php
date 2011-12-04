<?php
App::uses('AppModel', 'Model');
/**
 * Referee Model
 *
 * @property Person $Person
 */
class Referee extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idReferees';
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
 
 public $validate = array(
   'permissionToStoreDetails' => array(
     'allowedChoice' => array(
                  'rule'    => array('inList', array('1')),
                  'message' => 'You must permit us to store these details no our servers.'
              )
   )
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
