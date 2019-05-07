<?php
//Enable Custom Post Type menu to get highlighted on menu list when we are on single posts or CPT page. ************************************************************************************************************************************************


					function cpt_menu_highlight_navbar($classes, $item) {

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
 ?>
