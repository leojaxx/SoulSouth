<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
  	name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
  	value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
  <textarea class="widefat" id="<?php echo $this->get_field_id( 'csv_text' ); ?>" 
  	name="<?php echo $this->get_field_name( 'csv_text' ); ?>">
  	<?php echo esc_attr( $csv_text ); ?></textarea>
</p>