<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
 
 global $woo_options;
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_head();
	woo_head();
?>

</head>

<body <?php body_class(); ?>>
<?php woo_top(); ?>

<div id="wrapper">

	<?php if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'top-menu' ) ) { ?>

	<div id="top">
		<nav class="col-full" role="navigation">
			<?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'top-nav', 'menu_class' => 'nav fl', 'theme_location' => 'top-menu' ) ); ?>
		</nav>
	</div><!-- /#top -->

    <?php } ?>
    
    <?php woo_header_before(); ?>
    
    <div id="header-wrap">

		<header id="header" class="col-full">
		
			<div id="logo" class="fl" style="">
				<?php
				    $logo = get_template_directory_uri() . '/images/logo.png';
				    if ( isset( $woo_options['woo_logo'] ) && $woo_options['woo_logo'] != '' ) { $logo = $woo_options['woo_logo']; }
				?>
				<?php if ( ! isset( $woo_options['woo_texttitle'] ) || $woo_options['woo_texttitle'] != 'true' ) { ?>
				    <a id="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'description' ); ?>">
				    	<img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
				    </a>
			    <?php } ?>
			    
			    <hgroup>
			        
					<h1 class="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<h3 class="nav-toggle"><a href="#navigation"><?php _e('Navigation', 'woothemes'); ?></a></h3>
				      	
				</hgroup>
			</div><!-- /#logo -->		
	        
	        <?php woo_nav_before(); ?>
	
	        <div id="header-right" class="fr">
				<nav id="top-nav">
					<span style="float:right; margin-bottom: 0; padding: 0;">
						<?php include (TEMPLATEPATH . '/search-form.php'); ?>
					</span>
					<span style="float:right; margin-bottom: 0; padding: 0 20px 0;"><a href="http://support.verto.ca" target="_blank">Login</a></span>
				</nav>

				<?php
					if ( isset($woo_options['woo_header_social']) && $woo_options['woo_header_social'] == 'true' ) 
						get_template_part( 'includes/header-social' );
				?>	

				<nav id="navigation" role="navigation">
					
					<?php
					if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
						wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fl', 'theme_location' => 'primary-menu' ) );
					} else {
					?>
			        <ul id="main-nav" class="nav">
						<?php if ( is_page() ) $highlight = 'page_item'; else $highlight = 'page_item current_page_item'; ?>
						<li class="<?php echo $highlight; ?>"><a href="<?php echo home_url( '/' ); ?>"><?php _e( 'Home', 'woothemes' ); ?></a></li>
						<?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?>
					</ul><!-- /#nav -->
			        <?php } ?>

			      
				</nav><!-- /#navigation -->			

			</div><!-- /#header-right -->
			
			<?php woo_nav_after(); ?>
		
		</header><!-- /#header -->
	
	</div><!-- /#header-wrap -->
	
	<?php
	// Output the Features Area	
	if ( ( is_front_page() || is_home() ) && ( isset($woo_options['woo_featured']) && $woo_options['woo_featured'] == 'true' ) ) { get_template_part( 'includes/featured' ); } 
	?>

	<?php woo_content_before(); ?>