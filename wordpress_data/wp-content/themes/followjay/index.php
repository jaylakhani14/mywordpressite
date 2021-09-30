<?php get_header(); ?>
    <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-lg-8 col-md-8 col-sm-12">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                    <h1><?php the_title(); ?></h1>
                    <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                    <p><?php the_content(__('(more...)')); ?></p>
                </div>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>