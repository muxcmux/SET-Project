<div class="educationLevels view">
<h2><?php  echo __('Education Level');?></h2>
	<dl>
		<dt><?php echo __('IdEducationLevel'); ?></dt>
		<dd>
			<?php echo h($educationLevel['EducationLevel']['idEducationLevel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EducationLevel'); ?></dt>
		<dd>
			<?php echo h($educationLevel['EducationLevel']['educationLevel']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Education Level'), array('action' => 'edit', $educationLevel['EducationLevel']['idEducationLevel'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Education Level'), array('action' => 'delete', $educationLevel['EducationLevel']['idEducationLevel']), null, __('Are you sure you want to delete # %s?', $educationLevel['EducationLevel']['idEducationLevel'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Levels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Level'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Qualifications'), array('controller' => 'educational_qualifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Qualification'), array('controller' => 'educational_qualifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related People');?></h3>
	<?php if (!empty($educationLevel['Person'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdUser'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Forename1'); ?></th>
		<th><?php echo __('Forename2'); ?></th>
		<th><?php echo __('Surname'); ?></th>
		<th><?php echo __('AddressLine1'); ?></th>
		<th><?php echo __('AddressLine2'); ?></th>
		<th><?php echo __('Town'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('SecondEmail'); ?></th>
		<th><?php echo __('PersonalUrl'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Female'); ?></th>
		<th><?php echo __('PostcodeStart'); ?></th>
		<th><?php echo __('AuthorityToWorkStatement'); ?></th>
		<th><?php echo __('ContactPreference'); ?></th>
		<th><?php echo __('EducationLevels IdEducationLevel'); ?></th>
		<th><?php echo __('NoOfGcses'); ?></th>
		<th><?php echo __('GcseEnglishGrade'); ?></th>
		<th><?php echo __('GcseMathsGrade'); ?></th>
		<th><?php echo __('FiveOrMoreGcses'); ?></th>
		<th><?php echo __('NoOfAlevels'); ?></th>
		<th><?php echo __('UcasPoints'); ?></th>
		<th><?php echo __('StudentStatus'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Landline'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('PenaltyPoints'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($educationLevel['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['idUser'];?></td>
			<td><?php echo $person['username'];?></td>
			<td><?php echo $person['password'];?></td>
			<td><?php echo $person['title'];?></td>
			<td><?php echo $person['forename1'];?></td>
			<td><?php echo $person['forename2'];?></td>
			<td><?php echo $person['surname'];?></td>
			<td><?php echo $person['addressLine1'];?></td>
			<td><?php echo $person['addressLine2'];?></td>
			<td><?php echo $person['town'];?></td>
			<td><?php echo $person['postcode'];?></td>
			<td><?php echo $person['secondEmail'];?></td>
			<td><?php echo $person['personalUrl'];?></td>
			<td><?php echo $person['photo'];?></td>
			<td><?php echo $person['female'];?></td>
			<td><?php echo $person['postcodeStart'];?></td>
			<td><?php echo $person['authorityToWorkStatement'];?></td>
			<td><?php echo $person['contactPreference'];?></td>
			<td><?php echo $person['EducationLevels_idEducationLevel'];?></td>
			<td><?php echo $person['noOfGcses'];?></td>
			<td><?php echo $person['gcseEnglishGrade'];?></td>
			<td><?php echo $person['gcseMathsGrade'];?></td>
			<td><?php echo $person['fiveOrMoreGcses'];?></td>
			<td><?php echo $person['noOfAlevels'];?></td>
			<td><?php echo $person['ucasPoints'];?></td>
			<td><?php echo $person['studentStatus'];?></td>
			<td><?php echo $person['mobile'];?></td>
			<td><?php echo $person['landline'];?></td>
			<td><?php echo $person['dob'];?></td>
			<td><?php echo $person['penaltyPoints'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['idUser'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['idUser'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['idUser']), null, __('Are you sure you want to delete # %s?', $person['idUser'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Educational Qualifications');?></h3>
	<?php if (!empty($educationLevel['EducationalQualification'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdEducationalQualifications'); ?></th>
		<th><?php echo __('Persons IdUser'); ?></th>
		<th><?php echo __('QualificationType'); ?></th>
		<th><?php echo __('CourseName'); ?></th>
		<th><?php echo __('EducationLevels IdEducationLevel'); ?></th>
		<th><?php echo __('Vocational'); ?></th>
		<th><?php echo __('MainSubject'); ?></th>
		<th><?php echo __('NameOfInstitutions'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('YearObtained'); ?></th>
		<th><?php echo __('Result'); ?></th>
		<th><?php echo __('ThesesTitle'); ?></th>
		<th><?php echo __('Verified'); ?></th>
		<th><?php echo __('HowVerified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($educationLevel['EducationalQualification'] as $educationalQualification): ?>
		<tr>
			<td><?php echo $educationalQualification['idEducationalQualifications'];?></td>
			<td><?php echo $educationalQualification['Persons_idUser'];?></td>
			<td><?php echo $educationalQualification['qualificationType'];?></td>
			<td><?php echo $educationalQualification['courseName'];?></td>
			<td><?php echo $educationalQualification['EducationLevels_idEducationLevel'];?></td>
			<td><?php echo $educationalQualification['vocational'];?></td>
			<td><?php echo $educationalQualification['mainSubject'];?></td>
			<td><?php echo $educationalQualification['nameOfInstitutions'];?></td>
			<td><?php echo $educationalQualification['country'];?></td>
			<td><?php echo $educationalQualification['yearObtained'];?></td>
			<td><?php echo $educationalQualification['result'];?></td>
			<td><?php echo $educationalQualification['thesesTitle'];?></td>
			<td><?php echo $educationalQualification['verified'];?></td>
			<td><?php echo $educationalQualification['howVerified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'educational_qualifications', 'action' => 'view', $educationalQualification['idEducationalQualifications'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'educational_qualifications', 'action' => 'edit', $educationalQualification['idEducationalQualifications'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'educational_qualifications', 'action' => 'delete', $educationalQualification['idEducationalQualifications']), null, __('Are you sure you want to delete # %s?', $educationalQualification['idEducationalQualifications'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Educational Qualification'), array('controller' => 'educational_qualifications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
