

<?php get_header(); ?>

<article class="containerr mt-125 mb-5">

  <center><h2 class="h22 mb-5">Downloads</h2></center>


  <!-- Download Button 1 -->
  <?php $file = get_field('admission_form'); ?>
  <?php
  if( $file ): ?>
      <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
        <div class=" col-lg-3 col-sm-12 bg-img-prop-download download-single1 mx-auto">
              Admission Form
        </div>
      </a>
  <?php endif; ?>
  <!-- Download Button 2 -->
  <?php $file = get_field('calendar'); ?>
  <?php
  if( $file ): ?>
      <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
        <div class="bg-img-prop-download download-single2 col-lg-3 col-sm-12">
              Calendar
        </div>
      </a>
  <?php endif; ?>

  <!-- Download Button 3 -->
  <?php $file = get_field('file-3'); ?>
  <?php
  if( $file ): ?>
      <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
        <div class="bg-img-prop-download download-single3 col-lg-3 col-sm-12 ml-auto">
              <?php the_field('file-3-name'); ?>
        </div>
      </a>
  <?php endif; ?>
  <!-- Download Button 4 -->
  <?php $file = get_field('file-4'); ?>
  <?php
  if( $file ): ?>
      <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
        <div class="bg-img-prop-download download-single4 col-lg-3 col-sm-12">
              <?php the_field('file-4-name'); ?>
        </div>
      </a>
  <?php endif; ?>
  <!-- Download Button 5 -->
  <?php $file = get_field('file-5'); ?>
  <?php
  if( $file ): ?>
      <a target="#" class="down-faculty-a" href="<?php echo $file['url']; ?>">
        <div class="bg-img-prop-download download-single5 col-lg-3 col-sm-12 mx-auto">
              <?php the_field('file-5-name'); ?>
        </div>
      </a>
  <?php endif; ?>



</article>

<?php  get_footer(); ?>
