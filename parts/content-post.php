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

</article>