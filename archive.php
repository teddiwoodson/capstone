<?php
/*
    Template Name: Archives
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="archive-title"><?php
        if(is_category()){
          single_cat_title();
        }elseif(is_tag()){
          single_tag_title();
        }elseif(is_day()){
          echo "Daily Archives: " . get_the_date();
        }elseif(is_month()){
          echo "Monthly Archives: " . get_the_date('F Y');
        }elseif(is_year()){
          echo "Yearly Archives: " . get_the_date('Y');
        }else{
          echo "Archives";
        }
         ?>
      </h2>
      <section class="row justify-content-center" id="inspiration">
        <?php if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <div class="archiveposts" class="col-md-12">
              <h3><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a></h3>
              <p>Published On: <?php the_time('F j, Y'); ?></p>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink();?>">Read More...</a>
            </div>
            <?php

            ?>
        </section>
    </div>
  </div>
</div>

<?php get_footer(); ?>
