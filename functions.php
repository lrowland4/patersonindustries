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
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
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
      'before_widget' => '<div class="hero-image-widget">',
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

    // WIDGET AREA on Home page
    register_sidebar( array(
      'name'          => ('Content - Home'),
      'id'            => 'home-page',
      'description'   => 'Home page content.',
      'before_widget' => '<div class="home-page">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   =>  '</h4>'
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
      'before_title'  => '<h4 class="widget-title">',
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

    // BOTTOM RIGHT CONTACT in FOOTER widget
    register_sidebar( array(
      'name'          => ('Contact Info - Footer'),
      'id'            => 'bottom-right-contact',
      'description'   => 'Bottom right column in the footer for contact info.',
      'before_widget' => '<div class="bottom-right">',
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
