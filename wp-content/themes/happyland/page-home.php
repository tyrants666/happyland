
<?php get_header(); ?>

<article class="page-home">

  <!-- Row 1 -->
          <div class="row row-homee mx-0 sticky-top">
            <div class="col-sm-12 col-lg-12 homee">

              <div class="main-title containerr">

                <?php if( get_field('top_heading') ): ?>
                     <h1><?php the_field('top_heading'); ?></h1>
                <?php endif; ?>

              </div>
              <center class="down-arrow"> <a href="#card" > <img src="<?php echo get_bloginfo('template_directory'); ?>/images/arrow.svg" alt=""> </a></center>
            </div>

          </div>

  <!-- Row 2 -->
          <div class="row row-homee mx-0 sticky-top">
            <div class="col-sm-12 col-lg-12 homee">

              <div class="main-title containerr">

                <?php if( get_field('top_heading') ): ?>
                     <h1><?php the_field('top_heading'); ?></h1>
                <?php endif; ?>

              </div>
              <center class="down-arrow"> <a href="#card" > <img src="<?php echo get_bloginfo('template_directory'); ?>/images/arrow.svg" alt=""> </a></center>
            </div>

          </div>

</article>
<?php get_footer(); ?>
