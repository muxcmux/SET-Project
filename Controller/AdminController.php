<?php
class AdminController extends AppController {
  
  public $uses = array('JobTitle', 'EducationalQualification', 'ProfessionalQualification', 'Skill', 'Referee', 'Experience');
  
  public function index() {
    
    
    
    $educational_qualifications = $this->paginate('EducationalQualification',
      array(
        "EducationalQualification.verified = '0' OR EducationalQualification.verified IS NULL"
      )
    );
    $this->set(compact('educational_qualifications'));
    
    
    
    
    $professional_qualifications = $this->paginate('ProfessionalQualification',
      array(
        "ProfessionalQualification.verified = '0' OR ProfessionalQualification.verified IS NULL"
      )
    );
    $this->set(compact('professional_qualifications'));
    
    
    
    
    $skills = $this->paginate('Skill',
      array(
        "Skill.verified = '0' OR Skill.verified IS NULL"
      )
    );
    $this->set(compact('skills'));
    
    
    
    
    $referees = $this->paginate('Referee',
      array(
        "Referee.verified = '0' OR Referee.verified IS NULL"
      )
    );
    $this->set(compact('referees'));
    
    
    
    
    $experiences = $this->paginate('Experience',
      array(
        "Experience.verified = '0' OR Experience.verified IS NULL"
      )
    );
    $this->set(compact('experiences'));
    
  }
  
}