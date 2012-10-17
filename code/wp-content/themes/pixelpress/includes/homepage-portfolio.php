<?php
/**
 * Homepage Portfolio Panel
 */
 
	/**
 	* The Variables
 	*
 	* Setup default variables, overriding them if the "Theme Options" have been saved.
 	*/
	
	$settings = array(
					'portfolio_area_entries' => 10,
					'portfolio_area_title' => 'Recent Work',
					'portfolio_area_order' => 'DESC',
					'portfolio_linkto' => 'post',
					'portfolio_excludenav'	=>	'',
					'portfolio_featured_speed' => 7
					);
					
	$settings = woo_get_dynamic_values( $settings );
	$orderby = 'date';
	if ( $settings['portfolio_area_order'] == 'rand' )
		$orderby = 'rand';
	
?>
			<section id="home-portfolio" class="minor flexslider">

				<div class="col-full">

					<header class="section-title">
						<h1><?php echo stripslashes( $settings['portfolio_area_title'] ); ?></h1>
						<p><span><?php 
						/* Display the gallery navigation (from theme-functions.php). */
						$galleries = array();
						$galleries = get_terms( 'portfolio-gallery' );
						$exclude_str = '';
						$to_exclude = array();
						if ( isset( $settings['portfolio_excludenav'] ) && ( $settings['portfolio_excludenav'] != '' ) ) {
							$exclude_str = $settings['portfolio_excludenav'];
						}
						
						// Allow child themes/plugins to filter here.
						$exclude_str = apply_filters( 'woo_portfolio_gallery_exclude', $exclude_str );
						
						/* Optionally exclude navigation items. */
						if ( $exclude_str != '' ) {
							$to_exclude = explode( ',', $exclude_str );
							
							if ( is_array( $to_exclude ) ) {
								foreach ( $to_exclude as $k => $v ) {
									$to_exclude[$k] = str_replace( ' ', '', $v );
								}
								
								/* Remove the galleries to be excluded. */
								foreach ( $galleries as $k => $v ) {
									if ( in_array( $v->slug, $to_exclude ) ) {
										unset( $galleries[$k] );
									}
								}
							}
						}
						$gallery_anchors = '';
						foreach ($galleries as $g) {
							$permalink = '#' . $g->slug;
							$permalink = get_term_link( $g, 'portfolio-gallery' );
							$gallery_anchors .= '<a href="' . $permalink . '" rel="' . $g->slug . '" class="navigation-slug-' . $g->slug . ' navigation-id-' . $g->term_id . '">' . $g->name . '</a>' . "\n";
						}
						$all_permalink = get_post_type_archive_link( 'portfolio' );
						echo '<a href="' . $all_permalink . '" rel="all">' . __( 'All','woothemes' ) . '</a> ';
						echo $gallery_anchors;

						//print_r($galleries);
						/*woo_portfolio_navigation( $galleries, array( 'current' => $current ), true);*/
						?></span></p>
					</header> 			
	    			
	    			<?php 		
	    			$count = 0;
	    			$query_args = array(	
	    						'post_type' => 'portfolio', 
								'posts_per_page' =>  10, 
								'suppress_filters' => 0,
								'order' => $settings['portfolio_area_order'], 
								'orderby' => $orderby
							);
					// The Query
					$the_query = new WP_Query($query_args);
					$post_count = $the_query->post_count;
					?>
	    			<div class="flex-direction-nav">
	    			<ul class="slides">
				
					<?php
					if ($the_query->have_posts()) { 
					
					    $count = 0;
					
					    while ($the_query->have_posts()) { 
					    	
					    	$the_query->the_post();
					    	$count++;
					
					    	$rel = '';
					    	
	    			    	$custom_url = get_post_meta( $post->ID, '_portfolio_url', true ); 
	    			    	if ( $custom_url != '' )
	    			    		$permalink = $custom_url;
	    			    	else
	    			    		$permalink = get_permalink( get_the_ID() );
					    	
					    	if ( $settings['portfolio_linkto'] == 'lightbox' ) {
					    		if ( $custom_url == '' )
					    			$permalink = woo_image( 'return=true&link=url' );
					    		$rel = ' rel="lightbox[\'home\']"';
					    	}
					    	
					    	$lightbox_url = get_post_meta( $post->ID, 'lightbox-url', true );
					    	
					    	if ( isset($lightbox_url) && $lightbox_url != '' ) {
					    		if ( $custom_url == '' )
					    			$permalink = $lightbox_url;
					    	}
					    	$image = woo_image( 'width=205&height=140&link=img&return=true&noheight=true' );
					    	if ( $image )
					    		$image = '<div class="img-wrap">' . woo_image( 'width=205&height=140&link=img&return=true&noheight=true' ) . '</div>'; 
					    	
					    	if ( ! $image ) {
					    		$image = '<img src="'.get_template_directory_uri() . '/images/temp-portfolio.png" alt="" />';
					    		$rel = ''; // Prevent items without images from displaying in the lightbox.
					    	}
					    ?>
					    
					    <li<?php if ( $post_count == $count ) { echo ' class="recent-last"'; } ?>>
					    <article class="portfolio-item">
					    	<a href="<?php echo $permalink; ?>" class="item"<?php echo $rel; ?>>
					    		<?php echo $image; ?>
					    	</a>
					    	<div class="mask">
					    		<div class="content">
					    			<h2><a href="<?php echo $permalink ?>"<?php echo $rel; ?> title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					    			<?php the_excerpt(); ?>
					    		</div>
					    	</div>
					    </article>
					    </li>
					
					    <?php } // End While Loop
					
					} // End If Statement 
					
					wp_reset_postdata(); 
					?>
					</ul></div>
					<div class="fix"></div>

				</div>
    			
    		</section>
			<?php 
			if ( $settings['portfolio_featured_speed'] == 'Off' ) { $slideshow = 'false'; } else { $slideshow = 'true'; }
			$slideshowSpeed = $settings['portfolio_featured_speed'] * 1000; // milliseconds
			?>
    		<script type="text/javascript">
				jQuery(window).load(function() {
					jQuery('#home-portfolio .col-full').flexslider({
						controlsContainer: "#home-portfolio .flex-direction-nav",
						animation: "slide",
					    animationLoop: false,
					    itemWidth: 228,
					    controlNav: false,
					    maxItems: 4,
					    move: 4,
					    slideshow: <?php echo $slideshow; ?>,
					    slideshowSpeed: <?php echo $slideshowSpeed; ?>
					});
				});
			</script>