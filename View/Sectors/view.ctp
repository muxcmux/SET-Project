<div class="sectors view">
<h2><?php  echo __('Sector');?></h2>
	<dl>
		<dt><?php echo __('IdSectors'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['idSectors']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SectorTitle'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['sectorTitle']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sector'), array('action' => 'edit', $sector['Sector']['idSectors'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sector'), array('action' => 'delete', $sector['Sector']['idSectors']), null, __('Are you sure you want to delete # %s?', $sector['Sector']['idSectors'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professional Qualifications'), array('controller' => 'professional_qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional Qualification'), array('controller' => 'professional_qualifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Titles'), array('controller' => 'job_titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Title'), array('controller' => 'job_titles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Professional Qualifications');?></h3>
	<?php if (!empty($sector['ProfessionalQualification'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdProfessionalQualifications'); ?></th>
		<th><?php echo __('Persons IdUser'); ?></th>
		<th><?php echo __('QualificationName'); ?></th>
		<th><?php echo __('Sectors IdSectors'); ?></th>
		<th><?php echo __('OtherSector'); ?></th>
		<th><?php echo __('AwardingBody'); ?></th>
		<th><?php echo __('YearObtained'); ?></th>
		<th><?php echo __('Result'); ?></th>
		<th><?php echo __('Verified'); ?></th>
		<th><?php echo __('HowVerified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sector['ProfessionalQualification'] as $professionalQualification): ?>
		<tr>
			<td><?php echo $professionalQualification['idProfessionalQualifications'];?></td>
			<td><?php echo $professionalQualification['Persons_idUser'];?></td>
			<td><?php echo $professionalQualification['qualificationName'];?></td>
			<td><?php echo $professionalQualification['Sectors_idSectors'];?></td>
			<td><?php echo $professionalQualification['otherSector'];?></td>
			<td><?php echo $professionalQualification['awardingBody'];?></td>
			<td><?php echo $professionalQualification['yearObtained'];?></td>
			<td><?php echo $professionalQualification['result'];?></td>
			<td><?php echo $professionalQualification['verified'];?></td>
			<td><?php echo $professionalQualification['howVerified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'professional_qualifications', 'action' => 'view', $professionalQualification['idProfessionalQualifications'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'professional_qualifications', 'action' => 'edit', $professionalQualification['idProfessionalQualifications'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'professional_qualifications', 'action' => 'delete', $professionalQualification['idProfessionalQualifications']), null, __('Are you sure you want to delete # %s?', $professionalQualification['idProfessionalQualifications'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Professional Qualification'), array('controller' => 'professional_qualifications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Job Titles');?></h3>
	<?php if (!empty($sector['JobTitle'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdJobTitles'); ?></th>
		<th><?php echo __('JobTitle'); ?></th>
		<th><?php echo __('Sectors IdSectors'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sector['JobTitle'] as $jobTitle): ?>
		<tr>
			<td><?php echo $jobTitle['idJobTitles'];?></td>
			<td><?php echo $jobTitle['jobTitle'];?></td>
			<td><?php echo $jobTitle['Sectors_idSectors'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'job_titles', 'action' => 'view', $jobTitle['idJobTitles'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'job_titles', 'action' => 'edit', $jobTitle['idJobTitles'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'job_titles', 'action' => 'delete', $jobTitle['idJobTitles']), null, __('Are you sure you want to delete # %s?', $jobTitle['idJobTitles'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job Title'), array('controller' => 'job_titles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
