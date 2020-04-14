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
    <h2>Paint Colors</h2>
    <p>We offer over 60 original non-toxic, eco-friendly paint colors.</p>
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
    <h2>Our Products</h2>
    <p>Browse our high-quality, eco-friendly furniture paint and supplies</p>
    <article class="row justify-content-center">
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center product-img">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Paint-Icon.png" alt="paint jar icon" title="paint"></a>
        <a href="http://www.teddiwoodson.com/capstone/paint-products/" class="btn btn-secondary" role="button">Paint</a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center product-img">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Wax-Icon.png" alt="wax icon" title="wax icon"></a>
        <a href="http://www.teddiwoodson.com/capstone/wax-products/" class="btn btn-secondary" role="button">Waxes</a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center product-img">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Finish-Icon.png" alt="finishes icon" title="finishes"></a>
        <a href="http://www.teddiwoodson.com/capstone/finishes-products/" class="btn btn-secondary" role="button">Finishes</a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center product-img">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Brush-Icon.png" alt="brushe icon" title="brushes icon"></a>
        <a href="http://www.teddiwoodson.com/capstone/brushes-products/" class="btn btn-secondary" role="button">Brushes</a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-4 col-6 justify-content-center product-img">
        <a href="#" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Kit-Icon.png" alt="kits icon" title="kits icon"></a>
        <a href="http://www.teddiwoodson.com/capstone/kits/" class="btn btn-secondary" role="button">Kits</a>
      </div>
    </article>
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
