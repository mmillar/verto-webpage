<?php
/**
 * Template Name: Clients
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
?>

    <div id="content">
    
    	<?php woo_main_before(); ?>
    	
		<section id="main" class="fullwidth">

        <div id="clients-main-wrapper">
            <div class="clients-main">
                <table class="clients"><tr><td background="<?php bloginfo('template_directory');?>/images/client-banner-1024x250.png">
                    <div id="clients-title">"Client Testimonial Here."</div>
                    <div id="clients-subtitle">- Client Name</div>
                </td></tr></table>

                <div class="clients-testimonial-pictures"><!-- START Temporary --><br /><br /><br /><br /><br />[Pictures Go Here]<br /><br /><br /><br /><br /><!-- END Temporary --></div>

                <div class="clients-testimonial-text">
                    <div id="purple-quote">“</div>
                    <div id="testimonial">
                        <table><tr>
                            <td id="regular">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales eros. Nunc aliquet, nunc quis adipiscing tempor, justo justo rhoncus dolor, vel tempor quam velit vel nisl."</td>
                        </tr><tr>    
                            <td id="small">
                                <strong>- Verto Support</strong><br />
                                &nbsp;&nbsp;&nbsp;The Role and The Company
                            </td>
                        </tr></table>
                    </div>
                </div>
            </div>
        </div><!-- /#clients-main-wrapper -->

        <div id="our-clients-wrapper">
            <div class="our-clients-all">
                <div class="clients-our-clients">
                    <div id="clients-our-clients-title">
                        <span id="black-text">Our </span><span id="blue-text">Clients</span>
                    </div><br />
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales eros. Nunc aliquet, nunc quis adipiscing tempor, justo justo rhoncus dolor, vel tempor quam velit vel nisl. Donec pulvinar, orci quis eleifend hendrerit, sem eros adipiscing mauris, eget egestas dui arcu dapibus felis. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur odio nisl, bibendum in volutpat non, pellentesque venenatis libero. Nam fringilla congue libero, eu pellentesque ligula pretium sed. Aenean ultricies, tortor ac molestie laoreet, tortor leo dapibus sapien, id iaculis turpis mi sed velit. Duis ligula tortor, laoreet ac ultricies ut, convallis sed dui.<br /><br />
                        Pellentesque in feugiat elit. Vivamus ligula purus, consectetur eget ultrices id, commodo eget enim. Donec nec augue et ipsum interdum viverra. Ut at tortor non augue convallis tempor. Suspendisse potenti. Donec vitae viverra justo. Nam vel arcu eget dolor pharetra commodo et sed felis. Quisque urna magna, vehicula quis sodales et, aliquet eu arcu. Sed eleifend neque quis tellus facilisis interdum. Cras eget urna ut purus cursus accumsan sit amet sed augue. Etiam in mattis ante.<br /><br />
                        Full list of our <a href="#">clients</a>. | View our <a href="#">success stories</a>.
                    </div>
                </div>

                <div class="clients-images">
                    <span id="left-arrow"><img src="<?php bloginfo('template_directory');?>/images/ico-arrow-left.png" /></span>
                    <span id="pictures">
                        <ul>
                            <li class="clientlogos"><img src="<?php bloginfo('template_directory');?>/images/CP_Logo.png" /></li>
                            <li class="clientlogos"><img src="<?php bloginfo('template_directory');?>/images/Prodigy_Logo.png" /></li>
                            <li class="clientlogos"><img src="<?php bloginfo('template_directory');?>/images/Sunnybrook_Logo.png" /></li>
                            <li class="clientlogos">GTA Rehab Network</li>
                        </ul>
                    </span>
                    <span id="right-arrow"><img src="<?php bloginfo('template_directory');?>/images/ico-arrow-right.png" /></span>
                </div>
            </div>
        </div><!-- /#our-clients-wrapper -->

		</section><!-- /#main -->
		
		<?php woo_main_after(); ?>
		
    </div><!-- /#content -->
		
<?php get_footer(); ?>