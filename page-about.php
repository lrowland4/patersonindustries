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
  <div class="row lightpipe team">
      <div class="about container  animated fadeInUp duration1 eds-on-scroll ">
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
  <div class="row lightgreen-about">
    <div class="five columns">
      <?php dynamic_sidebar('about-safety'); ?>
    </div>
    <div class="seven columns mobile-c pad">
      <h3 class="animated fadeInUp duration1 eds-on-scroll">Our commitment to safety</h3>
      <p class="animated fadeInUp duration1 eds-on-scroll">We work hard to keep you safe. That’s why we’re certified across board to ensure safety and quality in everything that we do.</p>
      <div class=" animated fadeInUp duration1 eds-on-scroll "><a href="http://www.jessica-small.com/PatersonIndustries/category/paterson-industries-ltd/" class="button">Learn More</a></div>
    </div>
  </div>

<!-- BIOS SECTION -->
  <div class="whitebkgrd mobile-c team"> 
      <h3 class="center animated fadeInUp duration1 eds-on-scroll">Experts you can trust</h3>
      <p class="center container"> Our experts are some of the most experienced in the industry. We only hire the best of the best so you can feel reassured that we’re getting the job done right. </p>


      <div class="row container team">
        <div class="one-half column center">
          <?php dynamic_sidebar('about-left-column'); ?>
        </div>
        <div class="one-half column center">
          <?php dynamic_sidebar('about-right-column'); ?>
        </div>
      </div>
  </div>  

  <!-- MISSION STATEMENT -->
  <div class="row mission-section darkhex">
    <div class="twelve columns">
      <h3 class="center mission">Our Mission</h3>
      <div class="home-page-mission">
        <?php dynamic_sidebar('home-page-mission'); ?>
      </div>
    </div>
  </div>

  <!-- VALUES -->
  <div class="lightpipe">
    <div class="row about-value">
      <h3 class="center">Core Values</h3>
    </div>
    <div class="row">
      <div class="values">
        <img class="v-icon  animated wobbleVertical duration1 eds-on-hover" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/04/icon_safety.png" alt="hard hat safety">
        <h3 class="center top-text-about">SAFETY</h3>
      </div>
      <div class="values">
        <img class="v-icon  animated wobbleVertical duration1 eds-on-hover" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/04/icon_growth-copy.png" alt="trust shield">
        <h3 class="center top-text-about">TRUST</h3>
      </div>
      <div class="values">
        <img class="v-icon  animated wobbleVertical duration1 eds-on-hover" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/04/icon_growth.png" alt="growth chart">
        <h3 class="center top-text-about">GROWTH</h3>
      </div>
      <div class="values">
        <img class="v-icon  animated wobbleVertical duration1 eds-on-hover" src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/04/icon_growth-copy-2.png" alt="team">
        <h3 class="center top-text-about">TEAMWORK</h3>
      </div>
    </div>
  </div>

  <!-- COMMUNITY SECTION -->
  <div class="row lightgreen-about right-align">
    <div class="seven columns mobile-c pad">
      <h3>Our love for the community</h3>
      <p class="about-left">There’s nothing we love more than to show our community how much we care for it. From sponsoring little league baseball teams to volunteering, Paterson Industries Ltd. wants to be involved and make a difference.</p>
      <a href="http://www.jessica-small.com/PatersonIndustries/category/community/" class="button">Learn More</a>
    </div>
    <div class="five columns">
      <?php dynamic_sidebar('about-community'); ?>
    </div>
  </div>

  <!-- JOIN OUR TEAM SECTION -->
  <div class="row green join">
    <div class="twelve columns center">
      <h3 class="white">Join our team</h3>
      <a href="http://www.jessica-small.com/PatersonIndustries/paterson-industries-ltd/careers/" class="button">Careers at Paterson Industries Ltd.</a>
    </div>
  </div>

  <!-- Projects SECTION -->
  <div class="row ">

  <h3>Insert Projects Slider</h3>

  </div>


  </div>

<?php get_footer(); ?>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>