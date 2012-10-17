<?php
/**
 * Homepage Blog Panel
 */
 
	/**
 	* The Variables
 	*
 	* Setup default variables, overriding them if the "Theme Options" have been saved.
 	*/
	
	$settings = array(
					'blog_area_title' => 'Blog',
					'blog_area_message' => 'This is where your latest blog posts will show up. You can change this text in the options',
					'blog_area_entries' => 3,
					'order' => 'DESC', 
					'blog_area_content' => 'blog',
					'blog_area_order' => 'DESC',
					'blog_area_page' => ''
					);
					
	$settings = woo_get_dynamic_values( $settings );
	$orderby = 'date';
	if ( $settings['feedback_area_order'] == 'rand' )
		$orderby = 'rand';
		
?>
		<section id="home-blog">
			<div class="col-full">
				
				<?php if ( $settings['blog_area_content'] == 'blog' ) { ?>
				<header class="section-title">
						<h1><?php echo $settings['blog_area_title']; ?></h1>
						<p><span><?php echo $settings['blog_area_message']; ?></span></p>
				</header>
				<?php } ?>
				
				<?php
					if ( $settings['blog_area_content'] == 'page' ) {
						$page_id = $settings['blog_area_page'];
						$query_args = array( 'post_type' => 'page', 'page_id' => $page_id, 'posts_per_page' => 1 );
					} else {
						$number_of_features = $settings['blog_area_entries'];
    					if ( get_query_var( 'page' ) > 1) { $paged = get_query_var( 'page' ); } elseif ( get_query_var( 'paged' ) > 1) { $paged = get_query_var( 'paged' ); } else { $paged = 1; }  
						$query_args = array( 'post_type' => 'post', 'posts_per_page' => $number_of_features, 'paged' => $paged, 'order' => $settings['blog_area_order'], 'orderby' => $orderby);
					} // End If Statement
					
					/* The Query. */
					$the_query = new WP_Query($query_args);
						
					if ($the_query->have_posts()) : $count = 0; ?>
	        		<?php if ( $settings['blog_area_content'] == 'blog' ) { ?><ul><?php } ?>

					<?php /* Start the Loop */ ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); $count++; ?>
						
						<?php if ( $settings['blog_area_content'] == 'blog' ) { ?><li class="fix <?php if ( $count % 3 == 0 ) { echo 'last'; } ?>"><?php } ?>
						<?php
							/* Include the home-specific template for the content. */
							if ( $settings['blog_area_content'] == 'page' ) {
								get_template_part( 'content', 'page' );
							} else {
								get_template_part( 'content', 'home' );
							} // End If Statement
						?>
						<?php if ( $settings['blog_area_content'] == 'blog' ) { ?></li><?php } ?>
			    		<?php if ( $count % 3 == 0 ) { echo '<li class="fix clear"></li>'; } ?>
				
					<?php endwhile; ?>

					<?php if ( $settings['blog_area_content'] == 'blog' ) { ?></ul><?php } ?>
				
				<?php else : ?>
	        	
	        	    <article <?php post_class(); ?>>
	        	        <p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
	        	    </article><!-- /.post -->
	        	
	        	<?php endif; ?>	     
	        	<?php wp_reset_postdata(); ?>  
        	</div> 	        
		</section><!-- /#main -->