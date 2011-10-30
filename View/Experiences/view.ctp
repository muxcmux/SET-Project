<div class="experiences view">
<h2><?php  echo __('Experience');?></h2>
	<dl>
		<dt><?php echo __('IdExperiences'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['idExperiences']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['Person']['title'], array('controller' => 'people', 'action' => 'view', $experience['Person']['idUser'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateStarted'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['dateStarted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateFinished'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['dateFinished']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Title'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['JobTitle'][''], array('controller' => 'job_titles', 'action' => 'view', $experience['JobTitle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtherJobTitle'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['otherJobTitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('KeyDuties'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['keyDuties']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employment Level'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['EmploymentLevel']['employmentLevel'], array('controller' => 'employment_levels', 'action' => 'view', $experience['EmploymentLevel']['idLevelsOfEmployment'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmployerName'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['employerName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verified'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['verified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HowVerified'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['howVerified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Experience'), array('action' => 'edit', $experience['Experience']['idExperiences'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Experience'), array('action' => 'delete', $experience['Experience']['idExperiences']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['idExperiences'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employment Levels'), array('controller' => 'employment_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment Level'), array('controller' => 'employment_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Titles'), array('controller' => 'job_titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Title'), array('controller' => 'job_titles', 'action' => 'add')); ?> </li>
	</ul>
</div>
