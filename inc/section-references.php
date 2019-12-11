<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card mb-3">
            <div class="row card-body d-flex justify-content-between align-items-left">

                <div class="col-md-6">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="">
                            <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail">
                        </a>
                    <?php endif ?>
                </div>

                <div class="col-md-6">
                    <div class="blog-content h-100 w-100 text-left mx-2 mt-md-0 mt-2">
                        <a href="<?php the_permalink(); ?>" class="">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
            <div>
                <a href="<?php the_permalink(); ?>" class="btn btn-success ml-4 mb-2">Läs mer</a>
            </div>
        </div>

<?php endwhile;
else : endif; ?>