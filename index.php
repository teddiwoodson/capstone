<?php get_header(); ?>
<!-- ======================= Header ==================-->
<main class="container">
  <div class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image-inspo'); ?>
  </div>
  </div>

  <section class="paint">
    <?php dynamic_sidebar('paint-carousel'); ?>
  </section>

<!-- ======================= Blog Posts ==================-->
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
    <div class="col-md-12">
      <h2 id="follow-insta">Follow <a href="https://www.instagram.com/countrychicpaint/" target="blank">@CountryChicPaint</a> on Instagram for more inspiration!</h2>
      <?php dynamic_sidebar('instagram-2');?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
