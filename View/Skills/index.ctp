<div class="skills index">
	<h2><?php echo __('Skills');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idSkills');?></th>
			<th><?php echo $this->Paginator->sort('Persons_idUser');?></th>
			<th><?php echo $this->Paginator->sort('skillName');?></th>
			<th><?php echo $this->Paginator->sort('skillLevel');?></th>
			<th><?php echo $this->Paginator->sort('verified');?></th>
			<th><?php echo $this->Paginator->sort('howVerified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($skills as $skill): ?>
	<tr>
		<td><?php echo h($skill['Skill']['idSkills']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($skill['Person']['title'], array('controller' => 'people', 'action' => 'view', $skill['Person']['idUser'])); ?>
		</td>
		<td><?php echo h($skill['Skill']['skillName']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['skillLevel']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['verified']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['howVerified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $skill['Skill']['idSkills'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $skill['Skill']['idSkills'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skill['Skill']['idSkills']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['idSkills'])); ?>
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
		<li><?php echo $this->Html->link(__('New Skill'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
