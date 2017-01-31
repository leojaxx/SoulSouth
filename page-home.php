<?php

/*

	Template Name: Home Page
	Submodule: Soul South Custom Theme
	Description: Home page for theme

*/

?>
<?php get_header(); ?>

<?php if (WP_DEBUG == true) : ?>

	<!-- page-home.php -->

<?php endif; ?>

<div class="jumbotron">
	<div class="row">
	<div class="col-md-7"></div>
		<div class="col-md-5">
			<div class="jumbo-text">
				<h1>Soul South</h1>
				<p>
					Welcome to Soul South. Some of the most soulful bar-b-q of the south
				</p>
			</div>
		</div>
	</div>
</div>

  <div class="row food-menu">
  	<!-- <div class="col-md-8">
			<?php // include_once( TEMPLATEPATH . "/loops/single_post_loop.php") ?>
		</div> -->

			<?php include_once( TEMPLATEPATH . "/loops/random_food_item.php") ?>



<?php get_footer(); ?>
