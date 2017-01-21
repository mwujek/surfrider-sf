<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html><!--<![endif]-->
	<head>
		<title>Surfrider <?php bloginfo('name'); ?></title>
		<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> -->
		
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico"/>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/surfrider-base-style.css" type="text/css" />
		<?php 
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		wp_head();
		?>
		<script src="https://use.typekit.net/bxs5ehp.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<style type="text/css">
			html { margin-top: 0px !important; }
		</style>
	</head>
	<body>
		
	<header>
		<div class="header-inner">
			<span>This is the Real Quick Logo</span>
    		<?php wp_nav_menu(array( 'theme_location' => 'main-menu' , 'container' => false , 'menu_class'  => 'topnav' )); ?>
    	</div>
	</header>
				