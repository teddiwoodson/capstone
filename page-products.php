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
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-steve">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
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
    <a href="#" type="button" class="btn btn-primary btn-lg">More Inspiration Here</a>
  </section>

</main>

  <!-- ======================= Our Impact  ==================-->

    <section class="container-fluid" id="impact">
      <div class="row justify-content-center">
        <h2>Our Impact</h2>
      </div>
      <div class="row ">
        <div class="col-md-4 d-flex justify-content-center">
          <p>Text</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <p>Text</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <p>Text</p>
        </div>
      </div>
    </section>









<?php get_footer(); ?>
