<?php
if ( ! is_admin() ) { add_action( 'wp_enqueue_scripts', 'woothemes_add_javascript' ); }

if ( ! function_exists( 'woothemes_add_javascript' ) ) {
	function woothemes_add_javascript() {
		global $woo_options;

		$general_dependencies = array( 'jquery' );
		if ( isset( $woo_options['woo_enable_lightbox'] ) && $woo_options['woo_enable_lightbox'] == 'true' ) { $general_dependencies[] = 'prettyPhoto'; }

		wp_register_script( 'prettyPhoto', get_template_directory_uri() . '/includes/js/jquery.prettyPhoto.js', array( 'jquery' ) );		
		wp_register_script( 'portfolio', get_template_directory_uri() . '/includes/js/portfolio.js', array( 'jquery', 'prettyPhoto' ) );
		wp_enqueue_script( 'third party', get_template_directory_uri() . '/includes/js/third-party.js', array( 'jquery' ) );
		wp_enqueue_script( 'general', get_template_directory_uri() . '/includes/js/general.js', $general_dependencies );
		// Load Flexslider for homepage
		if ( is_home() || is_front_page() ) {
			wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/includes/js/jquery.flexslider-min.js', array( 'jquery' ) );
		}
		// Load Portfolio JS for homepage, page template, single page, post type archive, and taxonomy archive
		if ( is_page_template( 'template-portfolio.php' ) || is_front_page() || ( is_singular() && get_post_type() == 'portfolio' ) || is_tax( 'portfolio-gallery' ) || is_post_type_archive( 'portfolio' ) ) {			
			wp_enqueue_script( 'portfolio' );
		}
		// Load PrettyPhoto for homepage
		if ( ( is_home() || is_front_page() ) &&  ( isset($woo_options['woo_portfolio_area']) && $woo_options['woo_portfolio_area'] == 'true' ) && ( isset($woo_options['woo_portfolio_linkto']) && $woo_options['woo_portfolio_linkto'] == 'lightbox' ) ) {
			wp_enqueue_script( 'prettyPhoto' );
		}
	}

	do_action( 'woothemes_add_javascript' );

}

if ( ! is_admin() ) { add_action( 'wp_print_styles', 'woothemes_add_css' ); }

if ( ! function_exists( 'woothemes_add_css' ) ) {
	function woothemes_add_css () {
		
		wp_register_style( 'prettyPhoto', get_template_directory_uri().'/includes/css/prettyPhoto.css' );
	
		if ( is_page_template('template-portfolio.php') || is_front_page() || ( is_singular() && get_post_type() == 'portfolio' ) || is_tax( 'portfolio-gallery' ) || is_post_type_archive( 'portfolio' ) ) {
			wp_enqueue_style( 'prettyPhoto' );
		}
	
		do_action( 'woothemes_add_css' );
	
	} // End woothemes_add_css()
}

// Add HTML5 shim in <IE9
add_action( 'wp_head', 'woo_html5' );
function woo_html5() {
	global $is_IE;
	if( $is_IE ) {
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$browser = substr( "$browser", 25, 8 );
		if ($browser == "MSIE 7.0" || $browser == "MSIE 6.0" || $browser == "MSIE 8.0" ) {
			echo '<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>'; 	
		}
	}
} // End woo_html5()
?>