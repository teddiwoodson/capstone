<?php
/*
    Template Name: products
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<!-- ======================= Hero Image ==================-->
<main class="container">
  <section class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image-products'); ?>
  </div>
  </section>

<!-- ======================= Image Grid ==================-->
  <section class="row justify-content-center">
    <div class="content">
      <div class="grid">
        <figure class="effect-steve">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/paint.jpg" alt="paint" title="paint"/>
            <figcaption>
                <h2>All-In-One Paints</h2>
                <!-- <p>Exerpt</p> -->
                <a href="https://www.countrychicpaint.com/collections/chalk-style-all-in-one-paint">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/waxes.jpg" alt="waxes" title="waxes"/>
            <figcaption>
                <h2>Waxes & Top Coats</h2>
                <!-- <p>Exerpt</p> -->
                <a href="https://www.countrychicpaint.com/collections/wax-top-coats-etc">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/finishes.jpg" alt="finishes" title="finishes"/>
            <figcaption>
                <h2>Finishes</h2>
                <!-- <p>Exerpt</p> -->
                <a href="https://www.countrychicpaint.com/collections/specialty-products">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/brushes.jpg" alt="brushes" title="brushes"/>
            <figcaption>
                <h2>Brushes & Sponges</h2>
                <!-- <p>Exerpt</p> -->
                <a href="https://www.countrychicpaint.com/collections/wax-and-paint-brushes">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/kits.jpg" alt="kits" title="kits"/>
            <figcaption>
                <h2>DIY Kits</h2>
                <!-- <p>Exerpt</p> -->
                <a href="https://www.countrychicpaint.com/collections/diy-kits">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/special-offers.jpg" alt="special-offers" title="special offers"/>
            <figcaption>
                <h2>Special Offers</h2>
                <!-- <p>Exerpt</p> -->
                <a href="https://www.countrychicpaint.com/collections/special-offers">View more</a>
            </figcaption>
        </figure>
      </div>
    </div>
  </section>

<!-- ======================= Instagram Feed ==================-->
  <section class="row">
    <div class="col-md-12">
      <h2>Need Some Inspiration?</h2>
      <?php dynamic_sidebar('instagram');?>
    </div>
  </section>

<!-- ======================= Instagram Buttons ==================-->

  <section class="row justify-content-center">
    <a href="http://www.teddiwoodson.com/capstone/inspiration/" type="button" class="btn btn-primary btn-lg">More Inspiration Here</a>
  </section>

</main>

  <!-- ======================= Our Impact  ==================-->

    <section class="container-fluid" id="impact">
      <div class="row justify-content-center">
        <h2>Our Impact</h2>
      </div>
      <div class="row ">
        <div class="col-md-4 d-flex justify-content-center">
          <div class="impact">
            <img src="http://localhost:8888/wordpress/wp-content/uploads/2020/03/environmental.png" />
            <p>Our products have zero to low VOC levels.</p>
          </div>

        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="impact">
            <img src="http://localhost:8888/wordpress/wp-content/uploads/2020/03/recycle.png" />
            <p>Our brochures and labels are printed on 100% recycled paper.</p>
          </div>


        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="impact">
            <img src="http://localhost:8888/wordpress/wp-content/uploads/2020/03/recycle.png" />
            <p>Our headquarters and warehouse use 98% renewable energy.</p>
        </div>
      </div>
    </section>









<?php get_footer(); ?>
