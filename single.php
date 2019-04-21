<?php get_header(); ?>

<div class="container post single-post whitebkgrd">
  <?php
    if(have_posts()){
      while(have_posts()){
      the_post(); ?>
      <h3 class="center"><?php the_title(); ?></h3>
      <?php the_content(); ?>
<?php  }
} ?>
</div>

<?php get_footer(); ?>
