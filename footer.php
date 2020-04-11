<footer>
  <section>
      <div class="footer-desktop-nav">
        <div class="container">
          <div class="row d-flex justify-content-around align-items-baseline">
              <div class="col-3">
                <?php if(get_header_image() == '') {?>
                    <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
                  }else {?>
                    <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>

                  <?php } ?>
                  <?php dynamic_sidebar('footer-social'); ?>
              </div>
                <div class="col-9 justify-content-end">
                  <nav>
                    <?php
                      if(has_nav_menu('footer-menu')) {
                        wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'footer-menu-class'));
                      } else{
                        echo "Please select a top menu through the dashboard";
                      }
                    ?>
                  </nav>
                </div>
              </div>
          </div>
        </div>

        <div class="footer-mobile-nav">
          <div class="container">
            <div class="row">
              <?php if(get_header_image() == '') {?>
                  <h1><a href="<?php get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
                }else {?>
                  <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logo" /></a>

                <?php } ?>
                <?php dynamic_sidebar('footer-social'); ?>
            </div>
            <nav>
              <?php
                if(has_nav_menu('footer-menu')) {
                  wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'top-menu-class'));
                } else{
                  echo "Please select a top menu through the dashboard";
                }
              ?>
            </nav>
          </div>
        </div>
    </section>

        <div class="copyright">
          <p>&copy; 2020 Country Chic Paint</p>
        </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
