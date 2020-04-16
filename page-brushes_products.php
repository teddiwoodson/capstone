<?php
/*
    Template Name: Brushes Products
    Template Type: Page
*/
 ?>

<?php get_header(); ?>
<main class="container heading">
  <h2>Brushes</h2>
  <p>Each of the paint and wax brushes in the Country Chic Paint line has been carefully tested and designed to work beautifully with our products. All of our brushes are made with 100% synthetic bristles.</p>
  <section class="row">
<!-- ===============================Change label here ============================= -->
      <?php $args = array ('post_type' => 'brushes_products', 'posts_per_page' => 12);

      $loop = new WP_Query($args);

      while($loop->have_posts()): $loop->the_post(); ?>

    <div class="col-lg-4 col-md-6 col-12 product-displays">
      <div class="product-feature-img"><?php if (has_post_thumbnail()) {the_post_thumbnail('medium'); }?></div>

      <a href="<?php the_permalink(); ?>" class="heading"><h5><?php the_title(); ?></h5></a>

      <p><?php the_field('size') ?> | <?php the_field('price') ?></p>

      <a class="btn btn-primary" href="<?php the_permalink(); ?>">View More</a>
      <a class="btn btn-primary" href="#">Add to Cart</a>

    </div>
    <?php endwhile; ?>
  </section>
</main>


<?php get_footer(); ?>
