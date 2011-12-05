
<?php echo $this->Form->create('Sector');?>
	<fieldset>
		<legend><?php echo __('Add Sector'); ?></legend>
	<?php
		echo $this->Form->input('sectorTitle');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Sectors'), array('action' => 'index'));?></li>
	</ul>
</div>
