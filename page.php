<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <?php
        $hasSidebar = is_active_sidebar('page-sidebar');

        if ($hasSidebar) : ?>
            <section class="row">
                <div class="col-lg-3 bg">
                    <?php dynamic_sidebar('page-sidebar'); ?>
                </div>
                <div class="col-lg-9">
        <?php endif; ?>

                <h1><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
                <?php endif ?>

                <?php get_template_part('inc/section', 'content') ?>
                <?php if ($hasSidebar) : ?>
                </div>
            <?php endif; ?>
            </section>
    </div>
</section>

<?php get_footer(); ?>