<!doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( "stylesheet_url" ); ?>" />
  <meta name="viewport" content="width=device-width">
  <link href="http://fonts.googleapis.com/css?family=Archivo+Black|Pinyon+Script|Droid+Sans" rel="stylesheet" type="text/css">
  <title><?php wp_title("::", true, "right"); bloginfo("name"); ?></title>
  <?php wp_head() ?>
</head>
<body class="<?php echo $post->post_name ?>">

  <div class="navigation grid-3 mobile-12 tablet-12 site-menu">
    <a href="/" class="desktop-only">
      <img class="logo" src="<?php echo get_template_directory_uri() ?>/images/ua_logo.jpg">
    </a>
    <li class="urban desktop-hidden animated" id="mobile-menu-trigger">
      <a href="javascript:;">Menu</a>
    </li>
    <?php wp_nav_menu( array(
      "theme_location" => "main-menu",
      "container" => "div",
      //"container_class" => "small-hidden",
      //"container_id" => "menu-desktop",
      "menu_class" => "urban menu-inner clearfix",
    ) ); ?>
  </div>

  <div class="column grid-9 mobile-12 tablet-12">

   <img class="small-hidden header-image" src="<?php get_ua_banner() ?>">