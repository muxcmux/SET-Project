
<h3>Login to TalentSeekr</h3>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Person', array('action' => 'login')); ?>
<?php echo $this->Form->input('username'); ?>
<?php echo $this->Form->input('password', array('autocomplete' => 'off')); ?>
<?php echo $this->Form->end('Login'); ?>