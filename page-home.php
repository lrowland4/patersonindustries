<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<div>
<!-- HERO -->
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-image'); ?>
        <div class="centered">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div> 
  </div>
<!-- ICON SECTION -->
  <div class="row">
    <div class="one-third column">
      <div class="home-page-1">
        <?php dynamic_sidebar('home-page-1'); ?>
      </div>
    </div>
    <div class="one-third column">
       <div class="home-page-2">
        <?php dynamic_sidebar('home-page-2'); ?>
      </div>
    </div>
    <div class="one-third column">
       <div class="home-page-3">
        <?php dynamic_sidebar('home-page-3'); ?>
      </div>
    </div>
  </div>
<!-- MISSION STATEMENT SECTION -->
  <div class="row">
    <div class="twelve columns">
      <div class="home-page-mission">
        <?php dynamic_sidebar('home-page-mission'); ?>
      </div>
    </div>
  </div>
<!-- SERVICES SECTION --> 
  <div class="row">
    <div class="one-third column">
      <div class="home-page-services-1">
        <?php dynamic_sidebar('home-page-services-1'); ?>
      </div>
    </div>
    <div class="one-third column">
       <div class="home-page-services-2">
        <?php dynamic_sidebar('home-page-services-2'); ?>
      </div>
    </div>
    <div class="one-third column">
       <div class="home-page-services-3">
        <?php dynamic_sidebar('home-page-services-3'); ?>
      </div>
    </div>
  </div>
<!-- SHORT CONTACT FORM SECTION -->
  <div class="row">
    <div class="one-half column">
      <!-- CTA text -->
    </div>
    <div class="one-half column">
      <!-- email submission form -->
    </div>
  </div>
<!-- BLOG PREVIEW SECTION -->
  <div class="row">
    <div class="one-third column">
      <!-- POST 1 -->
    </div>
    <div class="one-third column">
      <!-- POST 2 -->
    </div>
    <div class="one-third column">
      <!-- POST 3 -->
    </div>
  </div>

</div>

<?php get_footer(); ?>
