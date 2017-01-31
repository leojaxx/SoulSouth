<?php

/*
	
	Template Name: Image Gallery Page
	Submodule: Soul South Custom Theme
	Description: Image Gallery page for theme

 */


?>

<?php get_header(); ?>

<?php if (WP_DEBUG == true) : ?>

	<!-- page-home.php -->

<?php endif; ?>

<div class="col-md-8">
	<?php include_once( TEMPLATEPATH . "/loops/single_post_loop.php"); ?>
</div>

<?php get_footer(); ?>