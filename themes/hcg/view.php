<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Site Header Content //-->
<style type="text/css">@import "<?php echo $this->getStyleSheet('main.css')?>";</style>
<style type="text/css">@import "<?php echo $this->getStyleSheet('typography.css')?>";</style>

<?php  Loader::element('header_required'); ?>
</head>

<body>

<div id="wrapper">

	<div id="header">
		<h1><a href="<?php echo DIR_REL?>/"><?php echo SITE?></a></h1>
	</div>

	<div id="menu">
			<?php 
						$a = new Area('Header Nav');
									$a->display($c);
												?>
	</div>

	<div id="sidebar">
	<?php 
				$as = new Area('Sidebar');
							$as->display($c);
										?>	
	</div>

	<div id="content">
		<?php  if($c->isEditMode()) { ?>
	<div style="margin-top:50px; margin-bottom:50px;"></div>
	<?php };?>

		<div id="ad-top">
				<?php 
							$aa = new Area('Ad');
										$aa->display($c);
													?>
		</div>
		<div class="entry">
		<?php 	print $innerContent; ?>	
		</div>
	</div>

	<div id="footer">
		<div id="footer-valid">
				<span class="powered-by">This site is powered by <a href="http://www.concrete5.org">concrete5</a></span>
							<?php  
										?>
													&copy; <?php echo date('Y')?> <a href="<?php echo DIR_REL?>/"><?php echo SITE?></a>.
																&nbsp;&nbsp;
																			<?php echo t('All rights reserved.')?>	
																						<span class="sign-in"><a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In to Edit this Site')?></a></span>
		</div>
	</div>

</div>
	<?php  require(DIR_FILES_ELEMENTS_CORE . '/footer_required.php'); ?>
</body>
</html>
