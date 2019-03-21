<?php /* Template Name: Contact Page Template */ ?>

<?php get_header(); ?>

<div>
<!-- HERO IMAGE -->
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-contact'); ?>
        <div class="centered"><h1><?php the_title(); ?></h1></div>
      </div>
     </div>
  </div>


 <!-- CONTACT INFO -->

 <div class="row">
    <div class="twelve columns">
    <?php dynamic_sidebar('contact-text'); ?> 
    </div>
  </div>

  </div>  

<!-- CONTACT INFO -->

  <div class="row container">
    <div class="twelve columns">
      <?php dynamic_sidebar('bottom-full-contact'); ?>
    </div>
  </div>

<?php get_footer(); ?>
