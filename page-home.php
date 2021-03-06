<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<div class="home">
<!-- HERO -->
  <div class="row preload">
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
      <h3 class="center top-text title-top-home">Our Services</h3>
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
  <!-- END SERVICES SECTION -->

  <!-- ADDITIONAL WIDGET SECTION -->
		<div class="row">
			 <div class="twelve columns">
			   <?php dynamic_sidebar('home-page-add-widget'); ?>
       </div>
	  </div>
  <!-- END ADDITIONAL WIDGET SECTION-->

  <!-- CERTIFICATIONS SECTION -->

 	<div class="whitebkgrd">
	 	<div class="row">
	     <h3 class="center">Our Certifications</h3>
	 	</div>

    <div class="row">
      <div class="cert-icon center">
          <a href="https://www.avetta.com/" target="blank"><?php dynamic_sidebar('certification-page-1'); ?></a>
      </div>
      <div class="cert-icon center">
          <a href="https://www.complyworks.com/en/home/" target="blank"><?php dynamic_sidebar('certification-page-2'); ?></a>
      </div>
      <div class="cert-icon center">
          <a href="http://www.energysafetycanada.com/cor/cor-overview.cfm" target="blank"><?php dynamic_sidebar('certification-page-3'); ?></a>
      </div>
      <div class="cert-icon center">
          <a href="https://www.isnetworld.com" target="blank"><?php dynamic_sidebar('certification-page-4'); ?></a>
      </div>
    </div>
  </div>
<!-- END CERTIFICATIONS SECTION -->

<!-- MISSION STATEMENT -->
<div class="row mission-section darkhex">
  <div class="twelve columns">
    <h3 class="center mission  animated fadeInUp duration1 eds-on-scroll ">Our Mission</h3>
    <div class="home-page-mission">
      <?php dynamic_sidebar('home-page-mission'); ?>
    </div>
  </div>
</div>

<!-- ICON SECTION -->
  <div class="promise-section">
    <div class="row">
      <h3 class="center">Our Promise</h3>
    </div>
    <div class="row icon-section">
      <div class="one-third column iconss">
          <div class="home-page-2">
            <?php dynamic_sidebar('home-page-2'); ?>
          </div>
      </div>
      <div class="one-third column iconss">
          <div class="home-page-1">
           <?php dynamic_sidebar('home-page-1'); ?>
          </div>
      </div>
      <div class="one-third column  iconss">
          <div class="home-page-3">
           <?php dynamic_sidebar('home-page-3'); ?>
          </div>
      </div>
    </div>
  </div>
<!-- END ICON SECTION -->


<!-- CTA SECTION -->
	<div class="lightgreen">
  		<div class="row">
  			 <div class="info-text">
            <h3>Proudly Serving Canada Since 2014</h3>
  	    </div>
      </div>
  		<div class="row">
  			<div class="info-image">
  	      <a href="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/04/Glacier-Creative_One-pager-Paterson.pdf" download><?php dynamic_sidebar('info-image'); ?></a>
  	    </div>
  		</div>
  	  <div class="row center cta">
  	    <a class="button cert" href="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/04/Glacier-Creative_One-pager-Paterson.pdf" download>Click to Download Our Company Info Sheet</a>
  	  </div>
  </div>
<!-- END CTA SECTION -->

</div>

<?php get_footer(); ?>
