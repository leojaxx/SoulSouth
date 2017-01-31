<?php
 
function soulsouth_theme_customizer( $wp_customize ) {
  $wp_customize->add_section( 'soulsouth_logo_section' , array(
    'title'       => __( 'Logo', 'soulsouth' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
  ));
 
  $wp_customize->add_setting( 'soulsouth_logo' );
 
  $image_control = new WP_Customize_Image_Control( $wp_customize, 'soulsouth_logo', array(
    'label'    => __( 'Logo', 'soulsouth' ),
    'section'  => 'soulsouth_logo_section',
    'settings' => 'soulsouth_logo',
  ));
  $wp_customize->add_control( $image_control );
}
 
add_action('customize_register', 'soulsouth_theme_customizer');