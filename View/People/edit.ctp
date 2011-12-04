
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
		echo $this->Form->input('female', array('label' => 'Gender'));
		echo $this->Form->input('postcodeStart');
		echo $this->Form->input('authorityToWorkStatement', array('label' => 'Authority to work statement <small>List of work restirctions (eg. only 20 hours per week)</small>'));
		echo $this->Form->input('contactPreference', array('label' => 'Contact preferences'));
		echo $this->Form->input('EducationLevels_idEducationLevel', array('label' => 'Highest education level received'));
		echo $this->Form->input('noOfGcses', array('label' => 'Number of GCSEs'));
		echo $this->Form->input('gcseEnglishGrade', array('label' => 'GCSE English grade'));
		echo $this->Form->input('gcseMathsGrade', array('label' => 'GCSE Maths grade'));
		echo $this->Form->input('fiveOrMoreGcses', array('label' => 'Five or more grades'));
		echo $this->Form->input('noOfAlevels', array('label' => 'Number of A levels'));
		echo $this->Form->input('ucasPoints', array('label' => 'UCAS points'));
		echo $this->Form->input('studentStatus', array('label' => 'Student status'));
		echo $this->Form->input('mobile');
		echo $this->Form->input('landline');
		echo $this->Form->input('dob', array('label' => 'Date of birth'));
		echo $this->Form->input('penaltyPoints', array('label' => 'Driver license penalty points'));
	?>
<?php echo $this->Form->end(__('Submit'));?>

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
