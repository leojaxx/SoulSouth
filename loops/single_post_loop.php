
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- this is inside the loop, post date wil display here -->

	<div class="well">
		<div class="page-header">
			<!-- display the post title -->
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to 
				<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
		</div> <!-- end page-header -->

		<!-- display the content -->
		<?php the_content(); ?>
	</div> <!-- end well -->

	<!-- ending the loop -->
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	