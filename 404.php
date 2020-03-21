<?php get_header(); ?>

  <div class="container">
    <div class="row" id="oops">
      <main class="col-md-12 oops">
        <h2>Oops. Page not found.</h2>
        <p>I'm sorry, this never really happens. It looks like nothing was found at this location.</p>
        <img  src="<?php echo get_template_directory_uri(); ?>/images/oops.gif" alt="404 gif" title="404 gif"/>
        <p>Let's start over.</p>
      </main>
      </div>
      <section class="row justify-content-center">
        <a href="<?php echo home_url('/') ?>" type="button" class="btn btn-primary btn-lg">Return Home</a>
      </section>
  </div>

<?php get_footer(); ?>
