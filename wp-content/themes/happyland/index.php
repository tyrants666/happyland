

<?php get_header(); ?>


<?php
  if (have_posts()):
      while (have_posts()) : the_post();
?>

  <article class="">

    <div class="row">
      <div class="col-6 borderb">

          <?php the_post_thumbnail('small-thumbnail'); ?>                                <!--To display featured image inside blog page -->
            <h3 class=""><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>  <!--get title of blogs and add permalink to it -->
            <p><?php the_content();?></p>                                                  <!--get content of titles -->

      </div>
    </div>

  </article>



<?php endwhile;
          else : echo '<p>No content Found</p>';
        endif;
        get_footer();
?>
