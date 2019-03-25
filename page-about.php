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
  <div class="row lightpipe">
      <div class="about container">
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
  <div class="row darkhex">
    <div class="about container">
      <p class="mission-text">
        From the moment the first shovel hits the ground till the last bolt,
        we’re there. We understand that some jobs need extra effort and
        expertise. We know that quality doesn’t come by mistake - it’s built from
        passion. We realize that with every wrench we turn, weld we make, or
        hole we dig, we’re building more than infrastructure. We’re building our
        community. We know this community and we love it. We focus on safely
        doing whatever it takes to get the job done right. We don’t cut corners.
        We don’t make excuses.
      </p>
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
