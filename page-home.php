<?php
/*
    Template Name: Home
    Template Type: Page
*/
 ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image'); ?>
  </div>
</div>

<h2>paint</h2>

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

<h2>reviews</h2>

<?php get_footer(); ?>
