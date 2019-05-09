

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article class="mt-128 containerr">

          <div class="row mx-0 mb-4 mb-lg-5">

                        <!-- Faculty Title -->
                        <div class="p-0 mb col-12 ">

                              <!-- Carousel -->
                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">

                                    <div class="carousel-item active bg-prop bg1">
                                    </div>

                                    <div class="carousel-item bg-prop bg2">
                                    </div>

                                    <div class="carousel-item bg-prop bg3">
                                    </div>

                                    <div class="carousel-item bg-prop bg4">
                                    </div>

                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>

                                  </div>
                              </div>

                              <!-- Caraousel Background Image ACF -->
                              <style media="screen">

                                  <?php if( get_field('slider_1') ): ?>
                                  .bg1{
                                    background-image: url('<?php the_field('slider_1') ?>');
                                   }
                                  <?php endif; ?>

                                  <?php if( get_field('slider_2') ): ?>
                                  .bg2{
                                    background-image: url('<?php the_field('slider_2') ?>');
                                   }
                                  <?php endif; ?>

                                  <?php if( get_field('slider_3') ): ?>
                                  .bg3{
                                    background-image: url('<?php the_field('slider_3') ?>');
                                   }
                                  <?php endif; ?>

                                  <?php if( get_field('slider_4') ): ?>
                                  .bg4{
                                    background-image: url('<?php the_field('slider_4') ?>');
                                   }
                                  <?php endif; ?>

                              </style>




                        </div>

                        <!-- Faculty content -->
                      <div class="mx-auto col-12 col-lg-12 mt-4 p-0">
                        <h1 class="h22" style="text-align: center;"><?php the_title();?></h1>

                            <?php the_content();?>
                      </div>

          </div>

        </article>

        <?php
    }
    }
    ?>





<?php get_footer(); ?>
