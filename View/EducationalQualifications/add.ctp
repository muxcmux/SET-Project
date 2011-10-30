<div class="educationalQualifications form">
<?php echo $this->Form->create('EducationalQualification');?>
	<fieldset>
		<legend><?php echo __('Add Educational Qualification'); ?></legend>
	<?php
		echo $this->Form->input('Persons_idUser');
		echo $this->Form->input('qualificationType');
		echo $this->Form->input('courseName');
		echo $this->Form->input('EducationLevels_idEducationLevel');
		echo $this->Form->input('vocational');
		echo $this->Form->input('mainSubject');
		echo $this->Form->input('nameOfInstitutions');
		echo $this->Form->input('country');
		echo $this->Form->input('yearObtained');
		echo $this->Form->input('result');
		echo $this->Form->input('thesesTitle');
		echo $this->Form->input('verified');
		echo $this->Form->input('howVerified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Educational Qualifications'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Levels'), array('controller' => 'education_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Level'), array('controller' => 'education_levels', 'action' => 'add')); ?> </li>
	</ul>
</div>
