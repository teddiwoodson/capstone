<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image'); ?>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
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
    </div>
  </div>

<?php get_footer(); ?>
