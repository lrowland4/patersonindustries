<?php /* Template Name: Contact Page Template */ ?>

<?php get_header(); ?>

<div>
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-contact'); ?>
      </div>
    </div>    
   </div>
   
   <div class="container">
     <div class="row">
      <div class="four columns">  
        <?php dynamic_sidebar('contact-text'); ?>
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
</div>

<!-- CONTACT INFO -->



<?php get_footer(); ?>
