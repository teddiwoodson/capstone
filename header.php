<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale = 1.0,maximum-scale=1.0, user-scalable=no" />
  <title><?php bloginfo('name');?></title>

  <!--link to our style.css file -->

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

  <link rel="shortcut icon"  href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <header class="header container-fluid">
    <div class="row desktop">
      <div class="col-lg-3 col-md-12 col-sm-12 header-logo">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/CountryChicPaintLogo.png" alt="Country Chic Paint Logo" title="Country Chic Paint Logo"></a>
        </div>
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12 links">
      <!--  <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>-->
        <ul class="menu">
          <li><a href="http://www.teddiwoodson.com/capstone/">Home</a></li>
          <li><a href="http://www.teddiwoodson.com/capstone/products/">Products</a></li>
          <li><a href="http://www.teddiwoodson.com/capstone/inspiration/">Tutorials</a></li>
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
    <div class="col-1 toggle">
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
          <li><a href="http://www.teddiwoodson.com/capstone/inspiration/">Tutorials</a></li>
          <li><a href="http://www.teddiwoodson.com/capstone/our-story/">Our Story</a></li>
          <li><a href="http://www.teddiwoodson.com/capstone/contact-us/">Contact Us</a></li>
        </ul>
      </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-10 col-10 header-logo">
        <div class="logo">
            <a href="http://www.teddiwoodson.com/capstone/"><img src="<?php echo get_template_directory_uri(); ?>/images/CountryChicPaintLogo.png" alt="Country Chic Paint Logo" title="Country Chic Paint Logo"></a>
        </div>
      </div>

  </div>
  </nav>




  </header>
