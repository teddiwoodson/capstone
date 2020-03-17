<?php get_header(); ?>
<!-- ======================= Header ==================-->
<main class="container">
  <div class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image-inspo'); ?>
  </div>
  </div>
<!-- ======================= Blog Posts ==================-->
    <section class="row justify-content-center">
      <?php if(have_posts()){
        while(have_posts()){
          the_post(); ?>
                <div class="content">
                    <div class="grid">
                        <figure class="effect-chico">
                          <?php  the_post_thumbnail('medium'); ?>
                          <figcaption>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>">View more</a>
                          </figcaption>
                        </figure>
                    </div>
                </div>

        <?php } // ends while loop
      } // ends if statement
      ?>
  </section>
<!-- ======================= Instagram ==================-->
  <section class="row" id="inspiration-instagram">
    <div class="col-md-12">
      <h2 id="follow-insta">Follow <a href="https://www.instagram.com/countrychicpaint/" target="blank">@CountryChicPaint</a> on Instagram for more inspiration!</h2>
      <?php dynamic_sidebar('instagram-2');?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
