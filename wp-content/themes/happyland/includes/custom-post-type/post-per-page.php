<?php
//Posts per Page for Custom Post Types ************************************************************************************************************************************************

		function faculty_posts_per_page( $query ) {

				//Faculty
		    if ( is_admin() || ! $query->is_main_query() ) {
		       return;
		    }

		    if ( is_post_type_archive( 'faculty' ) ) {
		       $query->set( 'posts_per_page', 15 );
		    }
		}
 ?>
