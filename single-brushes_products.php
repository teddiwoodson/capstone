<?php get_header(); ?>
  <div class="container">
    <div>
    <h3 class="product-entry-title"><?php the_title(); ?></h3>
  </div>

    <div class="row justify-content-center single-product">
      <main class="col-lg-5 col-md-6 col-12">
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
      </main>
      <section class="col-lg-7 col-md-6 col-12">
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
      </section>



    </div>
  </div>
<?php get_footer(); ?>
