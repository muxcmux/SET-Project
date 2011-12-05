<?php echo $this->Form->create('EmploymentLevel');?>
	<fieldset>
		<legend><?php echo __('Add Employment Level'); ?></legend>
	<?php
		echo $this->Form->input('employmentLevel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employment Levels'), array('action' => 'index'));?></li>
	</ul>
</div>
