<div class="footer">
  <div class="row container mobile-c">
    <div class="one-third column">
      <a href="<?php echo home_url('/'); ?>"><img src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/PI-logo-09.png" alt="Home"></a>
    </div>
    <div class="one-third column">
      <?php wp_nav_menu(array(
          'theme_location'    => 'footer-menu',
          'container-class'   => 'footer'
        ));
      ?>
    </div>
    <div class="one-third column">
      <?php dynamic_sidebar('bottom-right-contact'); ?>
    </div>
  </div>
  <!-- COPYRIGHT -->
  <div class="copyright">
    <p> &copy; 2019 Paterson Industries Ltd. All Rights Reserved.</p>
  </div>
  <?php wp_footer(); ?>
</div>
</body>
</html>
