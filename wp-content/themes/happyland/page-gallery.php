

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article class="mt-128">

          <div class="row mx-0 mb-4 mb-lg-5">

                        <!-- Faculty Title -->
                        <div class=" mx-auto mb col-12">
                          <div class="overlay-effect"></div>

                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">

                                    <div class="carousel-item active bg-prop bg1">
                                    </div>

                                    <div class="carousel-item bg-prop bg2">
                                    </div>

                                    <div class="carousel-item bg-prop bg3">
                                    </div>

                                  </div>
                              </div>

                        </div>

                        <!-- Faculty content -->
                      <div class="mx-auto col-12 col-lg-11 mt-4 ">
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
