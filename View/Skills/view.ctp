<div class="skills view">
<h2><?php  echo __('Skill');?></h2>
	<dl>
		<dt><?php echo __('IdSkills'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['idSkills']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($skill['Person']['title'], array('controller' => 'people', 'action' => 'view', $skill['Person']['idUser'])); ?>
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
		<dt><?php echo __('Verified'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['verified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HowVerified'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['howVerified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skill'), array('action' => 'edit', $skill['Skill']['idSkills'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skill'), array('action' => 'delete', $skill['Skill']['idSkills']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['idSkills'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
