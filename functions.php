<?php
add_action('after_setup_theme', 'yablog_setup');
function yablog_setup()
{
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_theme_support('html5', array('search-form', 'navigation-widgets'));

   // Custom Feature image size
   add_image_size('postListImgSize', 400, 400, true);
   add_image_size('homeHeroBannerSize', 1000, 1300, true);
}

add_action('wp_enqueue_scripts', 'yablog_enqueue');
function yablog_enqueue()
{
   wp_enqueue_style('yablog-style', get_stylesheet_uri());
   wp_enqueue_style('yablog-vendor', get_template_directory_uri() . '/assets/css/vendor.css', array(), '1.0', 'all');
   wp_enqueue_style('yablog-styles', get_template_directory_uri() . '/assets/css/styles.css', array('yablog-vendor'), '1.0', 'all');
   wp_enqueue_script('jquery');
   wp_enqueue_script('yablog-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0', true);
   wp_enqueue_script('yablog-main', get_template_directory_uri() . '/assets/js/main.js', array('yablog-plugins'), '1.0', true);
}


add_filter('document_title_separator', 'yablog_document_title_separator');
function yablog_document_title_separator($sep)
{
   $sep = esc_html('|');
   return $sep;
}

add_filter('the_title', 'yablog_title');
function yablog_title($title)
{
   if ($title == '') {
      return esc_html('...');
   } else {
      return wp_kses_post($title);
   }
}
