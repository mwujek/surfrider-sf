<?php get_header();?>
<div id="leftcol" class="clearfix">
	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="base entry clearfix">
			<div class="page-entry-body">
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<?php the_content('<br/>More Details<span class="moreicon"></span>'); ?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<div class="base entry clearfix">
			<h3>Not Found</h3>
		</div>
		<?php endif; ?>
		<div class="paged">
			<?php
			global $wp_query;

			$big = 999999999999999999; // need an unlikely integer
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'next_text' => 'Next',
				'prev_text' => 'Previous'
			) );
			?>
		</div>
	</div>
</div>
<?php get_sidebar();?>
<?php get_footer();?>