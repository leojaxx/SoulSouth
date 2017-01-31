<?php

/*

	Template Name: index.php
	Submodule: Soul South Custom Theme
	Description: Home page for theme

*/

?>
<?php get_header(); ?>

<?php if (WP_DEBUG == true) : ?>

	<!-- index.php -->

<?php endif; ?>

<?php include_once( TEMPLATEPATH . "/loops/single_post_loop.php") ?>

<?php get_footer(); ?>
