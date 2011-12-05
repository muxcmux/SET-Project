<?php
$experience = $this->data;
?>
<?php echo $this->Form->create('Experience');?>
	<fieldset>
		<legend><?php echo __('Edit Experience'); ?></legend>
		<dl>
  		<dt><?php echo __('Person'); ?></dt>
  		<dd>
  			<?php echo $this->Html->link($experience['Person']['forename1'], array('controller' => 'people', 'action' => 'view', $experience['Person']['idUser'])); ?>
  			&nbsp;
  		</dd>
  		<dt>Period</dt>
  		<dd>
  			from <?php echo h($experience['Experience']['dateStarted']); ?> to <?php echo h($experience['Experience']['dateFinished']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Job Title'); ?></dt>
  		<dd>
  			<?php echo ($experience['JobTitle']['idJobTitles']) ? $experience['JobTitle']['jobTitle'] : $experience['Experience']['otherJobTitle']; ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('KeyDuties'); ?></dt>
  		<dd>
  			<?php echo h($experience['Experience']['keyDuties']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Employment Level'); ?></dt>
  		<dd>
  			<?php echo $experience['EmploymentLevel']['employmentLevel']; ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Employer Name'); ?></dt>
  		<dd>
  			<?php echo h($experience['Experience']['employerName']); ?>
  			&nbsp;
  		</dd>
  	</dl>
	<?php
		echo $this->Form->input('idExperiences');
		echo $this->Form->input('verified', array('type' => 'checkbox'));
		echo $this->Form->input('howVerified', array('label' => 'Verification method/evidence '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>