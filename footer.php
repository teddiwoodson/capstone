<footer class="d-flex">
      <div class="container">
        <div class="row">
          <div class="d-flex align-items-baseline">
          <div class="col col-md-3">
          <?php if(get_header_image() == '') {?>
              <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
            }else {?>
              <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" atl="logo" /></a>

            <?php } ?>
          </div>
          <div class="col-md-9">
            <nav>
              <?php
                if(has_nav_menu('footer-menu')) {
                  wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'footer-menu-class'));
                } else{
                  echo "Please select a footer menu through the dashboard";
                }
              ?>
            </nav>
          </div>
        </div>
        </div>
      </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
