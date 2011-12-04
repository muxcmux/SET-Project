<?php
class AdminController extends AppController {
  
  public $uses = array('JobTitle', 'EducationalQualification', 'ProfessionalQualificatoin', 'Skill', 'Referee', 'Experience');
  
  public function index() {
    $educational_qualifications = $this->paginate('EducationalQualification',
      array(
        'OR' => array(
          'EducationalQualification.verified' => '0',
          'EducationalQualification.verified' => null
        )
      )
    );
    $this->set(compact('educational_qualifications'));
    
    // $professional_qualifications = $this->paginate('ProfessionalQualification',
    //   array(
    //     'OR' => array(
    //       'ProfessionalQualification.verified' => '0',
    //       'ProfessionalQualification.verified' => null
    //     )
    //   )
    // );
    // $this->set(compact('professional_qualifications'));
    
    $skills = $this->paginate('Skill',
      array(
        'OR' => array(
          'Skill.verified' => '0',
          'Skill.verified' => null
        )
      )
    );
    $this->set(compact('skills'));
    
    $referees = $this->paginate('Referee',
      array(
        'OR' => array(
          'Referee.verified' => '0',
          'Referee.verified' => null
        )
      )
    );
    $this->set(compact('referees'));
    
    $experiences = $this->paginate('Experience',
      array(
        'OR' => array(
          'Experience.verified' => '0',
          'Experience.verified' => null
        )
      )
    );
    $this->set(compact('experiences'));
    
  }
  
}