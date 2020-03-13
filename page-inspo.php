<?php
/*
    Template Name: Inspiration
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main class="container">
  <section class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('hero-image'); ?>
    </div>
  </section>

  <section class="row justify-content-center">
    <?php if(have_posts()){
      while(have_posts()){
      the_post(); ?>
      <div class="content">
        <div class="grid">
          <figure class="effect-chico">
          <?php  the_post_thumbnail('medium'); ?>
            <figcaption>
              <h2><?php the_title(); ?></h2>
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
</main>


<?php get_footer(); ?>
