<div class="people index">
	<h2><?php echo __('People');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idUser');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('forename1');?></th>
			<th><?php echo $this->Paginator->sort('forename2');?></th>
			<th><?php echo $this->Paginator->sort('surname');?></th>
			<th><?php echo $this->Paginator->sort('addressLine1');?></th>
			<th><?php echo $this->Paginator->sort('addressLine2');?></th>
			<th><?php echo $this->Paginator->sort('town');?></th>
			<th><?php echo $this->Paginator->sort('postcode');?></th>
			<th><?php echo $this->Paginator->sort('secondEmail');?></th>
			<th><?php echo $this->Paginator->sort('personalUrl');?></th>
			<th><?php echo $this->Paginator->sort('photo');?></th>
			<th><?php echo $this->Paginator->sort('female');?></th>
			<th><?php echo $this->Paginator->sort('postcodeStart');?></th>
			<th><?php echo $this->Paginator->sort('authorityToWorkStatement');?></th>
			<th><?php echo $this->Paginator->sort('contactPreference');?></th>
			<th><?php echo $this->Paginator->sort('EducationLevels_idEducationLevel');?></th>
			<th><?php echo $this->Paginator->sort('noOfGcses');?></th>
			<th><?php echo $this->Paginator->sort('gcseEnglishGrade');?></th>
			<th><?php echo $this->Paginator->sort('gcseMathsGrade');?></th>
			<th><?php echo $this->Paginator->sort('fiveOrMoreGcses');?></th>
			<th><?php echo $this->Paginator->sort('noOfAlevels');?></th>
			<th><?php echo $this->Paginator->sort('ucasPoints');?></th>
			<th><?php echo $this->Paginator->sort('studentStatus');?></th>
			<th><?php echo $this->Paginator->sort('mobile');?></th>
			<th><?php echo $this->Paginator->sort('landline');?></th>
			<th><?php echo $this->Paginator->sort('dob');?></th>
			<th><?php echo $this->Paginator->sort('penaltyPoints');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($people as $person): ?>
	<tr>
		<td><?php echo h($person['Person']['idUser']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['username']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['password']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['title']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['forename1']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['forename2']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['surname']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['addressLine1']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['addressLine2']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['town']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['postcode']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['secondEmail']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['personalUrl']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['photo']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['female']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['postcodeStart']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['authorityToWorkStatement']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['contactPreference']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($person['EducationLevel'][''], array('controller' => 'education_levels', 'action' => 'view', $person['EducationLevel']['id'])); ?>
		</td>
		<td><?php echo h($person['Person']['noOfGcses']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['gcseEnglishGrade']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['gcseMathsGrade']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['fiveOrMoreGcses']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['noOfAlevels']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['ucasPoints']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['studentStatus']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['landline']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['dob']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['penaltyPoints']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['idUser'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['idUser'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['idUser']), null, __('Are you sure you want to delete # %s?', $person['Person']['idUser'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Education Levels'), array('controller' => 'education_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Level'), array('controller' => 'education_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referees'), array('controller' => 'referees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referee'), array('controller' => 'referees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professional Qualifications'), array('controller' => 'professional_qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional Qualification'), array('controller' => 'professional_qualifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Qualifications'), array('controller' => 'educational_qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Qualification'), array('controller' => 'educational_qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
