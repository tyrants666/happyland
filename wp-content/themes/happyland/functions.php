<?php

// Register Custom Navigation Walker
// require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//func to enqueue CSS & JS ************************************************************************************************************************************************
					function landor_scripts() {
						wp_enqueue_style( 'style', get_stylesheet_uri());
				// 		wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/css/responsive.css');
						wp_enqueue_script( 'js', get_template_directory_uri() . '/main.js', array(), '20151215', true);                              //, array(), '20151215', true
						// wp_enqueue_style( 'Bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css');
						// wp_enqueue_style( 'page.css', get_template_directory_uri() . '/css/page.css');
						// wp_enqueue_script( 'Bootstrap.js', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true);
					}
					add_action('wp_enqueue_scripts', 'landor_scripts'); // action to load JS & CSS


// Func to load jquery
				// 	function load_js(){
				// 		wp_enqueue_script('jquery');
				// 	}
				// 	add_action('wp_enqueue_scripts', 'load_js');


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

				function custom_script() {

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
				add_action( 'wp_enqueue_scripts', 'custom_script' );

//enabled HTTP Strict Transport Security (HSTS) header. ************************************************************************************************************************************************

                function tgm_io_strict_transport_security() {
                    header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
                }
								add_action( 'send_headers', 'tgm_io_strict_transport_security' );


//Custom Post Types. ************************************************************************************************************************************************

						function work_custom_post_type(){

							$labels = array(
									'name' => 'Work',
									'singular_name' => 'Work',
									'add_new' => 'Add Work',
									'all_items' => 'All Work',
									'add_new_item' => 'Add Work',
									'edit_item' => 'Edit Work',
									'new_item' => 'New Work',
									'view_item' => 'View Work',
									'search_item' => 'Search Work',
									'not_found' => 'No Works Found',
									'not_found_in_trash' => 'No works found in trash',
									'parent_item_colon' => 'Parent Work',

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
									'taxanomies' => array( 'category', 'post_tag'),
									'menu_position' =>  2,
									'exclude_from_search' => false

							);
							register_post_type('work', $args);          //work here is slug name that will appear in url
						}
						add_action('init','work_custom_post_type');

//Deregister wp-embed.min.js. ************************************************************************************************************************************************
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

//Removing default WP Emoji.js for loading & critical path rendering ************************************************************************************************************************************************
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


?>
