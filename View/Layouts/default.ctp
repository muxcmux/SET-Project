<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo __('JobSeeker:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
  <div id="header">
		<a href="/" id="logo"></a>
		<ul>
      <li><a href="/">Home</a></li>
      <li>|</li>
      <li><a href="/search">Search</a></li>
      <li>|</li>
      <?php if ($this->Html->logged_in()) : ?>
        <li>Welcome, <?php echo $this->Session->read('Auth.User.forename1'); ?></li>
        <?php if ($this->Session->read('Auth.User.role') == 'admin') : ?>
          <li><a href="/dashboard">Dashboard</a></li>
        <?php else: ?>
          <li><a href="/profile">My Profile</a></li>
        <?php endif; ?>
        <li><a href="/logout" class="red">[logout]</a></li>
      <?php else : ?>
        <li><a href="/login">Login</a></li>
        <li>|</li>
        <li><a href="/register" class="register">Create you profile!</a></li>        
      <?php endif ?>
		</ul>
    <div class="clear"></div>
	</div>
	<div id="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework'), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>