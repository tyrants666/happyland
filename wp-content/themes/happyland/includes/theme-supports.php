<?php
					function theme_support(){

					         //Add Featured Image support
					         add_theme_support('post-thumbnails');
									 add_image_size('small-thumbnail', 180, 120, true);    //true means hard cropping
									 add_image_size('banner-thumbnail', 920, 210, true);

                   //Custom Excerpt Length
                   // add_filter( 'excerpt_length', function($length) {
                   // 	return 120;
                   // } );
					}
 ?>
