<?php
function menu_register(){

         //Navigation Menus
         register_nav_menus(array(
                 'primary' => __('Primary Menu'),
                 'footer' => __('Footer Menu'),
                 'footer2' => __('Footer Menu 2'),
                 'side-menu' => __('Sidebar Menu'),
         ));

}

 ?>
