<?php

// unlock post thumbs
add_theme_support('post-thumbnails');

// strip image attributes
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

// Remove default inline style tag for image galleries
add_filter( 'use_default_gallery_style', '__return_false' );
 
// Change default thumbnail size for galleries
function remove_img_width_height( $html, $post_id, $post_image_id,$post_thumbnail) {
    if ($post_thumbnail=='gallery'){
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    }
    return $html;
}
add_filter('wp_get_attachment_link', 'remove_img_width_height', 10, 4);