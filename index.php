<!-- BEGIN HEADER -->
  <?php get_header(); ?>
<!-- END HEADER -->


    <!-- BEGIN INDEX 3 COLUMNS -->
        <section class="row">
            <div class="four columns">
              <?php dynamic_sidebar('index-one'); ?>
              <a href="http://jenvitrano.com/jvanhartprovisions/about/"><button type="button">learn more about us</button></a>
            </div>

            <div class="four columns">
              <?php dynamic_sidebar('index-two'); ?>
              <a href="http://jenvitrano.com/jvanhartprovisions/products/"><button type="button">view our products</button></a>
            </div>

            <div class="four columns">
              <?php dynamic_sidebar('index-three'); ?>
              <a href="http://jenvitrano.com/jvanhartprovisions/contact-us/"><button type="button">contact us today</button></a>
            </div>
        </section>
    <!-- END INDEX 3 COLUMNS -->

<!-- BEGIN FOOTER-->
  <?php get_footer(); ?>
<!-- END FOOTER -->
