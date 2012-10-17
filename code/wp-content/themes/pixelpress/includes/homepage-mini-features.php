<?php
/**
 * Homepage Features Panel
 */
 
	/**
 	* The Variables
 	*
 	* Setup default variables, overriding them if the "Theme Options" have been saved.
 	*/
	
	$settings = array(
					'features_area_entries' => 3,
					'features_area_order' => 'DESC'
					);
					
	$settings = woo_get_dynamic_values( $settings );
	$orderby = 'date';
	if ( $settings['features_area_order'] == 'rand' )
		$orderby = 'rand';
	
?>
			<?php
    		$number_of_features = $settings['features_area_entries'];
    		$query_args = array(
					'post_type' => 'features',  
					'posts_per_page' => $number_of_features, 
					'order' => $settings['features_area_order'], 
					'orderby' => $orderby
				);
			/* The Query. */	
			$the_query = new WP_Query($query_args);

			$pre_count = $the_query->post_count;

			/* The Loop. */	
			if ($the_query->have_posts()) : $count = 0; ?>
			<section id="mini-features">

				<div class="col-full">
    			
	    			<ul>
					<?php
					while ($the_query->have_posts()) : $the_query->the_post(); $count++;
	    				?>
	    				<li class="fix <?php if ( $count % 3 == 0 ) { echo 'last'; } ?>">
	    					
	    					<?php $feature_icon = get_post_meta( $post->ID, 'feature_icon', true ); if ( $feature_icon ) { ?><div class="image"><img src="<?php echo get_post_meta( $post->ID, 'feature_icon', true ); ?>" alt="" /></div><?php } ?>
	    					<div class="entry">
	    					<?php $feature_readmore = get_post_meta( $post->ID, 'feature_readmore', true ); ?>
		    				<h2><a href="<?php if ( $feature_readmore != '' ) { echo $feature_readmore; } else { the_permalink(); } ?>"><?php the_title(); ?></a></h2>
		    				<?php $feature_excerpt = get_post_meta( $post->ID, 'feature_excerpt', true ); ?>
		    				<p>
		    					<?php 
		    					if ( $feature_excerpt != '' ) { 
		    						echo stripslashes( $feature_excerpt ); 
		    					} else { 
		    						the_excerpt(); 
		    					} ?>
		    				</p>

		    				</div>

		    				</li>
		    				<?php if ( $pre_count > 3 ) { $special = ' special'; } ?>
		    				<?php if ( $count % 3 == 0 ) { echo '<li class="fix clear' . $special . '"></li>'; } ?>
	    			<?php endwhile; ?>
	    			</ul>

    			</div><!-- /.col-full -->
    		
    		</section><!-- /#mini-features -->
    		<?php endif; // End If Statement ?>
    		<?php wp_reset_postdata(); ?>