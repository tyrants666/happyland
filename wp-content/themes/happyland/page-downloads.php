

<?php get_header(); ?>

<article class="containerr mt-119">

  <center><h2>Downloads</h2></center>

  <?php
    $file = get_field('admission_form');
    if( $file ): ?>
    <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
  <?php endif; ?>

  <?php
    $file = get_field('calendar');
    if( $file ): ?>
    <a href="<?php echo $file['url']; ?>">
      <?php echo $file['filename']; ?>
    </a>
  <?php endif; ?>





</article>

<?php  get_footer(); ?>
