<?php get_header(); ?>
<!-- ======================= Header ==================-->
<main class="container">
  <div class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image-inspo'); ?>
  </div>
  </div>

  <!-- ======================= Paint Carousel ==================-->
  <div class="container">
    <section class="paint">
      <h2>Paint Colors</h2>
      <p>We offer over 60 original non-toxic, eco-friendly paint colors that are independently tested and certified safe.</p>
      <?php dynamic_sidebar('paint-carousel'); ?>
    </section>

<!-- ======================= Blog Posts ==================-->
<div class="blog-title">
  <h2>Tutorials</h2>
  <p>We realize that starting on your first project can be quite intimidating, so we've put together some Country Chic Paint tutorials to help you get inspired! Click on any of the tiles below for step-by-step instructions for your next project.</p>
</div>
    <section class="row justify-content-center" id="inspiration">
      <?php if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="grid">
            <a href="<?php the_permalink(); ?>">
              <figure class="effect-steve">
                <?php  the_post_thumbnail('medium'); ?>
                <figcaption>
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_excerpt(); ?></p>
                </figcaption>
              </figure>
            </a>
          </div>
        <?php } // ends while loop
      } // ends if statement
      ?>
      </section>

<!-- ======================= Instagram ==================-->
  <section class="row" id="inspiration-instagram">
    <div class="col-md-12 heading">
      <h4 id="follow-insta">Find us on on Instagram for even more inspiration!</h4>
      <?php dynamic_sidebar('instagram-2');?>
      <a href="https://www.instagram.com/countrychicpaint/" role="button" class="btn btn-primary btn-lg">Follow Us on Instagram</a>
    </div>
  </section>

</main>


<?php get_footer(); ?>
