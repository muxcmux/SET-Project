<h3>Search results</h3>

<table cellpadding="0" cellspacing="0">
<tr>
    <th>Photo</th>
		<th><?php echo $this->Paginator->sort('Person');?></th>
		<th><?php echo $this->Paginator->sort('username', 'Email');?></th>
</tr>
<?php
$i = 0;
foreach ($people as $person): ?>
<tr>
  <td>
    <?php if ($person['Person']['photo']): ?>
      <img width="64" height="48" src="/people/get_photo/<?=$person['Person']['idUser']?>" alt="photo">
    <?php endif; ?>
    &nbsp;
  </td>
	<td><?php echo $this->Html->link("{$person['Person']['title']} {$person['Person']['forename1']} {$person['Person']['forename2']} {$person['Person']['surname']}", array('controller' => 'people', 'action' => 'view', $person['Person']['idUser'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($person['Person']['username'], array('controller' => 'people', 'action' => 'view', $person['Person']['idUser'])); ?>&nbsp;</td>
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