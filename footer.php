<footer>
  <section class="container">
    <article class="row d-flex justify-content-around align-items-baseline">
      <div class="col-lg-6 col-md-4 col-12">
        <?php dynamic_sidebar('footer-logo'); ?>
        <?php dynamic_sidebar('footer-social'); ?>
        <?php dynamic_sidebar('footer-newsletter'); ?>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <?php dynamic_sidebar('footer-menu-1'); ?>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <?php dynamic_sidebar('footer-menu-2'); ?>
      </div>
    </article>
    </section>

    <section class="copyright">
      <p>&copy; 2020 Country Chic Paint</p>
    </section>

</footer>

<?php wp_footer(); ?>

</body>

</html>
