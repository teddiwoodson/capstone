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

  <section class="container-fluid" id="learn-more">
    <div class="row justify-content-center">
      <div class="col-12">
      <h2>Country Chic Paint Values</h2>
    </div>
    </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-md-3 col-12 collapse-style">
          <div>
          <img  src="<?php echo get_template_directory_uri(); ?>/images/VOC-Icon-White.png" alt="VOC Free Icon" title="VOC Free Icon"/>
          <h5>Lowering Environmental Impacts</h5>
          <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
          <div class="collapse" id="collapseExample1">
            <div class="card card-body">
              Our products and pigments have low to zero VOC level, all printed materials use 100% recycled paper from sustainable sources, and our headquarters and warehouse use 98% renewable energy.
            </div>
            </div>
            </div>
      </div>
    <div class="col-lg-3 col-md-3 col-12 collapse-style">
      <div>
      <img  src="<?php echo get_template_directory_uri(); ?>/images/Economy-Icon.png" alt="Economy Icon" title="Economy Icon"/>
      <h5>Supporting the local economy</h5>
      <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
      <div class="collapse" id="collapseExample3">
        <div class="card card-body">
          Our products and raw materials are sourced and manufactured in North America whenever possible, supporting the sustainability of the local economy, in addition to leading innovation, productivity, and jobs.
        </div>
        </div>
        </div>
  </div>
  <div class="col-lg-3 col-md-3 col-12 collapse-style">
    <div>
    <img  src="<?php echo get_template_directory_uri(); ?>/images/Heart-Icon.png" alt="Heart Icon" title="Heart Icon"/>
    <h5>Giving Back to the community</h5>
    <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
    <div class="collapse" id="collapseExample4">
      <div class="card card-body">
        We are proud to donate a portion of our profits to Food Banks Canada and Feeding America to help relieve hunger by providing meals to families in North America.
      </div>
      </div>
      </div>
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
