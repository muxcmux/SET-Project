<h3><?php echo __('Create your TalentSeekr profile in seconds!'); ?></h3>
<?php
  echo $this->Form->create('Person');
	  echo $this->Form->input('forename1', array('label' => 'Your name'));
		echo $this->Form->input('username', array('label' => 'Your e-mail'));
		echo $this->Form->input('password', array('label' => 'Choose a password', 'value' => '', 'autocomplete' => 'off'));
		echo $this->Form->input('confirm_pass', array('type' => 'password', 'label' => 'Confirm password', 'value' => '', 'autocomplete' => 'off'));
	echo $this->Form->end(__('Register'));
?>

