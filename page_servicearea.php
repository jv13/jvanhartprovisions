
<?php
/*
Template Name: Products Page
*/

get_header(); ?>

<section class="row service-content">
    <div class="five columns">
    <!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) :
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <?php the_content();
                endwhile;
            endif; ?>

    <!-- END PAGE PHP -->
    </div>

    <div class="seven columns">
      <?php dynamic_sidebar('service-one'); ?>
    </div>


</section>

<h3>hear what our customers have to say about us </h3>

<section class="row">

    <div class="six columns bubble">
      <h3>-- Maddie Klune, <span id="position">Deli Owner</span></h3>
      <p>“We love J Van Hart Provisions they are the absolute best at what they do and they provide so        much care and dedication to our order they're unlike any other food distributor!”</p>
    </div>

    <div class="six columns bubble">
      <h3>-- Jim Lake, <span id="position">Hospital Food Management</span></h3>
      <p>“Whenever we are low on products, J Van Hart Provisions is our go to place to order from because they have just about everything! You can’t go wrong ordering from them.”</p>
    </div>

</section>

<?php get_footer(); ?>
