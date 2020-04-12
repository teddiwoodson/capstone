<?php
/*
    Template Name: contact
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main class="container">
  <section class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image-contact'); ?>
  </div>
</section>
<!-- ======================= contact form ==================-->
  <section class="row justify-content-around">
    <div class="col-12 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
  </section>
</main>

<!-- ======================= FAQ Area  ==================-->

<section class="container-fluid" id="learn-more">
  <div class="row justify-content-center">
  </div>
    <div class="row d-flex justify-content-center">
      <div class="col-lg-4 col-md-4 col-12 collapse-style">
        <div>
        <img  src="<?php echo get_template_directory_uri(); ?>/images/VOC-Icon-White.png" alt="VOC Free Icon" title="VOC Free Icon"/>
        <p><a class="btn btn-primary" href="#" role="button">Become a Retailer</a></p>
          </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 collapse-style">
      <div>
      <img  src="<?php echo get_template_directory_uri(); ?>/images/VOC-Icon-White.png" alt="VOC Free Icon" title="VOC Free Icon"/>
      <p><a class="btn btn-primary" href="#" role="button">FAQs</a></p>
        </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 collapse-style">
    <div>
    <img  src="<?php echo get_template_directory_uri(); ?>/images/VOC-Icon-White.png" alt="VOC Free Icon" title="VOC Free Icon"/>
    <p><a class="btn btn-primary" href="#" role="button">Chat With Us 24/7</a></p>
      </div>
</div>
  </div>
</section>

<!-- ======================= Map and Contact Info  ==================-->

<section class="container" id="map-and-contact">
  <section class="row">
    <div class="col-lg-6 col-md-5 col-sm-12 justify-content-center map">
      <?php dynamic_sidebar('map'); ?>
    </div>
    <div class="col-lg-6 col-md-7 col-sm-12 justify-content-center contact-text">
      <?php dynamic_sidebar('contact-info'); ?>
    </div>
  </section>
</section>






<?php get_footer(); ?>
