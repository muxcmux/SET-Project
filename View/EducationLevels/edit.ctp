<div class="educationLevels form">
<?php echo $this->Form->create('EducationLevel');?>
	<fieldset>
		<legend><?php echo __('Edit Education Level'); ?></legend>
	<?php
		echo $this->Form->input('idEducationLevel');
		echo $this->Form->input('educationLevel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EducationLevel.idEducationLevel')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EducationLevel.idEducationLevel'))); ?></li>
		<li><?php echo $this->Html->link(__('List Education Levels'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Qualifications'), array('controller' => 'educational_qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Qualification'), array('controller' => 'educational_qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
