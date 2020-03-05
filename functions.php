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

add_action('init', 'register_my_menus')


?>
