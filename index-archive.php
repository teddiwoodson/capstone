/* Use this index page if the archive page doesn't look right  */

<?php get_header(); ?>

  <div class="container">
    <div class="row">

      <?php
        if(have_posts()){
          while(have_posts()){
            the_post(); ?>

            <div class="col-md-3">
              <div class="archivepost-title">
                <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
              </div>
                <p class="category-label">Category: <?php the_category(); ?></p>
                <?php the_post_thumbnail('medium') ?>
                <?php the_excerpt(); ?>
                <div class="archivepost-info">
                  <p>Published: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day);?>">
                  <?php echo get_the_date(); ?></a></p>
                  <p><?php echo "Article written by: " . get_the_author(); ?></p>
                </div>
                <?php
                  $archive_year = get_the_time('Y');
                  $archive_month = get_the_time('m');
                  $archive_day = get_the_time('d');
                ?>

                <div class="post-featured-image">
                  <?php the_post_thumbnail('medium'); ?>
                </div>

                <?php the_excerpt(); ?>
                <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More >> </a>
            </div>
          <?php } //end while loop
        } //ends if statement
      ?>


    </div>
  </div>

<?php get_footer(); ?>
