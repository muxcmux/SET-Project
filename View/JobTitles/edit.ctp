<?php echo $this->Form->create('JobTitle');?>
	<fieldset>
		<legend><?php echo __('Edit Job Title'); ?></legend>
	<?php
		echo $this->Form->input('idJobTitles');
		echo $this->Form->input('jobTitle');
		echo $this->Form->input('Sectors_idSectors', array('label' => 'Sector', 'options' => $sectors));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobTitle.idJobTitles')), null, __('Are you sure you want to delete # %s?', $this->Form->value('JobTitle.idJobTitles'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Titles'), array('action' => 'index'));?></li>
	</ul>
</div>
