<?php
/*
    Template Name: story
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<!-- ======================= Hero Image ==================-->
<main class="container">
  <section class="row">
    <div class="col-md-12 justify-content-center">
      <?php dynamic_sidebar('hero-image-story'); ?>
    </div>
  </section>
</main>
<!-- ======================= Company Values ==================-->
  <section class="container-fluid p-4" id="company-values">
    <div class="row justify-content-center">
      <h2>Company Values</h2>
    </div>
    <div class="row justify-content-around">
      <div class="col-md-3 text-center" id="value">
        <img src="<?php echo get_template_directory_uri(); ?>/images/environmental.png" alt="environmental impact" title="environmental impact"/>
        <h4>Low environmental impact</h4>
        <p>We pride ourselves on using renewable energy to create VOC-free products.</p>
      </div>
      <div class="col-md-3 text-center" id="value">
        <img class="value" src="<?php echo get_template_directory_uri(); ?>/images/recycle.png" alt="recycle" title="recycle"/>
        <h4>Participating in Recycling Programs</h4>
        <p>We are a proud member of paint recycling programs across North America to ensure unused paints are recycled.</p>
      </div>
      <div class="col-md-3 text-center" id="value">
        <img class="value" src="<?php echo get_template_directory_uri(); ?>/images/house.png" alt="house" title="house"/>
        <h4>Supporting the local economy</h4>
        <p>Our products and raw materials are sourced and manufactured in North America whenever possible.</p>
      </div>
      <div class="col-md-3 text-center" id="value">
        <img class="value"src="<?php echo get_template_directory_uri(); ?>/images/heart.png" alt="heart" title="heart"/>
        <h4>Helping those in need</h4>
        <p>A portion of our profits are donated to help provide meals to families in North America.</p>
      </div>
    </div>
  </section>

<!-- ======================= A Family Affair ==================-->
<section class="container">
  <section class="row">
    <div class="col-md-12 justify-content-center">
      <?php dynamic_sidebar('story-widget'); ?>
    </div>
  </section>

<!-- ======================= Meet the Team ==================-->
  <section class="meet-team">
      <h2>Meet The Team</h2>
      <?php echo do_shortcode('[sp_wpcarousel id="59"]'); ?>
  </section>
</section>



<?php get_footer(); ?>
