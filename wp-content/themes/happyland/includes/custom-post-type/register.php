<?php
function faculty_register(){

  //Faculty

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
?>
