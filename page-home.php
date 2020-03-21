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
  <section class="paint">
    <h2>Paint</h2>
    <?php dynamic_sidebar('paint-carousel'); ?>
  </section>

<!-- ======================= First Slider Plugin ==================-->
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
    <div class="row justify-content-center">
      <div class="col-lg-2 col-md-4 justify-content-center" id="products-content">
        <a href="https://www.countrychicpaint.com/collections/chalk-style-all-in-one-paint" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/paint-150x150.png" alt="paint" title="paint"></a>
        <p>Paint</p>
      </div>
      <div class="col-lg-2 col-md-4 justify-content-center">
        <a href="https://www.countrychicpaint.com/collections/wax-top-coats-etc" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/wax-150x150.png" alt="wax" title="wax"></a>
        <p>Waxes</p>
      </div>
      <div class="col-lg-2 col-md-4 justify-content-center">
        <a href="https://www.countrychicpaint.com/collections/specialty-products" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/finishes-150x150.png" alt="finishes" title="finishes"></a>
        <p>Finishes</p>
      </div>
      <div class="col-lg-2 col-md-4 justify-content-center">
        <a href="https://www.countrychicpaint.com/collections/wax-and-paint-brushes" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/brushes-150x150.png" alt="brushes" title="brushes"></a>
        <p>Brushes</p>
      </div>
      <div class="col-lg-2 col-md-4 justify-content-center">
        <a href="https://www.countrychicpaint.com/collections/diy-kits" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/kits-150x150.png" alt="kits" title="kits"></a>
        <p>Kits</p>
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
