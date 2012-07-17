<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
		<?php if(!empty($title_page)):?>
		<title>devMedia MVC | <?php echo $title_page; ?></title>
		<?php else : ?>
		<title>devMedia MVC</title>
		<?php endif; ?>	
	</head>
	
	

<body>
<div id="wrapper">
<header>
	<nav>
		<ul id="menu-nav">
			<li><a href="<?php echo WEBROOT;?>/">ACCUEIL</a></li>
			<li><a href="<?php echo WEBROOT;?>/a-propos">A PROPOS</a></li>
			<li><a href="<?php echo WEBROOT;?>/realisations">REALISATIONS</a>
				<ul class="sub-menu">
					<li><a href="<?php echo WEBROOT;?>/realisations/one">one</a></li>
					<li><a href="<?php echo WEBROOT;?>/realisations/two">two</a></li>
					<li><a href="<?php echo WEBROOT;?>/realisations/three">three</a></li>
				</ul>
			</li>
			<li><a href="<?php echo WEBROOT;?>/ressources">RESSOURCES</a></li>
			<li><a href="<?php echo WEBROOT;?>/contact">CONTACT</a></li>
		</ul>
	</nav>
</header>
<?php if(!empty($content)):?>
<?php echo $content;?>
<?php else:?>
<?php endif;?>


<footer>
	<p><small class="footer">copyright 2012<small></p>
</footer>
</div><!-- end wrapper -->
</body>
</html>