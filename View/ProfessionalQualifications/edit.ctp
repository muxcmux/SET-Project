<div class="professionalQualifications form">
<?php echo $this->Form->create('ProfessionalQualification');?>
	<fieldset>
		<legend><?php echo __('Edit Professional Qualification'); ?></legend>
	<?php
		echo $this->Form->input('idProfessionalQualifications');
		echo $this->Form->input('Persons_idUser');
		echo $this->Form->input('qualificationName');
		echo $this->Form->input('Sectors_idSectors');
		echo $this->Form->input('otherSector');
		echo $this->Form->input('awardingBody');
		echo $this->Form->input('yearObtained');
		echo $this->Form->input('result');
		echo $this->Form->input('verified');
		echo $this->Form->input('howVerified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProfessionalQualification.idProfessionalQualifications')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProfessionalQualification.idProfessionalQualifications'))); ?></li>
		<li><?php echo $this->Html->link(__('List Professional Qualifications'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
	</ul>
</div>
