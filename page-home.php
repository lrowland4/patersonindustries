<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<div>
<!-- HERO -->
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-image'); ?>
        <div class="centered">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
<!-- ICON SECTION -->
  <div class="row">
    <div class="one-third column">
      <!-- icon, text -->
    </div>
    <div class="one-third column">
      <!-- icon, text -->
    </div>
    <div class="one-third column">
      <!-- icon, text -->
    </div>
  </div>
<!-- MISSION STATEMENT SECTION -->
  <div class="row">
    <div class="twelve columns">
      <!-- mission statement -->
    </div>
  </div>
<!-- SERVICES SECTION -->
  <div class="row">
    <div class="one-third column">
      <!-- services 1 -->
    </div>

    <div class="one-third column">
      <!-- service 2 -->
    </div>

    <div class="one-third column">
      <!-- services 3 -->
    </div>
  </div>
<!-- SHORT CONTACT FORM SECTION -->
  <div class="row">
    <div class="one-half column">
      <!-- CTA text -->
    </div>
    <div class="one-half column">
      <!-- email submission form -->
    </div>
  </div>
<!-- BLOG PREVIEW SECTION -->
  <div class="row">
    <div class="one-third column">
      <!-- POST 1 -->
    </div>
    <div class="one-third column">
      <!-- POST 2 -->
    </div>
    <div class="one-third column">
      <!-- POST 3 -->
    </div>
  </div>

</div>

<?php get_footer(); ?>
