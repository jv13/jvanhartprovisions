
<?php
/*
Template Name: About Page
*/

get_header(); ?>

<section class="row">
    <div class="twelve columns">
    <!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) :
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <?php the_content();
                endwhile;
            endif; ?>
    <!-- END PAGE PHP -->
    </div>
</section>


<section class="row aboutbottomspace">
    <div class="four columns">
      <?php dynamic_sidebar('about-one'); ?>
    </div>

    <div class="four columns">
      <?php dynamic_sidebar('about-second'); ?>
    </div>

    <div class="four columns">
      <?php dynamic_sidebar('about-third'); ?>
    </div>
</section>

<?php get_footer(); ?>
