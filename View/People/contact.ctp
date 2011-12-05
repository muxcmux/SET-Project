<h3>Contact <?=$person['Person']['title']?> <?=$person['Person']['forename1']?> <?=$person['Person']['forename2']?> <?=$person['Person']['surname']?></h3>

<dl>
  <dt>E-mail</dt>
  <dd>
    <?=$person['Person']['username']?>
    &nbsp;
  </dd>
  <?php if ($person['Person']['secondEmail']): ?>
    <dt>Secondary e-mail</dt>
    <dd>
      <?=$person['Person']['secondEmail']?>
      &nbsp;
    </dd>
  <?php endif; ?>
  <?php if ($person['Person']['mobile']): ?>
    <dt>Mobile</dt>
    <dd>
      <?=$person['Person']['mobile']?>
      &nbsp;
    </dd>
  <?php endif; ?>
  <?php if ($person['Person']['landline']): ?>
    <dt>Landline</dt>
    <dd>
      <?=$person['Person']['landline']?>
      &nbsp;
    </dd>
  <?php endif; ?>
  <?php if ($person['Person']['contactPreference']): ?>
    <dt>Contact preference</dt>
    <dd>
      <?=$person['Person']['contactPreference']?>
      &nbsp;
    </dd>
  <?php endif; ?>
</dl>
<?php
  echo $this->Form->create('Person', array('url' => array('action' => 'contact', $person['Person']['idUser'])));
  echo $this->Form->input('email', array('type' => 'hidden', 'value' => $person['Person']['username']));
  echo $this->Form->input('subject', array('value' => ''));
  echo $this->Form->input('message', array('value' => '', 'type' => 'textarea'));
  echo $this->Form->end('Send Message');
?>