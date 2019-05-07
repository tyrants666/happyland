<?php
//Search Result for custom post type ************************************************************************************************************************************************

function faculty_search_result_archive($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'faculty' )
  {
    return locate_template('archive-faculty.php');  //  redirect to custom-category.php
  }
  return $template;
}
 ?>
