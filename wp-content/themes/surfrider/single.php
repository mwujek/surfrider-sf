<?php get_header();?>
<div id="leftcol" class="clearfix">
	<?php dynamic_sidebar('Topbar Widgets') ?>
	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="base entry clearfix">
			<div class="meta">
				<span><?php the_time('F j, Y') ?></span>
				<?php if(comments_open()||get_comments_number()) echo '|'; ?> 
				<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ' '); ?>
			</div>
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<?php the_content('<br/>More Details<span class="moreicon"></span>'); ?>
		</div>
		<div class="scomment <?php if(!comments_open()&&!get_comments_number()) echo 'scomment_none'; ?>">
			<?php comments_template(); ?>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<div class="base entry clearfix">
			<h3>Not Found</h3>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php get_sidebar();?>
<?php get_footer();?>