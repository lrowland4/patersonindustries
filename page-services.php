<?php /* Template Name: Services Page Template */ ?>

<?php get_header(); ?>

<div class="green-color">
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-services'); ?>
        <div class="centered">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="container">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <?php the_content();
          }
        }
      ?>
      </div>
      <div class="twelve columns">
        <?php dynamic_sidebar('cta-buttons-services'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
