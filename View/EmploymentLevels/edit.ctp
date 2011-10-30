<div class="employmentLevels form">
<?php echo $this->Form->create('EmploymentLevel');?>
	<fieldset>
		<legend><?php echo __('Edit Employment Level'); ?></legend>
	<?php
		echo $this->Form->input('idLevelsOfEmployment');
		echo $this->Form->input('employmentLevel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmploymentLevel.idLevelsOfEmployment')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmploymentLevel.idLevelsOfEmployment'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employment Levels'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
