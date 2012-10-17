<?php
/**
 * Homepage Slider
 */
	global $wp_query, $post, $panel_error_message;
	
	$settings = array(
					'featured_type' => 'default',
					'featured_entries' => 3,
					'featured_height' => 380,
					'featured_tags' => '',
					'slider_video_title' => 'true',
					'featured_order' => 'DESC',
					'featured_speed' => '7',
					'featured_hover' => 'false',
					'featured_touchswipe' => 'true',
					'featured_animation_speed' => '0.6',
					'featured_pagination' => 'false',
					'featured_nextprev' => 'true',
					'featured_opacity' => '0.5'
					);
					
	$settings = woo_get_dynamic_values( $settings );
	
	$count = 0;
?>

<?php
	$featposts = $settings['featured_entries']; // Number of featured entries to be shown
	$orderby = 'date';
	if ( $settings['featured_order'] == 'rand' )
		$orderby = 'rand';
	$slidertype = $settings['featured_type'];
	$slider_video_title = $settings['slider_video_title'];
?>

<div id="featured-wrap">

<?php $slides = get_posts(array('post_type' => 'slide', 'numberposts' => $featposts, 'order' => $settings['featured_order'], 'orderby' => $orderby, 'suppress_filters' => 0)); ?>

<?php if ( count($slides) > 0 ) { ?>

	<div id="featured" class="flexslider<?php if ($settings['featured_navigation_type'] == 'pagination') { echo ' has-pagination'; } ?>">
<div class="controls-container">
		<ul class="slides">

			<?php foreach($slides as $post) : setup_postdata($post); $count++; ?>

			<?php
				
				if ($settings['featured_type'] == 'default') {
					$has_embed = woo_embed( 'width=880&class=slide-video-default' );
				} else {
					$has_embed = woo_embed( 'width=911&height=' . $settings['featured_height'] . '&class=slide-video-carousel' );	
				}

				$url = esc_attr(get_post_meta($post->ID, 'url', true));
			?>

			<li class="slide">
	    		<div class="slide-content-container">
	    	    	<article class="slide-content col-full <?php if ( !$has_embed ) { echo 'not-video'; } ?>">
	    	    		
	    	    		<?php if ( !$has_embed OR ( $has_embed && $settings['slider_video_title'] != 'true' ) )  { // Hide title/description if video post ?>
	    	    		<header>
	    	    			
	    	    			<h1>
	    	    				<?php if ( isset($url) && $url != '' ) { ?><a href="<?php echo $url ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php } ?>
	    	    					<?php
	    	    						$slide_title = get_the_title();
	    	    						echo woo_text_trim ( $slide_title, 25 );
	    	    					?>
	    	    				<?php if ( isset($url) && $url != '' ) { ?></a><?php } ?>
	    	    			</h1>

	    	    		</header>
	    	    		<?php } ?>
	    	    			
    	    			<div class="entry">

    	    				<?php if ( (isset($url) && $url != '') && !$has_embed ) { ?>
	        					<a href="<?php echo $url ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	        				<?php } ?>

	        				<?php
	    	    				if ( $slidertype == 'default' && !$has_embed ) {
		        					woo_image( 'width=911&class=slide-image full&link=img&noheight=true' );
		        				} else {
		        					echo $has_embed;
		        				}
	        				?>

	        				<?php if ( (isset($url) && $url != '') && !$has_embed ) { ?>
	        					</a>
	        				<?php } ?>

	        				<?php 
		        				if ( !$has_embed OR ( $has_embed && $settings['slider_video_title'] != 'true' ) )  { // Hide title/description if video post
	    	
	    	    					if ($slidertype != 'default') {
		    	    					$slide_excerpt = get_the_excerpt();
		    	    					echo woo_text_trim ( $slide_excerpt, 16 );
	    	    					} else {
	    	    						the_content();
	    	    					}

	    	    				}
    	    				?>
    	    			</div><!-- /.entry -->
	    	    			    	    		
	    	    	</article>
    	    	</div><!-- /.slide-content-container -->
			</li><!-- /.slide -->

			<?php endforeach; ?> 
			
		</ul><!-- /.slides -->
		
		<?php if ( $settings['featured_pagination'] == "true" && $count > 1 ) { ?>
		<div class="manual col-full">
			<ol class="flex-control-nav">
			<?php
				$count = 0;
				foreach($slides as $post) : setup_postdata($post); $count++;

					echo '<li><a>'. $count .'</a></li>';

				endforeach;
			?>
			</ol>
		</div>
		<?php } ?>

		</div>

	</div><!-- /#featured -->

<?php 
// Slider Settings
$animation = 'fade';
if ( $settings['featured_speed'] == 'Off' ) { $slideshow = 'false'; } else { $slideshow = 'true'; }
$pauseOnHover = $settings['featured_hover'];
$touchSwipe = $settings['featured_touchswipe'];
$slideshowSpeed = $settings['featured_speed'] * 1000; // milliseconds
$animationDuration = $settings['featured_animation_speed'] * 1000; // milliseconds
$nextprev = $settings['featured_nextprev'];
$pagination = $settings['featured_pagination'];
?>

<script type="text/javascript">
   jQuery(window).load(function() {
   	jQuery('#featured').flexslider({
   		animation: "<?php if ( $slidertype != 'default' ) { echo 'slide'; } else { echo $animation; } ?>",
   		controlsContainer: ".controls-container",
   		directionNav: <?php if ($nextprev == 'true') echo 'true'; else echo 'false'; ?>,
   		<?php if ( $pagination == "true" ) { ?>
   			controlNav: true,
   			manualControls: ".manual ol li",
   		<?php } else { ?>
   			controlNav: false,
   		<?php } ?>
   		slideshow: <?php echo $slideshow; ?>,
   		pauseOnHover: <?php echo $pauseOnHover; ?>,
   		slideshowSpeed: <?php echo $slideshowSpeed; ?>,
   		animationDuration: <?php echo $animationDuration; ?><?php if ( $slidertype != 'default') { echo ','; } ?>
   		<?php if ( $slidertype != 'default' ) { ?>
	   		start: function(slider) {
	       		jQuery('#featured-wrap #featured .slide:eq(' + (slider.currentSlide + 1) + ')').addClass('current-slide');
	      	},
	      	before: function(slider) {
	       		jQuery('#featured-wrap #featured .slide:eq(' + (slider.currentSlide + 1) + ')').removeClass('current-slide');
	      	},
	      	after: function(slider) {
	       		jQuery('#featured-wrap #featured .slide:eq(' + (slider.currentSlide + 1) + ')').addClass('current-slide');
	      	}
   		<?php } ?>
   	});
   	jQuery('#slides').addClass('loaded');
   });
	
</script>

<?php } else { ?>
	<div class="col-full"><?php echo do_shortcode('[box type="info"]Please add some slides in the WordPress admin backend to show in the Featured Slider.[/box]'); ?></div>
<?php } ?> 

</div><!-- /#featured-wrap -->