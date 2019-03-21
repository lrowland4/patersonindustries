<?php get_header(); ?>

<div class="container">
  <?php
    if(have_posts()){
      while(have_posts()){
      the_post(); ?>
      <div class="post-featured"><?php the_post_thumbnail(); ?></div>
      <h2 class="center"><?php the_title(); ?></h2>
      <?php the_content(); ?>
<?php  }
} ?>
</div>

<?php get_footer(); ?>
