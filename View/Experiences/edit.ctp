<div class="experiences form">
<?php echo $this->Form->create('Experience');?>
	<fieldset>
		<legend><?php echo __('Edit Experience'); ?></legend>
	<?php
		echo $this->Form->input('idExperiences');
		echo $this->Form->input('Persons_idUser');
		echo $this->Form->input('dateStarted');
		echo $this->Form->input('dateFinished');
		echo $this->Form->input('JobTitles_idJobTitles');
		echo $this->Form->input('otherJobTitle');
		echo $this->Form->input('keyDuties');
		echo $this->Form->input('EmploymentLevels_idLevelsOfEmployment');
		echo $this->Form->input('employerName');
		echo $this->Form->input('verified');
		echo $this->Form->input('howVerified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Experience.idExperiences')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Experience.idExperiences'))); ?></li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employment Levels'), array('controller' => 'employment_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment Level'), array('controller' => 'employment_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Titles'), array('controller' => 'job_titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Title'), array('controller' => 'job_titles', 'action' => 'add')); ?> </li>
	</ul>
</div>
