<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $body_classes ?>">
  <a name="top"></a>

<div id="wrapper">
	<div id="col-left" class="sidebar match">
		<?php print $sidebar_first; ?>
	</div><!--end#col-left-->
	<div id="content" class="match">
<?php print $content_top; ?>
		<?php print $content; ?><a href="#top" id="btn-top" class="btn">TOP</a>
	</div><!--end#content-->
</div><!--end#wrapper-->





  <?php print $closure; ?>

</body>
</html>
