<?php
  // Featured images to posts
  add_theme_support('post-thumbnails');

  // Widget areas
  function widgets_area_init(){

    // HERO image on Home page
    register_sidebar( array(
      'name'          => ('Hero Image - Home'),
      'id'            => 'hero-image',
      'description'   => 'Hero image on home page.',
      'before_widget' => '<div class="hero-image-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="widget-title">',
      'after_title'   =>  '</h5>'
    ));

    // HERO image on Services page
    register_sidebar( array(
      'name'          => ('Hero Image - Services'),
      'id'            => 'hero-services',
      'description'   => 'Hero image on services page.',
      'before_widget' => '<div class="hero-image-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

    // HERO image on About page
    register_sidebar( array(
      'name'          => ('Hero Image - About'),
      'id'            => 'hero-about',
      'description'   => 'Hero image on about page.',
      'before_widget' => '<div class="hero-image-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

    // HERO image on Contact page
    register_sidebar( array(
      'name'          => ('Hero Image - Contact'),
      'id'            => 'hero-contact',
      'description'   => 'Hero image on contact page.',
      'before_widget' => '<div class="hero-image-widget-contact">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

    // HERO image on Blog page
    register_sidebar( array(
      'name'          => ('Hero Image - News'),
      'id'            => 'hero-blog',
      'description'   => 'Hero image on blog page.',
      'before_widget' => '<div class="hero-image-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

    // Image Quote on Home page
    register_sidebar( array(
      'name'          => ('Home - Image Quote'),
      'id'            => 'home-page-image-quote',
      'description'   => 'Home page content - Image Quote.',
      'before_widget' => '<div class="home-page-image-quote">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Icon Text WIDGET AREA on Home page
    register_sidebar( array(
      'name'          => ('Home - Icon Text'),
      'id'            => 'home-page-text',
      'description'   => 'Home page content - Icon Text.',
      'before_widget' => '<div class="home-page-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Icon WIDGET AREA 2 on Home page
    register_sidebar( array(
      'name'          => ('Home - Icon 2.0'),
      'id'            => 'home-page-2',
      'description'   => 'Home page content - Icon 2.',
      'before_widget' => '<div class="home-page-2">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

     // Icon WIDGET AREA 3 on Home page
    register_sidebar( array(
      'name'          => ('Home - Icon 3.0'),
      'id'            => 'home-page-3',
      'description'   => 'Home page content - Icon 3.',
      'before_widget' => '<div class="home-page-3">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

     // Background Mission Statement on Home page
    register_sidebar( array(
      'name'          => ('Home - Mission'),
      'id'            => 'home-page-mission',
      'description'   => 'Home page content - mission statement.',
      'before_widget' => '<div class="home-page-mission">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));


    //  Home page - Services Area 1
    register_sidebar( array(
      'name'          => ('Home - services 1'),
      'id'            => 'home-page-services-1',
      'description'   => 'Home page content - Services 1.',
      'before_widget' => '<div class="home-page-services-1">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Home page - Services Area 2
    register_sidebar( array(
      'name'          => ('Home - services 2'),
      'id'            => 'home-page-services-2',
      'description'   => 'Home page content - Services 2.',
      'before_widget' => '<div class="home-page-services-2">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

     // Home page - Services Area 3
    register_sidebar( array(
      'name'          => ('Home - services 3'),
      'id'            => 'home-page-services-3',
      'description'   => 'Home page content - Services 3.',
      'before_widget' => '<div class="home-page-services-3">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Info Sheet Image WIDGET on Home page
    register_sidebar( array(
      'name'          => ('Info Sheet - Image'),
      'id'            => 'info-image',
      'description'   => 'Home page info sheet image.',
      'before_widget' => '<div class="info-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Info Sheet Text WIDGET on Home page
    register_sidebar( array(
      'name'          => ('Info Sheet - Text'),
      'id'            => 'info-text',
      'description'   => 'Home page info sheet text.',
      'before_widget' => '<div class="info-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification TITLE WIDGET on Home page
    register_sidebar( array(
      'name'          => ('Certification - Title'),
      'id'            => 'certification-title-page',
      'description'   => 'Home page content - certification title.',
      'before_widget' => '<div class="certification-title">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification  WIDGET AREA 1 on Home page
    register_sidebar( array(
      'name'          => ('Certification - Icon 1'),
      'id'            => 'certification-page-1',
      'description'   => 'Home page content - certification 1.',
      'before_widget' => '<div class="home-page-1-certification">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification  WIDGET AREA 2 on Home page
    register_sidebar( array(
      'name'          => ('Certification - Icon 2'),
      'id'            => 'certification-page-2',
      'description'   => 'Home page content - certification 2.',
      'before_widget' => '<div class="home-page-2-certification">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification  WIDGET AREA 3 on Home page
    register_sidebar( array(
      'name'          => ('Certification - Icon 3'),
      'id'            => 'certification-page-3',
      'description'   => 'Home page content - certification 3.',
      'before_widget' => '<div class="home-page-3-certification">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification  WIDGET AREA 4 on Home page
    register_sidebar( array(
      'name'          => ('Certification - Icon 4'),
      'id'            => 'certification-page-4',
      'description'   => 'Home page content - certification 4.',
      'before_widget' => '<div class="home-page-4-certification">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // ABOUT Page
    register_sidebar( array(
      'name'          => ('Content - About'),
      'id'            => 'about-page',
      'description'   => 'About page content.',
      'before_widget' => '<div class="about-page">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

    // Contact page Text
    register_sidebar( array(
      'name'          => ('Contact Text'),
      'id'            => 'contact-text',
      'description'   => 'Text on contact page.',
      'before_widget' => '<div class="bottom-full">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title-contact">',
      'after_title'   =>  '</h4>'
    ));

    // WIDGET AREA on Contact page
    register_sidebar( array(
      'name'          => ('Content - Contact'),
      'id'            => 'bottom-full-contact',
      'description'   => 'Bottom on contact page.',
      'before_widget' => '<div class="bottom-full">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

    // BOTTOM LEFT CONTACT in FOOTER widget
    register_sidebar( array(
      'name'          => ('Contact Info - Footer'),
      'id'            => 'bottom-left-contact',
      'description'   => 'Bottom left column in the footer for contact info.',
      'before_widget' => '<div class="bottom-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));


    // CTA BUTTON on Services page
    register_sidebar( array(
      'name'          => ('Services CTA Buttons'),
      'id'            => 'cta-buttons-services',
      'description'   => 'Area for CTA buttons.',
      'before_widget' => '<div class="cta-buttons-services">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

}


  add_action('widgets_init', 'widgets_area_init');

  // Add custom menu
  function custom_menu(){
    register_nav_menus( array(
      'header-menu'   => __('Header Menu'),
      'footer-menu'   => __('Footer Menu')
    ));
  }

  add_action('init', 'custom_menu');

?>
