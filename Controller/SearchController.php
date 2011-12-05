<?php
App::uses('AppController', 'Controller');
/**
 * Skills Controller
 *
 * @property Skill $Skill
 */
class SearchController extends AppController {
  
  public $uses = array('Person');
  
  public $paginate = array();
  
  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('*');
  }
  
  public function index() {
    $sectors = $this->Person->Sector->find('list');
    $this->set(compact('sectors'));
    $educationLevels = $this->Person->EducationLevel->find('list');
    $this->set(compact('educationLevels'));
  }
  
  public function results() {
    $this->Person->recursive = -1;
    
    $data = $this->params->query;
    
    $joins = array();
    
    $person_conditions = array(
      'Person.role' => 'user'
    );
    
    if ($data['preferredSector']) {
      $person_conditions['Person.preferredSector'] = $data['preferredSector'];
    }
    
    if ($data['educationLevel']) {
      $person_conditions['Person.EducationLevels_idEducationLevel >='] = $data['educationLevel'];
    }
    
    if ($data['noOfGcses']) {
      $person_conditions['Person.noOfGcses >='] = $data['noOfGcses'];
    }
    
    if ($data['qualificationType']) {
      $joins[] = array(
        'table' => 'educational_qualifications',
        'alias' => 'EducationalQualification',
        'type' => 'LEFT',
        'conditions' => array(
          'Person.idUser = EducationalQualification.Persons_idUser',
        )
      );
      $person_conditions['EducationalQualification.qualificationType LIKE'] = "%{$data['qualificationType']}%";
    }
    
    if ($data['qualificationName']) {
      $joins[] = array(
        'table' => 'professional_qualifications',
        'alias' => 'ProfessionalQualification',
        'type' => 'LEFT',
        'conditions' => array(
          'Person.idUser = ProfessionalQualification.Persons_idUser'
        )
      );
      $person_conditions['ProfessionalQualification.qualificationName LIKE'] = "%{$data['qualificationName']}%";
    }
    
    if ($data['skillName']) {
      $joins[] = array(
        'table' => 'skills',
        'alias' => 'Skill',
        'type' => 'LEFT',
        'conditions' => array(
          'Person.idUser = Skill.Persons_idUser'
        )
      );
      $person_conditions['Skill.skillName LIKE'] = "%{$data['skillName']}%";
    }
    
    if ($data['keyDuties']) {
      $joins[] = array(
        'table' => 'experiences',
        'alias' => 'Experience',
        'type' => 'LEFT',
        'conditions' => array(
          'Person.idUser = Experience.Persons_idUser'
        )
      );
      $person_conditions['Experience.keyDuties LIKE'] = "%{$data['keyDuties']}%";
    }
    

    
    
    
    
    $this->paginate['Person'] = array(
      'conditions' => $person_conditions,
      'joins' => $joins
    );
    
    
    
    $people = $this->paginate();
    
    $this->set(compact('people'));
  }
  
  
}