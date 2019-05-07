<?php


					include( get_template_directory() . '/includes/menus.php' );
					include( get_template_directory() . '/includes/assets.php' );
					include( get_template_directory() . '/includes/security.php' );
					include( get_template_directory() . '/includes/theme-supports.php' );
					include( get_template_directory() . '/includes/pagination-numbered.php' );
					include( get_template_directory() . '/includes/categories-custom-archive.php' );
					include( get_template_directory() . '/includes/custom-post-type/register.php' );
					include( get_template_directory() . '/includes/custom-post-type/post-per-page.php' );
					include( get_template_directory() . '/includes/custom-post-type/enable-category.php' );
					include( get_template_directory() . '/includes/custom-post-type/highlight-menu.php' );
					include( get_template_directory() . '/includes/custom-post-type/search-result-archive.php' );
					// include( get_template_directory() . '/includes/assets-custompage.php' );


					add_action('wp_enqueue_scripts', 'assets');
					add_action('after_setup_theme', 'menu_register');
					add_action('after_setup_theme', 'theme_support');
					add_filter( 'category_template', 'category_custom_archive' );
					add_action( 'wp_security', 'security' );
					//CPT
					add_action('nav_menu_css_class', 'cpt_menu_highlight_navbar', 10, 2 );
							//  Faculty
							add_action('init','faculty_register');
							add_filter('pre_get_posts', 'faculty_enable_category');
							add_filter('pre_get_posts', 'faculty_posts_per_page' );
							add_filter('template_include', 'faculty_search_result_archive');

					// add_action('Assets', 'load_js');
					// add_action( 'Assets_cutom', 'assets_custompage' );


?>
