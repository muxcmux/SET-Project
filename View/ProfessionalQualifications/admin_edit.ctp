<?php
$professionalQualification = $this->data;
?>
<?php echo $this->Form->create('ProfessionalQualification');?>
	<fieldset>
		<legend><?php echo __('Verify Professional Qualification'); ?></legend>
		<dl>
  		<dt><?php echo __('Person'); ?></dt>
  		<dd>
  			<?php echo $this->Html->link($professionalQualification['Person']['forename1'], array('controller' => 'people', 'action' => 'view', $professionalQualification['Person']['idUser'])); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('QualificationName'); ?></dt>
  		<dd>
  			<?php echo h($professionalQualification['ProfessionalQualification']['qualificationName']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Sector'); ?></dt>
  		<dd>
  			<?php echo ($professionalQualification['Sector']['idSectors']) ? $professionalQualification['Sector']['sectorTitle'] : $professionalQualification['ProfessionalQualification']['otherSector']; ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('AwardingBody'); ?></dt>
  		<dd>
  			<?php echo h($professionalQualification['ProfessionalQualification']['awardingBody']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('YearObtained'); ?></dt>
  		<dd>
  			<?php echo h($professionalQualification['ProfessionalQualification']['yearObtained']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Result'); ?></dt>
  		<dd>
  			<?php echo h($professionalQualification['ProfessionalQualification']['result']); ?>
  			&nbsp;
  		</dd>
  	</dl>
	<?php
	  echo $this->Form->input('idProfessionalQualifications');
		echo $this->Form->input('verified', array('type' => 'checkbox'));
		echo $this->Form->input('howVerified', array('label' => 'Verification method/evidence '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
