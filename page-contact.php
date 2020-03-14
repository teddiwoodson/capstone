<?php
/*
    Template Name: contact
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main class="container">

  <section>
    <h2>Contact Us</h2>
  </section>

  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-image'); ?>
    </div>
  </section>

  <section class="row">
    <div class="col-md-4">
      <h3>FAQ Area</h3>
    </div>
  </section>

  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('map'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-info'); ?>
    </div>
  </section>

</main>



<?php get_footer(); ?>
