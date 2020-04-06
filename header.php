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

  <link rel="shortcut icon" width="16px" height="16px" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png" />

  <?php wp_head(); ?>
</head>

<body>
<header>
  <div class="desktop-nav">
    <div class="container">
      <div class="row d-flex justify-content-around align-items-baseline">
          <div class="col-3">
            <?php if(get_header_image() == '') {?>
                <h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name');?></a></h1><?php
              }else {?>
                <a href="<?php echo home_url('/') ?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>

              <?php } ?>
          </div>
            <div class="col-9 justify-content-end">
              <nav>
                <?php
                  if(has_nav_menu('top-menu')) {
                    wp_nav_menu(array('theme_location' => 'top-menu', 'container_class' => 'top-menu-class'));
                  } else{
                    echo "Please select a top menu through the dashboard";
                  }
                ?>
              </nav>
            </div>
          </div>
      </div>
    </div>

    <div class="mobile-nav">
      <div class="container">
        <div class="row justify-content-center">
          <?php if(get_header_image() == '') {?>
              <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
            }else {?>
              <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>

            <?php } ?>
        </div>
        <nav>
          <?php
            if(has_nav_menu('top-menu')) {
              wp_nav_menu(array('theme_location' => 'top-menu', 'container_class' => 'top-menu-class'));
            } else{
              echo "Please select a top menu through the dashboard";
            }
          ?>
        </nav>
      </div>
    </div>

  </header>
