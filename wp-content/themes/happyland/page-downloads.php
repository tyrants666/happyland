

<?php get_header(); ?>

<article class="containerr mt-125 mb-3 mb-lg-5">

  <center><h2 class="h22 mb-4 mb-lg-5">Downloads</h2></center>

<div class="row mx-0">


      <div class="col-lg-3-52 notice mx-auto  text-center">
        <h3>Notice</h3>

          <!-- Download Button 1 -->
          <?php $file = get_field('admission_form'); ?>
          <?php
          if( $file ): ?>
          <div class="download down-notice" onclick="location.href='<?php echo $file['url']; ?>';">
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
          <div class="download down-notice" onclick="location.href='<?php echo $file['url']; ?>';">
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
          <div class="download down-notice" onclick="location.href='<?php echo $file['url']; ?>';">
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
          <div class="download down-notice" onclick="location.href='<?php echo $file['url']; ?>';">
            <a target="#" class="" href="<?php echo $file['url']; ?>">
            <p>Admission Form</p>
            <i class="material-icons"> cloud_download </i>
          </a>
          </div>
          <?php endif; ?>

      </div>

<!-- ///////////////////////////////////// CLASS ROUTINE //////////////////////////////////////// -->

      <div class="col-lg-3-52 notice mx-auto  text-center">
        <h3>Class Routine</h3>

      </div>

<!-- ///////////////////////////////////// Resources //////////////////////////////////////// -->
      <div class="col-lg-3-52 notice mx-auto  text-center">
        <h3>Resources</h3>

        <!-- Download Button 1 -->
        <?php $file = get_field('admission_form'); ?>
        <?php
        if( $file ): ?>
        <div class="download down-resources" onclick="location.href='<?php echo $file['url']; ?>';">
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
        <div class="download down-resources" onclick="location.href='<?php echo $file['url']; ?>';">
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
        <div class="download down-resources" onclick="location.href='<?php echo $file['url']; ?>';">
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
        <div class="download down-resources" onclick="location.href='<?php echo $file['url']; ?>';">
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
