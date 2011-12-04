<div class="jobTitles form">
<?php echo $this->Form->create('JobTitle');?>
	<fieldset>
		<legend><?php echo __('Edit Job Title'); ?></legend>
	<?php
		echo $this->Form->input('idJobTitles');
		echo $this->Form->input('jobTitle');
		echo $this->Form->input('Sectors_idSectors');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobTitle.idJobTitles')), null, __('Are you sure you want to delete # %s?', $this->Form->value('JobTitle.idJobTitles'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Titles'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
