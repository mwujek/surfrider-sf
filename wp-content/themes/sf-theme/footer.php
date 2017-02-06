<footer>
	
<div class="footer-inner">
	<section class="footer-col">
		<h1>Our Newsletter</h1>
		<input>
	</section>

	<section class="footer-col">
		<h1>Our Programs</h1>
		<?php wp_nav_menu(array( 'theme_location' => 'main-menu' , 'container' => false,  'menu_class'  => 'footer-menu' )); ?>
	</section>

	<section class="footer-col">
		<h1>Get Involved</h1>
		<?php wp_nav_menu(array( 'theme_location' => 'main-menu' , 'container' => false,  'menu_class'  => 'footer-menu' )); ?>
	</section>


</div>

</footer>
		<?php wp_footer(); ?>
	</body>
</html>