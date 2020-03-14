<?php
/*
    Template Name: story
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main class="container">
  <section class="row">
    <div class="col-md-12 justify-content-center">
      <?php dynamic_sidebar('hero-image-story'); ?>
    </div>
  </section>
</main>

  <section class="container-fluid" id="company-values">
    <div class="row justify-content-center">
      <h2>Company Values</h2>
    </div>
    <div class="row ">
      <div class="col-md-4 d-flex justify-content-center">
        <p>Text</p>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <p>Text</p>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <p>Text</p>
      </div>
    </div>
  </section>

<section class="container">
  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('story-left-widget'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('story-right-widget'); ?>
    </div>
  </section>

  <section>
      <h2>Meet The Team</h2>
      <?php echo do_shortcode('[sp_wpcarousel id="59"]'); ?>
  </section>
</section>



<?php get_footer(); ?>
