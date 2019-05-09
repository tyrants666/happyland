<?php
/*
Template Name: Widgetized Page
*/


 ?>
 <?php if( is_active_sidebar( 'widgetized-page-before-content-widget-area' ) ) : ?>
 	<aside class="widgetized-page-before-content-widget-area">
 		<?php dynamic_sidebar( 'widgetized-page-before-content-widget-area' ); ?>
 	</aside>
 <?php endif; ?>
