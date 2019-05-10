

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article class="containerr">

          <div class="row mx-0 mt-150  ">

                        <!-- Faculty Banner -->
                        <div class=" faculty-banner p-0 col-lg-6 mx-0 mb-lg-5">
                              <div class="img-circle-single"><?php the_post_thumbnail(); ?></div>
                              <h5 class="faculty-title"><?php the_title();?></h5>
                              <h6><?php the_category(); ?></h6>
                              <h3><?php the_excerpt(); ?></h3>
                              <!-- <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6> -->
                        </div>



                        <!-- *** Accordions **** -->
                        <div class="col-sm-12 col-lg-4 mx-auto col-accord">

                          <div class="accordion" id="accordionExample">
                                  <!-- one -->
                                  <div class="card">
                                    <div class="card-header card1" id="headingOne">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Profile
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                      <div class="card-body">

                                        <h4 class="faculty-title"><?php the_title();?></h4>
                                        <h5>Classes : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                                        <h5>Subjects : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                                        <h5>Experience : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                                        <h5>Downloads : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                                        <h5>Quote : <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>
                                        <h5>Gallery: <h6 class="work-subtitle"><?php the_field('subtitle'); ?></h6></h5>

                                      </div>
                                    </div>
                                  </div>

                                  <!-- Two -->
                                  <div class="card">
                                    <div class="card-header card2" id="headingTwo">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Download Assignments
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                      <div class="card-body">

                                        <!-- Download Button 1 -->
                                        <?php $file = get_field('assignment_1'); ?>
                                        <?php
                                        if( $file ): ?>
                                            <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
                                              <div class="bg-img-prop download-single1 col-12">
                                                    <?php the_field('assignment_1_name'); ?>
                                              </div>
                                            </a>
                                        <?php endif; ?>
                                        <!-- Download Button 2 -->
                                        <?php $file = get_field('assignment_2'); ?>
                                        <?php
                                        if( $file ): ?>
                                            <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
                                              <div class="bg-img-prop download-single2 col-12">
                                                    <?php the_field('assignment_2_name'); ?>
                                              </div>
                                            </a>
                                        <?php endif; ?>
                                        <!-- Download Button 3 -->
                                        <?php $file = get_field('assignment_3'); ?>
                                        <?php
                                        if( $file ): ?>
                                            <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
                                              <div class="bg-img-prop download-single3 col-12">
                                                    <?php the_field('assignment_3_name'); ?>
                                              </div>
                                            </a>
                                        <?php endif; ?>
                                        <!-- Download Button 4 -->
                                        <?php $file = get_field('assignment_4'); ?>
                                        <?php
                                        if( $file ): ?>
                                            <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
                                              <div class="bg-img-prop download-single4 col-12">
                                                    <?php the_field('assignment_4_name'); ?>
                                              </div>
                                            </a>
                                        <?php endif; ?>
                                        <!-- Download Button 5 -->
                                        <?php $file = get_field('assignment_5'); ?>
                                        <?php
                                        if( $file ): ?>
                                            <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
                                              <div class="bg-img-prop download-single5 col-12">
                                                    <?php the_field('assignment_5_name'); ?>
                                              </div>
                                            </a>
                                        <?php endif; ?>



                                        <!-- End__ Download Button  -->

                                      </div>
                                    </div>
                                  </div>

                                  <!-- Three -->
                                  <div class="card">
                                    <div class="card-header card3" id="headingThree">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Contact Details
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                      <div class="card-body contact-body">

                                      <?php if( get_field('phone') ): ?>
                                        <!-- Phone. -->
                                        <div class=" faculty-contact">
                                          <a href="tel:+977<?php the_field('phone') ?>">
                                              <i class="material-icons" style="color:#904fb1e6">call</i>
                                              <p class="phone-p mt-2">+977 - <?php the_field('phone') ?></p>
                                          </a>
                                        </div>
                                      <?php endif; ?>

                                      <?php if( get_field('address') ): ?>
                                        <!-- Address. -->
                                        <div class=" faculty-contact">
                                          <a href="#">
                                              <i class="material-icons" style="color:#e43d3b">place</i>
                                              <p class="address-p"><?php the_field('address') ?></p>
                                          </a>
                                        </div>
                                      <?php endif; ?>

                                      <?php if( get_field('email') ): ?>
                                        <!-- Email -->
                                        <div class=" faculty-contact">
                                          <a href="mailto:happylandsecondaryschool@gmail.com">
                                            <i class="material-icons" style="color:#19ce19">alternate_email</i>
                                            <p class="email-p mt-3"> <?php the_field("email") ?> </p>
                                          </a>
                                        </div>
                                      <?php endif; ?>

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
                      <div class="work-content col-12 pl-0 mt-4">
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
                <a class="prevv" href=" <?php echo $previous_post_link ?>"  ><i class="material-icons prev-icon"> arrow_back </i>Previous</a>
              </div>

              <div class="nav-work col all">
                <a href="/index.php?page_id=9" >View all</a>
              </div>

              <div class="nav-work col next pr-0">
                <a class="nextt" href="<?php echo  $next_post_link ?>"> Next <i class="material-icons next-icon"> arrow_forward </i></a>
              </div>
      </div>

  </article>


<?php get_footer(); ?>
