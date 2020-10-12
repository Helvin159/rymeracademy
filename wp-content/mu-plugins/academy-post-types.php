<?php 
function academyPostTypes(){

  // Events Post Type
register_post_type('event', array(
  'capability_type' => 'event',
  'map_meta_cap' => true,
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'custom_fields', 'excerpt'),
  'rewrite' => array(
    'slug' => 'events'
  ),
  'public' => true,
  'has_archive' => true,
  'labels' => array(
    'name' => 'Events',
    'add_new_item' => 'Add Event',
    'edit_item' => 'Edit Event',
    'all-items' => 'All Events',
    'singular_name' => 'Event'
  ),
  'menu_icon' => 'dashicons-calendar-alt'
));

// Programs Post Type
register_post_type('program', array(
  'capability_type' => 'program',
  'map_meta_cap' => true,
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'custom_fields', 'comments'),
  'rewrite' => array(
    'slug' => 'programs'
  ),
  'public' => true,
  'has_archive' => true,
  'labels' => array(
    'name' => 'Programs',
    'add_new_item' => 'Add Program',
    'edit_item' => 'Edit Program',
    'all-items' => 'All Programs',
    'singular_name' => 'Program'
  ),
  'menu_icon' => 'dashicons-media-document'
));
// Programs Post Type
register_post_type('tour', array(
  'capability_type' => 'tour',
  'map_meta_cap' => true,
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom_fields'),
  'rewrite' => array(
    'slug' => 'tours'
  ),
  'public' => true,
  'has_archive' => true,
  'labels' => array(
    'name' => 'School Tours',
    'add_new_item' => 'Add School Tour',
    'edit_item' => 'Edit School Tours',
    'all-items' => 'All School Tours',
    'singular_name' => 'School Tour'
  ),
  'menu_icon' => 'dashicons-video-alt3'
));

// News Post Type
register_post_type('news', array(
  'capability_type' => 'news',
  'map_meta_cap' => true,
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'author', 'excerpt', 'custom_fields'),
  'rewrite' => array(
    'slug' => 'news'
  ),
  'public' => true,
  'has_archive' => true,
  'labels' => array(
    'name' => 'News',
    'add_new_item' => 'Add News',
    'edit_item' => 'Edit News',
    'all-items' => 'All News',
    'singular_name' => 'News'
  ),
  'menu_icon' => 'dashicons-admin-site-alt'
));

// Professor Post Type
register_post_type('professor', array(
  'capability_type' => 'professor',
  'map_meta_cap' => true,
  'show_in_rest' => true,
  'show_in_nav_menus' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
  'rewrite' => array(
    'slug' => 'professors'
  ),
  'public' => true,
  'has_archive' => true,
  'labels' => array(
    'name' => 'Professors',
    'add_new_item' => 'Add Professors',
    'edit_item' => 'Edit Professor',
    'all-items' => 'All Professors',
    'singular_name' => 'Professor'
  ),
  'menu_icon' => 'dashicons-buddicons-buddypress-logo'
));

// Department Post Type
register_post_type('department', array(
  'capability_type' => 'department',
  'map_meta_cap' => true,
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
  'rewrite' => array(
    'slug' => 'departments'
  ),
  'public' => true,
  'has_archive' => true,
  'labels' => array(
    'name' => 'Departments',
    'add_new_item' => 'Add Department',
    'edit_item' => 'Edit Department',
    'all-items' => 'All Departments',
    'singular_name' => 'Department'
  ),
  'menu_icon' => 'dashicons-building'
));
}

add_action('init', 'academyPostTypes');