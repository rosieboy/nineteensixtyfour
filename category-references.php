<!-- Wordpress Template Hierarchy example. 
Having a "blog" category defined, wp will 
automatically use this template to present the archive -->

<!-- This page is created to show posts with the "references" slug -->

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <section class="row">
                <div class="col-lg-3 bg">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
                <div class="col-lg-9">
                <?php endif; ?>

                <h1 class="mb-4 text-center"><?php echo single_cat_title(); ?></h1>

                <?php

                get_template_part('inc/section', 'references');

                // Simple next and previous navigation between posts 
                previous_posts_link();
                next_posts_link();

                ?>

                <!-- Basic Example from https://codex.wordpress.org/Function_Reference/paginate_links
                To add pagination to your search results and archives, you can use the following example:
                -->
                <?php if (is_active_sidebar('blog-sidebar')) : ?>
                </div>
            </section>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>