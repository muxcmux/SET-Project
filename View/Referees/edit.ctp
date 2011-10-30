<div class="referees form">
<?php echo $this->Form->create('Referee');?>
	<fieldset>
		<legend><?php echo __('Edit Referee'); ?></legend>
	<?php
		echo $this->Form->input('idReferees');
		echo $this->Form->input('Persons_idUser');
		echo $this->Form->input('title');
		echo $this->Form->input('forename');
		echo $this->Form->input('surname');
		echo $this->Form->input('email');
		echo $this->Form->input('contactPhone');
		echo $this->Form->input('relationship');
		echo $this->Form->input('permissionToContact');
		echo $this->Form->input('permissionToStoreDetails');
		echo $this->Form->input('verified');
		echo $this->Form->input('howVerified');
		echo $this->Form->input('referenceDoc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Referee.idReferees')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Referee.idReferees'))); ?></li>
		<li><?php echo $this->Html->link(__('List Referees'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
