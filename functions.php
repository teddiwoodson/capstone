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
    'name'          => ('Hero Image Home'),
    'id'            => 'hero-image-home',
    'description'   => 'Hero image Home Page',
    'before_widget' => '<div class="widget-hero-image-home>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-home-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Hero Image Products'),
    'id'            => 'hero-image-products',
    'description'   => 'Hero image Products Page',
    'before_widget' => '<div class="widget-hero-image-products>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-products-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Hero Image Inspiration'),
    'id'            => 'hero-image-inspo',
    'description'   => 'Hero image Inspiration Page',
    'before_widget' => '<div class="widget-hero-image-inspo>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-inspo-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Hero Image Our Story'),
    'id'            => 'hero-image-story',
    'description'   => 'Hero image Our Story Page',
    'before_widget' => '<div class="widget-hero-image-story>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-story-title">',
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
    'before_widget' => '<div class="widget-testimonials">',
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
  register_sidebar(array(
    'name'          => ('Left Sidebar'),
    'id'            => 'story-left-widget',
    'description'   => 'Left Widget',
    'before_widget' => '<div class="widget-left-story>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="left-story-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Right Sidebar'),
    'id'            => 'story-right-widget',
    'description'   => 'right Widget',
    'before_widget' => '<div class="widget-right-story>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="left-right-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Meet The Team'),
    'id'            => 'meet-the-team',
    'description'   => 'meet the team',
    'before_widget' => '<div class="widget-meet-the-team>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="meet-the-team-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Instagram'),
    'id'            => 'instagram-2',
    'description'   => 'Instagram Feed',
    'before_widget' => '<div class="widget-instagram-2>"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="instagram-title-2">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Contact Form'),
    'id'            => 'contact-form',
    'description'   => 'Contact Form',
    'before_widget' => '<div class="widget-contact-form"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="contact-form-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Contact Image'),
    'id'            => 'contact-image',
    'description'   => 'Contact Image',
    'before_widget' => '<div class="widget-contact-image"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="contact-image-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Contact Info'),
    'id'            => 'contact-info',
    'description'   => 'Contact Info',
    'before_widget' => '<div class="widget-contact-info"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="contact-info-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Map'),
    'id'            => 'map',
    'description'   => 'Map',
    'before_widget' => '<div class="widget-map"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="contact-map">',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'blank_widgets_init');

/* =========

adds feature image functionality

=================*/

add_theme_support('post-thumbnails');



?>
