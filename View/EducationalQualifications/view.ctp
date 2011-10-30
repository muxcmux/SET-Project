<div class="educationalQualifications view">
<h2><?php  echo __('Educational Qualification');?></h2>
	<dl>
		<dt><?php echo __('IdEducationalQualifications'); ?></dt>
		<dd>
			<?php echo h($educationalQualification['EducationalQualification']['idEducationalQualifications']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationalQualification['Person']['title'], array('controller' => 'people', 'action' => 'view', $educationalQualification['Person']['idUser'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('QualificationType'); ?></dt>
		<dd>
			<?php echo h($educationalQualification['EducationalQualification']['qualificationType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CourseName'); ?></dt>
		<dd>
			<?php echo h($educationalQualification['EducationalQualification']['courseName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Education Level'); ?></dt>
		<dd>
			<?php echo $this->Html->link($educationalQualification['EducationLevel']['educationLevel'], array('controller' => 'education_levels', 'action' => 'view', $educationalQualification['EducationLevel']['idEducationLevel'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vocational'); ?></dt>
		<dd>
			<?php echo h($educationalQualification['EducationalQualification']['vocational']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MainSubject'); ?></dt>
		<dd>
			<?php echo h($educationalQualification['EducationalQualification']['mainSubject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NameOfInstitutions'); ?></dt>
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
		<dt><?php echo __('Verified'); ?></dt>
		<dd>
			<?php echo h($educationalQualification['EducationalQualification']['verified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HowVerified'); ?></dt>
		<dd>
			<?php echo h($educationalQualification['EducationalQualification']['howVerified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Educational Qualification'), array('action' => 'edit', $educationalQualification['EducationalQualification']['idEducationalQualifications'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Educational Qualification'), array('action' => 'delete', $educationalQualification['EducationalQualification']['idEducationalQualifications']), null, __('Are you sure you want to delete # %s?', $educationalQualification['EducationalQualification']['idEducationalQualifications'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educational Qualifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educational Qualification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Education Levels'), array('controller' => 'education_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education Level'), array('controller' => 'education_levels', 'action' => 'add')); ?> </li>
	</ul>
</div>
