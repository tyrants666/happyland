<?php
  function security() {

    //enabled HTTP Strict Transport Security (HSTS) header.
       header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );

    //Deregister wp-embed.min.js.
       wp_deregister_script( 'wp-embed' );

     //Removing default WP Emoji.js for loading & critical path rendering ************************************************************************************************************************************************
     remove_action('wp_head', 'print_emoji_detection_script', 7);
     remove_action('wp_print_styles', 'print_emoji_styles');

  }

 ?>
