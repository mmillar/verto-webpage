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

			<div id="main-features-wrapper">
				<div class ="main-features">
					<div class = "three-features">
						<ul class ="listoffeatures">
							<li class ="healthcare"><img src="<?php bloginfo('template_directory');?>/images/Index_Health.png"><div class= "index-title"><span id ="black-text" > For</span><span id = "blue-text"> Healthcare</span></div>
							<div class = "index-text">TextLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas pharetra bibendum. Suspendisse pretium, velit vel ultricies convallis, nisl tortor dictum sapien, vehicula dictum nunc ante tempus magna. Nullam vulputate elit a odio viverra quis luctus mauris sodales. Phasellus a rhoncus risus. Nulla facilisi. In gravida eleifend interdum. Phasellus in ipsum ipsum. Proin metus lorem, malesuada eu convallis sit amet, porttitor et est. <a href ="products/">More ></a></div>
							</li>
							<li class ="workforce"><img src="<?php bloginfo('template_directory');?>/images/Index_Workers.png"><div class= "index-title"><span id ="black-text" > For</span><span id = "blue-text"> Workforces</span></div>
							<div class = "index-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas pharetra bibendum. Suspendisse pretium, velit vel ultricies convallis, nisl tortor dictum sapien, vehicula dictum nunc ante tempus magna. Nullam vulputate elit a odio viverra quis luctus mauris sodales. Phasellus a rhoncus risus. Nulla facilisi. In gravida eleifend interdum. Phasellus in ipsum ipsum. Proin metus lorem, malesuada eu convallis sit amet, porttitor et est.Text <a href ="products/">More ></a></div></li>
							<li class ="site"><img src="<?php bloginfo('template_directory');?>/images/Index_Site.png"><div class= "index-title"><span id ="black-text" > For</span><span id = "blue-text"> Your Site</span></div>
							<div class = "index-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas pharetra bibendum. Suspendisse pretium, velit vel ultricies convallis, nisl tortor dictum sapien, vehicula dictum nunc ante tempus magna. Nullam vulputate elit a odio viverra quis luctus mauris sodales. Phasellus a rhoncus risus. Nulla facilisi. In gravida eleifend interdum. Phasellus in ipsum ipsum. Proin metus lorem, malesuada eu convallis sit amet, porttitor et est.Text <a href ="products/">More ></a></div></li>
						</ul>
					</div>
	           	</div>
	        </div><!-- /#main-features-wrapper -->

	        <div id="main-clients-wrapper">
				<div class ="main-clients">
					   <div class="line-separator"></div>
					<div class="clients-title"><span id ="black-text">Our</span> <span id ="blue-text">Clients</span></div>
					<div class="clients-links"></div>
					<div class="client-images">
					<div class = "arrowbutton"><img src="<?php bloginfo('template_directory');?>/images/Arrow_Button_Left.png" style="padding-top:20px;"> </div>
					<ul class ="listofclients">

							<li class ="clientlogos"><img src="<?php bloginfo('template_directory');?>/images/CP_Logo.png">
							
							</li>
							<li class ="clientlogos"><img src="<?php bloginfo('template_directory');?>/images/Prodigy_Logo.png"></li>
							
							<li class ="clientlogos"><img src="<?php bloginfo('template_directory');?>/images/Sunnybrook_Logo.png"></li>
							
						</ul>
						<div class = "arrowbutton"><img src="<?php bloginfo('template_directory');?>/images/Arrow_Button_Right.png" style="padding-top:20px;"></div>
					</div>
				</div>
			</div><!-- /#main-clients-wrapper -->

		</section><!-- /#main -->
		
		<?php woo_main_after(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>