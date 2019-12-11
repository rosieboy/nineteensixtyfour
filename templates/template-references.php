<?php
/*
 * Template Name: References
 *
 */
?>

<?php get_header(); ?>

TEMPLATE-REFERENCES

<section class="page-wrap">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <?php
                $hasSidebar = is_active_sidebar('image-gallery');
                if ($hasSidebar) : ?>
                    <?php dynamic_sidebar('image-gallery'); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-3">
                <h1><?php the_title(); ?></h1>
                <?php get_template_part('inc/section', 'references') ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>