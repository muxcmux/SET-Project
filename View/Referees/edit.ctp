
<?php echo $this->Form->create('Referee', array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Referee'); ?></legend>
	<?php
		echo $this->Form->input('idReferees');
		echo $this->Form->input('title');
		echo $this->Form->input('forename');
		echo $this->Form->input('surname');
		echo $this->Form->input('email');
		echo $this->Form->input('contactPhone');
		echo $this->Form->input('relationship', array('type' => 'select', 'options' => array('Employer' => 'employer', 'Academic' => 'academic')));
		if ($this->data['Referee']['referenceDoc']) {
		  echo '<label>Document</label>';
		  echo "<img src='/referees/get_document/{$this->data['Referee']['idReferees']}'><br>";
		  echo "<a class='red' href='/referees/delete_document/{$this->data['Referee']['idReferees']}'>Delete document</a><br><br>";
		} else {
		  echo $this->Form->input('referenceDoc', array('label' => 'Document', 'type' => 'file'));
		}
		echo $this->Form->input('permissionToContact', array('type' => 'checkbox', 'label' => 'Can we contact this referee?'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>