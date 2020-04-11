<?php get_header(); ?>
  <div class="container">
    <div class="row justify-content-center" id="posts">
      <main class="col-md-9">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
              <div>
              <h3 class="entry-title"><?php the_title(); ?></h3>
            </div>
            <div class="post-feature">
              <?php the_post_thumbnail(); ?>
            </div>
              <?php the_content(); ?>
          <?php  } //this ends while loop
          }// this ends if statement
        ?>

      </main>

    </div>
  </div>
<?php get_footer(); ?>
