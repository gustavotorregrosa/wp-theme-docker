<?php

function followandrews_menus(){
  $locations = [
    'primary' => 'Desktop primary sidebar',
    'footer' => 'Footer menu items'
  ];

  register_nav_menus($locations);
}

add_action('init', 'followandrews_menus');

function followandrew_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'followandrew_theme_support');


function followandrew_register_styles(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('followandrew-style', get_template_directory_uri().'/style.css', [
        'followandrew-bootstrap',
        'followandrew-fontawesome'
    ], $version, 'all');
    wp_enqueue_style('followandrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' , [], '4.4.1', 'all');
    wp_enqueue_style('followandrew-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', [], '5.13.0', 'all');
   
}

add_action('wp_enqueue_scripts', 'followandrew_register_styles');


function followandrew_register_scripts(){
  wp_enqueue_script('followandrew-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], '3.4.1', true);
  wp_enqueue_script('followandrew-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], '1.16.0', true);
  wp_enqueue_script('followandrew-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', [
    'followandrew-jquery',
    'followandrew-popper'
  ], '4.4.1', true);
  wp_enqueue_script('followandrew-main', get_template_directory_uri().'/assets/js/main.js', [
    'followandrew-bootstrap',
  ], '1.0', true);
   
}

add_action('wp_enqueue_scripts', 'followandrew_register_scripts');

require get_template_directory().'/template-parts/MenuWalker.php';