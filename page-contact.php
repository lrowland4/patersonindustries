<?php /* Template Name: Contact Page Template */ ?>

<?php get_header(); ?>
<div class="lightpipe">
  <div class="row top-contact">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-contact'); ?>
      </div>
    </div>
  </div>

   <div class="container text-contactpage">
      <div class="row">
        <div class="seven columns">
            <?php dynamic_sidebar('contact-text'); ?>
        </div>
      </div>

      <div class="container four columns formms">
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
</div>

<!-- THE MAP -->
  <div class="contact-map">
    <iframe src="https://snazzymaps.com/embed/141768" height="543" class="mapp" style="border:none;"></iframe>
  </div>

<!-- CONTACT INFO -->


 <div class="row container form-row">
    <div class="twelve columns">
      <?php dynamic_sidebar('bottom-full-contact'); ?>
    </div>
  </div>

<?php get_footer(); ?>
