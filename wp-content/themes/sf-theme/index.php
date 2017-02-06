<?php get_header(); ?> 
<div id="main" class="content-container">
    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(__('(more...)')); ?>
            <hr> <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>