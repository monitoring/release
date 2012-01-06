<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $this->Html->css('home.css'); ?>

</head>
<body>
<div id="all">
	<div id="container">
        <div id="enter">
            <?php echo $this->Html->Link('>> Accéder à la plateforme !', array('controller' => 'requests', 'action' => 'index'));?>
        </div>
    </div>
</div>
</body>
</html>