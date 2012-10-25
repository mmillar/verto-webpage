<?php
/**
 * Template Name: Support
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

        <div id="support-banner-wrapper">
            <table class="support"><tr><td background="<?php bloginfo('template_directory');?>/images/support-banner-1024x250.png">
                <div id="support-title">"Say Something Nice Here."</div>
                <div id="support-menu">
                    <div><a href="#">FAQ</a></div>
                    <div id="support-menu-line"></div>
                    <div><a href="../products/rightpath">RightPath</a></div>
                    <div id="support-menu-line"></div>
                    <div><a href="../products/mindmerge">MindMerge</a></div>
                    <div id="support-menu-line"></div>
                    <div><a href="../contact">Contact Us</a></div>
                    <div id="support-menu-line"></div>
                    <div><a href="#">News</a></div>
                </div>
            </td></tr></table>
        </div><!-- /#support-banner-wrapper -->

        <div id="support-main-wrapper">
            <div class="support-main"> 
                <div class="support-left">
                    <div class="support-new">
                        <div id="support-new-title">
                            <span id="light-blue-text">New To </span>
                            <span id="black-text">Verto?</span>
                        </div><br />
                        <div>Proin volutpat nisl vel enim congue id fringilla est vestibulum. Donec pretium mollis hendrerit. Nullam nec felis eget velit laoreet sollicitudin luctus ut enim. Cras elit nisi, posuere vitae tincidunt id, posuere ac dolor.</div>
                        <div id="support-create"><a href="http://support.verto.ca/wp-login.php?action=register"><img src="<?php bloginfo('template_directory');?>/images/create-new-account.png" /></a></div>
                    </div>
                    <div class="support-info-box">
                        <div id="support-info-box-title">
                            <span id="dark-blue-text">How does it work?</span>
                        </div><br />
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium, tortor eu eleifend laoreet, risus nisl luctus tortor, quis fermentum erat dolor id nibh. Nullam vestibulum ligula et turpis pulvinar suscipit. Vivamus tempus libero sit amet quam luctus vel dignissim tellus scelerisque. <a href="http://www.twitter.com">Twitter.</a> Vestibulum laoreet risus at augue volutpat eget varius enim mollis. Nullam mattis risus sed lorem rutrum hendrerit. Praesent sollicitudin, diam et lacinia elementum, nibh dui porttitor ligula, quis lobortis enim nisl id diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus molestie bibendum magna eget faucibus. Aliquam erat volutpat. Fusce tristique pretium urna quis sagittis. Aliquam quis dolor ornare sem varius tristique.</div><br />
                        <div>
                            <a href="#">@Verto Support</a> Hello World!<br />
                            <a href="#">@Tacos</a> Delicious~<br />
                            <a href="#">@Anon</a> .__.</br>
                        </div><br />
                        <div id="support-twitter">
                            <span><img src="<?php bloginfo('template_directory');?>/images/twitter.png" /></span>
                            <span id="gray-text">Follow Us On </span><span id="light-blue-text">Twitter</span>
                        </div>
                    </div>
                </div>

                <div class="support-right">
                    <div class="support-login">
                        <div id="support-login-title">
                            <span id="light-blue-text">Already a </span>
                            <span id="black-text">Verto </span>
                            <span id="light-blue-text">customer?</span>
                        </div><br />
                        <form action="sign-in" method="post">
                            <table><tr>
                                <td id="support-login-username">username</td>
                                <td id="support-username-box" colspan="2"><input type="text" name="username" id="" class="support-input" /></td>
                            </tr><tr>
                                <td id="support-login-password">password</td>
                                <td id="support-password-box" colspan="2"><input type="text" name="password" id="" class="support-input" /></td>
                            </tr><tr>
                                <td></td>
                                <td id="support-sign-in"><input type="image" src="<?php bloginfo('template_directory');?>/images/sign-in.png" name="sign-in" class="sign-in-button" /></td>
                                <td id="support-stay-signed-in"><input type="checkbox" name="stay-signed-in" value="1" <?php checked('1', get_option( 'stay-signed-in' ) ); ?> /> Stay signed in</td>
                            </tr><tr>
                                <td></td>
                                <td id="support-help" colspan="2">
                                    <span><a href="http://support.verto.ca">I can't access my account | Help</a></span>
                                </td>
                            </tr></table>
                        </form>
                    </div>
                    <div class="support-products">
                        <div id="support-products-title">
                            <span><img src="<?php bloginfo('template_directory');?>/images/support-help.png" /></span>
                            <span id="light-blue-text">Need support on our </span>
                            <span id="black-text">Products</span><span id="light-blue-text">?</span>
                        </div>
                        <div><a href="../products/rightpath"><img src="<?php bloginfo('template_directory');?>/images/products_rightpath.png" /></a></div>
                        <div><a href="../products/mindmerge"><img src="<?php bloginfo('template_directory');?>/images/products_mindmerge.png" /></a></div>
                    </div>
                </div>

                <div class="support-contact">
                    <div id="support-contact-header">You can also contact our support team:</div>
                    <div>Email: <a href="mailto:suppport@verto.ca">support@verto.ca</a></div>
                    <div>Tel.: 647 818 9708</div>
                </div>
            </div>
        </div><!-- /#support-main-wrapper -->

		</section><!-- /#main -->
		
		<?php woo_main_after(); ?>
		
    </div><!-- /#content -->
		
<?php get_footer(); ?>