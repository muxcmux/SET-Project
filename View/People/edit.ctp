<div class="people form">
<?php echo $this->Form->create('Person');?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('idUser');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('title');
		echo $this->Form->input('forename1');
		echo $this->Form->input('forename2');
		echo $this->Form->input('surname');
		echo $this->Form->input('addressLine1');
		echo $this->Form->input('addressLine2');
		echo $this->Form->input('town');
		echo $this->Form->input('postcode');
		echo $this->Form->input('secondEmail');
		echo $this->Form->input('personalUrl');
		echo $this->Form->input('photo');
		echo $this->Form->input('female');
		echo $this->Form->input('postcodeStart');
		echo $this->Form->input('authorityToWorkStatement');
		echo $this->Form->input('contactPreference');
		echo $this->Form->input('EducationLevels_idEducationLevel');
		echo $this->Form->input('noOfGcses');
		echo $this->Form->input('gcseEnglishGrade');
		echo $this->Form->input('gcseMathsGrade');
		echo $this->Form->input('fiveOrMoreGcses');
		echo $this->Form->input('noOfAlevels');
		echo $this->Form->input('ucasPoints');
		echo $this->Form->input('studentStatus');
		echo $this->Form->input('mobile');
		echo $this->Form->input('landline');
		echo $this->Form->input('dob');
		echo $this->Form->input('penaltyPoints');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.idUser')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Person.idUser'))); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Education Levels'), array('controller' => 'education_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Level'), array('controller' => 'education_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referees'), array('controller' => 'referees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referee'), array('controller' => 'referees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professional Qualifications'), array('controller' => 'professional_qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional Qualification'), array('controller' => 'professional_qualifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Qualifications'), array('controller' => 'educational_qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Qualification'), array('controller' => 'educational_qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
