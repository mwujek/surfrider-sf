<?php get_header();?>
<div id="leftcol" class="clearfix">
	<?php dynamic_sidebar('Topbar Widgets') ?>
	<div>
		<h2 class="margined20">Search Result</h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="base entry clearfix">
			<div class="thumbnail">
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('surf-thumb');
				} ?>
			</div>
			<div class="entry-body">
				<div class="meta">
					<span><?php the_time('F j, Y') ?></span>
					<?php if(comments_open()||get_comments_number()) echo '|'; ?> 
					<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ' '); ?>
				</div>
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