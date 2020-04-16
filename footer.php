<footer>
<div class="container">
  <section class="row footer-spacing">
      <article class="col-lg-6 col-md-4 col-12">
        <h5>Social</h5>
        <?php dynamic_sidebar('footer-social'); ?>
        <?php dynamic_sidebar('footer-newsletter'); ?>
      </article>

      <article class="col-lg-3 col-md-4 col-sm-6 col-6 footer-menus">
        <?php dynamic_sidebar('footer-menu-1'); ?>
      </article>
      <article class="col-lg-3 col-md-4 col-sm-6 col-6 footer-menus">
        <?php dynamic_sidebar('footer-menu-2'); ?>
      </article>

      <article class="col-12 d-flex justify-content-center">
        <?php dynamic_sidebar('footer-logo'); ?>
      </article>

      <article class="col-12">
        <p>&copy; 2020 Country Chic Paint</p>
      </article>
    </section>
  </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
