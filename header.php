<!DOCTYPE html>
<!--[if lt IE 7]> 		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    		<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    		<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 	<html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/style.css">	
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/libs/modernizr.js"></script>
	
	<?php // Google Verification  ?>
	<?php // Fonts  ?>

	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
	<p id="oldieUsers">You are accessing this website with an old version of Internet Explorer. This not only reduces the quality of the websites you are viewing (as you may see below) it also poses a security risk to your computer. You should still be able to access all of the information on this website but we highly recommend upgrading to a browser such as <a href="http://www.google.com/chrome/">Google Chrome</a>.</p>
	<![endif]-->
	
	<header role="banner">
		<div class="wrapper">
			<h1></h1>
		</div><!-- /wrapper-->
	</header>
	
	<nav role="primary">
		<div class="wrapper">
			<ul role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
				<li><a href="#"></a></li>
			</ul>
		</div><!-- /wrapper-->
	</nav>
