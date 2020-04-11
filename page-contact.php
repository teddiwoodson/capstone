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
<!-- ======================= contact form and photo area ==================-->
  <section class="row justify-content-around">
    <div class="col-12 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
  </section>
</main>

<!-- ======================= FAQ Area  ==================-->

  <section class="container-fluid" id="FAQ">
    <div class="row justify-content-around p-4">
      <div class="col-sm-5 col-md-3 text-center faq-width">
        <a href="http://unbouncepages.com/ccp-wholesale/" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/retailer.png" alt="retailer" title="retailer"/></a>
        <a href="http://unbouncepages.com/ccp-wholesale/" class="btn btn-primary m-3 faq-button" target="blank" role="button">Become a Retailer</a>
      </div>
      <div class="col-sm-5 col-md-3 text-center faq-width">
        <a href="https://www.countrychicpaint.com/apps/help-center" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/faq.png" alt="faq" title="faq"/></a>
        <a href="https://www.countrychicpaint.com/apps/help-center" class="btn btn-primary m-3 faq-button" target="blank" role="button">FAQ</a>
      </div>
      <div class="col-sm-5 col-md-3 text-center faq-width">
        <a href="https://www.countrychicpaint.com/pages/contact-us" target="blank"><img  src="<?php echo get_template_directory_uri(); ?>/images/represent.png" alt="represent" title="represent"/></a>
        <a href="https://www.countrychicpaint.com/pages/contact-us" class="btn btn-primary m-3 faq-button" target="blank" role="button">Live Chat</a>
    </div>
  </div>
  </section>

<!-- ======================= Map and Contact Info  ==================-->

<section class="container" id="map-and-contact">
  <section class="row">
    <div class="col-lg-6 col-md-8 col-sm-12 d-flex justify-content-center map">
      <?php dynamic_sidebar('map'); ?>
    </div>
    <div class="col-lg-6 col-md-4 col-sm-12 justify-content-center contact-text">
      <?php dynamic_sidebar('contact-info'); ?>
    </div>
  </section>
</section>






<?php get_footer(); ?>
