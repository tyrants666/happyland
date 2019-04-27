

<?php get_header(); ?>


  <article class="containerr">

    <div class="mt-119 row mx-0">

        <?php

        if (have_posts() ):
          $flag = 0;
          while (have_posts()) : the_post();
          ?>

              <?php
               if ($flag == 0) {
                 echo '<div class=" work-list col-sm-12 col-lg-6 pl-lg-0">';
                 $flag = 1;
               }
               elseif ($flag == 1) {
                 echo '<div class=" work-list col-sm-12 col-lg-6 pr-lg-0">';
                 $flag = 0;
               }
              ?>
                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail(); ?>
                        <h2 class=""><?php the_title();?></h2>
                    </a>
                    <h3><?php the_excerpt(); ?></h3>
              </div>

              <!-- <?php echo $flag;  ?> -->

        <?php endwhile;
              else : echo '<p>No content Found</p>';
        endif;?>

    </div>

  </article>


      <?php  get_footer();
?>
