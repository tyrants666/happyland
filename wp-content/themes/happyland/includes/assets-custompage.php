<?php
//Custom Scripts for specific pages ************************************************************************************************************************************************


function assets_custompage() {

		//script-1
		wp_register_script('other-script', get_stylesheet_directory_uri() . '/js/other-scroll.js', false, null, true);
		if(!is_page('home')){
				wp_enqueue_script('other-script');
		}

		//script-2
		wp_register_script('home-script', get_stylesheet_directory_uri() . '/js/home-scroll.js', false, null, true);
		if(is_page('home')){
				wp_enqueue_script('home-script');
		}

		//script-3 here .......


}
 ?>
