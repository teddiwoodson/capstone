<?php
/*
    Template Name: thanks
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main class="container">

<!-- ======================= contact form and photo area ==================-->
  <section class="row justify-content-center" id="thanks">
    <div class="col-md-12 d-flex justify-content-center">
      <h3>Thanks for submitting the form. We'll respond to you as soon as we can!</h3>
    </div>
  </section>
</main>

<!-- ======================= FAQ Area  ==================-->

  <section class="container-fluid" id="FAQ">
    <div class="row justify-content-center p-4" id="valuespace">
      <div class="col-md-4 text-center">
        <img class="faq" src="<?php echo get_template_directory_uri(); ?>/images/retailer.png" alt="retailer" title="retailer"/>
        <p>Become a Retailer</p>
        <!--BUTTON FOR FAKE LINK-->
        <a href="http://unbouncepages.com/ccp-wholesale/" class="btn btn-primary" target="blank" role="button">Click Here</a>
      </div>
      <div class="col-md-4 text-center">
        <img class="faq" src="<?php echo get_template_directory_uri(); ?>/images/faq.png" alt="faq" title="faq"/>
        <p>FAQ</p>
        <!--BUTTON FOR ACTUAL LINK-->
        <a href="https://www.countrychicpaint.com/apps/help-center" class="btn btn-primary" target="blank" role="button">Click Here</a>
      </div>
      <div class="col-md-4 text-center">
        <img class="faq" src="<?php echo get_template_directory_uri(); ?>/images/represent.png" alt="represent" title="represent"/>
        <p>Live Chat</p>
        <!--BUTTON FOR ACTUAL LINK-->
        <a href="https://www.countrychicpaint.com/pages/contact-us" class="btn btn-primary" target="blank" role="button">Click Here</a>
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
