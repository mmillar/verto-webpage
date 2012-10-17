<?php
/**
 * The default template for displaying content
 */

	global $woo_options;
 
/**
 * The Variables
 *
 * Setup default variables, overriding them if the "Theme Options" have been saved.
 */

 	$settings = array(
					'thumb_w' => 504, 
					'thumb_h' => 284, 
					'thumb_align' => 'alignleft',
					'post_content'	=>	'content'
					);
					
	$settings = woo_get_dynamic_values( $settings );
 
?>

	<article <?php post_class('post'); ?>>
	    
		<header>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<?php woo_post_meta(); ?>
		</header>

		<section class="entry">

	    <?php
	    	if ( is_home() ) { $settings['thumb_w'] = 100; $settings['thumb_h'] = 100; }
	    	if ( isset( $settings['post_content'] ) && $settings['post_content'] != 'content' ) { 
	    		woo_image( 'width=' . $settings['thumb_w'] . '&height=' . $settings['thumb_h'] . '&class=thumbnail ' . $settings['thumb_align'] ); 
	    	} 
	    ?>
		
		<?php if ( isset( $settings['post_content'] ) && $settings['post_content'] == 'content' ) { the_content( __( 'Continue Reading &rarr;', 'woothemes' ) ); } else { the_excerpt(); } ?>
		</section>

		<footer class="post-more">      
		<?php if ( isset( $settings['post_content'] ) && $settings['post_content'] == 'excerpt' ) { ?>
			<span class="comments"><?php comments_popup_link( __( 'Leave a comment', 'woothemes' ), __( '1 Comment', 'woothemes' ), __( '% Comments', 'woothemes' ) ); ?></span>
			<span class="post-more-sep">&bull;</span>
			<span class="read-more"><a href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'Continue Reading &rarr;', 'woothemes' ); ?>"><?php _e( 'Continue Reading &rarr;', 'woothemes' ); ?></a></span>
		<?php } ?>
		</footer>   

	</article><!-- /.post -->