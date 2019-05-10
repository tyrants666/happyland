

<?php get_header(); ?>


  <article class="containerr mt-135">

    <center><h2 class="h22">Our Faculties</h2></center>

    <div class="search-faculty">
        <form class="form-inline form-search" role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
          <input class="col-sm-10 col-lg-4 ml-auto" name="s" type="text" placeholder="Search Faculty" autocomplete="off">
          <input type="hidden" name="post_type" value="faculty" /> <!-- // hidden 'faculty' value -->
          <button class="" type="submit" alt="Search" value="search" name="button"><i class="material-icons search-icon "> search </i></button>
        </form>
    </div>

    <div class="row mx-0 mt-50">
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
                <div class=" staff-list col-11 col-lg-2-5 mx-auto " style="background:<?php echo $colour; ?>;">

                    <a href="<?php the_permalink();?>">
                        <div class="img-circle"><?php the_post_thumbnail(); ?></div>
                        <h5 class=""><?php the_title();?></h5>
                    </a>


                    <h6><?php the_category(); ?></h6>
                    <small class="ta-l"> <b>Classes</b>: &ensp; 4th 5th 8th</small></br>
                    <small class="ta-l"> <b>Experience</b>: &ensp;  5 Years</small></br>
                    <small class="ta-l"> <b>Education</b>: &ensp;  M. Teaching</small>

                    <i class="material-icons fac-face">email</i>

              </div>

              <!-- <?php echo $flag;  ?> -->

        <?php endwhile;
              else : echo '<p>No content Found</p>';
        endif;?>



    </div>
    <!-- Pagination -->
    <div class="paginations col-lg-12">
      <?php wpex_pagination(); ?>
    </div>

  </article>


      <?php  get_footer();
?>
