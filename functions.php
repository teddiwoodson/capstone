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
  /* ========================================

                        Home Page Widgets

  ===========================================*/

  /* ========= Home Hero Widget =================*/
  register_sidebar(array(
    'name'          => ('Hero Image Home'),
    'id'            => 'hero-image-home',
    'description'   => 'Hero image Home Page',
    'before_widget' => '<div class="widget-hero-image-home">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-home-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Slider 1 - Our Story =================*/
  register_sidebar(array(
    'name'          => ('Home Slider 1'),
    'id'            => 'home-slider-1',
    'description'   => 'First Slider',
    'before_widget' => '<div class="widget-home-slider-1">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="home-slider-1-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Slider 2 - Find a Retailer =================*/
  register_sidebar(array(
    'name'          => ('Home Slider 2'),
    'id'            => 'home-slider-2',
    'description'   => 'Second Slider',
    'before_widget' => '<div class="widget-home-slider-2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="home-slider-2-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Testimonial Widget =================*/
  register_sidebar(array(
    'name'          => ('Testimonials'),
    'id'            => 'testimonials',
    'description'   => 'Testimonials',
    'before_widget' => '<div class="widget-testimonials">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="testimonials-title">',
    'after_title'   => '</h3>'
  ));
 /* ========= Paint Carousel Widget =================*/
  register_sidebar(array(
    'name'          => ('Paint Carousel'),
    'id'            => 'paint-carousel',
    'description'   => 'Paint Carousel',
    'before_widget' => '<div class="widget-paint-carousel">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="paint-carousel-title">',
    'after_title'   => '</h3>'
  ));
  /* ========================================

                        Products Page Widgets

  ===========================================*/
  /* ========= Products Page Hero Widget =================*/
  register_sidebar(array(
    'name'          => ('Hero Image Products'),
    'id'            => 'hero-image-products',
    'description'   => 'Hero image Products Page',
    'before_widget' => '<div class="widget-hero-image-products">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-products-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Products Page Instagram Feed Widget =================*/
  register_sidebar(array(
    'name'          => ('Instagram'),
    'id'            => 'instagram',
    'description'   => 'Instagram Feed',
    'before_widget' => '<div class="widget-instagram">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="instagram-title">',
    'after_title'   => '</h3>'
  ));
  /* ========================================

                        Inspiration Page Widgets

  ===========================================*/
/* ========= Inspiration Page Hero Widget =================*/
  register_sidebar(array(
    'name'          => ('Hero Image Inspiration'),
    'id'            => 'hero-image-inspo',
    'description'   => 'Hero image Inspiration Page',
    'before_widget' => '<div class="widget-hero-image-inspo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-inspo-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Inspiration Page Instagram Feed Widget =================*/
  register_sidebar(array(
    'name'          => ('Instagram 2'),
    'id'            => 'instagram-2',
    'description'   => 'Instagram Feed',
    'before_widget' => '<div class="widget-instagram-2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="instagram-2-title">',
    'after_title'   => '</h3>'
  ));
  /* ========================================

                        Our Story Page Widgets

  ===========================================*/
  /* ========= Our Story Page Hero Widget =================*/
  register_sidebar(array(
    'name'          => ('Hero Image Our Story'),
    'id'            => 'hero-image-story',
    'description'   => 'Hero image Our Story Page',
    'before_widget' => '<div class="widget-hero-image-story">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-story-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= A Family Affair Widget =================*/
  register_sidebar(array(
    'name'          => ('Our Story Widget'),
    'id'            => 'story-widget',
    'description'   => 'Story Widget',
    'before_widget' => '<div class="widget-story">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="story-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Meet the Team slider Widget =================*/
  register_sidebar(array(
    'name'          => ('Meet The Team'),
    'id'            => 'meet-the-team',
    'description'   => 'meet the team',
    'before_widget' => '<div class="widget-meet-the-team">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="meet-the-team-title">',
    'after_title'   => '</h3>'
  ));
  /* ========================================

                        Contact Us Page Widgets

  ===========================================*/
  /* ========= Contact Us Hero Slider Widget =================*/
  register_sidebar(array(
    'name'          => ('Hero Image Contact'),
    'id'            => 'hero-image-contact',
    'description'   => 'Hero image Contact Page',
    'before_widget' => '<div class="widget-hero-image-contact">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="hero-image-contact-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Conteact Form Widget =================*/
  register_sidebar(array(
    'name'          => ('Contact Form'),
    'id'            => 'contact-form',
    'description'   => 'Contact Form',
    'before_widget' => '<div class="widget-contact-form">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="contact-form-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Conteact Form Widget =================*/
  register_sidebar(array(
    'name'          => ('Contact Retailer Widget'),
    'id'            => 'contact-retailer-area',
    'description'   => 'Contact Retailer Widget',
    'before_widget' => '<div class="widget-contact-retailer-area">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="contact-retailer-area-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Contact Info Text Widget =================*/
  register_sidebar(array(
    'name'          => ('Contact Info'),
    'id'            => 'contact-info',
    'description'   => 'Contact Info',
    'before_widget' => '<div class="widget-contact-info">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="contact-info-title">',
    'after_title'   => '</h3>'
  ));
  /* ========= Google Maps Widget =================*/
  register_sidebar(array(
    'name'          => ('Map'),
    'id'            => 'map',
    'description'   => 'Map',
    'before_widget' => '<div class="widget-map">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="contact-map">',
    'after_title'   => '</h3>'
  ));
  /* ========================================

                        Singl Posts  Widgets

  ===========================================*/
  /* ========= Righthand Sidebar =================*/
  register_sidebar(array(
    'name'          => ('Right Post Sidebar'),
    'id'            => 'right-post-sidebar',
    'description'   => 'Right Post Sidebar',
    'before_widget' => '<div class="widget-right-post-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="right-post-sidebar-title">',
    'after_title'   => '</h3>'
  ));
    /* ========= Recent Posts Slider =================*/
  register_sidebar(array(
    'name'          => ('Recent Posts'),
    'id'            => 'recent-post',
    'description'   => 'Recent Posts',
    'before_widget' => '<div class="recent-posts-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="recent-posts-title">',
    'after_title'   => '</h3>'
  ));
  /* ========================================

                        Footer Widgets

  ===========================================*/

    /* ========= Footer Social Media Icons Widget =================*/
  register_sidebar(array(
    'name'          => ('Footer Social Icons'),
    'id'            => 'footer-social',
    'description'   => 'Social Icons for Footer',
    'before_widget' => '<div class="widget-footer-social">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="footer-social-title">',
    'after_title'   => '</h3>'
  ));
    /* ========= Footer Menu 1 Widget =================*/
  register_sidebar(array(
    'name'          => ('Footer Menu 1'),
    'id'            => 'footer-menu-1',
    'description'   => 'Menu 1 for Footer',
    'before_widget' => '<div class="widget-footer-menu-1">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="footer-menu-1-title">',
    'after_title'   => '</h5>'
  ));
    /* ========= Footer Menu 2 Widget =================*/
  register_sidebar(array(
    'name'          => ('Footer Menu 2'),
    'id'            => 'footer-menu-2',
    'description'   => 'Menu 2 for Footer',
    'before_widget' => '<div class="widget-footer-menu-2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="footer-menu-2-title">',
    'after_title'   => '</h5>'
  ));
  /* ========= Newsletter Widget =================*/
  register_sidebar(array(
    'name'          => ('Footer newsletter'),
    'id'            => 'footer-newsletter',
    'description'   => 'Newsletter for Footer',
    'before_widget' => '<div class="widget-footer-newsletter">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="footer-newsletter-title">',
    'after_title'   => '</h5>'
  ));
  /* ========================================

                        Individual Shopping Page Widgets

  ===========================================*/

/* ========= Recent Posts Slider =================*/
  register_sidebar(array(
    'name'          => ('Shop Form'),
    'id'            => 'shop-form',
    'description'   => 'Form to mimick shopping feature',
    'before_widget' => '<div class="shop-form-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="shop-form-title">',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'blank_widgets_init');

/* =========

adds feature image functionality

=================*/

add_theme_support('post-thumbnails');

/* ================================================

  Create a custom post type for product items

====================================================*/


/* ==== Paint Products ==== */
function create_post_type(){
  register_post_type('paint_products',
    array(
      'labels'          => array(
        'name'          => ('Paint Products'),
        'singular name' => ('Paint Product')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
  register_post_type('wax_products',
    array(
      'labels'          => array(
        'name'          => ('Wax Products'),
        'singular name' => ('Wax Product')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
  register_post_type('finishes_products',
    array(
      'labels'          => array(
        'name'          => ('Finishes Products'),
        'singular name' => ('Finishes Product')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
  register_post_type('brushes_products',
    array(
      'labels'          => array(
        'name'          => ('Brushes Products'),
        'singular name' => ('Brush Product')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
  register_post_type('kits_products',
    array(
      'labels'          => array(
        'name'          => ('Kit Products'),
        'singular name' => ('Kit Product')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
  register_post_type('specials_products',
    array(
      'labels'          => array(
        'name'          => ('Special Products'),
        'singular name' => ('Special Product')
      ),
      'public'                => true,
      'has_archive'           => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => true,
      'show_in_admin_bar'     => true,
      'menu_position'         => 4,
      'can_expost'            => true,
      'menu_icon'             => 'dashicons-art',
      'supports'              => array('title','editor', 'thumbnail'),
    ));
}

add_action('init', 'create_post_type');

/* ==== Paint Products ==== */

?>
