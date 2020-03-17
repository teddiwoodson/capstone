<?php get_header(); ?>
  <div class="container">
    <div class="row justify-content-center">
      <main class="col-md-10">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
              <h2 class="entry-title"><?php the_title(); ?></h2>
              <!--<p><?php echo "<span class='bold'>Published </span>" . get_the_date(); echo " | "; echo "<span class='bold'>Written by </span>". get_the_author();  ?></p>

              <?php the_content(); ?>-->
          <?php  } //this ends while loop
          }// this ends if statement
        ?>

        <a class="btn btn-secondary btn-sm" href="<?php echo get_home_url(); ?>">Return to Home Page</a>
      </main>
    </div>
  </div>
<?php get_footer(); ?>
