<?php
/*
Template Name: Home Page 2017
*/
?>

<?php get_header(); ?>

<div class="page-contents">

<div class="slider">
	<article class="glider">
		<div style="background:url(<?php echo get_template_directory_uri();?>/img/jon-weiand/ob-longboard-wave.jpg);">
		</div>
	</article>
	<article class="glider">
		<div style="background:url(<?php echo get_template_directory_uri();?>/img/jon-weiand/wave-at-ob.jpg);">
		</div>
	</article>
	<article class="glider">
		<div style="background:url(<?php echo get_template_directory_uri();?>/img/jon-weiand/ob-and-sunset.jpg);">
		</div>
	</article>
	<article class="glider">
		<div style="background:url(<?php echo get_template_directory_uri();?>/img/jon-weiand/baker.jpg);">
		</div>
	</article>
</div>
	<div class="content-inner">

	<h1 style="padding: 30vh 0">spacer</h1>

		<!-- GET PAGE CONTENTS -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(__('(more...)')); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		<!-- END OF PAGE CONTENTS -->

	</div> <!-- END OF CONTENT INNER -->
</div> <!-- END OF PAGE CONTENTS -->


<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/home.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.5/flickity.pkgd.min.js"></script>

<?php get_footer(); ?>