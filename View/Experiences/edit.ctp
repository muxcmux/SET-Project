<?php echo $this->Form->create('Experience');?>
	<fieldset>
		<legend><?php echo __('Edit Experience'); ?></legend>
	<?php
		echo $this->Form->input('idExperiences');
		echo $this->Form->input('dateStarted', array('minYear' => 1950, 'maxYear' => 2011));
		echo $this->Form->input('dateFinished', array('minYear' => 1950, 'maxYear' => 2011));
		echo $this->Form->input('JobTitles_idJobTitles', array('label' => 'Job Title', 'options' => $jobTitles, 'empty' => '-- Other --'));
		echo $this->Form->input('otherJobTitle');
		echo $this->Form->input('keyDuties');
		echo $this->Form->input('EmploymentLevels_idLevelsOfEmployment', array('label' => 'Employment level', 'options' => $employmentLevels));
		echo $this->Form->input('employerName');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>