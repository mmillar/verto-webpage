<?php
	get_header();
	global $woo_options;
?>

    <?php if ( isset( $woo_options['woo_mini_features'] ) && $woo_options['woo_mini_features'] == 'true' && is_home() && ! is_paged() ) { get_template_part( 'includes/mini-features' ); } // Load the Mini Features ?>     

    <div id="content" class="col-full">
    <?php if ( isset( $woo_options['woo_slider'] ) && $woo_options['woo_slider'] == 'true' && is_home() && ! is_paged() ) { get_template_part( 'includes/featured' ); } // Load the Featured Slider ?>
		<div id="main" class="fullwidth">

		<?php if ( $woo_options['woo_breadcrumbs_show'] == 'true' ) { ?>
			<div id="breadcrumbs">
				<?php woo_breadcrumbs(); ?>
			</div><!--/#breadcrumbs -->
		<?php } ?> 

			<div class="col-left">
				<span id="for-x">
				<ul>
					<li>
						<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/custom/careconsole_mini.png" alt="icon"></div>
						<div class="description"><h3>For <em>Healthcare</em></h3><div class="hr-dotted"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue enim.</div>
					</li>
					<li class="spacer"> </li>
					<li>
						<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/custom/projectbuddy_mini.png" alt="icon"></div>
						<div class="description"><h3>For <em>Workforces</em></h3><div class="hr-dotted"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue enim.</div>
					</li>
					<li class="spacer"> </li>
					<li>
						<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/custom/sitebuddy_mini.png" alt="icon"></div>
						<div class="description"><h3>For <em>Your Site</em></h3><div class="hr-dotted"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue enim.</div>
					</li>
				</ul>
				</span>
			</div>

				<?php
					get_sidebar('homepage-right')
				?>
		
			<div class="clear"></div><!--/.clear-->
		</div><!-- /#main -->

    </div><!-- /#content -->		
<?php get_footer(); ?>