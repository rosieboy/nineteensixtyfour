<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <h1 class="mb-4 text-center"><?php echo single_cat_title(); ?></h1>

        <?php

        get_template_part('inc/section', archive);

        previous_posts_link();
        next_posts_link();

        ?>
        <!-- Basic Example from https://codex.wordpress.org/Function_Reference/paginate_links
             To add pagination to your search results and archives, you can use the following example:
         -->
        <?php /*
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages
        )); */
        ?>
    </div>
</section>

<?php get_footer(); ?>