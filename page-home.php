<?php
/*
    Template Name: Home
    Template Type: Page
*/
 ?>
<?php get_header(); ?>

<main class="container">
  <section class="row">
    <div class="col-md-12 justify-content-center">
      <?php dynamic_sidebar('hero-image-home'); ?>
    </div>
  </section>

  <section>
    <h2>paint</h2>
    <?php echo do_shortcode('[sp_wpcarousel id="49"]'); ?>
  </section>

  <section class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('home-slider-1'); ?>
    </div>
  </section>

  <section>
    <h2>products</h2>
  </section>

  <section class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('home-slider-2'); ?>
    </div>
  </section>
  </main>

  <section class="container-fluid" id="testimonials">
    <div class="row justify-content-center">
      <h2>Testimonials</h2>
      <?php dynamic_sidebar('testimonials'); ?>
    </div>
  </section>
</main>




<?php get_footer(); ?>
