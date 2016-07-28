
<?php
/*
Template Name: Products Page
*/

get_header(); ?>

<section class="row">
    <div class="six columns">
      <?php dynamic_sidebar('products-one'); ?>
      <a href=""><button type="button">view full product list</button></a>
    </div>

    <div class="six columns">
      <?php dynamic_sidebar('products-two'); ?>
    </div>
</section>

<section class="row">
    <div class="twelve columns">

    </div>
</section>

<?php get_footer(); ?>
