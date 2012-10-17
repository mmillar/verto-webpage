<?php

// Register widgetized areas

if (!function_exists( 'the_widgets_init')) {
	function the_widgets_init() {
	    if ( !function_exists( 'register_sidebar') )
	        return;
	
	    register_sidebar(array( 'name' =>  esc_attr( __( 'Primary', 'woothemes' ) ), 'id' => 'primary','description' => esc_attr( __( 'Normal full width sidebar', 'woothemes' ) ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));   
	    register_sidebar(array( 'name' =>  esc_attr( __( 'Footer 1', 'woothemes' ) ), 'id' => 'footer-1', 'description' => esc_attr( __( 'Widetized footer', 'woothemes' ) ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	    register_sidebar(array( 'name' =>  esc_attr( __( 'Footer 2', 'woothemes' ) ), 'id' => 'footer-2', 'description' => esc_attr( __( 'Widetized footer', 'woothemes' ) ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	    register_sidebar(array( 'name' =>  esc_attr( __( 'Footer 3', 'woothemes' ) ), 'id' => 'footer-3', 'description' => esc_attr( __( 'Widetized footer', 'woothemes' ) ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	    register_sidebar(array( 'name' =>  esc_attr( __( 'Footer 4', 'woothemes' ) ), 'id' => 'footer-4', 'description' => esc_attr( __( 'Widetized footer', 'woothemes' ) ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
		register_sidebar(array( 'name' =>  esc_attr( __( 'Homepage', 'woothemes' ) ), 'id' => 'homepage', 'description' => esc_attr( __( 'Main content area on the homepage. WARNING: Only use the Woo Component widget for this area.', 'woothemes' ) ), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>' ) );	
	}
}

add_action( 'init', 'the_widgets_init' );
    
?>