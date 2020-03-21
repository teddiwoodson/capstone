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
  <section class="row justify-content-around">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <div class="contact-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/team.jpg" alt="team" title="team"/>
      </div>
    </div>
  </section>
</main>

<!-- ======================= FAQ Area  ==================-->

  <section class="container-fluid" id="FAQ">
    <div class="row justify-content-around p-4">
      <div class="col-sm-5 col-md-3 text-center" id="faq-width">
        <a href="http://unbouncepages.com/ccp-wholesale/" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/retailer.png" alt="retailer" title="retailer"/></a>
        <a href="http://unbouncepages.com/ccp-wholesale/" class="btn btn-primary m-3 faq-button" target="blank" role="button">Become a Retailer</a>
      </div>
      <div class="col-sm-5 col-md-3 text-center" id="faq-width">
        <a href="https://www.countrychicpaint.com/apps/help-center" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/faq.png" alt="faq" title="faq"/></a>
        <a href="https://www.countrychicpaint.com/apps/help-center" class="btn btn-primary m-3 faq-button" target="blank" role="button">FAQ</a>
      </div>
      <div class="col-sm-5 col-md-3 text-center" id="faq-width">
        <a href="https://www.countrychicpaint.com/pages/contact-us" target="blank"><img  src="<?php echo get_template_directory_uri(); ?>/images/represent.png" alt="represent" title="represent"/></a>
        <a href="https://www.countrychicpaint.com/pages/contact-us" class="btn btn-primary m-3 faq-button" target="blank" role="button">Live Chat</a>
    </div>
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
