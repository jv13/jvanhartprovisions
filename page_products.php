
<?php
/*
Template Name: Products Page
*/

get_header(); ?>

<section class="row">
    <div class="seven columns productstext">
    <!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) :
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <?php the_content();
                endwhile;
            endif; ?>
            <div class="centerbutton">
              <a href=""><button type="button" class="redbutton">view full product list</button></a>
            </div>
    <!-- END PAGE PHP -->
    </div>

    <div class="five columns">
      <?php dynamic_sidebar('products-two'); ?>
    </div>


</section>

<section class="row">
    <div class="twelve columns">
    
    </div>
</section>

<?php get_footer(); ?>
