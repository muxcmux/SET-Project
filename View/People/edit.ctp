
<?php echo $this->Form->create('Person');?>
  <h3>Update your profile</h3>
	<?php
		echo $this->Form->input('idUser');
		echo $this->Form->input('title');
		echo $this->Form->input('forename1', array('label' => 'Your name'));
		echo $this->Form->input('forename2', array('label' => 'Any other name you are know as'));
		echo $this->Form->input('surname');
		echo $this->Form->input('addressLine1');
		echo $this->Form->input('addressLine2');
		echo $this->Form->input('town');
		echo $this->Form->input('postcode');
		echo $this->Form->input('secondEmail', array('label' => 'Secondary e-mail'));
		echo $this->Form->input('personalUrl', array('label' => 'Your personal website'));
		echo $this->Form->input('photo');
		echo $this->Form->input('female', array('label' => 'Gender', 'type' => 'select', 'options' => array(0 => 'Male', 1 => 'Female')));
		echo $this->Form->input('postcodeStart');
		echo $this->Form->input('authorityToWorkStatement', array('label' => 'Authority to work statement <small>List of work restirctions (eg. only 20 hours per week)</small>'));
		echo $this->Form->input('contactPreference', array('label' => 'Contact preferences', 'type' => 'select', 'options' => array('Mobile' => 'Mobile', 'Landline' => 'Landline', 'Email1' =>'Email', 'Email2' => 'Alternative email')));
		echo $this->Form->input('EducationLevels_idEducationLevel', array('label' => 'Highest education level received', 'options' => $educationLevels, 'empty' => '-- Please select --'));
		echo $this->Form->input('noOfGcses', array('label' => 'Number of GCSEs'));
		echo $this->Form->input('gcseEnglishGrade', array('label' => 'GCSE English grade'));
		echo $this->Form->input('gcseMathsGrade', array('label' => 'GCSE Maths grade'));
		echo $this->Form->input('fiveOrMoreGcses', array('label' => 'Five or more grades', 'type' => 'checkbox'));
		echo $this->Form->input('noOfAlevels', array('label' => 'Number of A levels'));
		echo $this->Form->input('ucasPoints', array('label' => 'UCAS points'));
		echo $this->Form->input('studentStatus', array('label' => 'Student status', 'options' => array('Full-time' => 'Full-time', 'Part-time' => 'Part-time', 'Not a student' => 'Not a student'), 'empty' => '-- Please Select --'));
		echo $this->Form->input('mobile');
		echo $this->Form->input('landline');
		echo $this->Form->input('dob', array('label' => 'Date of birth', 'minYear' => 1900, 'maxYear' => 2000));
		echo $this->Form->input('penaltyPoints', array('label' => 'Driver license penalty points'));
	?>
<?php echo $this->Form->end(__('Submit'));?>

