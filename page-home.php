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
    <div class="row top-section-service">
      <h3 class="center">Our Services</h3>
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
  </div><!-- END SERVICES SECTION -->
<!-- Image Quote SECTION -->
	<div class="">
		<div class="row .quote-image-bg">
			 <div class="home-page-image-quote-text">
			   <?php dynamic_sidebar('home-page-image-quote-text'); ?></div>
	    </div>
    </div><!-- END Image Quote SECTION -->  
<!-- MISSION STATEMENT SECTION -->
  <div class="row mission-section darkhex">
    <div class="twelve columns">
      <h3 class="center">Our Mission</h3>
      <div class="home-page-mission">
        <?php dynamic_sidebar('home-page-mission'); ?>
      </div>
    </div>
  </div><!-- END MISSION STATEMENT SECTION -->

   <!-- Certifications SECTION -->
 	<div class="certification-background">
	 	<div class="row">
	 		<div class="certification-title">
	          <?php dynamic_sidebar('certification-title-page'); ?>
	        </div>
	 	</div>

	    <div class="row cert-icons">
	      <div class="four columns cert">
	        <div class="home-page-1-certification four columns cert">
	          <a href="https://www.avetta.com/" target="blank"><?php dynamic_sidebar('certification-page-1'); ?></a>
	        </div>
	      </div>
	      <div class="four columns cert">
	        <div class="home-page-2-certification four columns cert">
	          <a href="https://www.complyworks.com/en/home/" target="blank"><?php dynamic_sidebar('certification-page-2'); ?></a>
	        </div>
	      </div>
	      <div class="four columns cert">
	         <div class="home-page-3-certification four columns cert">
	          <a href="http://www.energysafetycanada.com/cor/cor-overview.cfm" target="blank"><?php dynamic_sidebar('certification-page-3'); ?></a>
	        </div>
	      </div>
	      <div class="four columns cert">
	         <div class="home-page-4-certification four columns cert"">
	          <a href="https://www.isnetworld.com" target="blank"><?php dynamic_sidebar('certification-page-4'); ?></a>
	        </div>
	      </div>
	    </div>
    </div> <!-- END Certifications SECTION -->

  <!-- ICON SECTION --> 
  <div class="row">
        <div class="home-page-text center">
          <?php dynamic_sidebar('home-page-text'); ?>
        </div>
  </div>

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
    </div> <!-- END ICON SECTION -->


<!-- CTA SECTION -->
	<div class="cert-green">
		<div class="row">
			 <div class="info-text">
			   <?php dynamic_sidebar('info-text'); ?></div>
	    </div>
		<div class="row">
			<div class="info-image">
	          <a href="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/pipefitting-1.png" download><?php dynamic_sidebar('info-image'); ?></a>
	        </div>
		</div>
	    <div class="row center cta">
	      <a class="button cert" href="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/pipefitting-1.png" download>Click to Download Our Company Info Sheet</a>
	    </div>
    </div><!-- END CTA SECTION -->

  </div>

</div>

<?php get_footer(); ?>
