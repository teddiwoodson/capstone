<?php get_header(); ?>
  <main class="container product-entry-text">
    <section>
      <h3 class="product-entry-spacing"><?php the_title(); ?></h3>
    </section>

    <section class="row justify-content-center product-entry-spacing">
      <article class="col-lg-5 col-md-6 col-12">
        <div>
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>

              <div class="product-feature-img">
                <?php the_post_thumbnail(); ?>
              </div>

              <?php dynamic_sidebar('shop-form'); ?>

            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>
      </article>
      <article class="col-lg-7 col-md-6 col-12">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
            <h5>Description</h5>
          <div class="description">
            <p><?php the_content();?></p>
          </div>

            <h5>Features</h5>
              <p class="product-features">
                <?php the_field('features') ?>
              </p>

          <?php  } //this ends while loop
          }// this ends if statement
        ?>
      </article>
  </section>

  </main>
<?php get_footer(); ?>
