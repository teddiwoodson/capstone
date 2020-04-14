<?php
/*
    Template Name: Finishes Products
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<main class="container">
  <h2 class="heading">Speciality Finishes</h2>
  <p>Looking to give that DIY project some extra love? No matter what technique you're looking to tackle or unique effects you'd like to create, we've got the specialty finish for you!</p>
  <section class="row">
<!-- ===============================Change label here ============================= -->
      <?php $args = array ('post_type' => 'finishes_products', 'posts_per_page' => 12);

      $loop = new WP_Query($args);

      while($loop->have_posts()): $loop->the_post(); ?>

    <div class="col-lg-4 col-md-6 col-12 product-displays">
      <div class="product-feature-img"><?php if (has_post_thumbnail()) {the_post_thumbnail('medium'); }?></div>

      <a href="<?php the_permalink(); ?>" class="product-title"><h5><?php the_title(); ?></h5></a>

      <p><?php the_field('size') ?> | <?php the_field('price') ?></p>

      <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>

    </div>
    <?php endwhile; ?>
  </section>
</main>


<?php get_footer(); ?>
