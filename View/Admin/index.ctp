
<h2>Administration area</h2>

<h4>Howdy, <strong><em>admin!</em></strong> Select an action below:</h4>

<div class="actions">
  <ul>
    <li><a href="/sectors">Manage Sectors</a></li>
    <li><a href="/job_titles">Manage Job Titles</a></li>
  </ul>
</div>
<div class="clear"></div>


<div class="profile-related">
  
  
  
  
  
  <?php if (!empty($educational_qualifications)):?>
  <div class="related">
  	<h3>Educational Qualifications that need verification</h3>
  	<table cellpadding = "0" cellspacing = "0">
  	<tr>
  		<th><?php echo __('User'); ?></th>
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
  		<th class="actions"><?php echo __('Actions');?></th>
  	</tr>
  	<?php
  		$i = 0;
  		foreach ($education_qualifications['EducationalQualification'] as $educationalQualification): ?>
  		<tr>
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
  </div>
  <?php endif; ?>
  
  
  
  
  
  <?php if (!empty($professional_qualifications)):?>
  <div class="related">
  	<h3><?php echo __('Professional Qualifications that need verification');?></h3>
  	<table cellpadding = "0" cellspacing = "0">
  	<tr>
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
  		foreach ($professional_qualifications as $professionalQualification): ?>
  		<tr>
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
  				<?php echo $this->Html->link(__('Edit'), array('controller' => 'professional_qualifications', 'action' => 'edit', $professionalQualification['idProfessionalQualifications'])); ?>
  				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'professional_qualifications', 'action' => 'delete', $professionalQualification['idProfessionalQualifications']), null, __('Are you sure you want to delete # %s?', $professionalQualification['idProfessionalQualifications'])); ?>
  			</td>
  		</tr>
  	<?php endforeach; ?>
  	</table>
  </div>
  <?php endif; ?>
  
  
  
  
  
  
  <?php if (!empty($experiences)):?>
  <div class="related">
  	<h3><?php echo __('Experiences that need verification');?></h3>
  	<table cellpadding = "0" cellspacing = "0">
  	<tr>
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
  		foreach ($experiences as $experience): ?>
  		<tr>
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
  </div>
  <?php endif; ?>
  
  
  
  
  
  
  <?php if (!empty($referees)):?>
  <div class="related">
  	<h3><?php echo __('Referees that need verification');?></h3>
  	<table cellpadding = "0" cellspacing = "0">
  	<tr>
  		<th><?php echo __('User'); ?></th>
  		<th><?php echo __('Name'); ?></th>
  		<th><?php echo __('Email'); ?></th>
  		<th><?php echo __('ContactPhone'); ?></th>
  		<th><?php echo __('Relationship'); ?></th>
  		<th class="actions"><?php echo __('Actions');?></th>
  	</tr>
  	<?php
  		$i = 0;
  		foreach ($referees as $referee): ?>
  		<tr>
  		  <td><?php echo $referee['Person']['username'];?></td>
  			<td><?php echo $referee['Referee']['title'];?> <?php echo $referee['Referee']['forename'];?> <?php echo $referee['Referee']['surname'];?></td>
  			<td><?php echo $referee['Referee']['email'];?></td>
  			<td><?php echo $referee['Referee']['contactPhone'];?></td>
  			<td><?php echo $referee['Referee']['relationship'];?></td>
  			<td class="actions">
  				<?php echo $this->Html->link(__('Edit'), array('controller' => 'referees', 'action' => 'edit', $referee['Referee']['idReferees'])); ?>
  				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'referees', 'action' => 'delete', $referee['Referee']['idReferees']), null, __('Are you sure you want to delete # %s?', $referee['Referee']['idReferees'])); ?>
  			</td>
  		</tr>
  	<?php endforeach; ?>
  	</table>
  </div>
  <?php endif; ?>
  
  
  
  
  
  
  
  
  	<?php if (!empty($skills)):?>
  <div class="related">
  	<h3><?php echo __('Skills that need verification');?></h3>
  	<table cellpadding = "0" cellspacing = "0">
  	<tr>
  		<th><?php echo __('User'); ?></th>
  		<th><?php echo __('Skill'); ?></th>
  		<th><?php echo __('Level'); ?></th>
  		<th class="actions"><?php echo __('Actions');?></th>
  	</tr>
  	<?php
  		$i = 0;
  		foreach ($skills as $skill): ?>
  		<tr>
  			<td><?php echo $skill['Person']['username'];?></td>
  			<td><?php echo $skill['Skill']['skillName'];?></td>
  			<td><?php echo $skill['Skill']['skillLevel'];?></td>
  			<td class="actions">
  				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['Skill']['idSkills'])); ?>
  				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['Skill']['idSkills']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['idSkills'])); ?>
  			</td>
  		</tr>
  	<?php endforeach; ?>
  	</table>
  </div>
  <?php endif; ?>
  
  
  
  
  
  
  
  
</div>
