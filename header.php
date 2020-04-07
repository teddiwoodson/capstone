<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name');?></title>

  <!--link to our style.css file -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Playfair+Display:500,700&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <header class="header container-fluid">
    <div class="row desktop">
      <div class="col-lg-3 col-md-12 col-sm-12 header-logo">
        <div class="logo">
            <?php if(get_header_image() == '') {?>
                <h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name');?></a></h1><?php
              }else {?>
            <a href="<?php echo home_url('/') ?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12 links">
      <!--  <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>-->
        <ul class="menu">
          <li><a href="http://www.teddiwoodson.com/capstone/">Home</a></li>
          <li><a href="http://www.teddiwoodson.com/capstone/products/">Products</a></li>
          <li><a href="http://www.teddiwoodson.com/capstone/inspiration/">Inspiration</a></li>
          <li><a href="http://www.teddiwoodson.com/capstone/our-story/">Our Story</a></li>
          <li><a href="http://www.teddiwoodson.com/capstone/contact-us/">Contact Us</a></li>
        </ul>
      </div>

    </div>

    <!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--        MIT License        -->
<nav role="navigation">
  <div class="row">
    <div class="col-lg-3 col-md-12 col-sm-12 header-logo">
      <div class="logo">
          <?php if(get_header_image() == '') {?>
              <h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name');?></a></h1><?php
            }else {?>
          <a href="<?php echo home_url('/') ?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>
        <?php } ?>
      </div>
    </div>
    <div id="menuToggle">
      <!--
      A fake / hidden checkbox is used as click reciever,
      so you can use the :checked selector on it.
      -->
      <input type="checkbox" />

      <!--
      Some spans to act as a hamburger.

      They are acting like a real hamburger,
      not that McDonalds stuff.
      -->
      <span></span>
      <span></span>
      <span></span>

      <!--
      Too bad the menu has to be inside of the button
      but hey, it's pure CSS magic.
      -->
      <ul id="mobile-menu">
        <li><a href="http://www.teddiwoodson.com/capstone/">Home</a></li>
        <li><a href="http://www.teddiwoodson.com/capstone/products/">Products</a></li>
        <li><a href="http://www.teddiwoodson.com/capstone/inspiration/">Inspiration</a></li>
        <li><a href="http://www.teddiwoodson.com/capstone/our-story/">Our Story</a></li>
        <li><a href="http://www.teddiwoodson.com/capstone/contact-us/">Contact Us</a></li>
      </ul>
    </div>

  </div>
  </nav>




  </header>
