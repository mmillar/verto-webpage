<?php
	global $woo_options;
?>

<div id="mini-features">
<div class="mini-inside">
	<div class="col-full">
<?php
	$query_args = array(
					'post_type' => 'infobox', 
					'order' => 'ASC', 
					'numberposts' => 3, 
					'suppress_filters' => 0
				);

	$query = get_posts( $query_args );

	if ( ! is_wp_error( $query ) && ( count( $query ) > 0 ) ) {
		$count = 0;

		foreach ( $query as $k => $post ) {
			setup_postdata( $post );
			$count++;
?>
	<?php
		$custom_values = array( 'icon' => 'mini', 'excerpt' => 'mini_excerpt', 'button' => 'mini_readmore' );
		
		$meta = get_post_custom( $post->ID );
		
		foreach ( $custom_values as $k => $v ) {
			${$k} = ''; // Declare an empty variable to start with.
			
			if ( isset( $meta[$v] ) && $meta[$v][0] != '' ) {
				${$k} = $meta[$v][0];
			}
		}
		
		if ( $excerpt != '' ) { $excerpt = wpautop( stripslashes( $excerpt ) ); } // If we have an excerpt, add the paragraph tags.
	?>
	<div class="block">
		<?php if ( $icon ) { ?>
        	<img src="<?php echo $icon; ?>" alt="" class="home-icon" />				
        <?php } ?>
        <div class="feature">
           <h3><?php echo get_the_title(); ?></h3>
           <?php echo $excerpt; ?>
           <?php if ( $button ) { ?><a href="<?php echo $button; ?>" class="btn"><?php _e( 'Read More', 'woothemes' ); ?></a><?php } ?>
        </div><!--/.feature-->
	</div><!--/.block-->      
<?php
		} // End WHILE Loop
	}
?>
		<div class="fix"></div><!--/.fix-->
	</div><!--/.col-full-->
	</div>
</div><!-- /#mini-features -->
