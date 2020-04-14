<footer>
  <section class="container">
    <article class="row footer-spacing">
      <div class="col-lg-6 col-md-6 col-12">
        <?php dynamic_sidebar('footer-social'); ?>
        <?php dynamic_sidebar('footer-newsletter'); ?>
      </div>

      <div class="col-lg-3 col-md-3 col-6">
        <?php dynamic_sidebar('footer-menu-1'); ?>
      </div>
      <div class="col-lg-3 col-md-3 col-6">
        <?php dynamic_sidebar('footer-menu-2'); ?>
      </div>

      <div class="col-12 d-flex justify-content-center">
        <?php dynamic_sidebar('footer-logo'); ?>
      </div>

      <div class="col-12">
        <p>&copy; 2020 Country Chic Paint</p>
      </div>
    </article>
    </section>

</footer>

<?php wp_footer(); ?>

</body>

</html>
