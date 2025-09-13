<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

   <!--- basic page needs ================================================== -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Spurgeon</title>

   <script>
      document.documentElement.classList.remove('no-js');
      document.documentElement.classList.add('js');
   </script>

   <!-- CSS ================================================== -->
   <link rel="stylesheet" href="assets/css/vendor.css">
   <link rel="stylesheet" href="assets/css/styles.css">

   <!-- favicons ================================================== -->
   <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
   <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">

   <!-- preloader ================================================== -->
   <?php include "parts/preloader.php"; ?>

   <!-- page wrap ================================================== -->

   <?php
   $url = $_SERVER['REQUEST_URI'];
   $class = '';
   if ($url == '/index.php') {
      $class = "s-pagewrap ss-home";
   } elseif ($url == '/about.php' || $url == '/category.php' || $url == '/contact.php' || $url == '/single.php') {
      $class = "s-pagewrap";
   };
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