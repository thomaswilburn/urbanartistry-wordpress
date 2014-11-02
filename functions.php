<?php

add_action("init", ua_init);
add_action("wp_enqueue_scripts", "replaceJQuery");

function add_animated_class($classes, $item) {
  $classes[] = "animated";
  return $classes;
}

function replaceJQuery() {
	wp_deregister_script("jquery");
	wp_register_script("jquery", "http://code.jquery.com/jquery-2.1.1.min.js");
	wp_enqueue_script("jquery");
}

function ua_init() {

  register_nav_menus(array("main-menu" => "Main Menu"));
  register_sidebar(array("name" => "Social Media", "id" => "ua_social", "after_widget" => "</li>"));
  register_sidebar(array("name" => "Home Page", "id" => "ua_home"));
  add_filter("nav_menu_css_class", "add_animated_class", 10, 2);

  add_theme_support("post-thumbnails");
  set_post_thumbnail_size(0, 0, true);
  add_theme_support("custom-header", array());

}

include_once(__DIR__."/banners/banners.php");

function get_ua_banner() {
  global $ua_banners;
  echo get_template_directory_uri() . "/banners/" . $ua_banners[array_rand($ua_banners)];
}

include_once(__DIR__."/plugins/ua-family/ua-family.php");