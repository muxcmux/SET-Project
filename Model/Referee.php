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
   ),
   'title' => 'notEmpty',
   'forename' => 'notEmpty',
   'email' => 'email',
   'email' => 'email',
   'referenceDoc' => 'validDocument'
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
	
	public function  validDocument($check) {
	  $data = $check['referenceDoc'];
	  $allowed_types = array(
	    'image/jpeg',
	  );
	  if ($data['error']) {
	    if ($data['size'] == 0) {
	      $this->data['Referee']['referenceDoc'] = null;
	      return true;
	    }
	    return 'There was an error uploading the document. Please try again.';
	  } else if (!in_array($data['type'], $allowed_types)) {
	    return 'Only PDF files are allowed';
    } else {
	    $this->data['Referee']['referenceDoc'] = file_get_contents($data['tmp_name']);
	    return true;
	  }
	}
	
}
