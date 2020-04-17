<?php get_header(); ?>

<!-- ======================= Header ==================-->
<?php dynamic_sidebar('hero-image-inspo'); ?>

<main class="container">
<!-- ======================= Blog Posts ==================-->
  <section class="heading">
    <h2>Tutorials</h2>
    <p>We realize that starting on your first project can be quite intimidating, so we've put together some Country Chic Paint tutorials to help you get inspired! Click on any of the tiles below for step-by-step instructions for your next project.</p>
  </section>
  <section class="row justify-content-center">
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
  <section class="row justify-content-center">
    <article class="col-md-12 heading">
      <h4>Find us on on Instagram for even more inspiration!</h4>
      <?php dynamic_sidebar('instagram-2');?>
    </article>
      <a href="https://www.instagram.com/countrychicpaint/" role="button" class="btn btn-primary btn-lg">Follow Us on Instagram</a>
  </section>

</main>


<?php get_footer(); ?>
