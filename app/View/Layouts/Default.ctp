<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $this->Html->css('cake.generic.css'); ?>
<?php echo $scripts_for_layout ?>
</head>
<body>
	<?php echo $this->Session->flash('good'); ?>
	<?php echo $this->Session->flash('bad'); ?>	
<div id="all">
	<!-- If you'd like some sort of menu to
	show up on all of your views, include it here -->
	<div id="header">
		<img src="<?php echo $this->webroot; ?>img/logo.png" title="Twitt and Watch - PFE" width="400px">
		<div id="menu">...</div>
	</div>
	
	<div id="int">
		<!-- Here's where I want my views to be displayed -->
		<?php echo $content_for_layout ?>
	</div>
	
</div>
<!-- Add a footer to each displayed page -->
	<div id="footer">
		<div id="footer_int">
			<div id="footer_left">
				<ul>
					<li>Plan du site</li>
					<li>Manuel d'utilisation</li>
					<li>Support</li>
				</ul>
			</div>
			<div id="footer_right">
				EFREI PFE
			</div>
			<div style="clear:left"></div>
		</div>
	</div>
</body>
</html>