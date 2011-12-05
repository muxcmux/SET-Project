<?php $skill = $this->data; ?>
<?php echo $this->Form->create('Skill');?>
	<fieldset>
		<legend>Verify Skill for <?=$this->data['Person']['username']?></legend>
		<dl>
  		<dt><?php echo __('Person'); ?></dt>
  		<dd>
  			<?php echo $this->Html->link($skill['Person']['username'], array('controller' => 'people', 'action' => 'view', $skill['Person']['idUser'])); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('SkillName'); ?></dt>
  		<dd>
  			<?php echo h($skill['Skill']['skillName']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('SkillLevel'); ?></dt>
  		<dd>
  			<?php echo h($skill['Skill']['skillLevel']); ?>
  			&nbsp;
  		</dd>
  	</dl>
	<?php
		echo $this->Form->input('idSkills');
		
		
		echo $this->Form->input('verified', array('type' => 'checkbox'));
		echo $this->Form->input('howVerified', array('label' => 'Verification method/evidence '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>