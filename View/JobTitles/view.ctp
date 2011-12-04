<div class="jobTitles view">
<h2><?php  echo __('Job Title');?></h2>
	<dl>
		<dt><?php echo __('IdJobTitles'); ?></dt>
		<dd>
			<?php echo h($jobTitle['JobTitle']['idJobTitles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobTitle'); ?></dt>
		<dd>
			<?php echo h($jobTitle['JobTitle']['jobTitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobTitle['Sector']['sectorTitle'], array('controller' => 'sectors', 'action' => 'view', $jobTitle['Sector']['idSectors'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Title'), array('action' => 'edit', $jobTitle['JobTitle']['idJobTitles'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Title'), array('action' => 'delete', $jobTitle['JobTitle']['idJobTitles']), null, __('Are you sure you want to delete # %s?', $jobTitle['JobTitle']['idJobTitles'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Titles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Title'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Experiences');?></h3>
	<?php if (!empty($jobTitle['Experience'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdExperiences'); ?></th>
		<th><?php echo __('Persons IdUser'); ?></th>
		<th><?php echo __('DateStarted'); ?></th>
		<th><?php echo __('DateFinished'); ?></th>
		<th><?php echo __('JobTitles IdJobTitles'); ?></th>
		<th><?php echo __('OtherJobTitle'); ?></th>
		<th><?php echo __('KeyDuties'); ?></th>
		<th><?php echo __('EmploymentLevels IdLevelsOfEmployment'); ?></th>
		<th><?php echo __('EmployerName'); ?></th>
		<th><?php echo __('Verified'); ?></th>
		<th><?php echo __('HowVerified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jobTitle['Experience'] as $experience): ?>
		<tr>
			<td><?php echo $experience['idExperiences'];?></td>
			<td><?php echo $experience['Persons_idUser'];?></td>
			<td><?php echo $experience['dateStarted'];?></td>
			<td><?php echo $experience['dateFinished'];?></td>
			<td><?php echo $experience['JobTitles_idJobTitles'];?></td>
			<td><?php echo $experience['otherJobTitle'];?></td>
			<td><?php echo $experience['keyDuties'];?></td>
			<td><?php echo $experience['EmploymentLevels_idLevelsOfEmployment'];?></td>
			<td><?php echo $experience['employerName'];?></td>
			<td><?php echo $experience['verified'];?></td>
			<td><?php echo $experience['howVerified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experiences', 'action' => 'view', $experience['idExperiences'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experiences', 'action' => 'edit', $experience['idExperiences'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experiences', 'action' => 'delete', $experience['idExperiences']), null, __('Are you sure you want to delete # %s?', $experience['idExperiences'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
