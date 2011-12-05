
<h2>Administration area</h2>

<h4>Howdy, <strong><em>admin!</em></strong> Select an action below:</h4>

<div class="actions">
  <ul>
    <li><a href="/sectors">Manage Sectors</a></li>
    <li><a href="/job_titles">Manage Job Titles</a></li>
    <li><a href="/education_levels">Manage Education Levels</a></li>
    <li><a href="/employment_levels">Manage Employment levels</a></li>
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
  		<th><?php echo __('Qualification'); ?></th>
  		<th><?php echo __('Course'); ?></th>
  		<th>Education level</th>
  		<th>Subject</th>
  		<th><?php echo __('Institution'); ?></th>
  		<th class="actions"><?php echo __('Actions');?></th>
  	</tr>
  	<?php
  		$i = 0;
  		foreach ($educational_qualifications as $educationalQualification): ?>
  		<tr>
  			<td><?php echo $educationalQualification['Person']['forename1'];?></td>
        <td><?php echo $educationalQualification['EducationalQualification']['qualificationType'];?> (<?php echo $educationalQualification['EducationalQualification']['yearObtained'];?>)</td>
  			<td><?php echo $educationalQualification['EducationalQualification']['courseName'];?></td>
  			<td><?php echo $educationalQualification['EducationLevel']['educationLevel'];?></td>
  			<td><?php echo $educationalQualification['EducationalQualification']['mainSubject'];?></td>
  			<td><?php echo $educationalQualification['EducationalQualification']['nameOfInstitutions'];?> (<?php echo $educationalQualification['EducationalQualification']['country'];?>)</td>  			<td class="actions">
  				<?php echo $this->Html->link(__('Verify'), array('controller' => 'educational_qualifications', 'action' => 'admin_edit', $educationalQualification['EducationalQualification']['idEducationalQualifications'])); ?>
  				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'educational_qualifications', 'action' => 'delete', $educationalQualification['EducationalQualification']['idEducationalQualifications']), null, __('Are you sure you want to delete # %s?', $educationalQualification['EducationalQualification']['idEducationalQualifications'])); ?>
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
  		<th>User</th>
      <th>Qualification</th>
  		<th>Sector</th>
  		<th>Awarding body</th>
  		<th><?php echo __('Result'); ?></th>
  		<th class="actions"><?php echo __('Actions');?></th>
  	</tr>
  	<?php
  		$i = 0;
  		foreach ($professional_qualifications as $professionalQualification): ?>
  		<tr>
  			<td><?php echo $professionalQualification['Person']['forename1'];?></td>
  			<td><?php echo $professionalQualification['ProfessionalQualification']['qualificationName'];?> (<?=($professionalQualification['ProfessionalQualification']['yearObtained'])?>)</td>
  			<td><?php echo ($professionalQualification['Sector']['idSectors']) ? $professionalQualification['Sector']['sectorTitle'] : $professionalQualification['ProfessionalQualification']['otherSector'];?></td>
  			<td><?php echo $professionalQualification['ProfessionalQualification']['awardingBody'];?></td>
  			<td><?php echo $professionalQualification['ProfessionalQualification']['result'];?></td>
  			<td class="actions">
  				<?php echo $this->Html->link(__('Verify'), array('controller' => 'professional_qualifications', 'action' => 'admin_edit', $professionalQualification['ProfessionalQualification']['idProfessionalQualifications'])); ?>
  				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'professional_qualifications', 'action' => 'delete', $professionalQualification['ProfessionalQualification']['idProfessionalQualifications']), null, __('Are you sure you want to delete # %s?', $professionalQualification['ProfessionalQualification']['idProfessionalQualifications'])); ?>
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
  		<th>User</th>
  		<th>Job</th>
  		<th>Employment lvl</th>
  		<th>Key duties</th> 
  		<th class="actions"><?php echo __('Actions');?></th>
  	</tr>
  	<?php
  		$i = 0;
  		foreach ($experiences as $experience): ?>
  		<tr>
  		  <td><?=$experience['Person']['forename1']?></td>
  			<td>
  		  <?=($experience['Experience']['JobTitles_idJobTitles']) ? $experience['JobTitle']['jobTitle'] : $experience['Experience']['otherJobTitle'];?> at 
  		  <?php echo $experience['Experience']['employerName'];?> 
  		  (<?php echo $experience['Experience']['dateStarted'];?> to <?php echo $experience['Experience']['dateFinished'];?>)
  		  </td>
  			<td><?php echo $experience['EmploymentLevel']['employmentLevel'];?></td>
  			<td><?php echo $experience['Experience']['keyDuties'];?></td>
  			<td class="actions">
  				<?php echo $this->Html->link(__('Verify'), array('controller' => 'experiences', 'action' => 'admin_edit', $experience['Experience']['idExperiences'])); ?>
  				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experiences', 'action' => 'delete', $experience['Experience']['idExperiences']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['idExperiences'])); ?>
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
  				<?php echo $this->Html->link(__('Verify'), array('controller' => 'referees', 'action' => 'admin_edit', $referee['Referee']['idReferees'])); ?>
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
  				<?php echo $this->Html->link(__('Verify'), array('controller' => 'skills', 'action' => 'admin_edit', $skill['Skill']['idSkills'])); ?>
  				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['Skill']['idSkills']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['idSkills'])); ?>
  			</td>
  		</tr>
  	<?php endforeach; ?>
  	</table>
  </div>
  <?php endif; ?>
  
  
  
  
  
  
  
  
</div>
