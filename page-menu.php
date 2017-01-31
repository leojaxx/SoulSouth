<?php

/*

	Template Name: Menu Page
	Submodule: Soul South Custom Theme
	Description: Menu page template file

*/

?>
<?php get_header(); ?>
<h2>Our Menu</h2> 
<p>All main dishes come with seasonal smoked/grilled veggies or corn on the cob and your choice of Fries, cup of Gumbo or Collard Greens.</p>
<hr>

<?php
  $cat_args = array('type' => 'soul_south_food_menu', 'exclude' => 8);
  $categories = get_categories($cat_args);
  foreach($categories as $category): // starts the category loop

    $args = array(
      'post_type'     => 'soul_south_food_menu',
      'order'         => 'ASC',
      'orderby'       => 'menu_order',
      'category_name' => $category->slug 
    );
    
    $food_menu_query = new WP_Query( $args );
  ?>

  <?php if ( $food_menu_query->have_posts() ): ?>
    <h3><?php echo $category->name; ?></h3>
    <div class="row food-menu">
 
    <?php while ( $food_menu_query->have_posts() ) : $food_menu_query->the_post(); ?>
      <div class="col-md-3 food-menu-item">
        <figure class="thumbnail">
          <div class="img-crop menu-page-item"><?php the_post_thumbnail(); ?></div>
          <figcaption class="caption">
            <h4><?php the_title(); ?></h4>
            <?php the_excerpt(); ?>
            <?php the_meta(); ?>
          </figcaption>
        </figure>
      </div> <!-- /.col-md-4 -->
 
 
  <!-- This is the end of the loop -->
    <?php endwhile; ?>
 
    </div> <!-- /.row -->
 
  <?php endif; ?>
<?php endforeach; // ends the category loop ?>
<!-- </div> -->
<?php get_footer(); ?>
