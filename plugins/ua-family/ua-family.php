<?php
/*
Plugin name: UA Family Posts
Author: Thomas Wilburn
Description: Adds a custom post type for family members, with mandatory fields exposed for sorting.
*/

add_action('init', 'ua_add_family_type');
add_action('add_meta_boxes', 'ua_add_family_metabox');
add_action('save_post', 'ua_save_family_metabox');

function ua_add_family_type() {
  register_post_type('ua-family', array(
    'labels' => array(
      'name' => 'Family Members',
      'singular_name' => 'Family Member',
    ),
    'public' => true,
    'menu_position' => 20,
    'hierarchical' => false,
    //'capability_type' => 'post',
    'supports' => array( 'title', 'thumbnail', 'revisions', 'editor' ),
  ));
}

function ua_add_family_metabox() {
  add_meta_box('family-metadata', 'About This Person', ua_include_family_metabox, 'ua-family', 'normal', 'high');
}

function ua_include_family_metabox($post) {
  $postmeta = get_post_meta($post->ID);
  foreach($postmeta as $key => $val) {
    $postmeta[$key] = $val[0];
  }
  wp_nonce_field( 'ua-family-security', 'ua-family-nonce' );
  include(plugin_dir_path(__FILE__) . "metaboxes.tmpl");
}

function ua_save_family_metabox($post) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  update_post_meta($post, "title", $_POST['ua-family-title']);
  update_post_meta($post, "rank", $_POST['ua-family-order']);
  update_post_meta($post, "sort name", $_POST['ua-family-sort-name']);
  update_post_meta($post, "link", $_POST['ua-family-link']);
  update_post_meta($post, "bio video", $_POST['ua-family-youtube']);
}