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
        <figure class="effect-chico">
            <img src="http://www.teddiwoodson.com/capstone/wp-content/uploads/2020/03/CCP_Group_OpenJars_edit-scaled-e1584509565904.jpg" alt="img15"/>
            <figcaption>
                <h2>All-In-One Paints</h2>
                <!-- <p>Exerpt</p> -->
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="http://www.teddiwoodson.com/capstone/wp-content/uploads/2020/03/CCP_OpenWaxJars_AllSizes-scaled.jpg" alt="img15"/>
            <figcaption>
                <h2>Waxes & Top Coats</h2>
                <!-- <p>Exerpt</p> -->
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="http://www.teddiwoodson.com/capstone/wp-content/uploads/2020/03/CCP_HempOil_Poured-scaled.jpg" alt="img15"/>
            <figcaption>
                <h2>Finishes</h2>
                <!-- <p>Exerpt</p> -->
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="http://www.teddiwoodson.com/capstone/wp-content/uploads/2020/03/CCP_Brushes_Group_Flatlay-scaled.jpg" alt="img15"/>
            <figcaption>
                <h2>Brushes & Sponges</h2>
                <!-- <p>Exerpt</p> -->
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="http://www.teddiwoodson.com/capstone/wp-content/uploads/2020/03/CCPgiveawayphoto-1-1-scaled.jpg" alt="img15"/>
            <figcaption>
                <h2>DIY Projects</h2>
                <!-- <p>Exerpt</p> -->
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="http://www.teddiwoodson.com/capstone/wp-content/uploads/2020/03/CCP_TigersEye_Dipped-scaled.jpg" alt="img15"/>

            <figcaption>
                <h2>Special Projects</h2>
                <!-- <p>Exerpt</p> -->
                <a href="Link">View more</a>
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
