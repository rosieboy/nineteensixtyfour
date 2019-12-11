<?php
/*
 * Template Name: Contact Us
 *
 */
?>

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1291.978540115164!2d13.50093277051259!3d59.3434752129218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sse!4v1574797042143!5m2!1sen!2sse" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-3">
                <?php get_template_part('inc/section', 'content') ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>