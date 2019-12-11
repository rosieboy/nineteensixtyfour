<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <h1 class="mb-4 text-center"><?php //echo single_cat_title(); ?>CARS FOR SALE</h1>

        <?php
        get_template_part('inc/section', 'archive');
        previous_posts_link();
        next_posts_link();
        ?>
        
    </div>
</section>

<?php get_footer(); ?>