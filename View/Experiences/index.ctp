<div class="experiences index">
	<h2><?php echo __('Experiences');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idExperiences');?></th>
			<th><?php echo $this->Paginator->sort('Persons_idUser');?></th>
			<th><?php echo $this->Paginator->sort('dateStarted');?></th>
			<th><?php echo $this->Paginator->sort('dateFinished');?></th>
			<th><?php echo $this->Paginator->sort('JobTitles_idJobTitles');?></th>
			<th><?php echo $this->Paginator->sort('otherJobTitle');?></th>
			<th><?php echo $this->Paginator->sort('keyDuties');?></th>
			<th><?php echo $this->Paginator->sort('EmploymentLevels_idLevelsOfEmployment');?></th>
			<th><?php echo $this->Paginator->sort('employerName');?></th>
			<th><?php echo $this->Paginator->sort('verified');?></th>
			<th><?php echo $this->Paginator->sort('howVerified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($experiences as $experience): ?>
	<tr>
		<td><?php echo h($experience['Experience']['idExperiences']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($experience['Person']['title'], array('controller' => 'people', 'action' => 'view', $experience['Person']['idUser'])); ?>
		</td>
		<td><?php echo h($experience['Experience']['dateStarted']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['dateFinished']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($experience['JobTitle'][''], array('controller' => 'job_titles', 'action' => 'view', $experience['JobTitle']['id'])); ?>
		</td>
		<td><?php echo h($experience['Experience']['otherJobTitle']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['keyDuties']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($experience['EmploymentLevel']['employmentLevel'], array('controller' => 'employment_levels', 'action' => 'view', $experience['EmploymentLevel']['idLevelsOfEmployment'])); ?>
		</td>
		<td><?php echo h($experience['Experience']['employerName']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['verified']); ?>&nbsp;</td>
		<td><?php echo h($experience['Experience']['howVerified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $experience['Experience']['idExperiences'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $experience['Experience']['idExperiences'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $experience['Experience']['idExperiences']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['idExperiences'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Experience'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employment Levels'), array('controller' => 'employment_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment Level'), array('controller' => 'employment_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Titles'), array('controller' => 'job_titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Title'), array('controller' => 'job_titles', 'action' => 'add')); ?> </li>
	</ul>
</div>
