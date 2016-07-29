<?php get_header(); ?>
    <section class="row">
      <div class="four columns">
        <?php dynamic_sidebar('blog-one'); ?>
        <?php dynamic_sidebar('blog-two'); ?>
      </div>
        <div class="eight columns">

<!-- BEGIN PAGE PHP -->
            <?php if ( have_posts() ) {
                while( have_posts() ) {
                    /* OUR DATA CONTEXT IS DEFINED */
                    the_post();
                    ?>
                    <h2><?php the_title(); ?></h2>
                    <h3><?php the_date(); ?></h3>
                    <?php


                    if ( has_post_thumbnail() ) { ?>
                      <div class="post-thumbnail">
                        <?php the_post_thumbnail('medium_large'); ?>
                      </div>
                    <?php } ?>


                    <?php the_content(); ?>

                    <?php
                  } // end while
                } // end iff
            ?>
<!-- END PAGE PHP -->

        </div>
    </section>

<?php get_footer(); ?>
