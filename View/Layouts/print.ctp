<!doctype html>
<html>
  <head>
    <?=$this->Html->css('print');?>
    <title><?=$title_for_layout;?></title>
  </head>
  <body onload="javascript:window.print();">
    <div id="printer">
      <?php echo $content_for_layout; ?>
    </div>
  </body>
</html>
