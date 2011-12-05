<h3>Search for talent!</h3>

<?php

  echo $this->Form->create('Search', array('type' => 'get', 'url' => array('controller' => 'search', 'action' => 'results')));
  
  echo $this->Form->input('preferredSector', array('options' => $sectors, 'empty' => '-- Any sector --'));
  
  echo $this->Form->input('educationLevel', array('label' => 'Minimum education level', 'options' => $educationLevels, 'empty' => '-- Any education level --'));
  
  echo $this->Form->input('noOfGcses', array('label' => 'Minimum number of GCSE passes'));
  
  echo $this->Form->input('qualificationType', array('label' => 'Specific educational qualification'));
  
  echo $this->Form->input('qualificationName', array('label' => 'Specific professional qualification'));
  
  echo $this->Form->input('skillName', array('label' => 'Specific skill'));
  
  echo $this->Form->input('keyDuties', array('label' => 'Specific experience'));
  
  echo $this->Form->end('Search');
?>
