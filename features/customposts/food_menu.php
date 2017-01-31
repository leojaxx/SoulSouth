<?php

// Custom post type for our food menu
function create_food_menu_post_type() {
  register_post_type( 'soul_south_food_menu',
    array(
      'labels' => array(
        'name' => __( 'Food Menu' ),
        'singular_name' => __( 'Food Menu Item' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 2,
      'supports' => array(
        'title',
        'excerpt',
        'thumbnail',
        'custom-fields'
      ),
      "taxonomies" => array("category")
    )
  );
}

add_action( 'init', 'create_food_menu_post_type' );
