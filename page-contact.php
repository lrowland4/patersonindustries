<?php /* Template Name: Contact Page Template */ ?>

<?php get_header(); ?>

<div>
  <div class="row">
    <div class="twelve columns">
      <div class="hero">
        <?php dynamic_sidebar('hero-contact'); ?>
      <div class="container">

    </div>
    </div>
  </div>
</div>

<!-- CONTACT INFO -->

  <div class="row container">
    <div class="twelve columns">
      <?php dynamic_sidebar('bottom-full-contact'); ?>
    </div>
  </div>

<?php get_footer(); ?>
