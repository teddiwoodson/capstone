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
    <div class="row justify-content-center p-4" id="valuespace">
      <div class="col-md-4 text-center">
        <img class="p-2" src="images/retailer.png" alt="retailer" title="retailer"/>
        <p>Become a Retailer</p>
        <!----BUTTON FOR FAKE LINK-->
        <button type="button" class="btn btn-success">Button</button>
      </div>
      <div class="col-md-4 text-center">
        <img class="p-2" src="images/faq.png" alt="faq" title="faq"/>
        <p>FAQ</p>
        <!----BUTTON FOR ACTUAL LINK-->
        <a href="#" class="btn btn-success" role="button">Button</a>
      </div>
      <div class="col-md-4 text-center">
        <img class="p-2" src="images/represent.png" alt="represent" title="represent"/>
        <p>Represent Us</p>
        <!----BUTTON FOR ACTUAL LINK-->
        <a href="#" class="btn btn-success" role="button">Button</a>
    </div>
  </section>

<!-- ======================= Map and Contact Info  ==================-->

<section class="container">
  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('map'); ?>
    </div>
    <div class="col-md-6 justify-content-center">
      <?php dynamic_sidebar('contact-info'); ?>
      <!----BUTTON FOR ACTUAL LINK-->
      <a href="#" class="btn btn-success" role="button">Button</a>
    </div>
  </section>
</section>






<?php get_footer(); ?>
