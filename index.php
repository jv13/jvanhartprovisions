<!-- BEGIN HEADER -->
  <?php get_header(); ?>
<!-- END HEADER -->


    <!-- BEGIN INDEX 3 COLUMNS -->
        <section class="row">
            <div class="four columns">
              <?php dynamic_sidebar('index-one'); ?>
              <div class="centerbutton">
                <a href="http://jenvitrano.com/jvanhartprovisions/about/"><button type="button" class="redbutton">learn more about us</button></a>
              </div>
            </div>

            <div class="four columns">
            <?php dynamic_sidebar('index-two'); ?>
              <div class="centerbutton">
                <a href="http://jenvitrano.com/jvanhartprovisions/products/"><button type="button" class="redbutton">view our products</button></a>
              </div>
            </div>

            <div class="four columns">
              <?php dynamic_sidebar('index-three'); ?>
              <div class="centerbutton">
                <a href="http://jenvitrano.com/jvanhartprovisions/contact-us/"><button type="button" class="redbutton">contact us today</button></a>
              </div>
            </div>
        </section>
    <!-- END INDEX 3 COLUMNS -->

<!-- BEGIN FOOTER-->
  <?php get_footer(); ?>
<!-- END FOOTER -->
