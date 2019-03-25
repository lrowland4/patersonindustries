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
  <div class="row">
    <div class="five columns">
      <img class="safetyimg" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/about-committment.png" alt="safety">
    </div>
    <div class="seven columns">
      <h3>Our commitment to safety.</h3>
      <p>We work hard to keep you safe. That’s why we’re certified across board to ensure safety and quality in everything that we do.</p>
      <a href="http://www.jessica-small.com/PatersonIndustries/category/paterson-industries-ltd/" class="button">Learn More</a>
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
  <div class="lightpipe divheight">
    <div class="values">
      <img class="v-icon" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/services-03.png" alt="value icon">
      <p class="center">VALUE 1</p>
    </div>
    <div class="values">
      <img class="v-icon" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/services-03.png" alt="value icon">
      <p class="center">VALUE 2</p>
    </div>
    <div class="values">
      <img class="v-icon" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/services-03.png" alt="value icon">
      <p class="center">VALUE 3</p>
    </div>
    <div class="values">
      <img class="v-icon" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/services-03.png" alt="value icon">
      <p class="center">VALUE 4</p>
    </div>
  </div>

  <!-- COMMUNITY SECTION -->
  <div class="row">
    <div class="five columns">
      <img class="safetyimg" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/about-committment.png" alt="safety">
    </div>
    <div class="seven columns">
      <h3>Our love for the community.</h3>
      <p>There’s nothing we love more than to show our community how much we care for it. From sponsoring little league baseball teams to volunteering, Paterson Industries Ltd. wants to be involved and make a difference.</p>
      <a href="http://www.jessica-small.com/PatersonIndustries/category/community/" class="button">Learn More</a>
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
      <h4>Want to join our team?</h4>
      <?php dynamic_sidebar('cta-buttons-about'); ?>
    </div>
  </div>


  </div>

<?php get_footer(); ?>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
