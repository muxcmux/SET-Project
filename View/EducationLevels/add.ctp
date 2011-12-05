<?php echo $this->Form->create('EducationLevel');?>
	<fieldset>
		<legend><?php echo __('Add Education Level'); ?></legend>
	<?php
		echo $this->Form->input('educationLevel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Education Levels'), array('action' => 'index'));?></li>
	</ul>
</div>
