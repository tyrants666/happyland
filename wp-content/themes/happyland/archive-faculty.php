

<?php get_header(); ?>


  <article class="containerr">

    <center><h2 style="margin-top: 125px">OUR FACULTIES</h2></center>
    <div class="mt-119 row mx-0" style="margin-top: 70px">

        <?php

        if (have_posts() ):
          $flag = 0;
          while (have_posts()) : the_post();
          ?>

                <!-- Random Background colour -->
                <?php
                // $bg = array('#9bd964','#b388ff','#ff8282d4','#29b6f6bd','#b9b198');
                //
                // $i = rand(0, count($bg)-1);
                // $colour = "$bg[$i]";
                ?>
                <div class=" staff-list col-sm-12 col-lg-2-5 mx-auto " style="background:<?php echo $colour; ?>;">

                    <a href="<?php the_permalink();?>">
                        <div class="img-circle"><?php the_post_thumbnail(); ?></div>
                        <h5 class=""><?php the_title();?></h5>
                    </a>


                    <h6><?php the_category(); ?></h6>
                    <small class="ta-l"> Classes: 4th 5th 8th</small></br>
                    <small class="ta-l"> Experience: 5 Years</small>
                    <small class="ta-l"> Education: M. Teaching</small>

              </div>

              <!-- <?php echo $flag;  ?> -->

        <?php endwhile;
              else : echo '<p>No content Found</p>';
        endif;?>

    </div>

  </article>


      <?php  get_footer();
?>
