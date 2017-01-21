<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html><!--<![endif]-->
	<head>
		<title>Surfrider <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico"/>
		<?php 
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		wp_head();
		?>
	</head>
	<body>
		<div id="container">
			<div id="header" class="clearfix">
				<div class="clearfix">
					<div id="top-block">
	            		<p id="blurb">Protecting Oceans, Waves and Beaches since 1984</p>
	        		</div>
	        		<div id="masthead">
	        			<a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a>
	        		</div>
	        		<div id="chlabel">
	        			<div id="chlabelbox"><?php bloginfo('name'); ?></div>
	        			<div id="chlabelright"></div>
	        		</div>
	        	</div>
	        	<?php wp_nav_menu(array( 'theme_location' => 'main-menu' , 'container' => false , 'menu_class'  => 'topnav' )); ?>
			</div>
			<div id="main" class="clearfix">
				<div id="graphic">
					<img src="<?php header_image(); ?>" alt="" />
				</div>