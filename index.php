<?php get_header(); ?>
<div class="lightpipe">
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-blog'); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <div class="one-half column posts">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <div class="category"><?php the_category(); ?></div>
            <div class="post-featured"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
          </div>
    <?php }
      }
    ?>
    </div>
  </div>

</div>
<?php get_footer(); ?>
