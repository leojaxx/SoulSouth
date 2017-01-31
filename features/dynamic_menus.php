<?php 


// create a custom function that will register your menus
// with the WordPress system
// see http://codex.wordpress.org/Function_Reference/register_nav_menus
// for details on how to use this function.
function register_my_menu() {
  register_nav_menus( array(
    // 'slug-name' => 'Admin panel label'
    'primary' => 'Primary Menu',
    'secondary' => 'Secondary Menu',
  ) );
}

add_action( 'after_setup_theme', 'register_my_menu' );

 ?>