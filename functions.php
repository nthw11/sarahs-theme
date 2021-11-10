<?php

function sarah_files()
{
  wp_enqueue_script('bootstrap-js-cdn', "//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js", array('jquery'), '', true);
  wp_enqueue_script('main-js', get_theme_file_uri('/scripts.js'), array('jquery'), '', true);
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Alice&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap-cdn', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
  wp_enqueue_style('sarah_main_styles', get_stylesheet_uri());
};
add_action('wp_enqueue_scripts', 'sarah_files');
