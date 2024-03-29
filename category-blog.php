<!-- Wordpress Template Hierarchy example. 
Having a "blog" category defined, wp will 
automatically use this template to present the archive -->

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <section class="row">
            <div class="col-lg-3 bg">
                <?php if (is_active_sidebar('blog-sidebar')) : ?>
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                <?php endif; ?>
            </div>

            <div class="col-lg-9">


                <h1 class="mb-4 text-center"><?php echo single_cat_title(); ?></h1>

                <?php

                get_template_part('inc/section', 'archive');

                // Simple next and previous navigation between posts 
                previous_posts_link();
                next_posts_link();

                ?>

                <!-- Basic Example from https://codex.wordpress.org/Function_Reference/paginate_links
                To add pagination to your search results and archives, you can use the following example:
                -->
            </div>
        </section>

    </div>
</section>

<?php get_footer(); ?>