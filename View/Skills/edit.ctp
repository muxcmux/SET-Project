<div class="skills form">
<?php echo $this->Form->create('Skill');?>
	<fieldset>
		<legend><?php echo __('Edit Skill'); ?></legend>
	<?php
		echo $this->Form->input('idSkills');
		echo $this->Form->input('Persons_idUser');
		echo $this->Form->input('skillName');
		echo $this->Form->input('skillLevel');
		echo $this->Form->input('verified');
		echo $this->Form->input('howVerified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Skill.idSkills')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Skill.idSkills'))); ?></li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
