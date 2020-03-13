<?php
/*
    Template Name: Home
    Template Type: Page
*/
 ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12 justify-content-center">
    <?php dynamic_sidebar('hero-image'); ?>
  </div>

<h2>paint</h2>
<?php echo do_shortcode('[sp_wpcarousel id="90"]'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('home-slider-1'); ?>
  </div>
</div>

<h2>products</h2>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('home-slider-2'); ?>
  </div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Testimonials</h2>
      <?php dynamic_sidebar('testimonials'); ?>
    </div>
      </div>
      </div>

<?php get_footer(); ?>
