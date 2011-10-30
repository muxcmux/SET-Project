<div class="employmentLevels index">
	<h2><?php echo __('Employment Levels');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idLevelsOfEmployment');?></th>
			<th><?php echo $this->Paginator->sort('employmentLevel');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($employmentLevels as $employmentLevel): ?>
	<tr>
		<td><?php echo h($employmentLevel['EmploymentLevel']['idLevelsOfEmployment']); ?>&nbsp;</td>
		<td><?php echo h($employmentLevel['EmploymentLevel']['employmentLevel']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employmentLevel['EmploymentLevel']['idLevelsOfEmployment'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employmentLevel['EmploymentLevel']['idLevelsOfEmployment'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employmentLevel['EmploymentLevel']['idLevelsOfEmployment']), null, __('Are you sure you want to delete # %s?', $employmentLevel['EmploymentLevel']['idLevelsOfEmployment'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employment Level'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
