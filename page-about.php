<?php /* Template Name: About Page Template */ ?>

<?php get_header(); ?>


  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-about'); ?>
        <div class="centered">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="nine columns">
        <?php
            if(have_posts()){
              while(have_posts()){
                the_post();?>
                <?php the_content();
              }
            }
        ?>
      </div>
      <div class="nine columns">
        <?php dynamic_sidebar('about-page'); ?>
      </div>
      <div class="twelve columns">
        <?php dynamic_sidebar('cta-buttons-about'); ?>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
