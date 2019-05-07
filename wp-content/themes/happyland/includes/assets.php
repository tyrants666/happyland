<?php
//func to enqueue CSS & JS ************************************************************************************************************************************************
					function assets() {
						wp_enqueue_style( 'style', get_stylesheet_uri());
						wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/css/responsive.css');
						wp_enqueue_script( 'js', get_template_directory_uri() . '/main.js', array(), '20151215', true);                              //, array(), '20151215', true
            // wp_enqueue_style( 'page.css', get_template_directory_uri() . '/css/page.css');
					}

// Func to load jquery
					// function load_js(){
					// 	wp_enqueue_script('jquery');
					// }
?>
