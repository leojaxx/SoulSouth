
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- this is inside the loop, post date wil display here -->

		<div class="page-header">
				<!-- display the post title -->
				<h2><?php the_title(); ?></h2>
			</div> <!-- end page-header -->

		<!-- display the content -->
		<?php the_content(); ?>

	<!-- ending the loop -->
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	