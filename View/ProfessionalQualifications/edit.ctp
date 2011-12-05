
<?php echo $this->Form->create('ProfessionalQualification');?>
	<fieldset>
		<legend><?php echo __('Edit Professional Qualification'); ?></legend>
	<?php
		echo $this->Form->input('idProfessionalQualifications');
		echo $this->Form->input('qualificationName');
		echo $this->Form->input('Sectors_idSectors', array('label' => 'Sector', 'options' => $sectors, 'empty' => '-- Other --'));
		echo $this->Form->input('otherSector');
		echo $this->Form->input('awardingBody');
		echo $this->Form->input('yearObtained', array('label' => 'Date obtained'));
		echo $this->Form->input('result');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
