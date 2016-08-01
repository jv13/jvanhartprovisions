
<?php
/*
Template Name: Blog Posts
*/

get_header(); ?>

<div class="row">
  <div class="four columns">
    <?php dynamic_sidebar('blog-one'); ?>
    <?php dynamic_sidebar('blog-two'); ?>
  </div>



<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
        <div class="eight columns">

          <h2>news and events</h2>
                <div class="row">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

                    <div class="three columns news-thumbnail">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                      </a>
                    </div>

                    <div class="nine columns">
                        <h2 class="news-title">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <h4 class="postdate">
                          <?php the_time('F j, Y'); ?>
                        </h4>

                        <?php the_excerpt(); ?>

                    </div>
                    <?php endwhile; ?>
                <!-- Navigation -->

                   <?php
                 endif; // end if
                    wp_reset_query(); ?>
                </div>

        </div>
    </div>

<?php get_footer(); ?>
