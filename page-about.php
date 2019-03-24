<?php /* Template Name: About Page Template */ ?>

<?php get_header(); ?>

<!-- HERO -->
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

  <!-- COMPANY HISTORY SECTION (WRITTEN IN WP)-->
  <div class="row lightpipe divheight">
      <div class="twelve columns about">
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

  <!-- SAFETY SECTION -->
  <div class="row divheight">
    <div class="five columns">
      <!-- image -->
      <p>placeholder, safety image</p>
    </div>
    <div class="seven columns">
      <!-- text, LINK TO "SAFETY" CATEGORY OF BLOG -->
    </div>
  </div>

  <!-- MISSION STATEMENT -->
  <div class="row darkhex divheight">
    <div class="twelve columns">
      <!-- mission statement -->
    </div>
  </div>

  <!-- VALUES -->
  <div class="row lightpipe divheight">
    <div class="three columns">
      <!-- icon, text -->
    </div>
    <div class="three columns">
      <!-- icon, text -->
    </div>
    <div class="three columns">
      <!-- icon, text -->
    </div>
    <div class="three columns">
      <!-- icon, text -->
    </div>
  </div>

  <!-- COMMUNITY SECTION -->
  <div class="row divheight">
    <div class="five columns">
      <!-- image -->
    </div>
    <div class="seven columns">
      <!-- text, LINK TO "COMMUNITY" CATEGORY OF BLOG: http://www.jessica-small.com/PatersonIndustries/category/community/ -->
    </div>
  </div>

  <!-- BIOS SECTION -->
  <div class="row divheight">
    <div class="twelve columns">
      <!-- image -->
    </div>
  </div>

  <!-- JOIN OUR TEAM SECTION -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('cta-buttons-about'); ?>
    </div>
  </div>


  </div>

<?php get_footer(); ?>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
