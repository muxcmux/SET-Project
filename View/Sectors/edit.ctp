<div class="sectors form">
<?php echo $this->Form->create('Sector');?>
	<fieldset>
		<legend><?php echo __('Edit Sector'); ?></legend>
	<?php
		echo $this->Form->input('idSectors');
		echo $this->Form->input('sectorTitle');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sector.idSectors')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sector.idSectors'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Professional Qualifications'), array('controller' => 'professional_qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional Qualification'), array('controller' => 'professional_qualifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Titles'), array('controller' => 'job_titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Title'), array('controller' => 'job_titles', 'action' => 'add')); ?> </li>
	</ul>
</div>
