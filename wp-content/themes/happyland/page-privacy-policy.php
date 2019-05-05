

<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <article class="containerr mt-100">

          <div class="row mx-0 pp">

            <!-- Work Banner -->
            <div class=" work-banner p-0 col-12 mx-0 mb-lg-4">
              <?php the_post_thumbnail(); ?>
            </div>

            <!-- Work Heding -->
            <div class="col-sm-12 col-lg-8 pl-0 mt-lg-5">

              <!-- <h1 class="work-title"><?php the_title();?></h1> -->
              <?php if( get_field('subtitle') ): ?>
                  <h2 class="work-subtitle"><?php the_field('subtitle'); ?></h1>
              <?php endif; ?>

            </div>

            <!-- Work content -->
            <div class="work-content pl-0">
              <?php the_content();?>
            </div>

          </div>

        </article>

    <?php
}
}
?>


<?php get_footer(); ?>
