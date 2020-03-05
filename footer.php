<footer>
  <div class="row">
    <div class="col-lg-4">
      <nav>
        <?php
          if(has_nav_menu('footer-left')) {
            wp_nav_menu(array('theme_location' => 'footer-left', 'container_class' => 'footer-left-class'));
          } else{
            echo "Please select a left footer through the dashboard";
          }
        ?>
      </nav>
    </div>
    <div class="col-lg-4">
      <nav>
        <?php
          if(has_nav_menu('footer-middle')) {
            wp_nav_menu(array('theme_location' => 'footer-middle', 'container_class' => 'footer-middle-class'));
          } else{
            echo "Please select a middle footer through the dashboard";
          }
        ?>
      </nav>
    </div>
    <div class="col-lg-4">
      <nav>
        <?php
          if(has_nav_menu('footer-right')) {
            wp_nav_menu(array('theme_location' => 'footer-right', 'container_class' => 'footer-right-class'));
          } else{
            echo "Please select a right footer through the dashboard";
          }
        ?>
      </nav>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
