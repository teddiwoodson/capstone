<?php
/*
    Template Name: contact
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main class="container">

  <section>
    <h2 class="p-4">Contact Us</h2>
  </section>
<!-- ======================= contact form and photo area ==================-->
  <section class="row justify-content around">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <div class="contact-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact.jpg" alt="contact us" title="contact us"/>
      </div>
    </div>
  </section>
</main>

<!-- ======================= FAQ Area  ==================-->

  <section class="container-fluid" id="FAQ">
    <div class="row justify-content-center p-4" id="valuespace">
      <div class="col-md-4 text-center">
        <img class="faq" src="<?php echo get_template_directory_uri(); ?>/images/retailer.png" alt="retailer" title="retailer"/>
        <a href="http://unbouncepages.com/ccp-wholesale/" class="btn btn-primary" target="blank" role="button">Become a Retailer</a>
      </div>
      <div class="col-md-4 text-center">
        <img class="faq" src="<?php echo get_template_directory_uri(); ?>/images/faq.png" alt="faq" title="faq"/>
        <a href="https://www.countrychicpaint.com/apps/help-center" class="btn btn-primary" target="blank" role="button">FAQ</a>
      </div>
      <div class="col-md-4 text-center">
        <img class="faq" src="<?php echo get_template_directory_uri(); ?>/images/represent.png" alt="represent" title="represent"/>
        <a href="https://www.countrychicpaint.com/pages/contact-us" class="btn btn-primary" target="blank" role="button">Become a Retailer</a>
    </div>
  </section>

<!-- ======================= Map and Contact Info  ==================-->

<section class="container" id="map-and-contact">
  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('map'); ?>
    </div>
    <div class="col-md-6 justify-content-center">
      <?php dynamic_sidebar('contact-info'); ?>
    </div>
  </section>
</section>






<?php get_footer(); ?>
