<!-- Note: WordPress search isn't awesome – use something like Search Everything instead (a plugin) -->

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <h1 class="mb-4 text-center display-4">Search Results for '<?php echo get_search_query() ?>'</h1>

        <?php

        get_template_part('inc/section', 'searchresults');

        previous_posts_link();
        next_posts_link();
        
        ?>
       
    </div>
</section>

<?php get_footer(); ?>