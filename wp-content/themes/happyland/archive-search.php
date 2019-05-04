<?php
/* Template Name: Custom Search */
get_header(); ?>
<div class="contentarea">
    <div id="content" class="content_right">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <?php if(isset($_GET['post_type'])) {
              $type = $_GET['post_type'];
                 if($type == 'faculty') {?>

                     /* Format for "faculty" custom post type */

                 <?php } else { ?>

                     /* Format for custom post types that are not "faculty,"
                     or you can use elseif to specify a second post type the
                     same way as above. Copy the default format here if you
                     only have one custom post type. */

                 <?php } ?>
          <?php } else { ?>

                    /* Format to display when the post_type parameter
                    is not set (i.e. default format) */
      <?php } ?>
      <?php endwhile; else: ?>

      /* What to display if there are no results. */

      <?php endif; ?>




   </div><!-- content -->
</div><!-- contentarea -->

<?php get_footer(); ?>
