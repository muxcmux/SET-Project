<div class="people view">
<h2><?php  echo __('Person');?></h2>
	<dl>
		<dt><?php echo __('IdUser'); ?></dt>
		<dd>
			<?php echo h($person['Person']['idUser']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($person['Person']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($person['Person']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($person['Person']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forename1'); ?></dt>
		<dd>
			<?php echo h($person['Person']['forename1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forename2'); ?></dt>
		<dd>
			<?php echo h($person['Person']['forename2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($person['Person']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AddressLine1'); ?></dt>
		<dd>
			<?php echo h($person['Person']['addressLine1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AddressLine2'); ?></dt>
		<dd>
			<?php echo h($person['Person']['addressLine2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town'); ?></dt>
		<dd>
			<?php echo h($person['Person']['town']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($person['Person']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SecondEmail'); ?></dt>
		<dd>
			<?php echo h($person['Person']['secondEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PersonalUrl'); ?></dt>
		<dd>
			<?php echo h($person['Person']['personalUrl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($person['Person']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Female'); ?></dt>
		<dd>
			<?php echo h($person['Person']['female']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PostcodeStart'); ?></dt>
		<dd>
			<?php echo h($person['Person']['postcodeStart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AuthorityToWorkStatement'); ?></dt>
		<dd>
			<?php echo h($person['Person']['authorityToWorkStatement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ContactPreference'); ?></dt>
		<dd>
			<?php echo h($person['Person']['contactPreference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Education Level'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['EducationLevel'][''], array('controller' => 'education_levels', 'action' => 'view', $person['EducationLevel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoOfGcses'); ?></dt>
		<dd>
			<?php echo h($person['Person']['noOfGcses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GcseEnglishGrade'); ?></dt>
		<dd>
			<?php echo h($person['Person']['gcseEnglishGrade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GcseMathsGrade'); ?></dt>
		<dd>
			<?php echo h($person['Person']['gcseMathsGrade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FiveOrMoreGcses'); ?></dt>
		<dd>
			<?php echo h($person['Person']['fiveOrMoreGcses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoOfAlevels'); ?></dt>
		<dd>
			<?php echo h($person['Person']['noOfAlevels']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UcasPoints'); ?></dt>
		<dd>
			<?php echo h($person['Person']['ucasPoints']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StudentStatus'); ?></dt>
		<dd>
			<?php echo h($person['Person']['studentStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($person['Person']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Landline'); ?></dt>
		<dd>
			<?php echo h($person['Person']['landline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($person['Person']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PenaltyPoints'); ?></dt>
		<dd>
			<?php echo h($person['Person']['penaltyPoints']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['idUser'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['idUser']), null, __('Are you sure you want to delete # %s?', $person['Person']['idUser'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Skills');?></h3>
	<?php if (!empty($person['Skill'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdSkills'); ?></th>
		<th><?php echo __('Persons IdUser'); ?></th>
		<th><?php echo __('SkillName'); ?></th>
		<th><?php echo __('SkillLevel'); ?></th>
		<th><?php echo __('Verified'); ?></th>
		<th><?php echo __('HowVerified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Skill'] as $skill): ?>
		<tr>
			<td><?php echo $skill['idSkills'];?></td>
			<td><?php echo $skill['Persons_idUser'];?></td>
			<td><?php echo $skill['skillName'];?></td>
			<td><?php echo $skill['skillLevel'];?></td>
			<td><?php echo $skill['verified'];?></td>
			<td><?php echo $skill['howVerified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['idSkills'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['idSkills'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['idSkills']), null, __('Are you sure you want to delete # %s?', $skill['idSkills'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Referees');?></h3>
	<?php if (!empty($person['Referee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdReferees'); ?></th>
		<th><?php echo __('Persons IdUser'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Forename'); ?></th>
		<th><?php echo __('Surname'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('ContactPhone'); ?></th>
		<th><?php echo __('Relationship'); ?></th>
		<th><?php echo __('PermissionToContact'); ?></th>
		<th><?php echo __('PermissionToStoreDetails'); ?></th>
		<th><?php echo __('Verified'); ?></th>
		<th><?php echo __('HowVerified'); ?></th>
		<th><?php echo __('ReferenceDoc'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Referee'] as $referee): ?>
		<tr>
			<td><?php echo $referee['idReferees'];?></td>
			<td><?php echo $referee['Persons_idUser'];?></td>
			<td><?php echo $referee['title'];?></td>
			<td><?php echo $referee['forename'];?></td>
			<td><?php echo $referee['surname'];?></td>
			<td><?php echo $referee['email'];?></td>
			<td><?php echo $referee['contactPhone'];?></td>
			<td><?php echo $referee['relationship'];?></td>
			<td><?php echo $referee['permissionToContact'];?></td>
			<td><?php echo $referee['permissionToStoreDetails'];?></td>
			<td><?php echo $referee['verified'];?></td>
			<td><?php echo $referee['howVerified'];?></td>
			<td><?php echo $referee['referenceDoc'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'referees', 'action' => 'view', $referee['idReferees'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'referees', 'action' => 'edit', $referee['idReferees'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'referees', 'action' => 'delete', $referee['idReferees']), null, __('Are you sure you want to delete # %s?', $referee['idReferees'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Referee'), array('controller' => 'referees', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Professional Qualifications');?></h3>
	<?php if (!empty($person['ProfessionalQualification'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdProfessionalQualifications'); ?></th>
		<th><?php echo __('Persons IdUser'); ?></th>
		<th><?php echo __('QualificationName'); ?></th>
		<th><?php echo __('Sectors IdSectors'); ?></th>
		<th><?php echo __('OtherSector'); ?></th>
		<th><?php echo __('AwardingBody'); ?></th>
		<th><?php echo __('YearObtained'); ?></th>
		<th><?php echo __('Result'); ?></th>
		<th><?php echo __('Verified'); ?></th>
		<th><?php echo __('HowVerified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['ProfessionalQualification'] as $professionalQualification): ?>
		<tr>
			<td><?php echo $professionalQualification['idProfessionalQualifications'];?></td>
			<td><?php echo $professionalQualification['Persons_idUser'];?></td>
			<td><?php echo $professionalQualification['qualificationName'];?></td>
			<td><?php echo $professionalQualification['Sectors_idSectors'];?></td>
			<td><?php echo $professionalQualification['otherSector'];?></td>
			<td><?php echo $professionalQualification['awardingBody'];?></td>
			<td><?php echo $professionalQualification['yearObtained'];?></td>
			<td><?php echo $professionalQualification['result'];?></td>
			<td><?php echo $professionalQualification['verified'];?></td>
			<td><?php echo $professionalQualification['howVerified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'professional_qualifications', 'action' => 'view', $professionalQualification['idProfessionalQualifications'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'professional_qualifications', 'action' => 'edit', $professionalQualification['idProfessionalQualifications'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'professional_qualifications', 'action' => 'delete', $professionalQualification['idProfessionalQualifications']), null, __('Are you sure you want to delete # %s?', $professionalQualification['idProfessionalQualifications'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Professional Qualification'), array('controller' => 'professional_qualifications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Experiences');?></h3>
	<?php if (!empty($person['Experience'])):?>
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
		foreach ($person['Experience'] as $experience): ?>
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
<div class="related">
	<h3><?php echo __('Related Educational Qualifications');?></h3>
	<?php if (!empty($person['EducationalQualification'])):?>
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
		foreach ($person['EducationalQualification'] as $educationalQualification): ?>
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
