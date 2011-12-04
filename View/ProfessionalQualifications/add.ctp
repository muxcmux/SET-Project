
<?php echo $this->Form->create('ProfessionalQualification');?>
	<fieldset>
		<legend><?php echo __('Add Professional Qualification'); ?></legend>
	<?php
		echo $this->Form->input('Persons_idUser', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.idUser')));
		echo $this->Form->input('qualificationName');
		echo $this->Form->input('Sectors_idSectors');
		echo $this->Form->input('otherSector');
		echo $this->Form->input('awardingBody');
		echo $this->Form->input('yearObtained');
		echo $this->Form->input('result');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
