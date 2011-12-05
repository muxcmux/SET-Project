	<h2><?php echo __('Education Levels');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idEducationLevel', 'Education level ID');?></th>
			<th><?php echo $this->Paginator->sort('educationLevel', 'Education Level');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($educationLevels as $educationLevel): ?>
	<tr>
		<td><?php echo h($educationLevel['EducationLevel']['idEducationLevel']); ?>&nbsp;</td>
		<td><?php echo h($educationLevel['EducationLevel']['educationLevel']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educationLevel['EducationLevel']['idEducationLevel'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educationLevel['EducationLevel']['idEducationLevel']), null, __('Are you sure you want to delete # %s?', $educationLevel['EducationLevel']['idEducationLevel'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Education Level'), array('action' => 'add')); ?></li>
	</ul>
</div>
