<?php
/*
    Template Name: story
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<!-- ======================= Hero Image ==================-->
  <?php dynamic_sidebar('hero-image-story'); ?>
<!-- ======================= Company Values ==================-->

  <main class="container-fluid" id="learn-more">
    <section class="row justify-content-center">
      <article class="col-12">
        <h2>Country Chic Paint Values</h2>
      </article>
    </section>
    <section class="row d-flex justify-content-center">
      <article class="col-lg-3 col-md-3 col-12 collapse-style">
        <img  src="<?php echo get_template_directory_uri(); ?>/images/VOC-Icon-White.png" alt="VOC Free Icon" title="VOC Free Icon"/>
        <h5>Lowering Environmental Impacts</h5>
        <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
              Our products and pigments have low to zero VOC level, all printed materials use 100% recycled paper from sustainable sources, and our headquarters and warehouse use 98% renewable energy.
          </div>
        </div>
      </article>
    </section>
    <section class="col-lg-3 col-md-3 col-12 collapse-style">
      <article>
      <img  src="<?php echo get_template_directory_uri(); ?>/images/Economy-Icon.png" alt="Economy Icon" title="Economy Icon"/>
      <h5>Supporting the local economy</h5>
      <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
      <div class="collapse" id="collapseExample3">
        <div class="card card-body">
          Our products and raw materials are sourced and manufactured in North America whenever possible, supporting the sustainability of the local economy, in addition to leading innovation, productivity, and jobs.
        </div>
        </div>
      </article>
  </section>
  <section class="col-lg-3 col-md-3 col-12 collapse-style">
    <article>
    <img  src="<?php echo get_template_directory_uri(); ?>/images/Heart-Icon.png" alt="Heart Icon" title="Heart Icon"/>
    <h5>Giving Back to the community</h5>
    <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
    <div class="collapse" id="collapseExample4">
      <div class="card card-body">
        We are proud to donate a portion of our profits to Food Banks Canada and Feeding America to help relieve hunger by providing meals to families in North America.
      </div>
      </div>
    </article>
</section>
  </main>

<!-- ======================= A Family Affair ==================-->
<section class="container">
  <div class="row">
    <article class="col-md-12 justify-content-center">
      <?php dynamic_sidebar('story-widget'); ?>
    </article>
  </div>

<!-- ======================= Meet the Team ==================-->
<article class="meet-team">
    <h2>Meet The Team</h2>
    <a href="http://www.teddiwoodson.com/capstone/meet-the-team/"><?php echo do_shortcode('[sp_wpcarousel id="59"]'); ?></a>
</article>
</section>



<?php get_footer(); ?>
