<div class="employmentLevels view">
<h2><?php  echo __('Employment Level');?></h2>
	<dl>
		<dt><?php echo __('IdLevelsOfEmployment'); ?></dt>
		<dd>
			<?php echo h($employmentLevel['EmploymentLevel']['idLevelsOfEmployment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmploymentLevel'); ?></dt>
		<dd>
			<?php echo h($employmentLevel['EmploymentLevel']['employmentLevel']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employment Level'), array('action' => 'edit', $employmentLevel['EmploymentLevel']['idLevelsOfEmployment'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employment Level'), array('action' => 'delete', $employmentLevel['EmploymentLevel']['idLevelsOfEmployment']), null, __('Are you sure you want to delete # %s?', $employmentLevel['EmploymentLevel']['idLevelsOfEmployment'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employment Levels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employment Level'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Experiences');?></h3>
	<?php if (!empty($employmentLevel['Experience'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdExperiences'); ?></th>
		<th><?php echo __('Persons IdUser'); ?></th>
		<th><?php echo __('DateStarted'); ?></th>
		<th><?php echo __('DateFinished'); ?></th>
		<th><?php echo __('JobTitles IdJobTitles'); ?></th>
		<th><?php echo __('OtherJobTitle'); ?></th>
		<th><?php echo __('KeyDuties'); ?></th>
		<th><?php echo __('EmploymentLevels IdLevelsOfEmployment'); ?></th>
		<th><?php echo __('EmployerName'); ?></th>
		<th><?php echo __('Verified'); ?></th>
		<th><?php echo __('HowVerified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employmentLevel['Experience'] as $experience): ?>
		<tr>
			<td><?php echo $experience['idExperiences'];?></td>
			<td><?php echo $experience['Persons_idUser'];?></td>
			<td><?php echo $experience['dateStarted'];?></td>
			<td><?php echo $experience['dateFinished'];?></td>
			<td><?php echo $experience['JobTitles_idJobTitles'];?></td>
			<td><?php echo $experience['otherJobTitle'];?></td>
			<td><?php echo $experience['keyDuties'];?></td>
			<td><?php echo $experience['EmploymentLevels_idLevelsOfEmployment'];?></td>
			<td><?php echo $experience['employerName'];?></td>
			<td><?php echo $experience['verified'];?></td>
			<td><?php echo $experience['howVerified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experiences', 'action' => 'view', $experience['idExperiences'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experiences', 'action' => 'edit', $experience['idExperiences'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experiences', 'action' => 'delete', $experience['idExperiences']), null, __('Are you sure you want to delete # %s?', $experience['idExperiences'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
