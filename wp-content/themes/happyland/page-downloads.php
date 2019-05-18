<!-- We Add below Js variable here in php beacuse using direct php echo for href in jquery doesnt excutes php echo  -->
<script>
  a1='<?php echo get_field('routine_1_a')['url']; ?>';
  b1='<?php echo get_field('routine_1_b')['url']; ?>';
  c1='<?php echo get_field('routine_1_c')['url']; ?>';
  a2='<?php echo get_field('routine_2_a')['url']; ?>';
  b2='<?php echo get_field('routine_2_b')['url']; ?>';
  c2='<?php echo get_field('routine_2_c')['url']; ?>';
  a3='<?php echo get_field('routine_3_a')['url']; ?>';
  b3='<?php echo get_field('routine_3_b')['url']; ?>';
  c3='<?php echo get_field('routine_3_c')['url']; ?>';
  a4='<?php echo get_field('routine_4_a')['url']; ?>';
  b4='<?php echo get_field('routine_4_b')['url']; ?>';
  c4='<?php echo get_field('routine_4_c')['url']; ?>';
  a5='<?php echo get_field('routine_5_a')['url']; ?>';
  b5='<?php echo get_field('routine_5_b')['url']; ?>';
  c5='<?php echo get_field('routine_5_c')['url']; ?>';
  a6='<?php echo get_field('routine_6_a')['url']; ?>';
  b6='<?php echo get_field('routine_6_b')['url']; ?>';
  c6='<?php echo get_field('routine_6_c')['url']; ?>';
  a7='<?php echo get_field('routine_7_a')['url']; ?>';
  b7='<?php echo get_field('routine_7_b')['url']; ?>';
  c7='<?php echo get_field('routine_7_c')['url']; ?>';
  a8='<?php echo get_field('routine_8_a')['url']; ?>';
  b8='<?php echo get_field('routine_8_b')['url']; ?>';
  c8='<?php echo get_field('routine_8_c')['url']; ?>';
  a9='<?php echo get_field('routine_9_a')['url']; ?>';
  b9='<?php echo get_field('routine_9_b')['url']; ?>';
  c9='<?php echo get_field('routine_9_c')['url']; ?>';
  a10='<?php echo get_field('routine_10_a')['url']; ?>';
  b10='<?php echo get_field('routine_10_b')['url']; ?>';
  c10='<?php echo get_field('routine_10_c')['url']; ?>';
  s11='<?php echo get_field('routine_11_s')['url']; ?>';
  c11='<?php echo get_field('routine_11_c')['url']; ?>';
  s12='<?php echo get_field('routine_12_s')['url']; ?>';
  c12='<?php echo get_field('routine_12_c')['url']; ?>';

</script>


<?php get_header(); ?>

<article class="containerr mt-125 mb-3 mb-lg-5">

  <center><h2 class="h22 mb-4 mb-lg-5">Downloads</h2></center>

<div class="row mx-0">


  <!-- ///////////////////////////////////// NOTICE //////////////////////////////////////// -->
      <div class="col-lg-3-52 col-down mx-auto  text-center">
        <h3>Notice</h3>

          <!-- Download Button 1 -->
          <?php $file = get_field('admission_form'); ?>
          <?php
          if( $file ): ?>
          <div class="download down-notice">
            <a target="#" class="" href="<?php echo $file['url']; ?>">
            <p>Admission Form</p>
            <i class="material-icons"> cloud_download </i>
          </a>
          </div>
          <?php endif; ?>
          <!-- Download Button 1 -->
          <?php $file = get_field('admission_form'); ?>
          <?php
          if( $file ): ?>
          <div class="download down-notice">
            <a target="#" class="" href="<?php echo $file['url']; ?>">
            <p>Admission Form</p>
            <i class="material-icons"> cloud_download </i>
          </a>
          </div>
          <?php endif; ?>
          <!-- Download Button 1 -->
          <?php $file = get_field('admission_form'); ?>
          <?php
          if( $file ): ?>
          <div class="download down-notice">
            <a target="#" class="" href="<?php echo $file['url']; ?>">
            <p>Admission Form</p>
            <i class="material-icons"> cloud_download </i>
          </a>
          </div>
          <?php endif; ?>
          <!-- Download Button 1 -->
          <?php $file = get_field('admission_form'); ?>
          <?php
          if( $file ): ?>
          <div class="download down-notice">
            <a target="#" class="" href="<?php echo $file['url']; ?>">
            <p>Admission Form</p>
            <i class="material-icons"> cloud_download </i>
          </a>
          </div>
          <?php endif; ?>

      </div>

<!-- ///////////////////////////////////// CLASS ROUTINE //////////////////////////////////////// -->

      <div class="col-lg-3-52 col-down mx-auto  text-center">
        <h3>Class Routine</h3>

        <div class="form-group">
          <select onchange="change()" id="select1" class="form-control select1" id="exampleFormControlSelect1">
            <option value="" disabled selected>Select Class</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
        </div>
        <div class="form-group">
          <select onchange="change()" id="select2" class="form-control select2" id="exampleFormControlSelect1">
            <option value="" disabled selected>Section</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="science">Science</option>
            <option value="commerce">Commerce</option>
          </select>
        </div>


        <!-- Download Routine -->

        <div class="download down-routine">
          <a target="#" class="anchor" >
          <p>Download Routine</p>
          <i class="material-icons"> cloud_download </i>
        </a>
        </div>


      </div>

<!-- ///////////////////////////////////// Resources //////////////////////////////////////// -->
      <div class="col-lg-3-52 col-down mx-auto  text-center">
        <h3>Resources</h3>

        <!-- Download Button 1 -->
        <?php $file = get_field('admission_form'); ?>
        <?php
        if( $file ): ?>
        <div class="download down-resources">
          <a target="#" class="" href="<?php echo $file['url']; ?>">
          <p>Admission Form</p>
          <i class="material-icons"> cloud_download </i>
        </a>
        </div>
        <?php endif; ?>
        <!-- Download Button 1 -->
        <?php $file = get_field('admission_form'); ?>
        <?php
        if( $file ): ?>
        <div class="download down-resources">
          <a target="#" class="" href="<?php echo $file['url']; ?>">
          <p>Calendar</p>
          <i class="material-icons"> cloud_download </i>
        </a>
        </div>
        <?php endif; ?>
        <!-- Download Button 1 -->
        <?php $file = get_field('admission_form'); ?>
        <?php
        if( $file ): ?>
        <div class="download down-resources">
          <a target="#" class="" href="<?php echo $file['url']; ?>">
          <p>Prospectus</p>
          <i class="material-icons"> cloud_download </i>
        </a>
        </div>
        <?php endif; ?>
        <!-- Download Button 1 -->
        <?php $file = get_field('admission_form'); ?>
        <?php
        if( $file ): ?>
        <div class="download down-resources">
          <a target="#" class="" href="<?php echo $file['url']; ?>">
          <p>Almanac</p>
          <i class="material-icons"> cloud_download </i>
        </a>
        </div>
        <?php endif; ?>
        <!-- Download Button 1 -->
        <?php $file = get_field('admission_form'); ?>
        <?php
        if( $file ): ?>
        <div class="download down-resources">
          <a target="#" class="" href="<?php echo $file['url']; ?>">
          <p>Almanac</p>
          <i class="material-icons"> cloud_download </i>
        </a>
        </div>
        <?php endif; ?>

      </div>




</div>


</article>

<?php  get_footer(); ?>
