
<?php echo $this->Form->create('Referee');?>
	<fieldset>
		<legend><?php echo __('Add Referee'); ?></legend>
	<?php
		echo $this->Form->input('Persons_idUser', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.idUser')));
		echo $this->Form->input('title');
		echo $this->Form->input('forename');
		echo $this->Form->input('surname');
		echo $this->Form->input('email');
		echo $this->Form->input('contactPhone');
		echo $this->Form->input('relationship', array('type' => 'select', 'options' => array('Employer' => 'employer', 'Academic' => 'academic')));
		echo $this->Form->input('referenceDoc', array('label' => 'Document'));
		echo $this->Form->input('permissionToContact', array('type' => 'checkbox', 'label' => 'Can we contact this referee?'));
		echo $this->Form->input('permissionToStoreDetails', array('type' => 'checkbox', 'label' => 'I permit TalentSeekr to store this information on their servers'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
