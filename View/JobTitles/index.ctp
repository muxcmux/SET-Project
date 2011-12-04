<div class="jobTitles index">
	<h2><?php echo __('Job Titles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idJobTitles');?></th>
			<th><?php echo $this->Paginator->sort('jobTitle');?></th>
			<th><?php echo $this->Paginator->sort('Sectors_idSectors');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($jobTitles as $jobTitle): ?>
	<tr>
		<td><?php echo h($jobTitle['JobTitle']['idJobTitles']); ?>&nbsp;</td>
		<td><?php echo h($jobTitle['JobTitle']['jobTitle']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobTitle['Sector']['sectorTitle'], array('controller' => 'sectors', 'action' => 'view', $jobTitle['Sector']['idSectors'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobTitle['JobTitle']['idJobTitles'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobTitle['JobTitle']['idJobTitles'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobTitle['JobTitle']['idJobTitles']), null, __('Are you sure you want to delete # %s?', $jobTitle['JobTitle']['idJobTitles'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Title'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
