<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <div class="align-center text-center">

            <h2><?php echo get_the_title() ?></h2>

            <!-- https://lokeshdhakar.com/projects/lightbox2/ 
                changed to Plugin URI: http://www.dfactory.eu/plugins/responsive-lightbox/
            -->
            <a href="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'full'); ?>" rel="resplightbox">
                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'medium'); ?>" class="img-fluid mt-4">
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>