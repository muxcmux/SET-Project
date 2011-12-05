<?php echo $this->Form->create('EducationalQualification');?>
	<fieldset>
		<legend><?php echo __('Add Educational Qualification'); ?></legend>
	<?php
	  echo $this->Form->input('Persons_idUser', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.idUser')));
		echo $this->Form->input('qualificationType');
		echo $this->Form->input('courseName');
		echo $this->Form->input('EducationLevels_idEducationLevel', array('label' => 'Education level', 'options' => $educationLevels));
		echo $this->Form->input('mainSubject');
		echo $this->Form->input('nameOfInstitutions');
		echo $this->Form->input('country');
		echo $this->Form->input('yearObtained');
		echo $this->Form->input('result');
		echo $this->Form->input('thesesTitle');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>