<?php

// Register Custom Navigation Walker
// require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//func to enqueue CSS & JS ************************************************************************************************************************************************
					function landor_scripts() {
						wp_enqueue_style( 'style', get_stylesheet_uri());
						wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/css/responsive.css');
						wp_enqueue_script( 'js', get_template_directory_uri() . '/main.js', array(), '20151215', true);                              //, array(), '20151215', true
						// wp_enqueue_style( 'Bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css');
						// wp_enqueue_style( 'page.css', get_template_directory_uri() . '/css/page.css');
						wp_enqueue_script( 'Bootstrap.js', get_template_directory_uri() . '/js/other-scroll.js', array(), '20151215', true);
					}
					add_action('wp_enqueue_scripts', 'landor_scripts'); // action to load JS & CSS

					// // Func to load jquery
					// 					function load_js(){
					// 						wp_enqueue_script('jquery');
					// 					}
					// 					add_action('wp_enqueue_scripts', 'load_js');
//Theme Setup
					function theme_setup(){

					         //Navigation Menus
					         register_nav_menus(array(
						               'primary' => __('Primary Menu'),
					      	         'footer' => __('Footer Menu'),
					      	         'footer2' => __('Footer Menu 2'),
					         ));

					         //Add Featured Image support
					         add_theme_support('post-thumbnails');
									 add_image_size('small-thumbnail', 180, 120, true);    //true means hard cropping
									 add_image_size('banner-thumbnail', 920, 210, true);
					}
					add_action('after_setup_theme', 'theme_setup');


//Custom Scripts ************************************************************************************************************************************************


// function custom_script() {
//
// 		//script-1
// 		wp_register_script('other-script', get_stylesheet_directory_uri() . '/js/other-scroll.js', false, null, true);
// 		if(!is_page('home')){
// 				wp_enqueue_script('other-script');
// 		}
//
// 		//script-2
// 		wp_register_script('home-script', get_stylesheet_directory_uri() . '/js/home-scroll.js', false, null, true);
// 		if(is_page('home')){
// 				wp_enqueue_script('home-script');
// 		}
//
// 		//script-3 here .......
//
//
// }
// add_action( 'wp_enqueue_scripts', 'custom_script' );




//Custom Post Types. ************************************************************************************************************************************************

						function faculty_custom_post_type(){

							$labels = array(
									'name' => 'Faculty',
									'singular_name' => 'Faculty',
									'add_new' => 'Add Faculty',
									'all_items' => 'All Faculty',
									'add_new_item' => 'Add Faculty',
									'edit_item' => 'Edit Faculty',
									'new_item' => 'New Faculty',
									'view_item' => 'View Faculty',
									'search_item' => 'Search Faculty',
									'not_found' => 'No Faculty Found',
									'not_found_in_trash' => 'No Faculty found in trash',
									'parent_item_colon' => 'Parent Faculty',

							);
							$args = array(
									'labels' => $labels,
									'public' => true,
									'has_archive' => true,
									'publicly_queryable' => true,
									'query_var' => true,
									'rewrite' => true,               					//rewrite custom slug
									'capability_type' => 'post',               //grabs default settings of premade Custom Post Types
									'hierarchical' => true,                //We dont want to create or extend hierarchy to any work because every single post wont depend on anything so false
									'supports' => array(
											 'title',
											 'editor',
											 'excerpt',
											 'thumbnail',
									),
									'show_in_rest'       => true,             //Add Gutenberg text editor
									'taxonomies' => array( 'category', 'post_tag'),
									'menu_position' =>  2,
									'exclude_from_search' => false,
									'slug' => 'faculty', 'with_front' => false  //Helps to open url with faculty/priyanka-karki

							);
							register_post_type('faculty', $args);          //work here is slug name that will appear in url
						}
						add_action('init','faculty_custom_post_type');

//Enabling to open Category pages for Custom Post Types. ************************************************************************************************************************************************

						add_filter('pre_get_posts', 'query_post_type');
						function query_post_type($query) {
						  if( is_category() ) {
						    $post_type = get_query_var('post_type');
						    if($post_type)
						        $post_type = $post_type;
						    else
						        $post_type = array('nav_menu_item', 'post', 'faculty'); // don't forget nav_menu_item to allow menus to work!
						    $query->set('post_type',$post_type);
						    return $query;
						    }
						}


//Posts per Page for Custom Post Types ************************************************************************************************************************************************

		function my_cptui_change_posts_per_page( $query ) {
		    if ( is_admin() || ! $query->is_main_query() ) {
		       return;
		    }

		    if ( is_post_type_archive( 'faculty' ) ) {
		       $query->set( 'posts_per_page', 15 );
		    }
		}
		add_filter( 'pre_get_posts', 'my_cptui_change_posts_per_page' );

//Enable Custom Post Type menu to get highlighted on menu list when we are on single posts or CPT page. ************************************************************************************************************************************************

				add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );

					function add_current_nav_class($classes, $item) {

						// Getting the current post details
						global $post;

						// Getting the post type of the current post
						$current_post_type = get_post_type_object(get_post_type($post->ID));
						$current_post_type_slug = $current_post_type->rewrite['slug'];

						// Getting the URL of the menu item
						$menu_slug = strtolower(trim($item->url));

						// If the menu item URL contains the current post types slug add the current-menu-item class
						if (strpos($menu_slug,$current_post_type_slug) !== false) {

						   $classes[] = 'current-menu-item';

						}

						// Return the corrected set of classes to be added to the menu item
						return $classes;

					}

//Redirect paticular category to custom category.php page ************************************************************************************************************************************************
				// Inspired by a snippet by Justin Tadlock (http://justintadlock.com/) posted here: http://elliotjaystocks.com/blog/tutorial-multiple-singlephp-templates-in-wordpress/#comment-2383

				add_filter( 'category_template', 'my_category_template' );
						function my_category_template( $template ) {
								if( is_category( 10 ) ) // We can search for categories by ID
									$template = locate_template( array( 'custom-category.php', 'category.php' ) );
								elseif( is_category( array( 7,8,9,10,15,16,17,18,19,20,21,22,23,24,13,14 ) ) ) // We can search for multiple categories by ID by passing an array
									$template = locate_template( array( 'custom-category.php', 'category.php' ) );
								elseif( is_category( 'food' ) ) // We can search for categories by their slug
									$template = locate_template( array( 'custom-category.php', 'category.php' ) );
								elseif( is_category( array( 'music', 'movies' ) ) ) // We can search for multiple categories by slug as well
						$template = locate_template( array( 'custom-category.php', 'category.php' ) );

				return $template;
				}

//Search Result for custom post type ************************************************************************************************************************************************

function template_chooser($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'faculty' )
  {
    return locate_template('custom-category.php');  //  redirect to custom-category.php
  }
  return $template;
}
add_filter('template_include', 'template_chooser');

//Pagination Numbered ************************************************************************************************************************************************

						if ( !function_exists( 'wpex_pagination' ) ) {

							function wpex_pagination() {

								$prev_arrow = is_rtl() ? '>>' : '<<';
								$next_arrow = is_rtl() ? '<<' : '>>';

								global $wp_query;
								$total = $wp_query->max_num_pages;
								$big = 999999999; // need an unlikely integer
								if( $total > 1 )  {
									if( !$current_page = get_query_var('paged') )
									$current_page = 1;
									if( get_option('permalink_structure') ) {
										$format = 'page/%#%/';
									} else {
										$format = '&paged=%#%';
									}
									echo paginate_links(array(
										'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format'		=> $format,
										'current'		=> max( 1, get_query_var('paged') ),
										'total' 		=> $total,
										'mid_size'		=> 3,
										'type' 			=> 'list',
										'prev_text'		=> $prev_arrow,
										'next_text'		=> $next_arrow,
									) );
								}
							}

						}
//Custom Excerpt Length ************************************************************************************************************************************************
// add_filter( 'excerpt_length', function($length) {
// 	return 120;
// } );

//enabled HTTP Strict Transport Security (HSTS) header. ************************************************************************************************************************************************
  function tgm_io_strict_transport_security() {
      header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
  }
	add_action( 'send_headers', 'tgm_io_strict_transport_security' );

//Deregister wp-embed.min.js. ************************************************************************************************************************************************
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

//Removing default WP Emoji.js for loading & critical path rendering ************************************************************************************************************************************************
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


?>
