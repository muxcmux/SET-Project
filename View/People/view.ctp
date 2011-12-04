<?php
  $total = count($person['Person']) + count($person) - 10;
  $missing = 0;
  foreach ($person as $k => $v) {
    if ($k == 'EducationLevel') {
      if (!empty($k['idEducationLevel'])) $missing++;
    } else if ($k == 'Person') {
      foreach ($v as $pk => $pv) {
        if (!in_array($pk, array('idUser', 'username', 'password', 'forename2', 'addressline2', 'role', 'gender', 'authorityToWorkStatement', 'postcodeStart', 'landline'))) {
          if (!$pv) $missing++;
        }
      }
    } else {
      if (empty($v)) $missing++;
    }
  }
  $percent = number_format((($total-$missing)/$total)*100);
?>



<?php if ($percent > 95) : ?>
  <h3>Your profile:</h3>
<?php else : ?>
  <h3>
    Profile completeness:
    <div id="profile_completeness">
      <span><?php echo $percent; ?>%</span>
      <div style="width: <?php echo $percent; ?>%"><span><?php echo $percent; ?>%</span></div>
    </div>
  </h3>
  <p>A complete profile gives you a better chance of being hired. <a href="/update_profile">Complete your profile now!</a><br><br></p>
<?php endif ?>

  
	<dl>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($person['Person']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php if ($person['Person']['forename1']) echo h($person['Person']['forename1']); ?> <?php if ($person['Person']['forename2']) echo h($person['Person']['forename2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($person['Person']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($person['Person']['addressLine1']); ?> 
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
		<dt><?php echo __('Secondary email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['secondEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal website'); ?></dt>
		<dd>
			<?php echo $this->Text->autoLink(h($person['Person']['personalUrl'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($person['Person']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php
			  if (empty($person['Person']['female'])) {
			    echo 'N/A';
			  } else if ($person['Person']['female'] == 0){
			    echo 'Male';
			  } else {
			    echo 'Female';
			  }
			?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode start'); ?></dt>
		<dd>
			<?php echo h($person['Person']['postcodeStart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority To Work Statement'); ?></dt>
		<dd>
			<?php echo h($person['Person']['authorityToWorkStatement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact preference'); ?></dt>
		<dd>
			<?php echo h($person['Person']['contactPreference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Highest education Level'); ?></dt>
		<dd>
		  <?php
		    if ($person['EducationLevel']['idEducationLevel']) {
		      $person['EducationLevel']['educationLevel'];
		    }
		  ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of GCSEs'); ?></dt>
		<dd>
			<?php echo h($person['Person']['noOfGcses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GCSE English Grade'); ?></dt>
		<dd>
			<?php echo h($person['Person']['gcseEnglishGrade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GCSE Maths Grade'); ?></dt>
		<dd>
			<?php echo h($person['Person']['gcseMathsGrade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Five Or More GCSEs'); ?></dt>
		<dd>
			<?php echo h($person['Person']['fiveOrMoreGcses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of A levels'); ?></dt>
		<dd>
			<?php echo h($person['Person']['noOfAlevels']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UCAS Points'); ?></dt>
		<dd>
			<?php echo h($person['Person']['ucasPoints']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student status'); ?></dt>
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
		<dt><?php echo __('Date of birth'); ?></dt>
		<dd>
			<?php echo h($person['Person']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drivers license penalty points '); ?></dt>
		<dd>
			<?php echo h($person['Person']['penaltyPoints']); ?>
			&nbsp;
		</dd>
		<dt><div class="actions"><a href="/update_profile">Edit my profile</a></div></dt>
    <dd>&nbsp;</dd>
	</dl>
<div class="clear"></div>








<div class="profile-related">
  
  
  
  
  
  
  
  <div class="related">
  	<h3><?php echo __('My Skills');?></h3>
  	<?php if (!empty($person['Skill'])):?>
  	<table cellpadding = "0" cellspacing = "0">
  	<tr>
  		<th><?php echo __('Skill'); ?></th>
  		<th><?php echo __('Level'); ?></th>
  		<th><?php echo __('Verified?'); ?></th>
  		<th class="actions"><?php echo __('Actions');?></th>
  	</tr>
  	<?php
  		$i = 0;
  		foreach ($person['Skill'] as $skill): ?>
  		<tr>
  			<td><?php echo $skill['skillName'];?></td>
  			<td><?php echo $skill['skillLevel'];?></td>
  			<td><?php echo ($skill['verified']) ? 'Yes.' : 'No.';?></td>
  			<td class="actions">
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
  	<h3><?php echo __('My Referees');?></h3>
  	<?php if (!empty($person['Referee'])):?>
  	<table cellpadding = "0" cellspacing = "0">
  	<tr>
  		<th><?php echo __('Name'); ?></th>
  		<th><?php echo __('Email'); ?></th>
  		<th><?php echo __('Phone'); ?></th>
  		<th><?php echo __('Relationship'); ?></th>
  		<th><?php echo __('PermissionToContact'); ?></th>
  		<th><?php echo __('Verified?'); ?></th>
  		<th class="actions"><?php echo __('Actions');?></th>
  	</tr>
  	<?php
  		$i = 0;
  		foreach ($person['Referee'] as $referee): ?>
  		<tr>
  			<td><?php echo $referee['title'];?> <?php echo $referee['forename'];?> <?php echo $referee['surname'];?></td>
  			<td><?php echo $referee['email'];?></td>
  			<td><?php echo $referee['contactPhone'];?></td>
  			<td><?php echo $referee['relationship'];?></td>
  			<td><?php echo ($referee['permissionToContact']) ? 'Yes.' : 'No.' ;?></td>
  			<td><?php echo ($referee['verified']) ? 'Yes.' : 'No.';?></td>
  			<td class="actions">
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
  	<h3><?php echo __('My Professional Qualifications');?></h3>
  	<?php if (!empty($person['ProfessionalQualification'])):?>
  	<table cellpadding = "0" cellspacing = "0">
  	<tr>
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
  			<td><?php echo $professionalQualification['qualificationName'];?></td>
  			<td><?php echo $professionalQualification['Sectors_idSectors'];?></td>
  			<td><?php echo $professionalQualification['otherSector'];?></td>
  			<td><?php echo $professionalQualification['awardingBody'];?></td>
  			<td><?php echo $professionalQualification['yearObtained'];?></td>
  			<td><?php echo $professionalQualification['result'];?></td>
  			<td><?php echo $professionalQualification['verified'];?></td>
  			<td><?php echo $professionalQualification['howVerified'];?></td>
  			<td class="actions">
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
  	<h3><?php echo __('My Experiences');?></h3>
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
  	<h3><?php echo __('My Educational Qualifications');?></h3>
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
  <div class="clear"></div>
</div>