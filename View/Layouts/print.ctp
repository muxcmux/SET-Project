<!doctype html>
<html>
  <head>
    <?=$this->Html->css('print');?>
    <title><?=$title_for_layout;?></title>
  </head>
  <body>
    <div id="printer">
      <?php echo $content_for_layout; ?>
    </div>
  </body>
</html>
