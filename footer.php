<div class="footer">
  <div class="row container mobile-c">
    <div class="one-half column">
      <?php dynamic_sidebar('bottom-right-contact'); ?>
    </div>
    <div class="one-half column">
      <?php wp_nav_menu(array(
          'theme_location'    => 'footer-menu',
          'container-class'   => 'footer'
        ));
      ?>
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
