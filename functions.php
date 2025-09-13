<?php
add_action('after_setup_theme', 'yablog_setup');
function yablog_setup()
{
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_theme_support('html5', array('search-form', 'navigation-widgets'));

   register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'yablog')));
}

add_action('wp_enqueue_scripts', 'yablog_enqueue');
function yablog_enqueue()
{
   wp_enqueue_style('yablog-style', get_stylesheet_uri());
   wp_enqueue_script('jquery');
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
