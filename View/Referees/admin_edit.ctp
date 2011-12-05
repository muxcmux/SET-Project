<?php
$referee = $this->data;
?>
<?php echo $this->Form->create('Referee');?>
	<fieldset>
		<legend>Verify Referee for <?=$this->data['Person']['username']?></legend>
		
		<dl>
  		<dt><?php echo __('Person'); ?></dt>
  		<dd>
  			<?php echo $this->Html->link($referee['Person']['forename1'], array('controller' => 'people', 'action' => 'view', $referee['Person']['idUser'])); ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('Referee'); ?></dt>
  		<dd>
  			<?php echo h($referee['Referee']['title']); ?> 
  			<?php echo h($referee['Referee']['forename']); ?> 
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
  			<?php echo ($referee['Referee']['permissionToContact']) ? 'Yes.' : 'No.'; ?>
  			&nbsp;
  		</dd>
  		<dt><?php echo __('ReferenceDoc'); ?></dt>
  		<dd>
  		  <?php if ($referee['Referee']['referenceDoc']): ?>
  		    <img src="/referees/get_document/<?=$referee['Referee']['idReferees']?>">
  		  <?php else: ?>
  		    N/A
        <?php endif; ?>
  			&nbsp;
  		</dd>
  	</dl>
		
		
	<?php
		echo $this->Form->input('idReferees');
		echo $this->Form->input('verified', array('type' => 'checkbox'));
		echo $this->Form->input('howVerified', array('label' => 'Verification method/evidence '));		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>