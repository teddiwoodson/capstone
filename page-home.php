<?php
/*
    Template Name: Home
    Template Type: Page
*/
 ?>
<?php get_header(); ?>
<!-- ======================= Hero Image ==================-->
<?php dynamic_sidebar('hero-image-home'); ?>

<main class="container heading">

<!-- ======================= Paint Carousel ==================-->
  <section>
    <h2>Paint Colors</h2>
    <p>We offer over 60 original VOC-free, eco-friendly paint colors that are manufactured without the use of harsh chemical additives.</br>You can learn more about paint safety & view our test results <a href="https://www.countrychicpaint.com/pages/voc-free-furniture-paint" target="blank">here</a>.</p>
    <?php dynamic_sidebar('paint-carousel'); ?>
  </section>

<!-- ======================= First Slider Plugin ==================-->
    <section>
      <?php dynamic_sidebar('home-slider-1'); ?>
  </section>
</main>
<!-- ======================= Products ==================-->
  <section class="container-fluid heading-white" id="products">
    <h2>Our Products</h2>
    <p>Browse our high-quality, eco-friendly furniture paint and supplies</p>
    <div class="row justify-content-center">
      <article class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center ">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Paint-Icon.png" alt="paint jar icon" title="paint"></a>
        <a href="http://www.teddiwoodson.com/capstone/paint-products/" class="btn btn-secondary" role="button">Paint</a>
      </article>
      <article class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center ">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Wax-Icon.png" alt="wax icon" title="wax icon"></a>
        <a href="http://www.teddiwoodson.com/capstone/wax-products/" class="btn btn-secondary" role="button">Waxes</a>
      </article>
      <article class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center ">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Finish-Icon.png" alt="finishes icon" title="finishes"></a>
        <a href="http://www.teddiwoodson.com/capstone/finishes-products/" class="btn btn-secondary" role="button">Finishes</a>
      </article>
      <article class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center ">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Brush-Icon.png" alt="brushe icon" title="brushes icon"></a>
        <a href="http://www.teddiwoodson.com/capstone/brushes-products/" class="btn btn-secondary" role="button">Brushes</a>
      </article>
      <article class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center ">
        <a href="#" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Kit-Icon.png" alt="kits icon" title="kits icon"></a>
        <a href="http://www.teddiwoodson.com/capstone/kits/" class="btn btn-secondary" role="button">Kits</a>
      </article>
      <article class="col-lg-2 col-md-4 col-sm-4 col-6 justify-content-center ">
        <a href="#" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Specials-Icon.png" alt="kits icon" title="kits icon"></a>
        <a href="http://www.teddiwoodson.com/capstone/kits/" class="btn btn-secondary" role="button">Specials</a>
      </article>
    </div>
  </section>
<!-- ======================= Second Slider ==================-->
<section class="container">
    <?php dynamic_sidebar('home-slider-2'); ?>
</section>

<!-- ======================= Testimonials ==================-->

  <section class="container-fluid" id="learn-more">
    <article class="row justify-content-center">
      <h2>Testimonials</h2>
      <?php dynamic_sidebar('testimonials'); ?>
    </article>
  </section>




<?php get_footer(); ?>
