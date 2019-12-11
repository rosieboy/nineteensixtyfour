<?php
/*
 * This page lists news post, i.e. category "news" (not category references or blog or anything else) 
 *
 */ 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <?php the_content(); ?>

        <?php
                $fname = get_the_author_meta('first_name');
                $lname = get_the_author_meta('last_name');
                ?>

        <p><?php //echo $fname . " " . $lname; ?></p>

        <p><?php echo "Created " . get_the_date('l j S F, Y'); ?></p>


        <?php
                $tags = get_the_tags();
                foreach ($tags as $tag) : ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?> " class="badge badge-success">
                <?php echo $tag->name; ?>
            </a>
        <?php endforeach; ?>

<?php endwhile;
else : endif; ?>
