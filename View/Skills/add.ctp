
<?php echo $this->Form->create('Skill');?>
	<fieldset>
		<legend><?php echo __('Add Skill'); ?></legend>
	<?php
		echo $this->Form->input('Persons_idUser', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.idUser')));
		echo $this->Form->input('skillName');
		echo $this->Form->input('skillLevel', array('type' => 'select', 'options' => array('Basic' => 'Basic', 'Good' => 'Good', 'Excellent' => 'Excellent')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>

