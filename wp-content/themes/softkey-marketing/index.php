<?php
get_header();
?>

<main id="primary" class="site-main">
   <div class="primaryAndSecondaryContainer">
      <div class="primaryAndSecondaryContent">
         <div class="primaryContentContainer">
            <section class="primaryContent" role="main">

               <?php
               if (have_posts()) {

                  $i = 0;

                  while (have_posts()) {
                     $i++;
                     if ($i > 1) {
                        echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
                     }
                     the_post();

                     get_template_part('template-parts/content', get_post_type());
                  }
               } elseif (is_search()) {
               ?>

                  <div class="no-search-results-form section-inner thin">

                     <?php
                     get_search_form(
                        array(
                           'aria_label' => __('search again', 'twentytwenty'),
                        )
                     );
                     ?>

                  </div><!-- .no-search-results -->
               <?php
               }
               ?>

            </section><!-- /primaryContent -->
         </div><!-- /primaryContentContainer -->
      </div><!-- /primaryAndSecondaryContent -->
   </div><!-- /primaryAndSecondaryContainer -->
</main><!-- #main -->

<?php
get_footer();
?>