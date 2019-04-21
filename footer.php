  <div class="footer">
    <div class="row container mobile-c">
      <div class="eight columns">
        <?php wp_nav_menu(array(
            'theme_location'    => 'footer-menu',
            'container-class'   => 'footer'
          ));
        ?>
      </div>
      <div class="four columns">
        <?php dynamic_sidebar('bottom-left-contact'); ?>
      </div>
    </div>
    <!-- COPYRIGHT -->
    <div class="copyright">
      <p class="small"> &copy; 2019 Paterson Industries Ltd. All Rights Reserved.</p>
    </div>
    <?php wp_footer(); ?>
  </div>
</body>
</html>
