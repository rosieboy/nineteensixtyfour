<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif ?>

        <div class="row">
            <div class="col-lg-6">
                <?php get_template_part('inc/section', 'cars') ?>
                <?php wp_link_pages(); ?>
            </div>

            <div class="col-lg-6">
                <ul>
                    <!--
                    <li>Colour: <?php //echo get_post_meta($post->ID, 'Colour', true) ?></li>
                    <li>Registration: <?php //echo get_post_meta($post->ID, 'Registration', true) ?></li>
                    -->
                    <li>Colour: <?php the_field('colour') ?></li>
                    <li>Registration: <?php the_field('registration') ?></li>

                    <!-- Use Advanced Custom Fields PRO for better fields management -->

                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>