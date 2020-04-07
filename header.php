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
    <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12 header-logo">
        <div class="logo">
          <a href="<?php echo home_url('/') ?>">
            <?php if(get_header_image() == '') {?>
                <h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name');?></a></h1><?php
              }else {?>
            <a href="<?php echo home_url('/') ?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>
          <?php } ?></a>
        </div>
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12 links">
      <!--  <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>-->
        <ul class="menu">
          <li><a href="#work">Home</a></li>
          <li><a href="#about">Products</a></li>
          <li><a href="#careers">Inspiration</a></li>
          <li><a href="#contact">Our Story</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>

    </div>



  </header>
