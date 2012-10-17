<?php
/**
 * Homepage Feedback Panel
 */
 
	/**
 	* The Variables
 	*
 	* Setup default variables, overriding them if the "Theme Options" have been saved.
 	*/
	
	$settings = array(
					'feedback_area_title' => 'Testimonials',
					'feedback_area_message' => 'What are valued clients saying about us',
					'feedback_area_entries' => 10,
					'feedback_area_order' => 'DESC',
					'feedback_featured_speed' => '7'
					);
					
	$settings = woo_get_dynamic_values( $settings );
	$orderby = 'date';
	if ( $settings['feedback_area_order'] == 'rand' )
		$orderby = 'rand';
	
?>
			<?php
    		$number_of_feedbacks = $settings['feedback_area_entries'];
    		$query_args = array(
					'post_type' => 'feedback',  
					'posts_per_page' => $number_of_feedbacks, 
					'order' => $settings['feedback_area_order'], 
					'orderby' => $orderby
				);
				
			/* The Query. */
			$the_query = new WP_Query($query_args);
	
			/* The Loop. */	
			if ($the_query->have_posts()) { $count = 0; ?>

			<section id="feedback" class="flexslider">

				<div class="col-full">

				<header class="section-title">
					<h1><?php echo $settings['feedback_area_title']; ?></h1>
					<p><span><?php echo $settings['feedback_area_message']; ?></span></p>
				</header>
    			
    			<ul class="slides">
				<?php
				while ($the_query->have_posts()) { $the_query->the_post();  $count++;
    				?>
    				<li<?php if ( $count % 3 == 0 ) { echo ' class="testimonials-last"'; } ?>>

    					<?php 
	    					$feedback_excerpt = get_post_meta( $post->ID, 'feedback_excerpt', true );
	    					$feedback_gravatar = get_post_meta( $post->ID, 'feedback_gravatar', true ); 
    					?>

     					<div class="content">

     					<?php if ($feedback_gravatar != ''): ?>
    					<div class="gravatar">
     						<span class="gravatar-wrap"><?php echo get_avatar( $feedback_gravatar , '40' ); ?></span>
     					</div>
     					<?php endif; ?>     						

    					<?php 
	    					if ( $feedback_excerpt != '' ) { 
	    						echo '<p>' . stripslashes( $feedback_excerpt ) . '</p>'; 
	    					} else { 
	    						the_excerpt(); 
	    					} 
    					?>
    					
    					<?php
	    					$feedback_author = get_post_meta( $post->ID, 'feedback_author', true);
	    					$feedback_www = get_post_meta( $post->ID, 'feedback_website_title', true);
	    					$feedback_url = get_post_meta( $post->ID, 'feedback_url', true);
    					?>

	    					<div class="author">
	    						<?php if ($feedback_author != ''): ?><span class="name"><?php echo $feedback_author; ?></span><?php endif; ?>

								<?php if ($feedback_www != '') { ?>
									<?php if ($feedback_url != '') { ?>
										<span class="website"><a href="<?php echo $feedback_url; ?>" title="<?php echo $feedback_www; ?>"><?php echo $feedback_www; ?></a></span>
									<?php } else { ?>
										<span class="website"><?php echo $feedback_www; ?></span>
									<?php } ?>
								<?php } else  { ?>
									<?php if ($feedback_url != '') { ?>
										<span class="website"><a href="<?php echo $feedback_url; ?>" title="<?php echo $feedback_url; ?>"><?php echo $feedback_url; ?></a></span>
									<?php } ?>
								<?php } ?>

							</div>

	    				</div>

	    				</li>
    				<?php
    			} // End While Loop ?>
    			</ul>

    		</div>

    		</section><!-- /#feedback -->
			<?php 
			if ( $settings['feedback_featured_speed'] == 'Off' ) { $slideshow = 'false'; } else { $slideshow = 'true'; }
			$slideshowSpeed = $settings['feedback_featured_speed'] * 1000; // milliseconds
			?>
    		<script type="text/javascript">
				jQuery(window).load(function() {
					lastItem = 2;
					count = 1;
					jQuery('#feedback .col-full').flexslider({
						animation: "slide",
					    animationLoop: false,
					    itemWidth: 304,
					    controlNav: false,
					    maxItems: 3,
					    move: 3,
					    slideshow: <?php echo $slideshow; ?>,
					    slideshowSpeed: <?php echo $slideshowSpeed; ?>
					});
				});
			</script>

    		<?php } // End If Statement ?>
    		
    		<?php wp_reset_postdata(); ?>