
<?php echo $this->Form->create('JobTitle');?>
	<fieldset>
		<legend><?php echo __('Add Job Title'); ?></legend>
	<?php
		echo $this->Form->input('jobTitle');
		echo $this->Form->input('Sectors_idSectors', array('label' => 'Sector', 'options' => $sectors));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Job Titles'), array('action' => 'index'));?></li>
	</ul>
</div>
