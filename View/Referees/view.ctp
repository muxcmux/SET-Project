<div class="referees view">
<h2><?php  echo __('Referee');?></h2>
	<dl>
		<dt><?php echo __('IdReferees'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['idReferees']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($referee['Person']['title'], array('controller' => 'people', 'action' => 'view', $referee['Person']['idUser'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forename'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['forename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ContactPhone'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['contactPhone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['relationship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PermissionToContact'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['permissionToContact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PermissionToStoreDetails'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['permissionToStoreDetails']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verified'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['verified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HowVerified'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['howVerified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReferenceDoc'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['referenceDoc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referee'), array('action' => 'edit', $referee['Referee']['idReferees'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Referee'), array('action' => 'delete', $referee['Referee']['idReferees']), null, __('Are you sure you want to delete # %s?', $referee['Referee']['idReferees'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Referees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
