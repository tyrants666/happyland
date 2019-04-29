

<?php get_header(); ?>


  <article class="containerr">

    <div class="mt-127 row mx-0">

        <?php

        if (have_posts() ):
          $flag = 0;
          while (have_posts()) : the_post();
          ?>

                <div class=" work-list col-sm-12 col-lg-3 pl-lg-0 ">

                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail(); ?>
                        <h2 class=""><?php the_title();?></h2>

                    <h3><?php the_excerpt(); ?></h3></a>
                    <small><?php the_time('l, F j'); ?> </br> Category: <?php the_category(); ?></small>
              </div>

              <!-- <?php echo $flag;  ?> -->

        <?php endwhile;
              else : echo '<p>No content Found</p>';
        endif;?>

        <!-- Pagination -->
        <div class="paginations col-lg-12">
          <?php wpex_pagination(); ?>
        </div>


    </div>

  </article>


      <?php  get_footer();
?>
