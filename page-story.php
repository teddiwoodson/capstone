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

  <section>
    <h2>Company Values</h2>
  </section>

  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('story-left-widget'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('story-right-widget'); ?>
    </div>
  </section>

  <section class="row">
    <div class="col-md-12 d-flex justify-content-center">
      <h2>Meet The Team</h2>
      <?php dynamic_sidebar('meet-the-team'); ?>
    </div>
  </section>

</main>



<?php get_footer(); ?>
