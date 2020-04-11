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
<!-- ======================= Paint Carousel ==================-->
  <section class="paint">
    <h2>Eco-friendly Products</h2>
    <p>Manufactured in North America, our products meet the highest quality standards and are easy-to-use, VOC-free, non-toxic, and safe for the entire family.</p>
    <?php dynamic_sidebar('paint-carousel'); ?>
  </section>

<!-- ======================= Image Grid ==================-->
<section class="row justify-content-center" id="inspiration">
      <div class="grid">
        <a href="https://www.countrychicpaint.com/collections/chalk-style-all-in-one-paint">
          <figure class="effect-steve">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/paint.jpg" alt="paint" title="paint"/>
            <figcaption>
              <h2>All-In-One Paints</h2>
              <p>Our paints are 100% VOC-free & environmentally friendly.</p>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class="grid">
        <a href="https://www.countrychicpaint.com/collections/wax-top-coats-etc">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/waxes.jpg" alt="waxes" title="waxes"/>
              <figcaption>
                  <h2>Waxes & Top Coats</h2>
                  <p>Our furniture waxes contain only 100% natural ingredients.</p>
              </figcaption>
          </figure>
        </a>
      </div>
      <div class="grid">
        <a href="https://www.countrychicpaint.com/collections/specialty-products">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/finishes.jpg" alt="finishes" title="finishes"/>
              <figcaption>
                  <h2>Finishes</h2>
                  <p>Your furniture will make a statement with our specialty finishes.</p>
              </figcaption>
          </figure>
        </a>
      </div>
      <div class="grid">
        <a href="https://www.countrychicpaint.com/collections/wax-and-paint-brushes">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/brushes.jpg" alt="brushes" title="brushes"/>
              <figcaption>
                  <h2>Brushes & Sponges</h2>
                  <p>Our brushes are uniquely designed to enhance our products.</p>
              </figcaption>
          </figure>
        </a>
      </div>
      <div class="grid">
        <a href="https://www.countrychicpaint.com/collections/diy-kits">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/kits.jpg" alt="kits" title="kits"/>
              <figcaption>
                  <h2>DIY Kits</h2>
                  <p>Our curated kits will help you get started with your first project.</p>
              </figcaption>
          </figure>
        </a>
      </div>
      <div class="grid">
        <a href="https://www.countrychicpaint.com/collections/special-offers">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/special-offers.jpg" alt="special-offers" title="special offers"/>
              <figcaption>
                  <h2>Special Offers</h2>
                  <p>Check out our special offers. Available only for a limited time!</p>
              </figcaption>
          </figure>
        </a>
      </div>
  </section>

<!-- ======================= Instagram Feed ==================-->
  <section class="row">
    <div class="col-md-12 inspiration">
      <h2>Need Some Inspiration?</h2>
      <p>These DIY projects were created using Country Chic Paint products!</p>
      <?php dynamic_sidebar('instagram');?>
    </div>
  </section>

<!-- ======================= Instagram Buttons ==================-->

  <section class="row justify-content-center">
    <a href="http://www.teddiwoodson.com/capstone/inspiration/" role="button" class="btn btn-primary btn-lg">More Inspiration Here</a>
    <a href="https://www.instagram.com/countrychicpaint/" role="button" class="btn btn-primary btn-lg">Follow Us on Instagram</a>
  </section>

</main>

  <!-- ======================= Our Impact  ==================-->

    <section class="container-fluid" id="impact">
      <div class="row justify-content-center">
        <h2>Our Impact</h2>
      </div>
      <div class="row justify-content-around align-items-baseline">
        <div class="col-md-4">
          <div class="impact">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/leaves.png" alt="leaves" title="leaves"/>
            <p>Our products have zero to low VOC levels.</p>
          </div>

        </div>
        <div class="col-md-4">
          <div class="impact">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/recycle.png" alt="recycle" title="recycle"/>
            <p>Our brochures and labels are printed on 100% recycled paper.</p>
          </div>


        </div>
        <div class="col-md-4">
          <div class="impact">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/renewable.png" alt="renewable" title="renewable"/>
            <p>Our headquarters and warehouse use 98% renewable energy.</p>
        </div>
      </div>
    </div>
    </section>



<?php get_footer(); ?>
