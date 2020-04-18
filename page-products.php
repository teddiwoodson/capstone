<?php
/*
    Template Name: products
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<!-- ======================= Hero Image ==================-->
<div class="container">
  <section class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image-products'); ?>
  </div>
  </section>
</div>

  <!-- ======================= Our Impact  ==================-->

    <section class="container-fluid" id="learn-more">
      <h2>Our Impact</h2>
      <p>Country Chic Paint fuels the creativity of DIYers with thoughtfully designed, environmentally-conscious products.</p>
      <div class="row d-flex justify-content-center">
          <article class="col-lg-4 col-md-4 col-12 collapse-style">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/icon_voc.png" alt="VOC Free Icon" title="VOC Free Icon"/>
            <h4>VOC Free Paints</h4>
            <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
            <div class="collapse" id="collapseExample1">
              <div class="card card-body">
                Volatile Organic Compounds (VOCs) are gases that are released into the air from ordinary products such as paint, cleaners, cosmetics, & more. VOCs can have short-term health effects such as headaches, respiratory issues, nausea, dizziness, etc. We are proud to say our paints & pigments have low to zero VOC levels.
              </div>
            </div>
        </article>
        <article class="col-lg-4 col-md-4 col-12 collapse-style">
          <img  src="<?php echo get_template_directory_uri(); ?>/images/icon_recycle.png" alt="Recycle Icon" title="Recycle Icon"/>
          <h4>Recycling Programs</h4>
          <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              Country Chic Paint is a proud member of paint recycling programs across North America to ensure that leftover paint is properly recycled and not dumped in a landfill. Our brochures and labels are also printed on 100% recycled paper from sustainable sources.
            </div>
            </div>
      </article>
      <article class="col-lg-4 col-md-4 col-12 collapse-style">
        <img  src="<?php echo get_template_directory_uri(); ?>/images/icon_renewable.png" alt="Headquarters Icon" title="Headquarters Icon"/>
        <h4>Renewable Energy</h4>
        <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
        <div class="collapse" id="collapseExample3">
          <div class="card card-body">
            Our headquarters and warehouse use 98% renewable energy. By devoting ourselves to sustainable business practices, we are able to create more enjoyable living spaces, while having a positive impact on our communities at the same time.
          </div>
          </div>
    </article>
      </div>
    </section>

<div class="container">

<!-- ======================= Image Grid ==================-->
<section class="heading">
  <h2>Our Products</h2>
  <p>Our products are manufactured in North America without the use of harsh chemical additives. Our paints are also independently tested and certified safe for children’s furniture.</p>
</section>
<section class="row justify-content-center" id="inspiration">
      <article class="grid">
        <a href="http://www.teddiwoodson.com/capstone/paint-products/">
          <figure class="effect-steve">
            <img  src="<?php echo get_template_directory_uri(); ?>/images/paint.jpg" alt="paint" title="paint"/>
            <figcaption>
              <h2>All-In-One Paints</h2>
              <p>Our paints are 100% VOC-free & environmentally friendly.</p>
            </figcaption>
          </figure>
        </a>
      </article>
      <article class="grid">
        <a href="http://www.teddiwoodson.com/capstone/wax-products/">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/waxes.jpg" alt="waxes" title="waxes"/>
              <figcaption>
                  <h2>Waxes & Top Coats</h2>
                  <p>Our furniture waxes contain only 100% natural ingredients.</p>
              </figcaption>
          </figure>
        </a>
      </article>
      <article class="grid">
        <a href="http://www.teddiwoodson.com/capstone/finishes-products/">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/finishes.jpg" alt="finishes" title="finishes"/>
              <figcaption>
                  <h2>Finishes</h2>
                  <p>Your furniture will make a statement with our specialty finishes.</p>
              </figcaption>
          </figure>
        </a>
      </article>
      <article class="grid">
        <a href="http://www.teddiwoodson.com/capstone/brushes-products/">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/brushes.jpg" alt="brushes" title="brushes"/>
              <figcaption>
                  <h2>Brushes & Sponges</h2>
                  <p>Our brushes are uniquely designed to enhance our products.</p>
              </figcaption>
          </figure>
        </a>
      </article>
      <article class="grid">
        <a href="http://www.teddiwoodson.com/capstone/kits/">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/kits.jpg" alt="kits" title="kits"/>
              <figcaption>
                  <h2>DIY Kits</h2>
                  <p>Our curated kits will help you get started with your first project.</p>
              </figcaption>
          </figure>
        </a>
      </article>
      <article class="grid">
        <a href="http://www.teddiwoodson.com/capstone/specials/">
          <figure class="effect-steve">
              <img  src="<?php echo get_template_directory_uri(); ?>/images/special-offers.jpg" alt="special-offers" title="special offers"/>
              <figcaption>
                  <h2>Special Offers</h2>
                  <p>Check out our special offers. Available only for a limited time!</p>
              </figcaption>
          </figure>
        </a>
      </article>
  </section>

<!-- ======================= Instagram Feed ==================-->
  <section class="row">
    <div class="col-md-12 heading">
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

</div>



<?php get_footer(); ?>
