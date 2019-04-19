<?php /* Template Name: Services Page Template */ ?>

<?php get_header(); ?>

  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-services'); ?>
        <div class="centered">
          <h1 class="service-head"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="services-content"><?php the_content();
                }
              }?>
            </div>
  </div>
  <div class="twelve columns center">
        <?php dynamic_sidebar('cta-buttons-services'); ?>
  </div>
    
<?php get_footer(); ?>
