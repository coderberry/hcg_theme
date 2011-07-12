<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Site Header Content //-->
<style type="text/css">@import "<?php echo $this->getStyleSheet('main.css')?>";</style>
<style type="text/css">@import "<?php echo $this->getStyleSheet('typography.css')?>";</style>

<!-- Site Header Content //-->
<style type="text/css" media="screen">@import "<?php echo $this->getStyleSheet('blueprint/screen.css')?>";</style>
<style type="text/css" media="print">@import "<?php echo $this->getStyleSheet('blueprint/print.css')?>";</style>
<!--[if lt IE 8]>
	<style type="text/css" media="screen">@import "<?php echo $this->getStyleSheet('blueprint/ie.css')?>";</style>
<![endif]-->
<style type="text/css" media="screen">@import "<?php echo $this->getStyleSheet('main.css')?>";</style>
<style type="text/css" media="screen">@import "<?php echo $this->getStyleSheet('typography.css')?>";</style>

<?php  Loader::element('header_required'); ?>

</head>
<body>

<div class="container">
  	<div class="span-24">
  		<div id="nav_container">

  			<ul class="nav">
          <?php 
            $a = new Area('Header Nav');
            $a->display($c);
          ?>
         		<li class="last">&nbsp;</li>
  			</ul>
  			<div id="nav-ribbon"></div>
	  	</div>
  	</div>
  	<div class="span-24 splash">
  		<?php if($c->isEditMode()) { ?>
    	<div style="margin-top:50px; margin-bottom:50px;"></div>
    	<?php };?>
    	<?php $am = new Area('Main');
						$am->display($c); ?>
  	</div>
</div>

<?php  require(DIR_FILES_ELEMENTS_CORE . '/footer_required.php'); ?>

</body>
</html>
