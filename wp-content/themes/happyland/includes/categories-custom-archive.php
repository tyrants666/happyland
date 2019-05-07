<?php
//Redirect paticular category to custom category.php / archive page ************************************************************************************************************************************************

				function category_custom_archive( $template ) {
						if( is_category( 10 ) ) // We can search for categories by ID
							$template = locate_template( array( 'archive-faculty.php', 'category.php' ) );
						elseif( is_category( array( 7,8,9,10,15,16,17,18,19,20,21,22,23,24,13,14 ) ) ) // We can search for multiple categories by ID by passing an array
							$template = locate_template( array( 'archive-faculty.php', 'category.php' ) );
						elseif( is_category( 'food' ) ) // We can search for categories by their slug
							$template = locate_template( array( 'archive-faculty.php', 'category.php' ) );
						elseif( is_category( array( 'music', 'movies' ) ) ) // We can search for multiple categories by slug as well
				$template = locate_template( array( 'archive-faculty.php', 'category.php' ) );

		return $template;
		}
 ?>
