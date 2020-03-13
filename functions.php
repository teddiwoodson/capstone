<?php

/* ================================================

adds stylesheet, bootstrap and javascript files

====================================================*/

  function custom_theme_scripts(){
    //Bootstrap Integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    //javascript file
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
  }

  add_action('wp_enqueue_scripts', 'custom_theme_scripts');

  /* ================================================

    Custom Header Logo

  ====================================================*/

$custom_image_header = array(
  'width' => 225,
  'height' => 68,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);

/* =========

add menus to our theme

=================*/

function register_my_menus(){
  register_nav_menus(
    array(
    'top-menu'      => ('Top Menu'),
    'footer-menu'   => ('Footer Menu'),
    )
  );

}

add_action('init', 'register_my_menus');

/* =========

adds widget areas to theme

=================*/

function blank_widgets_init() {
  register_sidebar(array(
    'name'          => ('Hero Image'),
    'id'            => 'hero-image',
    'description'   => 'Hero image',
    'before_widget' => '<div class="widget-hero-image>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-widget-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Home Slider 1'),
    'id'            => 'home-slider-1',
    'description'   => 'First Slider',
    'before_widget' => '<div class="widget-home-slider-1>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="home-slider-1-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Home Slider 2'),
    'id'            => 'home-slider-2',
    'description'   => 'Second Slider',
    'before_widget' => '<div class="widget-home-slider-2>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="home-slider-2-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Testimonials'),
    'id'            => 'testimonials',
    'description'   => 'Testimonials',
    'before_widget' => '<div class="widget-testimonials>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="testimonials-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Instagram'),
    'id'            => 'instagram',
    'description'   => 'Instagram Feed',
    'before_widget' => '<div class="widget-instagram>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="instagram-title">',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'blank_widgets_init');


?>
