
<?php get_header(); ?>

<article class="page-home mt-101 ">

  <!-- Row 2 -->
  <div class="row mx-0">

    <!-- Search-->
    <!-- <div class="search-faculty">
        <form class="form-inline form-search" role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
          <input class="col-sm-10 col-lg-4 ml-auto" name="s" type="text" placeholder="Search Faculty" autocomplete="off">
          <input type="hidden" name="" value="" />
          <button class="" type="submit" alt="Search" value="search" name="button"><i class="material-icons search-icon "> search </i></button>
        </form>
    </div> -->

    <!-- col4-->
    <div class="col-lg-10-5 mx-auto p-0">

      <?php echo do_shortcode('[smartslider3 slider=2]');?>

    </div>



  </div>
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

            <!-- col-3 -->
            <div class="col-lg-6 bg-property col3 mr-auto">
            </div>

          </div>



</article>
<?php get_footer(); ?>
