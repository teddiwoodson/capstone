<?php
/*
    Template Name: contact
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<?php dynamic_sidebar('hero-image-contact'); ?>

<main class="container">
<!-- ======================= contact form ==================-->
  <section>
    <article class="heading">
    <h2>We'd Love to Hear From You</h2>
    <p>If you have any questions or just want to say hi, you can reach us by phone, email, or fill out the form.</p>
  </article>
  <article class="row">
    <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
    <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-center heading">
      <?php dynamic_sidebar('contact-retailer-area'); ?>
    </div>

  </article>
  </section>
</main>

<!-- ======================= FAQ Area  ==================-->

<section class="container-fluid" id="learn-more">
    <article class="row d-flex justify-content-center">

      <!-- === Retailer ===-->
      <div class="col-lg-4 col-md-4 col-12 collapse-style">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/VOC-Icon-White.png" alt="VOC Free Icon" title="VOC Free Icon"/>
            <p><a class="btn btn-primary" href="#" role="button">Become a Retailer</a></p>
      </div>

      <!-- === FAQ ===-->
      <div class="col-lg-4 col-md-4 col-12 collapse-style">
        <img  src="<?php echo get_template_directory_uri(); ?>/images/VOC-Icon-White.png" alt="VOC Free Icon" title="VOC Free Icon"/>
        <p><a class="btn btn-primary" href="#" role="button">FAQs</a></p>
      </div>

      <!-- === Chat ===-->
      <div class="col-lg-4 col-md-4 col-12 collapse-style">
        <img  src="<?php echo get_template_directory_uri(); ?>/images/VOC-Icon-White.png" alt="VOC Free Icon" title="VOC Free Icon"/>
        <p><a class="btn btn-primary" href="#" role="button">Chat With Us 24/7</a></p>
      </div>
    </article>
</section>

<!-- ======================= Map and Contact Info  ==================-->

<section class="container" id="map-and-contact">
  <article class="row">
    <div class="col-lg-6 col-md-5 col-sm-12 justify-content-center heading contact-widget-spacing">
      <?php dynamic_sidebar('map'); ?>
    </div>
    <div class="col-lg-6 col-md-7 col-sm-12 justify-content-center heading contact-widget-spacing">
      <?php dynamic_sidebar('contact-info'); ?>
    </div>
  </articl>
</section>


<?php get_footer(); ?>
