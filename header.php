<!doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <meta name='viewport' content='width=device-width'>
  <link href='http://fonts.googleapis.com/css?family=Archivo+Black|Pinyon+Script|Droid+Sans' rel='stylesheet' type='text/css'><!--Bowlby+One|Source+Sans+Pro|Belgrano|Headland+One|Kreon-->
  <title><?php
wp_title('::', true, 'right'); bloginfo('name');
  ?></title>
  <?php wp_head() ?>
</head>
<body>

  <div class='navigation fluid grid-3 medium-12 small-12 site-menu'>
    <a href="/">
      <img class='logo' src='<?php echo get_template_directory_uri() ?>/images/ua_logo.jpg'>
    </a>
    <li class='urban large-hidden animated' id='mobile-menu-trigger'>
      <a class='small-only' href='javascript:;'>Menu</a>
      <span class='medium-only clearfix' style='text-align: left;'>
        <a href='javascript:;' style='float: left'>Urban Artistry</a>
        <a href='javascript:;' style='float: right'>MENU</a>
      </span>
    </li>
    <?php wp_nav_menu( array(
      'theme_location' => 'main-menu',
      'container' => 'div',
      //'container_class' => 'small-hidden',
      //'container_id' => 'menu-desktop',
      'menu_class' => 'urban menu-inner clearfix',
    ) ); ?>
  </div>