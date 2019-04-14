<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Analytics Goes Here-->
  <meta charset="utf-8"/>
  <meta name="description" content="Paterson Industries Ltd. is a pipefitting construction company, headquartered in Dawson Creek, B.C.">
  <meta name="keywords" content="pipe, pipefitting, construction, gas, Dawson Creek, Paterson, Industries, Canada">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Anton|Roboto:100,300,400,700" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
<header class="header stick">
  <div class="row">
    <div class="four columns mobile-c">
      <a href="<?php echo home_url('/'); ?>"><img src="http://www.jessica-small.com/PatersonIndustries/wp-content/uploads/2019/03/PI-logo-09.png" class="icon" alt="Home"></a>
    </div>
    <div class="eight columns">
      <?php wp_nav_menu(array(
          'theme_location'    => 'header-menu',
          'container-class'   => 'menu-header'
        ));
      ?>
    </div>
  </div>
</header>
