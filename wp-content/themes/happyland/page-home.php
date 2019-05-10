
<?php get_header(); ?>

<article class="page-home mt-101 ">

  <!-- Row 1 -->
          <div class="row row1 mx-0">

            <!-- col-1 -->
            <div class=" col-11 col-lg-4 p-0 col1 mt-lg-5 mb-5 ml-auto">

                <div class="main-title ml-lg-5">
                    <h1>Happyland Higher Secondary School</h1>
                    <h5 style="color: gray;">A quality education for everyone </h5>
                    <input class="btn-contact" type="button" onclick="location.href='/index.php?page_id=23';" value="Contact Us" />
                </div>


            </div>
            <!-- col-2 -->
            <div class="col-lg-6 bg-property col2 mx-auto">
            </div>

          </div>
  <!-- Row 2 -->
          <div class="row mx-0">

            <!-- col-3 -->
            <div class="col-lg-6 bg-property col3 mr-auto">
            </div>

            <!-- col4-->
            <div class="col-12 p-0">

                <?php echo do_shortcode('[smartslider3 slider=2]');?>
                  <h1>ROw 2 col 12</h1>

                  <ul>
                    Courses
                    <li>Nursery to 10</li>
                    <li>+2 science</li>
                    <li>+2 Commerce</li>
                    <li>Coaching</li>
                  </ul>

              </div>
            </div>

          </div>



</article>
<?php get_footer(); ?>
