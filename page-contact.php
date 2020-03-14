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
<!-- ======================= contact form and photo area ==================-->
  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-image'); ?>
    </div>
  </section>
</main>

<!-- ======================= FAQ Area  ==================-->

  <section class="container-fluid" id="FAQ">
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

<!-- ======================= Map and Contact Info  ==================-->

<section class="container">
  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('map'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-info'); ?>
    </div>
  </section>
</section>






<?php get_footer(); ?>
