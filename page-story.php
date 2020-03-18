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
    <div class="row" id="valuespace">
      <div class="col-md-3 text-center">
        <img src="images/environmental.png" alt="environmental impact" title="environmental impact"/>
        <h3>Low environmental impact</h3>
        <p>Our products have low to zero VOC levels and the pigments we use are also VOC-free. Our brochures and labels are printed on 100% recycled paper from sustainable sources. Our headquarters and warehouse use 98% renewable energy.</p>
      </div>
      <div class="col-md-3 text-center">
        <img src="images/recycle.png" alt="recycle" title="recycle"/>
        <h3>Participating in Recycling Programs</h3>
        <p>Country Chic Paint is a proud member of paint recycling programs across North America to ensure that leftover paint is properly recycled and not dumped in a landfill.</p>
      </div>
      <div class="col-md-3 text-center">
        <img src="/images/house.png" alt="house" title="house"/>
        <h3>Supporting the local economy</h3>
        <p>Our products and raw materials are sourced and manufactured in North America whenever possible.</p>
      </div>
      <div class="col-md-3 text-center">
        <img src="../images/heart.png" alt="heart" title="heart"/>
        <h3>Helping those in need</h3>
        <p>A portion of our profits are donated to help relieve hunger by providing meals to families in North America. (Food Banks Canada and Feeding America)</p>
      </div>
    </div>
  </section>

<!-- ======================= A Family Affair ==================-->
<section class="container">
  <section class="row">
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('story-left-widget'); ?>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <?php dynamic_sidebar('story-right-widget'); ?>
    </div>
  </section>

<!-- ======================= Meet the Team ==================-->
  <section>
      <h2>Meet The Team</h2>
      <?php echo do_shortcode('[sp_wpcarousel id="59"]'); ?>
  </section>
</section>



<?php get_footer(); ?>
