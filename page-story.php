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
      </div>
      <div class="col-md-3 text-center" id="value">
        <img class="value" src="<?php echo get_template_directory_uri(); ?>/images/recycle.png" alt="recycle" title="recycle"/>
        <h4>Participating in Recycling Programs</h4>
      </div>
      <div class="col-md-3 text-center" id="value">
        <img class="value" src="<?php echo get_template_directory_uri(); ?>/images/house.png" alt="house" title="house"/>
        <h4>Supporting the local economy</h4>
      </div>
      <div class="col-md-3 text-center" id="value">
        <img class="value"src="<?php echo get_template_directory_uri(); ?>/images/heart.png" alt="heart" title="heart"/>
        <h4>Helping those in need</h4>
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
