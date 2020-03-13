<?php
/*
    Template Name: products
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main class="container">
  <section class="row">
    <div class="col-md-12">
    <?php dynamic_sidebar('hero-image'); ?>
  </div>
  </section>
  <section class="row justify-content-center">
    <div class="content">
      <div class="grid">
        <figure class="effect-chico">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <p>Exerpt</p>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <p>Exerpt</p>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <p>Exerpt</p>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <p>Exerpt</p>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <p>Exerpt</p>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
        <figure class="effect-chico">
            <img src="https://tympanus.net/Development/HoverEffectIdeas/img/15.jpg" alt="img15"/>
            <figcaption>
                <h2>Title</h2>
                <p>Exerpt</p>
                <a href="Link">View more</a>
            </figcaption>
        </figure>
      </div>
    </div>
  </section>

  <section class="row">
    <div class="col-md-12">
      <h2>Need Some Inspiration?</h2>
      <?php dynamic_sidebar('instagram');?>
    </div>
  </section>

  <section class="row justify-content-center">
    <a href="#" type="button" class="btn btn-primary btn-lg">More Inspiration Here</a>
  </section>

</main>







<?php get_footer(); ?>
