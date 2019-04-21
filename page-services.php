<?php /* Template Name: Services Page Template */ ?>

<?php get_header(); ?>

  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-services'); ?>
      </div>
    </div>
  </div>
  <div class="darkpipe">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="container services-content"><?php the_content();
                }
              }?>
            </div>
  </div>

  <!-- Projects SECTION -->
  <div class="row ">
  <?php echo do_shortcode(" [smartslider3 slider=6]"); ?>

  </div> 

  <!-- JOIN OUR TEAM SECTION -->
  <div class="row green join">
    <div class="twelve columns center">
      <h3 class="white">Join our team</h3>
      <a href="http://www.jessica-small.com/PatersonIndustries/paterson-industries-ltd/careers/" class="button">Careers at Paterson Industries Ltd.</a>
    </div>
  </div>

<?php get_footer(); ?>
