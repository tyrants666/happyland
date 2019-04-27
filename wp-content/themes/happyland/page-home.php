
<?php get_header(); ?>

<!-- ********************** Dynamic Background CSS **************************************-->

<?php
//******* Including PHP CUSTOM Library to detect mobile view  **********
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

// Check for any mobile device.
if ($detect->isMobile())
  $i = rand(5, 8);
else
  $i = rand(1, 4);
?>

<style media="screen">

  <?php if( get_field('bg_1') ): ?>
  .bg1{
    background-image: url('<?php the_field('bg_1') ?>');
   }
  <?php endif; ?>

  <?php if( get_field('bg_2') ): ?>
  .bg2{
    background-image: url('<?php the_field('bg_2') ?>');
   }
  <?php endif; ?>
  <?php if( get_field('bg_3') ): ?>
  .bg3{
    background-image: url('<?php the_field('bg_3') ?>');
   }
  <?php endif; ?>
  <?php if( get_field('bg_4') ): ?>
  .bg4{
    background-image: url('<?php the_field('bg_4') ?>');
   }
  <?php endif; ?>

  /* ******* Dynamic Background CSS for Mobile View ******** */

  <?php if( get_field('bg_5') ): ?>
  .bg5{
    background-image: url('<?php the_field('bg_5') ?>');
   }
  <?php endif; ?>

  <?php if( get_field('bg_6') ): ?>
  .bg6{
    background-image: url('<?php the_field('bg_6') ?>');
   }
  <?php endif; ?>
  <?php if( get_field('bg_7') ): ?>
  .bg7{
    background-image: url('<?php the_field('bg_7') ?>');
   }
  <?php endif; ?>
  <?php if( get_field('bg_8') ): ?>
  .bg8{
    background-image: url('<?php the_field('bg_8') ?>');
   }
  <?php endif; ?>

</style>

<!-- ********************** Homepage BODY Starts **************************************-->

   <article class="page-home" style="background: #f7f7f7; ">

    <!-- Row 1 -->
            <div class="row row-homee mx-0 sticky-top">
              <div class="col-sm-12 col-lg-12 homee bg<?php echo $i ?>">
                <div class="overlay-effect h-100 w-100"></div>
                <div class="main-title containerr">

                  <?php if( get_field('top_heading') ): ?>
                       <h1><?php the_field('top_heading'); ?></h1>
                  <?php endif; ?>

                </div>
                <center class="down-arrow"> <a href="#card" > <img src="<?php echo get_bloginfo('template_directory'); ?>/images/arrow.svg" alt=""> </a></center>
              </div>

            </div>



    <!-- Row 1 -->
    <article class="containerr">

              <!-- Card 1 -->
                      <div class="row roww mx-0 " id="card">
                        <div class="col-sm-10 col-lg-10 cardd mx-auto">
                          <a>Thought Process</a>
                          <h2 class="cardd-title">
                          <a style="color:white;">We understand what your company means to you. We create a story by-
                            <ul>
                                  <li>Strategizing</li>
                                  <li>Ideation & Designing</li>
                                  <li>Integrated Branding & Marketing</li>
                                  <li>Print Delivery</li>
                            </ul>
                          </a>
                          </h2>
                        </div>

                      </div>


              <!-- Card 2 -->
                      <div class="row roww mx-0">
                        <div class="col-sm-10 col-lg-10 cardd mx-auto">
                          <a href="/index.php?page_id=53">About Us </a>
                          <?php if( get_field('card2') ): ?>
                               <h2 class="cardd-title"> <a href="/index.php?page_id=53"><?php the_field('card2'); ?></a></h2>
                          <?php endif; ?>
                        </div>

                      </div>
              <!-- Card 3 -->
                      <div class="row roww mx-0">
                        <div class="col-sm-10 col-lg-10 cardd mx-auto">
                          <a href="/index.php?page_id=53">About Us</a>
                          <?php if( get_field('card3') ): ?>
                               <h2 class="cardd-title"> <a href="/index.php?page_id=53#print"><?php the_field('card3'); ?></a></h2>
                          <?php endif; ?>
                        </div>

                      </div>

              <!-- Moving Card -->
                      <div class="row rowcard mx-0">

                        <!-- Card LEFT -->
                        <div class="col-sm-10 col-lg-5 col-lg-4-5 cardd-left card-height1 sticky-top">
                          <a href="/index.php?page_id=9">Work</a>
                          <?php if( get_field('left1') ): ?>
                               <h2 class="cardd-left-title"> <a href="<?php the_field('work_link1'); ?>"><?php the_field('left1'); ?></a></h2>
                          <?php endif; ?>
                          <div class="page-redirect">
                              <a href="<?php the_field('work_link1'); ?>"
                                  onmouseover="document.rightarrow.src='<?php echo get_bloginfo('template_directory'); ?>/images/right-arrow.svg';"
                                  onmouseout="document.rightarrow.src='<?php echo get_bloginfo('template_directory'); ?>/images/right-arrow-blue.svg';">

                                  <?php if( get_field('work_name1') ): ?>
                                    <?php the_field('work_name1') ?>
                                  <?php endif; ?>
                                <img name="rightarrow" src="<?php echo get_bloginfo('template_directory'); ?>/images/right-arrow-blue.svg" alt="">
                              </a>
                          </div>
                        </div>

                        <!-- Card RIGHT -->
                        <div class="col-sm-10 col-lg-6 col-lg-6-5 ml-lg-auto p-0 " id="col-card-right">

                            <!-- Img-card -->
                            <a href="<?php the_field('work_link1'); ?>">
                                <?php if( get_field('right1') ): ?>
                                  <div style="background-image: url('<?php the_field('right1') ?>'); " class=" cardd-right ml-lg-auto"></div>
                                <?php endif; ?>
                            </a>

                            <!-- Img-card -->
                            <a href="<?php the_field('work_link1'); ?>">
                                <?php if( get_field('right2') ): ?>
                                  <div style="background-image: url('<?php the_field('right2') ?>'); " class=" cardd-right ml-lg-auto"></div>
                                <?php endif; ?>
                            </a>

                            <!-- Img-card -->
                            <a href="<?php the_field('work_link1'); ?>">
                              <?php if( get_field('right3') ): ?>
                                <div style="background-image: url('<?php the_field('right3') ?>'); " class=" cardd-right ml-lg-auto"></div>
                              <?php endif; ?>
                            </a>
</a>
                          </div>

                      </div>

              <!-- Moving Card 2 -->
                      <div class="row rowcard mx-0">

                        <!-- Card LEFT -->
                        <div class="col-sm-10 col-lg-5 cardd-left card-height2 col-lg-4-5 sticky-top">
                          <a href="/index.php?page_id=9">Work</a>
                          <?php if( get_field('left2') ): ?>
                               <h2 class="cardd-left-title"> <a href="<?php the_field('work_link2'); ?>"><?php the_field('left2'); ?></a></h2>
                          <?php endif; ?>

                          <div class="page-redirect">
                            <a href="<?php the_field('work_link2'); ?>"
                                onmouseover="document.rightarrow2.src='<?php echo get_bloginfo('template_directory'); ?>/images/right-arrow.svg';"
                                onmouseout="document.rightarrow2.src='<?php echo get_bloginfo('template_directory'); ?>/images/right-arrow-blue.svg';">
                                <?php the_field('work_name2') ?>
                              <img name="rightarrow2" src="<?php echo get_bloginfo('template_directory'); ?>/images/right-arrow-blue.svg" alt="">
                            </a>
                          </div>



                        </div>

                        <!-- Card RIGHT -->
                        <div class="col-sm-10 col-lg-6 col-lg-6-5 ml-lg-auto p-0 " id="col-card-right2">

                            <!-- Img-card -->
                            <a href="<?php the_field('work_link2'); ?>">
                              <?php if( get_field('right4') ): ?>
                                <div style="background-image: url('<?php the_field('right4') ?>'); " class=" cardd-right ml-lg-auto"></div>
                              <?php endif; ?>
                            </a>
                            <!-- Img-card -->
                            <a href="<?php the_field('work_link2'); ?>">
                              <?php if( get_field('right5') ): ?>
                                <div style="background-image: url('<?php the_field('right5') ?>'); " class=" cardd-right ml-lg-auto"></div>
                              <?php endif; ?>
                            </a>
                            <!-- Img-card -->
                            <a href="<?php the_field('work_link2'); ?>">
                              <?php if( get_field('right6') ): ?>
                                <div style="background-image: url('<?php the_field('right6') ?>'); " class=" cardd-right ml-lg-auto"></div>
                              <?php endif; ?>
                            </a>

                          </div>

                      </div>


               <!-- Card 4 -->
                      <div class="row roww mx-0" id="card">
                        <div class="col-sm-10 col-lg-10 cardd mx-auto">
                          <a href="/index.php?page_id=5">Contact</a>
                          <?php if( get_field('card4') ): ?>
                               <h2 class="cardd-title"> <a href="/index.php?page_id=5"><?php the_field('card4'); ?></a></h2>
                          <?php endif; ?>
                          <!-- <h2 class="cardd-title"> <a href="/index.php?page_id=5">Get associated with us and reap the benefits of being a brand that raises the bar.</a> </h2> -->
                        </div>

                      </div>

     </article>

  </article>


<?php get_footer(); ?>
