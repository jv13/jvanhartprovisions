
<?php
/*
Template Name: Contact Page
*/

get_header(); ?>

<div class="row">
  <div class="twelve">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3569.5952153990384!2d-81.86965568467753!3d26.533139983292546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db3fd892d7f57f%3A0x1fc5696226b584f8!2sJ+Van+Hart+Provisions!5e0!3m2!1sen!2sus!4v1469677238500" width="100%" height="300px;" frameborder="0" style="border:1" allowfullscreen></iframe>
  </div>
</div>

<section class="row">
    <div class="four columns">
      <?php echo do_shortcode('[contact-card]'); ?>
        <?php dynamic_sidebar('contact-one'); ?>
    </div>

    <div class="eight columns contact-form">
      <h3>contact us</h3>
      <?php echo do_shortcode('[easy-contactform id=79]'); ?>
    </div>
</section>


<?php get_footer(); ?>
