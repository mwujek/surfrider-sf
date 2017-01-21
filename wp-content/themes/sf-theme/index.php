<?php get_header();?>
<div class="content-container">
    <div class="content" id="main-body">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(__('(more...)')); ?>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    </div>
</div>
<?php get_footer();?>