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
					         ));

					         //Add Featured Image support
					         add_theme_support('post-thumbnails');
									 add_image_size('small-thumbnail', 180, 120, true);    //true means hard cropping
									 add_image_size('banner-thumbnail', 920, 210, true);
					}
					add_action('after_setup_theme', 'theme_setup');


//Custom Scripts ************************************************************************************************************************************************



//enabled HTTP Strict Transport Security (HSTS) header. ************************************************************************************************************************************************

                function tgm_io_strict_transport_security() {
                    header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
                }
								add_action( 'send_headers', 'tgm_io_strict_transport_security' );


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
									'hierarchical' => false,                //We dont want to create or extend hierarchy to any work because every single post wont depend on anything so false
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

//Enabling Category page for Custom Post Types. ************************************************************************************************************************************************

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


//Deregister wp-embed.min.js. ************************************************************************************************************************************************
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

//Removing default WP Emoji.js for loading & critical path rendering ************************************************************************************************************************************************
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


?>
