<?php

/*

	Template Name: Page
	Submodule: Soul South Custom Theme
	Description: Single page template file

*/

?>
<?php get_header(); ?>

<?php if (WP_DEBUG == true) : ?>

	<!-- page.php -->

<?php endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- this is inside the loop, post date wil display here -->

	<div>
		<div class="page-header">
			<!-- display the post title -->
			<h2><?php the_title(); ?></h2>
		</div> <!-- end page-header -->
		<!-- display the content -->
		<?php the_content(); ?>
	</div> <!-- end well -->


	<!-- ending the loop -->
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	

<?php get_footer(); ?>
