<?php
$its_me = ($person['Person']['idUser'] == $this->Session->read('Auth.User.idUser'));
?>
<style type="text/css">
  table {
    width: 100%;
  }
  div.related {
    margin: 0 0 50px 0;
  }
</style>
<table>
  <tbody>
    <tr>
      <td><?php echo __('Title'); ?></td>
    	<td>
    		<?php echo h($person['Person']['title']); ?>
    		&nbsp;
    	</td>
    </tr>
    <tr>
    	<td><?php echo __('Name'); ?></td>
    	<td>
    		<?php if ($person['Person']['forename1']) echo h($person['Person']['forename1']); ?> <?php if ($person['Person']['forename2']) echo h($person['Person']['forename2']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Surname'); ?></td>
    	<td>
    		<?php echo h($person['Person']['surname']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Address'); ?></td>
    	<td>
    		<?php echo h($person['Person']['addressLine1']); ?> 
    		<?php echo h($person['Person']['addressLine2']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Town'); ?></td>
    	<td>
    		<?php echo h($person['Person']['town']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Postcode'); ?></td>
    	<td>
    		<?php echo h($person['Person']['postcode']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Secondary email'); ?></td>
    	<td>
    		<?php echo h($person['Person']['secondEmail']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Personal website'); ?></td>
    	<td>
    		<?php echo $this->Text->autoLink(h($person['Person']['personalUrl'])); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Photo'); ?></td>
    	<td>
    		<?php
    			if ($person['Person']['photo']) {
      		  echo "<img src='/people/get_photo/{$person['Person']['idUser']}' alt='photo'>";
      		}
    		?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Gender'); ?></td>
    	<td>
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
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Postcode start'); ?></td>
    	<td>
    		<?php echo h($person['Person']['postcodeStart']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Authority To Work Statement'); ?></td>
    	<td>
    		<?php echo h($person['Person']['authorityToWorkStatement']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Contact preference'); ?></td>
    	<td>
    		<?php echo h($person['Person']['contactPreference']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Highest education Level'); ?></td>
    	<td>
    	  
    	  <?php
    	    if ($person['EducationLevel']['idEducationLevel']) {
    	      echo $person['EducationLevel']['educationLevel'];
    	    }
    	  ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Number Of GCSEs'); ?></td>
    	<td>
    		<?php echo ($person['Person']['noOfGcses']) ? $person['Person']['noOfGcses'] : ''; ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('GCSE English Grade'); ?></td>
    	<td>
    		<?php echo ($person['Person']['gcseEnglishGrade']) ? $person['Person']['gcseEnglishGrade'] : ''; ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('GCSE Maths Grade'); ?></td>
    	<td>
    		<?php echo ($person['Person']['gcseMathsGrade']) ? $person['Person']['gcseMathsGrade'] : ''; ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Five Or More GCSEs'); ?></td>
    	<td>
    		<?php echo ($person['Person']['fiveOrMoreGcses']) ? 'Yes' : 'No'; ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Number Of A levels'); ?></td>
    	<td>
    		<?php echo ($person['Person']['noOfAlevels']) ? $person['Person']['noOfAlevels'] : ''; ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('UCAS Points'); ?></td>
    	<td>
    		<?php echo ($person['Person']['ucasPoints']) ? $person['Person']['ucasPoints'] : ''; ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Student status'); ?></td>
    	<td>
    		<?php echo h($person['Person']['studentStatus']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Mobile'); ?></td>
    	<td>
    		<?php echo h($person['Person']['mobile']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Landline'); ?></td>
    	<td>
    		<?php echo h($person['Person']['landline']); ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Date of birth'); ?></td>
    	<td>
    		<?php echo ($person['Person']['dob']) ? $person['Person']['dob'] : ''; ?>
    		&nbsp;
    	</td>
    	</tr>
      <tr>
    	<td><?php echo __('Drivers license penalty points '); ?></td>
    	<td>
    		<?php echo ($person['Person']['penaltyPoints']) ? $person['Person']['penaltyPoints'] : ''; ?>
    		&nbsp;
    	</td>
    	
    </tr>
    
  </tbody>
</table>








<div class="profile-related">







<div class="related">
	<h3><?php echo ($its_me) ? 'My Skills' : "{$person['Person']['forename1']}'s skills";?></h3>
	<?php if (!empty($person['Skill'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Skill'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('Verified?'); ?></th>
		
	</tr>
	<?php
		$i = 0;
		foreach ($person['Skill'] as $skill): ?>
		<tr>
			<td><?php echo $skill['skillName'];?></td>
			<td><?php echo $skill['skillLevel'];?></td>
			<td><?php echo ($skill['verified']) ? 'Yes.' : 'No.';?> <?=$skill['howVerified']?></td>
		
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>






<div class="related">
	<h3><?php echo ($its_me) ? 'My Referees' : "{$person['Person']['forename1']}'s referees";?></h3>
	<?php if (!empty($person['Referee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Relationship'); ?></th>
		<th><?php echo __('OK to contact?'); ?></th>
		<th><?php echo __('Verified?'); ?></th>
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
			<td><?php echo ($referee['verified']) ? 'Yes.' : 'No.';?> <?=$referee['howVerified']?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>







<div class="related">
	<h3><?php echo ($its_me) ? 'My Professional qualifications' : "{$person['Person']['forename1']}'s professional qualifications";?></h3>
	<?php if (!empty($person['ProfessionalQualification'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th>Qualification</th>
		<th>Sector</th>
		<th>Awarding body</th>
		<th><?php echo __('Result'); ?></th>
		<th><?php echo __('Verified?'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['ProfessionalQualification'] as $professionalQualification): ?>
		<?php
		$p = $this->requestAction("/professional_qualifications/get_single/{$professionalQualification['idProfessionalQualifications']}");
		?>
		<tr>
			<td><?php echo $professionalQualification['qualificationName'];?> (<?=($professionalQualification['yearObtained'])?>)</td>
			<td><?php echo ($p['Sector']['idSectors']) ? $p['Sector']['sectorTitle'] : $p['ProfessionalQualification']['otherSector'];?></td>
			<td><?php echo $professionalQualification['awardingBody'];?></td>
			<td><?php echo $professionalQualification['result'];?></td>
			<td><?php echo ($professionalQualification['verified']) ? 'Yes' : 'No';?> <?=$professionalQualification['howVerified']?></td>

		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>





<div class="related">
	<h3><?php echo ($its_me) ? 'My Experiences' : "{$person['Person']['forename1']}'s experiences";?></h3>
	<?php if (!empty($person['Experience'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th>Job</th>
		<th>Employment lvl</th>
		<th>Key duties</th>
		<th><?php echo __('Verified'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Experience'] as $experience): ?>
		<?php
		$e = $this->requestAction("/experiences/get_single/{$experience['idExperiences']}");
		?>
		<tr>
		  <td>
		  <?=($experience['JobTitles_idJobTitles']) ? $e['JobTitle']['jobTitle'] : $experience['otherJobTitle'];?> at 
		  <?php echo $experience['employerName'];?> 
		  (<?php echo $experience['dateStarted'];?> to <?php echo $experience['dateFinished'];?>)
		  </td>
			<td><?php echo $e['EmploymentLevel']['employmentLevel'];?></td>
			<td><?php echo $experience['keyDuties'];?></td>
			<td><?php echo ($experience['verified']) ? 'Yes.' : 'No';?> <?=$experience['howVerified']?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>








<div class="related">
	<h3><?php echo ($its_me) ? 'My Educational Qualifications' : "{$person['Person']['forename1']}'s educational qualifications";?></h3>
	<?php if (!empty($person['EducationalQualification'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Qualification'); ?></th>
		<th><?php echo __('Course'); ?></th>
		<th>Education level</th>
		<th>Subject</th>
		<th><?php echo __('Institution'); ?></th>
		<th><?php echo __('Verified'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['EducationalQualification'] as $educationalQualification): ?>
		<?php
		$e = $this->requestAction("/educational_qualifications/get_single/{$educationalQualification['idEducationalQualifications']}");
		?>
		<tr>
			<td><?php echo $educationalQualification['qualificationType'];?> (<?php echo $educationalQualification['yearObtained'];?>)</td>
			<td><?php echo $educationalQualification['courseName'];?></td>
			<td><?php echo $e['EducationLevel']['educationLevel'];?></td>
			<td><?php echo $educationalQualification['mainSubject'];?></td>
			<td><?php echo $educationalQualification['nameOfInstitutions'];?> (<?php echo $educationalQualification['country'];?>)</td>
			<td><?php echo ($educationalQualification['verified']) ? 'Yes' : 'No';?> <?=$educationalQualification['howVerified'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="clear"></div>
</div>