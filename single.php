<?php get_header(); ?>
  <main class="container post">
    <section class="row justify-content-center" id="posts">
      <article class="col-md-9">
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

      </article>

      <aside class="col-md-3">
        <?php get_sidebar(); ?>
      </aside>
    </section>
  </main>
  <section class="container-fluid" id="learn-more">
    <h2>Check out some of our other Tutorials</h2>
    <article class="row justify-content-center">
      <div class="col-10">
        <?php dynamic_sidebar('recent-posts'); ?>
      </div>
    </artciel>

  </section>

<?php get_footer(); ?>
