<?php
  // Featured images to posts
  add_theme_support('post-thumbnails');

  // Widget areas
  function widgets_area_init(){


// ------------------ HERO images ----------------------- //
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

// ------------------ HOME PAGE ----------------------- //

    // Image Quote on Home page
    register_sidebar( array(
      'name'          => ('Home - Additional Widget'),
      'id'            => 'home-page-add-widget',
      'description'   => 'Home page content - Additional Widget',
      'before_widget' => '<div class="home-page-add-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Icon WIDGET AREA 1 on Home page
    register_sidebar( array(
      'name'          => ('Home - Icon 1'),
      'id'            => 'home-page-1',
      'description'   => 'Home page content - Icon 1.',
      'before_widget' => '<div class="home-page-1">',
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

     // Mission Statement on Home and About
    register_sidebar( array(
      'name'          => ('Home/About - Mission'),
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
      'before_title'  => '<h3 class="top-text">',
      'after_title'   =>  '</h3>'
    ));

    // Home page - Services Area 2
    register_sidebar( array(
      'name'          => ('Home - services 2'),
      'id'            => 'home-page-services-2',
      'description'   => 'Home page content - Services 2.',
      'before_widget' => '<div class="home-page-services-2">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="top-text">',
      'after_title'   =>  '</h3>'
    ));

     // Home page - Services Area 3
    register_sidebar( array(
      'name'          => ('Home - services 3'),
      'id'            => 'home-page-services-3',
      'description'   => 'Home page content - Services 3.',
      'before_widget' => '<div class="home-page-services-3">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="top-text">',
      'after_title'   =>  '</h3>'
    ));

    // Info Sheet Image WIDGET on Home page
    register_sidebar( array(
      'name'          => ('Home - Info Sheet - Image'),
      'id'            => 'info-image',
      'description'   => 'Home page info sheet image.',
      'before_widget' => '<div class="info-image">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Info Sheet Text WIDGET on Home page
    register_sidebar( array(
      'name'          => ('Home - Info Sheet - Text'),
      'id'            => 'info-text',
      'description'   => 'Home page info sheet text.',
      'before_widget' => '<div class="info-text">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification  WIDGET AREA 1 on Home page
    register_sidebar( array(
      'name'          => ('Home - Certification - Icon 1'),
      'id'            => 'certification-page-1',
      'description'   => 'Home page content - certification 1.',
      'before_widget' => '<div class="home-page-1-certification">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification  WIDGET AREA 2 on Home page
    register_sidebar( array(
      'name'          => ('Home - Certification - Icon 2'),
      'id'            => 'certification-page-2',
      'description'   => 'Home page content - certification 2.',
      'before_widget' => '<div class="home-page-2-certification">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification  WIDGET AREA 3 on Home page
    register_sidebar( array(
      'name'          => ('Home - Certification - Icon 3'),
      'id'            => 'certification-page-3',
      'description'   => 'Home page content - certification 3.',
      'before_widget' => '<div class="home-page-3-certification">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

    // Certification  WIDGET AREA 4 on Home page
    register_sidebar( array(
      'name'          => ('Home - Certification - Icon 4'),
      'id'            => 'certification-page-4',
      'description'   => 'Home page content - certification 4.',
      'before_widget' => '<div class="home-page-4-certification">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   =>  '</h3>'
    ));

// ------------------ ABOUT PAGE ----------------------- //

    // ABOUT Page - Safety
    register_sidebar( array(
      'name'          => ('About - Safety Image'),
      'id'            => 'about-safety',
      'description'   => 'About page safety image.',
      'before_widget' => '<div class="about-safety">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

    // ABOUT Page - Community
    register_sidebar( array(
      'name'          => ('About - Community Image'),
      'id'            => 'about-community',
      'description'   => 'About page community image.',
      'before_widget' => '<div class="about-community">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
    ));

    // ABOUT Page - Left Column
    register_sidebar( array(
      'name'          => ('About - Left Column'),
      'id'            => 'about-left-column',
      'description'   => 'About page left column.',
      'before_widget' => '<div class="about-left-column">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title-founder">',
      'after_title'   =>  '</h4>'
    ));

    // ABOUT Page - Right Column
    register_sidebar( array(
      'name'          => ('About - Right Column'),
      'id'            => 'about-right-column',
      'description'   => 'About page right column.',
      'before_widget' => '<div class="about-right-column">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title-founder">',
      'after_title'   =>  '</h4>'
    ));

// ------------------ CONTACT PAGE ----------------------- //

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

// ------------------ FOOTER ----------------------- //

    // FOOTER LOGO widget
    register_sidebar( array(
      'name'          => ('Footer - Logo'),
      'id'            => 'bottom-left-contact',
      'description'   => 'Logo in footer.',
      'before_widget' => '<div class="bottom-left">',
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
