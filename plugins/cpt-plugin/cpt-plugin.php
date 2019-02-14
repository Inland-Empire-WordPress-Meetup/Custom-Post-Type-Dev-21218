<?php
/*
Plugin Name: CPT Plugin Dev Meeting
Plugin URI: https://inlandempirewp.com
Description: Just a Custom Post Type Example
Version: 0.1.0
Author: IEWP
Author URI: http://inlandempirewp.com
Text Domain: cpt-plugin
 */

function create_post_type()
{
  register_post_type(
    'news',
    array(
      'labels' => array(
        'name' => __('Articles'),
        'singular_name' => __('Article')
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-format-quote',
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'create_post_type');