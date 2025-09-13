<?php get_header(); ?>

<section id="content" class="s-content">

   <!-- hero -->
   <div class="hero">

      <div class="hero__slider swiper-container">

         <div class="swiper-wrapper">
            <?php
            $args = array(
               'post_type'      => 'post',
               'posts_per_page' => 3,
               'orderby'        => 'date',
               'order'          => 'DESC'
            );
            $hero_posts = new WP_Query($args);

            if ($hero_posts->have_posts()):
               while ($hero_posts->have_posts()):
                  $hero_posts->the_post();
            ?>
                  <article class="hero__slide swiper-slide">
                     <div class="hero__entry-image"
                        style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'homeHeroBannerSize')); ?>');">
                     </div>

                     <div class="hero__entry-text">
                        <div class="hero__entry-text-inner">
                           <div class="hero__entry-meta">
                              <span class="cat-links">
                                 <?php the_category(', '); ?>
                              </span>
                           </div>

                           <h2 class="hero__entry-title">
                              <a href="<?php the_permalink(); ?>">
                                 <?php the_title(); ?>
                              </a>
                           </h2>

                           <p class="hero__entry-desc">
                              <?php
                              if (has_excerpt()) {
                                 echo wp_trim_words(get_the_excerpt(), 20);
                              } else {
                                 echo wp_trim_words(get_the_content(), 20);
                              }
                              ?>
                           </p>

                           <a class="hero__more-link" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                     </div>
                  </article>
            <?php
               endwhile;
               wp_reset_postdata();
            endif;
            ?>

         </div> <!-- swiper-wrapper -->

         <div class="swiper-pagination"></div>

      </div> <!-- end hero slider -->

      <a href="#bricks" class="hero__scroll-down smoothscroll">
         <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
               d="M10.25 6.75L4.75 12L10.25 17.25"></path>
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
               d="M19.25 12H5"></path>
         </svg>
         <span>Scroll</span>
      </a>

   </div> <!-- end hero -->


   <!--  masonry -->
   <div id="bricks" class="bricks">

      <div class="masonry">

         <div class="bricks-wrapper" data-animate-block>

            <div class="grid-sizer"></div>

            <?php
            $latest_post_args = array(
               'post_type'      => 'post',
               'offset'         => 3
            );

            $latest_posts = new WP_Query($latest_post_args);

            if ($latest_posts->have_posts()) :
               while ($latest_posts->have_posts()) :
                  $latest_posts->the_post(); ?>

                  <article class="brick entry" data-animate-el>
                     <div class="entry__thumb">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="thumb-link">
                           <?php if (has_post_thumbnail()) : ?>
                              <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'postListImgSize')); ?>"
                                 alt="<?php echo esc_attr(get_the_title()); ?> Feature Image">
                           <?php endif; ?>
                        </a>
                     </div> <!-- end entry__thumb -->

                     <div class="entry__text">
                        <div class="entry__header">
                           <div class="entry__meta">
                              <span class="cat-links">
                                 <?php the_category(', '); ?>
                              </span>
                              <span class="byline">
                                 By:
                                 <?php the_author_posts_link(); ?>
                              </span>
                           </div>

                           <h1 class="entry__title">
                              <a href="<?php echo esc_url(get_permalink()); ?>">
                                 <?php the_title(); ?>
                              </a>
                           </h1>
                        </div>

                        <div class="entry__excerpt">
                           <p>
                              <?php
                              if (has_excerpt()) {
                                 the_excerpt();
                              } else {
                                 echo wp_trim_words(get_the_content(), 20, '...');
                              }
                              ?>
                           </p>
                        </div>

                        <a class="entry__more-link" href="<?php echo esc_url(get_permalink()); ?>">Read More</a>
                     </div> <!-- end entry__text -->

                  </article> <!-- end article -->

            <?php
               endwhile;
               wp_reset_postdata();
            else :
               echo '<p>No posts found.</p>';
            endif;
            ?>


         </div> <!-- end bricks-wrapper -->

      </div> <!-- end masonry-->

   </div> <!-- end bricks -->

</section> <!-- end s-content -->

<?php get_footer(); ?>