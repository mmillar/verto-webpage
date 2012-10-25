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

			<div id="main-info-wrapper">
				<div class="main-info">
					<div class="main-newsfeed">
						<div id="main-newsfeed-title"><span id="dark-blue-text">Newsfeed</span></div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium, tortor eu eleifend laoreet, risus nisl luctus tortor, quis fermentum erat dolor id nibh. Nullam vestibulum ligula et turpis pulvinar suscipit. Vivamus tempus libero sit amet quam luctus vel dignissim tellus scelerisque. <a href="http://www.twitter.com">Twitter.</a> Vestibulum laoreet risus at augue volutpat eget varius enim mollis. Nullam mattis risus sed lorem rutrum hendrerit. Praesent sollicitudin, diam et lacinia elementum, nibh dui porttitor ligula, quis lobortis enim nisl id diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus molestie bibendum magna eget faucibus. Aliquam erat volutpat. Fusce tristique pretium urna quis sagittis. Aliquam quis dolor ornare sem varius tristique.</div><br />
                        <div>
                            <a href="#">@Verto Support</a> Hello World!<br />
                            <a href="#">@Tacos</a> Delicious~<br />
                            <a href="#">@Anon</a> .__.</br>
                        </div><br />
                        <div id="main-newsfeed-twitter">
                            <span><img src="<?php bloginfo('template_directory');?>/images/twitter.png" /></span>
                            <span id="gray-text">Follow Us On </span><span id="light-blue-text">Twitter</span>
                        </div>
					</div>

					<div class="main-product-support">
						<div id="main-product-support-title">
							<span id="black-text">Product</span>
							<span id="blue-text">Support</span>
						</div>
						<div id="main-product-support-menu">
			                <div id="main-product-support-link"><a href="#">FAQ</a></div>
			                <div id="main-product-support-link"><a href="../products/rightpath">RightPath</a></div>
			               	<div id="main-product-support-link"><a href="../products/mindmerge">MindMerge</a></div>
			                <div id="main-product-support-link"><a href="#">Downloads</a></div>
			                <div id="main-product-support-link"><a href="../contact">Contact Us</a></div>
		            	</div>
					</div>
				</div>
			</div><!-- /#main-info-wrapper -->

		</section><!-- /#main -->
		
		<?php woo_main_after(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>