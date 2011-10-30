<div class="referees index">
	<h2><?php echo __('Referees');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idReferees');?></th>
			<th><?php echo $this->Paginator->sort('Persons_idUser');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('forename');?></th>
			<th><?php echo $this->Paginator->sort('surname');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('contactPhone');?></th>
			<th><?php echo $this->Paginator->sort('relationship');?></th>
			<th><?php echo $this->Paginator->sort('permissionToContact');?></th>
			<th><?php echo $this->Paginator->sort('permissionToStoreDetails');?></th>
			<th><?php echo $this->Paginator->sort('verified');?></th>
			<th><?php echo $this->Paginator->sort('howVerified');?></th>
			<th><?php echo $this->Paginator->sort('referenceDoc');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($referees as $referee): ?>
	<tr>
		<td><?php echo h($referee['Referee']['idReferees']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($referee['Person']['title'], array('controller' => 'people', 'action' => 'view', $referee['Person']['idUser'])); ?>
		</td>
		<td><?php echo h($referee['Referee']['title']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['forename']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['surname']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['email']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['contactPhone']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['relationship']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['permissionToContact']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['permissionToStoreDetails']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['verified']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['howVerified']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['referenceDoc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $referee['Referee']['idReferees'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $referee['Referee']['idReferees'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $referee['Referee']['idReferees']), null, __('Are you sure you want to delete # %s?', $referee['Referee']['idReferees'])); ?>
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
		<li><?php echo $this->Html->link(__('New Referee'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
