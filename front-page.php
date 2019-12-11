<?php get_header(); ?>

<?php if (has_post_thumbnail()) : ?>
    <div class="banner-post">
        <img src="<?php the_post_thumbnail_url('/wp-content/uploads/2019/11/gabor-monori-VCVI5QUvFAY-unsplash.jpg'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
    </div>
<?php endif ?>

<section>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php get_template_part('inc/section', content) ?>
    </div>
</section>

<?php get_footer(); ?>