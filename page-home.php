<?php
/*
    Template Name: Home
    Template Type: Page
*/
 ?>
<?php get_header(); ?>
<!-- ======================= Hero Image ==================-->
<main class="container">
  <section class="row">
    <div class="col-md-12 justify-content-center">
      <?php dynamic_sidebar('hero-image-home'); ?>
    </div>
  </section>

<!-- ======================= Paint Carousel ==================-->
  <section>
    <h2>Paint</h2>
    <?php echo do_shortcode('[sp_wpcarousel id="49"]'); ?>
  </section>

<!-- ======================= First Slider ==================-->
  <section class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('home-slider-1'); ?>
    </div>
  </section>
</main>
<!-- ======================= Products ==================-->
  <section class="container-fluid" id="products">
    <div class="row justify-content-center">
      <h2>Products</h2>
    </div>
    <div class="row ">
      <div class="col-md-2 d-flex justify-content-center">
        <p>Text</p>
      </div>
      <div class="col-md-2 d-flex justify-content-center">
        <p>Text</p>
      </div>
      <div class="col-md-2 d-flex justify-content-center">
        <p>Text</p>
      </div>
      <div class="col-md-2 d-flex justify-content-center">
        <p>Text</p>
      </div>
      <div class="col-md-2 d-flex justify-content-center">
        <p>Text</p>
      </div>

    </div>
  </section>
<!-- ======================= Second Slider ==================-->
<section class="container">
  <section class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('home-slider-2'); ?>
    </div>
  </section>
</section>

<!-- ======================= Testimonials ==================-->

  <section class="container-fluid" id="testimonials">
    <div class="row justify-content-center">
      <h2>Testimonials</h2>
      <?php dynamic_sidebar('testimonials'); ?>
    </div>
  </section>




<?php get_footer(); ?>
