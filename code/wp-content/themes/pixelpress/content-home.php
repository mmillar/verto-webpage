<?php
/**
 * The homepage template for displaying content
 */

	global $woo_options;
 
/**
 * The Variables
 *
 * Setup default variables, overriding them if the "Theme Options" have been saved.
 */

 	$settings = array(
					'thumb_w' => 100, 
					'thumb_h' => 100, 
					'thumb_align' => 'alignleft'
					);
					
	$settings = woo_get_dynamic_values( $settings );
 
?>
	
	<article <?php post_class(); ?>>
	    
		<header>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			 <div class="date-badge">
				<span class="month-day"><?php the_time('d'); ?></span>
				<span class="month-name"><?php the_time('F'); ?></span>
			</div><!-- .date-badge -->
		</header>

		<section class="entry">
			<?php echo woo_text_trim ( get_the_excerpt(), 16 ); ?>
		</section>  

	</article><!-- /.post -->