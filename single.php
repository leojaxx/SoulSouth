<?php

/*

	Template Name: Post
	Submodule: Soul South Custom Theme
	Description: Single post template file

*/

?>
<?php get_header(); ?>

<?php if (WP_DEBUG == true) : ?>

	<!-- single.php -->

<?php endif; ?>

	<?php include_once( TEMPLATEPATH . "/loops/single_post_loop.php") ?>


<?php get_footer(); ?>
