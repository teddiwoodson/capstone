<?php get_header(); ?>
  <div class="container">
    <div class="row justify-content-center" id="posts">
      <main class="col-md-9">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
              <h3 class="entry-title"><?php the_title(); ?></h3>
              <p><?php echo "<span class='bold'>Published </span>" . get_the_date(); ?></p>

              <?php the_content(); ?>
          <?php  } //this ends while loop
          }// this ends if statement
        ?>

        <a class="btn btn-secondary btn-sm" href="<?php echo get_home_url(); ?>">Return to Home Page</a>
      </main>

      <aside class="col-md-3">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
<?php get_footer(); ?>
