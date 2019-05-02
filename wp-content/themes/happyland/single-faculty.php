

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article class="containerr">

          <div class="row mx-0 mt-161  mb-5">

                        <!-- Faculty Banner -->
                        <div class=" work-banner p-0 col-lg-6 mx-0">
                              <div class="img-circle-single"><?php the_post_thumbnail(); ?></div>
                              <h5 class="faculty-title"><?php the_title();?></h5>
                              <h3><?php the_excerpt(); ?></h3>
                              <!-- <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6> -->
                        </div>

                        <!-- Faculty Heding -->
                        <!-- <div class="col-sm-12 col-lg-4 pl-0 mt-lg-4 ">
                              <h4 class="faculty-title"><?php the_title();?></h4>
                              <h5>Classes : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                              <h5>Subjects : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                              <h5>Experience : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                              <h5>Downloads : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                              <h5>Quote : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                              <h5>Gallery: <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                        </div> -->



                        <!-- *** Accordions **** -->
                        <div class="col-sm-12 col-lg-4 mx-auto col-accord">

                          <div class="accordion" id="accordionExample">
                                  <!-- one -->
                                  <div class="card">
                                    <div class="card-header card1" id="headingOne">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Download Assignments
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                      <div class="card-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Two -->
                                  <div class="card">
                                    <div class="card-header card2" id="headingTwo">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Precision
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                      <div class="card-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Three -->
                                  <div class="card">
                                    <div class="card-header card3" id="headingThree">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Efficiency
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Four -->
                                  <div class="card">
                                    <div class="card-header card4" id="headingThree">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          Quality
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                      </div>
                                    </div>
                                  </div>

                          </div>
                      </div>

                      <!-- Faculty content -->
                      <div class="work-content col-12 pl-0">
                            <!-- <h5 class="faculty-title"><?php the_title();?></h5> -->
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