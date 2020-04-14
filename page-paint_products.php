<?php
/*
    Template Name: Paint Products
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<main class="container">
  <section class="row">
      <?php $args = array ('post_type' => 'paint_products');

      $loop = new WP_Query($args);

      while($loop->have_posts()): $loop->the_post(); ?>

    <?php endwhile; ?>
    <div class="col-lg-4 col-md-6 col-12 product-displays">
      <div class="product-feature-img"><?php if (has_post_thumbnail()) {the_post_thumbnail('medium'); }?></div>

      <a href="<?php the_permalink(); ?>" class="product-title"><h5><?php the_title(); ?></h5></a>

      <p>Available in sizes: <?php the_field('size') ?> | <?php the_field('price') ?></p>

      <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>

    </div>
  </section>
</main>


<?php get_footer(); ?>
