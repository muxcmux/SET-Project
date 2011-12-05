<?php
$educationalQualification = $this->data;
?>
<?php echo $this->Form->create('EducationalQualification');?>
	<fieldset>
		<legend><?php echo __('Verify Educational Qualification'); ?></legend>
		<dl>
  		<dt><?php echo __('Person'); ?></dt>
  		<dd>
  			<?php echo $this->Html->link($educationalQualification['Person']['forename1'], array('controller' => 'people', 'action' => 'view', $educationalQualification['Person']['idUser'])); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Qualification Type'); ?></dt>
  		<dd>
  			<?php echo h($educationalQualification['EducationalQualification']['qualificationType']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Course Name'); ?></dt>
  		<dd>
  			<?php echo h($educationalQualification['EducationalQualification']['courseName']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Education Level'); ?></dt>
  		<dd>
  			<?php echo $educationalQualification['EducationLevel']['educationLevel']; ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Main Subject'); ?></dt>
  		<dd>
  			<?php echo h($educationalQualification['EducationalQualification']['mainSubject']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Name Of Institution'); ?></dt>
  		<dd>
  			<?php echo h($educationalQualification['EducationalQualification']['nameOfInstitutions']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Country'); ?></dt>
  		<dd>
  			<?php echo h($educationalQualification['EducationalQualification']['country']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('YearObtained'); ?></dt>
  		<dd>
  			<?php echo h($educationalQualification['EducationalQualification']['yearObtained']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Result'); ?></dt>
  		<dd>
  			<?php echo h($educationalQualification['EducationalQualification']['result']); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('ThesesTitle'); ?></dt>
  		<dd>
  			<?php echo h($educationalQualification['EducationalQualification']['thesesTitle']); ?>
  			&nbsp;
  		</dd>
  	</dl>
	<?php
	  echo $this->Form->input('idEducationalQualifications');
		echo $this->Form->input('verified', array('type' => 'checkbox'));
		echo $this->Form->input('howVerified', array('label' => 'Verification method/evidence '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>