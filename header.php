<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
   <?php wp_body_open(); ?>

   <!-- preloader ================================================== -->
   <?php get_template_part("parts/preloader"); ?>

   <!-- page wrap ================================================== -->

   <?php
   $class = '';

   if (is_front_page() || is_home()) {
      // Homepage
      $class = "s-pagewrap ss-home";
   } elseif (is_page('about') || is_page('contact')) {
      // Specific pages by slug
      $class = "s-pagewrap";
   } elseif (is_category()) {
      // Category archive page
      $class = "s-pagewrap";
   } elseif (is_single()) {
      // Single post page
      $class = "s-pagewrap";
   }
   ?>


   <div id="page" class="<?php echo $class; ?>">

      <!-- # site header ================================================== -->
      <header id="masthead" class="s-header">

         <div class="s-header__branding">
            <p class="site-title">
               <a href="index.php" rel="home">Spurgeon.</a>
            </p>
         </div>

         <div class="row s-header__navigation">

            <nav class="s-header__nav-wrap">

               <h3 class="s-header__nav-heading">Navigate to</h3>

               <ul class="s-header__nav">
                  <li class="current-menu-item"><a href="index.php" title="">Home</a></li>
                  <li class="has-children">
                     <a href="#0" title="" class="">Categories</a>
                     <ul class="sub-menu">
                        <li><a href="category.php">Design</a></li>
                        <li><a href="category.php">Lifestyle</a></li>
                        <li><a href="category.php">Inspiration</a></li>
                        <li><a href="category.php">Work</a></li>
                        <li><a href="category.php">Health</a></li>
                        <li><a href="category.php">Photography</a></li>
                     </ul>
                  </li>
                  <li><a href="single.php" title="">Blogs</a></li>
                  <li><a href="about.php" title="">About</a></li>
                  <li><a href="contact.php" title="">Contact</a></li>
               </ul> <!-- end s-header__nav -->

            </nav> <!-- end s-header__nav-wrap -->

         </div> <!-- end s-header__navigation -->

         <div class="s-header__search">

            <div class="s-header__search-inner">
               <div class="row">

                  <form role="search" method="get" class="s-header__search-form" action="#">
                     <label>
                        <span class="u-screen-reader-text">Search for:</span>
                        <input type="search" class="s-header__search-field" placeholder="Search for..." value=""
                           name="s" title="Search for:" autocomplete="off">
                     </label>
                     <input type="submit" class="s-header__search-submit" value="Search">
                  </form>

                  <a href="#0" title="Close Search" class="s-header__search-close">Close</a>

               </div> <!-- end row -->
            </div> <!-- s-header__search-inner -->

         </div> <!-- end s-header__search -->

         <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
         <a class="s-header__search-trigger" href="#">
            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z">
               </path>
            </svg>
         </a>

      </header> <!-- end s-header -->