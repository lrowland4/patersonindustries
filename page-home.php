<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<div class="home">
<!-- HERO -->
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-image'); ?>
        <a class="ca3-scroll-down-link ca3-scroll-down-arrow hide" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
      </div>
    </div>
  </div>

<!-- SERVICES SECTION -->
  <div class="lightpipe">
    <div class="row">
      <h2 class="center">Our Services</h2>
    </div>
    <div class="row service-section">
      <div class="one-third column iconss">
        <div class="home-page-services-1">
          <?php dynamic_sidebar('home-page-services-1'); ?>
        </div>
      </div>
      <div class="one-third column iconss">
          <div class="home-page-services-2">
          <?php dynamic_sidebar('home-page-services-2'); ?>
        </div>
      </div>
      <div class="one-third column iconss">
          <div class="home-page-services-3">
          <?php dynamic_sidebar('home-page-services-3'); ?>
        </div>
      </div>
    </div>
  </div>
<!-- MISSION STATEMENT SECTION -->
  <div class="row mission-section darkhex">
    <div class="twelve columns">
      <h3 class="center">Our Mission</h3>
      <div class="home-page-mission">
        <?php dynamic_sidebar('home-page-mission'); ?>
      </div>
    </div>
  </div>
  <!-- ICON SECTION -->
    <div class="row icon-section">
      <div class="one-third column iconss">
        <div class="home-page-1">
          <?php dynamic_sidebar('home-page-1'); ?>
        </div>
      </div>
      <div class="one-third column iconss">
         <div class="home-page-2">
          <?php dynamic_sidebar('home-page-2'); ?>
        </div>
      </div>
      <div class="one-third column  iconss">
         <div class="home-page-3">
          <?php dynamic_sidebar('home-page-3'); ?>
        </div>
      </div>
    </div>
<!-- CTA SECTION -->
    <div class="row lightpipe center cta">
      <a class="button" href="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/pipefitting-1.png" download>Download Our Company Info Sheet</a>
      <a class="button" href="tel:555-555-5555">Give Us A Call</a>
    </div>


 <!-- Certifications SECTION -->
    <div class="row icon-section">
      <div class="one-fourth column iconss">
        <div class="home-page-1">
          <?php dynamic_sidebar('certification-page-1'); ?>
        </div>
      </div>
      <div class="one-fourth column iconss">
        <div class="home-page-1">
          <?php dynamic_sidebar('certification-page-2'); ?>
        </div>
      </div>
      <div class="one-fourth column iconss">
         <div class="home-page-2">
          <?php dynamic_sidebar('certification-page-3'); ?>
        </div>
      </div>
      <div class="one-fourth column  iconss">
         <div class="home-page-3">
          <?php dynamic_sidebar('certification-page-4'); ?>
        </div>
      </div>
    </div>


  </div>

</div>

<?php get_footer(); ?>
