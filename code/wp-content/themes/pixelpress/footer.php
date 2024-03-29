<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
	global $woo_options;

	$total = 4;
	if ( isset( $woo_options['woo_footer_sidebars'] ) && ( $woo_options['woo_footer_sidebars'] != '' ) ) {
		$total = $woo_options['woo_footer_sidebars'];
	}
	
?>
<?php
	if ( ( woo_active_sidebar( 'footer-1' ) ||
		   woo_active_sidebar( 'footer-2' ) ||
		   woo_active_sidebar( 'footer-3' ) ||
		   woo_active_sidebar( 'footer-4' ) ) && $total > 0 ) {
?>

	<?php woo_footer_before(); ?>	
			
		<section id="footer-widgets" class="col-full col-<?php echo $total; ?> fix">
	
			<?php $i = 0; while ( $i < $total ) { $i++; ?>
				<?php if ( woo_active_sidebar( 'footer-' . $i ) ) { ?>
	
			<div class="block footer-widget-<?php echo $i; ?>">
	        	<?php woo_sidebar( 'footer-' . $i ); ?>
			</div>
	
		        <?php } ?>
			<?php } // End WHILE Loop ?>
	
		</section><!-- /#footer-widgets  -->

	<?php } // End IF Statement ?>
	<div id="footer-wrap">
		
		<footer id="footer" class="col-full">

			<hr class="footer" />
	
			<div id="footer-info">
				<table cellpadding="0" cellspacing="0"><tr>
					<td><img src="<?php bloginfo('template_directory');?>/images/logo-small.png" alt="Verto" class="image-padding" /> &copy; 2012</td>
					<td>|</td>
					<td>Suite 1903, 59 East Liberty St, Toronto, ON</td>
					<td>|</td>
					<td>P: 416.516.5050</td>
					<td>|</td>
					<td>F: 416.516.7575</td>
					<td>|</td>
					<td><span class="image-padding">Connect with us: </span>
						<a href="http://www.facebook.com"><img src="<?php bloginfo('template_directory');?>/images/ico-facebook.png" alt="Facebook"/></a> 
						<a href="http://www.twitter.com"><img src="<?php bloginfo('template_directory');?>/images/ico-twitter.png" alt="Twitter"/></a>
					</td>
				</tr></table>
			</div>
	
		</footer><!-- /#footer  -->

	</div><!-- /#footer-wrap  -->

</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php woo_foot(); ?>
</body>
</html>