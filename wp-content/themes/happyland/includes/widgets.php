<?php

function register_widgets() {

      // Single post after content
        register_sidebar( array(
      'name' => __( 'Single Post After Content', 'wpmu' ),
      'id' => 'single-after-content-widget-area',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widgettitle">',
      'after_title' => '</h3>'
      ));

        // category archive - before content widget area
      register_sidebar( array(
      	'name' => __( 'Category Archive Before Content', 'wpmu' ),
      	'id' => 'category-before-content-widget-area',
      	'before_widget' => '<div id="%1$s" class="widget %2$s">',
      	'after_widget' => '</div>',
      	'before_title' => '<h3 class="widgettitle">',
      	'after_title' => '</h3>'
      ));

      // custom page template - before content widget area
      register_sidebar( array(
      	'name' => __( 'Widgetized Page Before Content', 'wpmu' ),
      	'id' => 'widgetized-page-before-content-widget-area',
      	'before_widget' => '<div id="%1$s" class="widget %2$s">',
      	'after_widget' => '</div>',
      	'before_title' => '<h3 class="widgettitle">',
      	'after_title' => '</h3>'
      ));

      // custom page template - after content widget area
      register_sidebar( array(
      	'name' => __( 'Widgetized Page After Content', 'wpmu' ),
      	'id' => 'widgetized-page-after-content-widget-area',
      	'before_widget' => '<div id="%1$s" class="widget %2$s">',
      	'after_widget' => '</div>',
      	'before_title' => '<h3 class="widgettitle">',
      	'after_title' => '</h3>'
      ));
}

 ?>
