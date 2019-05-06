

<?php get_header(); ?>

<article class="containerr mt-125 mb-5">

  <center><h2 class="h22 mb-4 mb-lg-5">Downloads</h2></center>

<div class="row mx-0">


      <!-- Download Button 1 -->
      <?php $file = get_field('admission_form'); ?>
      <?php
      if( $file ): ?>
      <div class=" col-lg-3 col-11 bg-img-prop-download  mx-auto">
        <a target="#" class="" href="<?php echo $file['url']; ?>">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/down1.svg" class="" alt="Logo"/>
                  <p>Admisson Form</p>
        </a>
      </div>
      <?php endif; ?>
      <!-- Download Button 1 -->
      <?php $file = get_field('calendar'); ?>
      <?php
      if( $file ): ?>
      <div class=" col-lg-3 col-11 bg-img-prop-download  mx-auto">
        <a target="#" class="" href="<?php echo $file['url']; ?>">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/down2.svg" class="" alt="Logo"/>
                  <p>Calendar</p>
        </a>
      </div>
      <?php endif; ?>
      <!-- Download Button 1 -->
      <?php $file = get_field('file-3'); ?>
      <?php
      if( $file ): ?>
      <div class=" col-lg-3 col-11 bg-img-prop-download  mx-auto">
        <a target="#" class="" href="<?php echo $file['url']; ?>">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/down3.svg" class="" alt="Logo"/>
                  <p><?php the_field('file-3-name'); ?></p>
        </a>
      </div>
      <?php endif; ?>
      <!-- Download Button 1 -->
      <?php $file = get_field('file-4'); ?>
      <?php
      if( $file ): ?>
      <div class=" col-lg-3 col-11 bg-img-prop-download  mx-auto">
        <a target="#" class="" href="<?php echo $file['url']; ?>">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/down4.svg" class="" alt="Logo"/>
                  <p><?php the_field('file-4-name'); ?></p>
        </a>
      </div>
      <?php endif; ?>




</div>
<div class="row mx-0">


      <!-- Download Button 1 -->
      <?php $file = get_field('file-5'); ?>
      <?php
      if( $file ): ?>
      <div class=" col-lg-3 col-11 bg-img-prop-download  mx-auto">
        <a target="#" class="" href="<?php echo $file['url']; ?>">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/down5.svg" class="" alt="Logo"/>
                  <p><?php the_field('file-5-name'); ?></p>
        </a>
      </div>
      <?php endif; ?>
      <!-- Download Button 1 -->
      <?php $file = get_field('file-6'); ?>
      <?php
      if( $file ): ?>
      <div class=" col-lg-3 col-11 bg-img-prop-download  mx-auto">
        <a target="#" class="" href="<?php echo $file['url']; ?>">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/down4.svg" class="" alt="Logo"/>
                  <p><?php the_field('file-6-name'); ?></p>
        </a>
      </div>
      <?php endif; ?>
      <!-- Download Button 1 -->
      <?php $file = get_field('file-7'); ?>
      <?php
      if( $file ): ?>
      <div class=" col-lg-3 col-11 bg-img-prop-download  mx-auto">
        <a target="#" class="" href="<?php echo $file['url']; ?>">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/down1.svg" class="" alt="Logo"/>
                  <p><?php the_field('file-7-name'); ?></p>
        </a>
      </div>
      <?php endif; ?>
      <!-- Download Button 1 -->
      <?php $file = get_field('file-8'); ?>
      <?php
      if( $file ): ?>
      <div class=" col-lg-3 col-11 bg-img-prop-download  mx-auto">
        <a target="#" class="" href="<?php echo $file['url']; ?>">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/down3.svg" class="" alt="Logo"/>
                  <p><?php the_field('file-8-name'); ?></p>
        </a>
      </div>
      <?php endif; ?>




</div>


</article>

<?php  get_footer(); ?>
