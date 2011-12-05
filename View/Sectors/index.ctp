
	<h2><?php echo __('Sectors');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idSectors', 'Sector ID');?></th>
			<th><?php echo $this->Paginator->sort('sectorTitle', 'Sector Title');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sectors as $sector): ?>
	<tr>
		<td><?php echo h($sector['Sector']['idSectors']); ?>&nbsp;</td>
		<td><?php echo h($sector['Sector']['sectorTitle']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sector['Sector']['idSectors'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sector['Sector']['idSectors']), null, __('Are you sure you want to delete # %s?', $sector['Sector']['idSectors'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sector'), array('action' => 'add')); ?></li>
	</ul>
</div>
