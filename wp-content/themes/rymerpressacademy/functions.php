<?php 
// Files
function academy_files(){
  wp_enqueue_style('main-styles', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

  if(strstr($_SERVER['SERVER_NAME'], 'http://rymerpressacademy.local/' )){
    wp_enqueue_script('main-academy-scripts', 'http://localhost:3000/bundled.js', null, 1.0, true);
    wp_enqueue_style('my-style', get_theme_file_uri('/style.css'), null, '1.0', 'all');
  }else {
    wp_enqueue_style('my-style', get_theme_file_uri('/style.css'), null, '1.0', 'all');
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.2dcf84883bb6263fa190.js'), NULL, '1.0', true);
    wp_enqueue_script('main-academy-scripts', get_theme_file_uri('/bundled-assets/scripts.cf3f091dc6bcd73b154f.js'), null, 1.0, true);
  }

  wp_enqueue_script('font-awesome', '//kit.fontawesome.com/3f2d85e662.js');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.slim.min.js');
  wp_enqueue_script('Jpopper', '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
  wp_enqueue_script('boostrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts', 'academy_files');

// Features
function academy_features(){
  register_nav_menu('academics', 'Academics');
  register_nav_menu('pages', 'Pages');
  register_nav_menu('admissions', 'Admissions');
  register_nav_menu('programs', 'Programs');
  register_nav_menu('faqOne', 'Faq');
  register_nav_menu('faqTwo', 'Faq Two');
  register_nav_menu('faqThree', 'Faq Three');
  register_nav_menu('qlinks', 'Quick Links');
  register_nav_menu('deptMenu', 'Department Menu');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('academyFrontBlog', 300, 300, true);
  add_image_size('newsArchive', 290, 230, true);
  add_image_size('professorPortrait', 250, 350, true);
  add_image_size('professorSquare', 250, 250, true);
  add_image_size('deptBanner', 562, 300, true);
  add_image_size('frontNews', 100, 100, true);
}
add_action('after_setup_theme', 'academy_features');


// Remove Admin Bar for All Users Except Admin
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}
add_action('after_setup_theme', 'remove_admin_bar');