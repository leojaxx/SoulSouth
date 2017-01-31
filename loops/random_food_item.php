<?php
    $args = array( 'post_type' => 'soul_south_food_menu', 
    							 'order' => 'ASC', 
    							 'orderby' => 'rand', 
    							 'posts_per_page' => 3 
    							);
    $food_menu_query = new WP_Query( $args );
  ?>
 
  <?php if ( $food_menu_query->have_posts() ): ?>
 
    <?php while ( $food_menu_query->have_posts() ) : $food_menu_query->the_post(); ?>
      <div class="col-md-4 food-menu-item">
        <figure class="thumbnail">
          <div class="img-crop"><?php the_post_thumbnail(); ?></div>
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