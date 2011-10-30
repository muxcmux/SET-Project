<div class="educationalQualifications index">
	<h2><?php echo __('Educational Qualifications');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idEducationalQualifications');?></th>
			<th><?php echo $this->Paginator->sort('Persons_idUser');?></th>
			<th><?php echo $this->Paginator->sort('qualificationType');?></th>
			<th><?php echo $this->Paginator->sort('courseName');?></th>
			<th><?php echo $this->Paginator->sort('EducationLevels_idEducationLevel');?></th>
			<th><?php echo $this->Paginator->sort('vocational');?></th>
			<th><?php echo $this->Paginator->sort('mainSubject');?></th>
			<th><?php echo $this->Paginator->sort('nameOfInstitutions');?></th>
			<th><?php echo $this->Paginator->sort('country');?></th>
			<th><?php echo $this->Paginator->sort('yearObtained');?></th>
			<th><?php echo $this->Paginator->sort('result');?></th>
			<th><?php echo $this->Paginator->sort('thesesTitle');?></th>
			<th><?php echo $this->Paginator->sort('verified');?></th>
			<th><?php echo $this->Paginator->sort('howVerified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($educationalQualifications as $educationalQualification): ?>
	<tr>
		<td><?php echo h($educationalQualification['EducationalQualification']['idEducationalQualifications']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($educationalQualification['Person']['title'], array('controller' => 'people', 'action' => 'view', $educationalQualification['Person']['idUser'])); ?>
		</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['qualificationType']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['courseName']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($educationalQualification['EducationLevel']['educationLevel'], array('controller' => 'education_levels', 'action' => 'view', $educationalQualification['EducationLevel']['idEducationLevel'])); ?>
		</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['vocational']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['mainSubject']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['nameOfInstitutions']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['country']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['yearObtained']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['result']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['thesesTitle']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['verified']); ?>&nbsp;</td>
		<td><?php echo h($educationalQualification['EducationalQualification']['howVerified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $educationalQualification['EducationalQualification']['idEducationalQualifications'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educationalQualification['EducationalQualification']['idEducationalQualifications'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educationalQualification['EducationalQualification']['idEducationalQualifications']), null, __('Are you sure you want to delete # %s?', $educationalQualification['EducationalQualification']['idEducationalQualifications'])); ?>
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
		<li><?php echo $this->Html->link(__('New Educational Qualification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Levels'), array('controller' => 'education_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Level'), array('controller' => 'education_levels', 'action' => 'add')); ?> </li>
	</ul>
</div>
