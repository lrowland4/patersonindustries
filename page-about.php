<?php /* Template Name: About Page Template */ ?>

<?php get_header(); ?>

<!-- HERO -->
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-about'); ?>
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
  <div class="row green">
    <div class="five columns">
      <img class="safetyimg" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/about-committment.png" alt="safety">
    </div>
    <div class="seven columns mobile-c">
      <h3>Our commitment to safety</h3>
      <p>We work hard to keep you safe. That’s why we’re certified across board to ensure safety and quality in everything that we do.</p>
      <a href="http://www.jessica-small.com/PatersonIndustries/category/paterson-industries-ltd/" class="button">Learn More</a>
    </div>
  </div>

  <!-- MISSION STATEMENT -->
  <div class="row mission-section darkhex">
    <div class="twelve columns">
      <h3 class="center">Our Mission</h3>
      <div class="home-page-mission">
        <?php dynamic_sidebar('home-page-mission'); ?>
      </div>
    </div>
  </div>

  <!-- VALUES -->
  <div class="row lightpipe">
    <div class="values">
      <img class="v-icon" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/services-03.png" alt="value icon">
      <p class="center">SAFETY</p>
    </div>
    <div class="values">
      <img class="v-icon" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/services-03.png" alt="value icon">
      <p class="center">ACCOUNTABILITY</p>
    </div>
    <div class="values">
      <img class="v-icon" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/services-03.png" alt="value icon">
      <p class="center">GROWTH</p>
    </div>
    <div class="values">
      <img class="v-icon" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/services-03.png" alt="value icon">
      <p class="center">TEAMWORK</p>
    </div>
  </div>

  <!-- COMMUNITY SECTION -->
  <div class="row lightgreen">
    <div class="five columns">
      <img class="safetyimg" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/about-committment.png" alt="safety">
    </div>
    <div class="seven columns mobile-c">
      <h3>Our love for the community</h3>
      <p>There’s nothing we love more than to show our community how much we care for it. From sponsoring little league baseball teams to volunteering, Paterson Industries Ltd. wants to be involved and make a difference.</p>
      <a href="http://www.jessica-small.com/PatersonIndustries/category/community/" class="button">Learn More</a>
    </div>
  </div>

  <!-- BIOS SECTION -->
  <div class="cream center padding mobile-c">
    <h3>Experts you can trust</h3>
    <p> Our experts are some of the most experienced in the industry. We only hire the best of the best so you can feel reassured that we’re getting the job done right. </p>
  </div>

  <!-- JOIN OUR TEAM SECTION -->
  <div class="row green">
    <div class="twelve columns center">
      <h3 class="white">Want to join our team?</h3>
      <a href="http://www.jessica-small.com/PatersonIndustries/paterson-industries-ltd/careers/" class="button">Careers at Paterson Industries Ltd.</a>
    </div>
  </div>


  </div>

<?php get_footer(); ?>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
