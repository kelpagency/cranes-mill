<?php

// Enqueue scripts and stylesheets globally
function theme_scripts()
{
  $css_timestamp = filemtime(get_template_directory() . '/static/css/main.css');
  wp_enqueue_style(
    'theme-styles',
    get_template_directory_uri() . '/static/css/main.css',
    [],
    $css_timestamp
  );
  $js_timestamp = filemtime(
    get_template_directory() . '/static/js/main.js'
  );
  wp_enqueue_script(
    'theme-js',
    get_template_directory_uri() . '/static/js/main.js',
    [],
    $js_timestamp,
    true
  );
}

add_action('wp_enqueue_scripts', 'theme_scripts');
