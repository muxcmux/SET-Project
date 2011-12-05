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
	public $displayField = 'username';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	public $validate = array(
	  'username' => array(
	    'email' => array(
        'rule'     => 'email',
        'message'  => 'You must supply a valid e-mail'
      ),
      'unique'     => array(
        'rule'     => 'isUnique',
        'message' => 'This e-mail has already been taken.'
      )
	  ),
	  'password' => array(
	    'long' => array(
	      'rule' => array('minLength', 6),
	      'message' => 'Minimum password length is 6 characters'
	    )
	  ),
	  'forename1' => array(
	    'ne' => array(
	      'rule' => 'notEmpty',
	      'message' => 'What is your first name?'
	    )
	  ),
	  'photo' => 'photoValid'
	);
	
	public function  photoValid($check) {
	  $data = $check['photo'];
	  $allowed_types = array(
	    'image/jpeg',
	    'image/jpg'
	  );
	  if ($data['error']) {
	    if ($data['size'] == 0) {
	      $this->data['Person']['photo'] = null;
	      return true;
	    }
	    return 'There was an error uploading the photo. Please try again.';
	  } else if (!in_array($data['type'], $allowed_types)) {
	    return 'Only JPG images is allowed';
    } else {
	    $this->data['Person']['photo'] = file_get_contents($data['tmp_name']);
	    return true;
	  }
	}
	
	

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
		),
		'Sector' => array(
			'className' => 'Sector',
			'foreignKey' => 'preferredSector',
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
