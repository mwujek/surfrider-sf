<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html><!--<![endif]-->
	<head>
		<title>Surfrider <?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /> -->
		
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico"/>
		
		<?php 
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		wp_head();
		?>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<script src="https://use.typekit.net/bxs5ehp.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<style type="text/css">
			html { margin-top: 0px !important; }
		</style>

		<!-- universal script -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/base-script.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.5/flickity.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/surfrider-base-style.css" type="text/css" />

		<?php if( is_admin_bar_showing() ){ ?>
<style type="text/css">
    #wpadminbar{ bottom: -50px; }
</style>
<script type="text/javascript">
    function showAdminPanel(){
        document.getElementById("wpadminbar").style.bottom = "0px";
    }
</script>
<?php } ?>


	</head>

	<body>

	<!-- special admin layout adjustment -->
	    <?php if( is_admin_bar_showing() ){ ?>
<div style="position: fixed; bottom: 0; color: #fff; z-index: 20000; left: 0; padding: 8px 20px; font-size: 14px; letter-spacing: 0.5px; text-transform: uppercase; font-weight: 100; border: 1px solid #000; border-radius: 4px; background: rgba(0,0,0,0.7); font-family:monospace; cursor:pointer;" onclick="showAdminPanel()">Show admin panel</div> <?php } ?>
	<!-- special admin layout adjustment -->
		
	<header>
		<div class="header-inner">
			<div class="logo-container">
			<a href="/">
				<div class="logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg"></div>
				<div class="wordmark">
					<span>Surfrider Foundation</span>
					<span>San Francisco Chaper</span>
				</div>
			</a>
			</div>
			<i class="icon ion-navicon mobile-nav-toggle" status="closed"></i>
    		<?php wp_nav_menu(array( 'theme_location' => 'main-menu' , 'container' => false,  'menu_class'  => 'desktop-topnav' )); ?>
    		<?php wp_nav_menu(array( 'theme_location' => 'main-menu' , 'container' => 'div', 'div', 'container_class' => 'mobile-menu-container', 'menu_class'  => 'mobile-nav' )); ?>
    	</div>
	</header>
				