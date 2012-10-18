<?php
/**
 * Index Template
 *
 * Here we setup all logic and XHTML that is required for the index template, used as both the homepage
 * and as a fallback template, if a more appropriate template file doesn't exist for a specific context.
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();

	/**
 	* The Variables
 	*
 	* Setup default variables, overriding them if the "Theme Options" have been saved.
 	*/
	
	$settings = array(
					'blog_area' => 'true',
					'feedback_area' => 'true',
					'features_area' => 'true',
					'portfolio_area' => 'true',
					);
					
	$settings = woo_get_dynamic_values( $settings );
	if ( get_query_var( 'page' ) > 1) { $paged = get_query_var( 'page' ); } elseif ( get_query_var( 'paged' ) > 1) { $paged = get_query_var( 'paged' ); } else { $paged = 1; } 
	
?>

    <div id="content">

    	<?php woo_main_before(); ?>

		<section id="main" class="fullwidth">

		</section><!-- /#main -->
		
		<?php woo_main_after(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>