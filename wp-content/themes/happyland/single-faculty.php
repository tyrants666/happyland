

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article class="containerr">

          <div class="row mx-0">

            <!-- Work Banner -->
            <div class="mt-119 work-banner p-0 col-12 mx-0">
              <h1>Faculty Profile</h1>
              <?php the_post_thumbnail(); ?>
            </div>

            <!-- Work Heding -->
            <div class="col-sm-12 col-lg-8 pl-0">

              <h1 class="work-title"><?php the_title();?></h1>
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



  <div class=" bordered"></div>



  <!-- Buttons -->
  <article class="containerr">
          <div class="row row-button w-100 mx-0">

            <!-- PHP code for geeting next & prev post url -->
              <?php
                                // IN this CODE  php prev & next works as oppopsite because of plugin chronological order the post are in reverse order
                                // PHP Prev code
                                $previous_post = get_adjacent_post(false, '', false);

                                if( $previous_post ) {
                                    $previous_post_link = get_permalink( $previous_post );
                                } else {

                                        $args = array(

                                        'post_type' => get_post_type( get_the_ID() ),
                                        'posts_per_page' => 1,
                                        'order' => 'ASC'

                                        );

                                        $last = new WP_Query($args);

                                        if ( $last->have_posts() ) {
                                            while ( $last->have_posts() ){
                                                $last->the_post();
                                                $previous_post_link = get_permalink();

                                            }
                                        }
                                        wp_reset_query();
                                }


                                // PHP Next code
                                $next_post = get_adjacent_post(false, '', true);

                                if( $next_post ) {
                                    $next_post_link = get_permalink( $next_post );
                                } else {

                                    $args = array(
                                        'post_type' => get_post_type( get_the_ID() ),
                                        'posts_per_page' => 1,
                                        'order' => 'DESC'
                                    );

                                    $first = new WP_Query($args);

                                    if ( $first->have_posts() ) {
                                        while ( $first->have_posts() ){
                                            $first->the_post();
                                            $next_post_link = get_permalink();
                                        }
                                    }

                                    wp_reset_query();
                                }

               ?>

              <div class="nav-work col prev pl-0">
                <a class="prevv" href=" <?php echo  $next_post_link ?>"  ><i class="material-icons prev-icon"> arrow_back </i>Previous</a>
              </div>

              <div class="nav-work col all">
                <a href="/index.php?page_id=9" >View all</a>
              </div>

              <div class="nav-work col next pr-0">
                <a class="nextt" href="<?php echo $previous_post_link ?>"> Next <i class="material-icons next-icon"> arrow_forward </i></a>
              </div>
      </div>

  </article>


<?php get_footer(); ?>
