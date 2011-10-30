<div class="professionalQualifications view">
<h2><?php  echo __('Professional Qualification');?></h2>
	<dl>
		<dt><?php echo __('IdProfessionalQualifications'); ?></dt>
		<dd>
			<?php echo h($professionalQualification['ProfessionalQualification']['idProfessionalQualifications']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($professionalQualification['Person']['title'], array('controller' => 'people', 'action' => 'view', $professionalQualification['Person']['idUser'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('QualificationName'); ?></dt>
		<dd>
			<?php echo h($professionalQualification['ProfessionalQualification']['qualificationName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo $this->Html->link($professionalQualification['Sector']['sectorTitle'], array('controller' => 'sectors', 'action' => 'view', $professionalQualification['Sector']['idSectors'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtherSector'); ?></dt>
		<dd>
			<?php echo h($professionalQualification['ProfessionalQualification']['otherSector']); ?>
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
		<dt><?php echo __('Verified'); ?></dt>
		<dd>
			<?php echo h($professionalQualification['ProfessionalQualification']['verified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HowVerified'); ?></dt>
		<dd>
			<?php echo h($professionalQualification['ProfessionalQualification']['howVerified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Professional Qualification'), array('action' => 'edit', $professionalQualification['ProfessionalQualification']['idProfessionalQualifications'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Professional Qualification'), array('action' => 'delete', $professionalQualification['ProfessionalQualification']['idProfessionalQualifications']), null, __('Are you sure you want to delete # %s?', $professionalQualification['ProfessionalQualification']['idProfessionalQualifications'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Professional Qualifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional Qualification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
	</ul>
</div>
