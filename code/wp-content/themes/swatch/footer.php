<?php global $woo_options; ?>
	<?php
		$total = $woo_options['woo_footer_sidebars']; if ( ! isset( $total ) ) { $total = 4; }
		if ( ( woo_active_sidebar( 'footer-1' ) ||
			   woo_active_sidebar( 'footer-2' ) ||
			   woo_active_sidebar( 'footer-3' ) ||
			   woo_active_sidebar( 'footer-4' ) ) && $total > 0 ) {

  	?>

	<div id="footer-widgets">
		<div class="col-full col-<?php echo $total; ?>">

		<?php $i = 0; while ( $i < $total ) { $i++; ?>
			<?php if ( woo_active_sidebar( 'footer-' . $i ) ) { ?>

		<div class="block footer-widget-<?php echo $i; ?>">
        	<?php woo_sidebar( 'footer-' . $i ); ?>
		</div>

	        <?php } ?>
		<?php } ?>

		<div class="fix"></div>
		</div>
	</div><!-- /#footer-widgets  -->
    <?php } ?>

	<div id="footer">
		<div class="col-full">

		<div id="copyright" class="col-left">
		<?php if( isset( $woo_options['woo_footer_left'] ) && $woo_options['woo_footer_left'] == 'true' ) {

				echo stripslashes( $woo_options['woo_footer_left_text'] );

		} else { ?>
			<p><!--DELETED <?php bloginfo(); ?>-->Copyright &copy; Verto Ltd. <?php echo date( 'Y' ); ?>. <?php _e( 'All Rights Reserved.', 'woothemes' ); ?></p>
		<?php } ?>
		<div class="hr-dotted"></div>
		<div id="connect">
			Connect with us
			<ul>
				<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/custom/icon_facebook_link.png" alt="Facebook"></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/custom/icon_twitter_link.png" alt="Twitter"></a></li>
			</ul>
		</div>
		</div>

		<div id="credit" class="col-right">
        <!-- DELETED <?php if( isset( $woo_options['woo_footer_right'] ) && $woo_options['woo_footer_right'] == 'true' ) {

        	echo stripslashes( $woo_options['woo_footer_right_text'] );

		} else { ?>
			<p><?php _e( 'Powered by', 'woothemes' ); ?> <a href="http://www.wordpress.org">WordPress</a>. <?php _e( 'Designed by', 'woothemes' ); ?> <a href="<?php echo ( !empty( $woo_options['woo_footer_aff_link'] ) ? esc_url( $woo_options['woo_footer_aff_link'] ) : 'http://www.woothemes.com' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/woothemes.png" width="74" height="19" alt="Woo Themes" /></a></p>
		<?php } ?>
		</div>-->
			<div id="navigation-bottom" class="fr">

				<?php
if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
	wp_nav_menu( array( 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fl', 'theme_location' => 'primary-menu' ) );
} else {
?>
				<ul id="main-nav" class="nav fl">
					<?php
	if ( get_option( 'woo_custom_nav_menu' ) == 'true' ) {
		if ( function_exists( 'woo_custom_navigation_output' ) )
			woo_custom_navigation_output( "name=Woo Menu 1" );

	} else { ?>

						<?php if ( is_page() ) { $highlight = "page_item"; } else { $highlight = "page_item current_page_item"; } ?>
						<li class="<?php echo $highlight; ?>"><a href="<?php echo home_url( '/' ); ?>"><?php _e( 'Home', 'woothemes' ); ?></a></li>
						<?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?>

					<?php } ?>
				</ul><!-- /#nav -->
				<?php } ?>
				<?php if ( isset( $woo_options['woo_feed_url'] ) && $woo_options['woo_feed_url'] != '' ) { ?>
				<ul class="rss fr">
					<li class="sub-rss"><a href="<?php if ( $woo_options['woo_feed_url'] ) { echo $woo_options['woo_feed_url']; } else { echo get_bloginfo_rss( 'rss2_url' ); } ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-rss.png" alt="<?php bloginfo( 'name' ); ?>" /></a></li>
				</ul>
				<?php } ?>

			</div><!-- /#navigation -->
	</div>
	</div><!-- /#footer  -->
</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php woo_foot(); ?>
</body>
</html>