<?php
/**
 * Template Name: Verto
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
?>

<div id="content-wrapper">

    <div id="content" class="page col-full">
    
    	<?php woo_main_before(); ?>
    	
		<section id="main" class="fullwidth">

        <table class="verto"><tr><td background="<?php bloginfo('template_directory');?>/images/verto-banner-1024x250.png"><div id="verto-title">Technology Empowering People</div></td></tr></table>

        <div class="verto-summary">
	        <span id="verto-summary-name">Verto,</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales eros. Nunc aliquet, nunc quis adipiscing tempor, justo justo rhoncus dolor, vel tempor quam velit vel nisl. Donec pulvinar, orci quis eleifend hendrerit, sem eros adipiscing mauris, eget egestas dui arcu dapibus felis. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur odio nisl, bibendum in volutpat non, pellentesque venenatis libero. Nam fringilla congue libero, eu pellentesque ligula pretium sed. Aenean ultricies, tortor ac molestie laoreet, tortor leo dapibus sapien, id iaculis turpis mi sed velit. Duis ligula tortor, laoreet ac ultricies ut, convallis sed dui.<br /><br />

Pellentesque in feugiat elit. Vivamus ligula purus, consectetur eget ultrices id, commodo eget enim. Donec nec augue et ipsum interdum viverra. Ut at tortor non augue convallis tempor. Suspendisse potenti. Donec vitae viverra justo. Nam vel arcu eget dolor pharetra commodo et sed felis. Quisque urna magna, vehicula quis sodales et, aliquet eu arcu. Sed eleifend neque quis tellus facilisis interdum. Cras eget urna ut purus cursus accumsan sit amet sed augue. Etiam in mattis ante.<br /><br />

Duis eu elit lectus. Donec aliquam, sapien id posuere pellentesque, metus turpis auctor eros, feugiat eleifend nisl purus eu elit. Sed porttitor magna facilisis turpis fermentum eget tincidunt enim sollicitudin. Nunc at mauris non lacus dictum condimentum. Aliquam rutrum dui pharetra neque molestie tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin iaculis risus sit amet dolor malesuada fermentum. Proin id libero mi. Cras tortor purus, vehicula eleifend lacinia sed, iaculis non quam. Vestibulum eget eros neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam euismod dignissim volutpat. In at mauris libero, non ultricies est.</span>
	   </div>

        <div class="verto-our-team">
            <div id="verto-our-team-title">
                <span id="black-text">Our </span><span id="blue-text">Team</span>
            </div><br />
            <div id="verto-our-team-main">
                <span id="left-arrow"><img src="<?php bloginfo('template_directory');?>/images/ico-arrow-left.png" /></span>
                <span id="pictures">[Picture 1] [Picture 2] [Picture 3] [Picture 4] [Picture 5]</span>
                <span id="right-arrow"><img src="<?php bloginfo('template_directory');?>/images/ico-arrow-right.png" /></span>
            </div>
            <div id="verto-our-team-name">Verto Support</div> 
            <div id="verto-our-team-position">Tacos</div>
        </div>

        <div class="separator-dark"></div>

        <div class="verto-our-vision">
        	<div id="verto-our-vision-title">
                <span id="black-text">Our </span><span id="blue-text">Vision</span>
            </div><br />
        	<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <div id="verto-our-vision-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
            <div>Proin volutpat nisl vel enim congue id fringilla est vestibulum. Donec pretium mollis hendrerit. Nullam nec felis eget velit laoreet sollicitudin luctus ut enim. Cras elit nisi, posuere vitae tincidunt id, posuere ac dolor.</div>
            <div><ul>
                <li><b>Lorem ipsum dolor sit amet,</b> consectetur adipiscing elit.</li>
                <li><b>Proin volutpat nisl vel enim congue id fringilla est vestibulum.</b> Donec pretium mollis hendrerit. Nullam nec felis eget velit laoreet sollicitudin luctus ut enim.</li>
                <li><b>Lorem ipsum dolor sit amet,</b> consectetur adipiscing elit.</li>
            </ul></div>
        </div>

        <div class="verto-our-benefits">
            <div id="verto-our-benefits-title">
                <span id="black-text">Our </span><span id="blue-text">Benefits</span>
            </div><br />
        	<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat nisl vel enim congue id fringilla est vestibulum. Donec pretium mollis hendrerit. Nullam nec felis eget velit laoreet sollicitudin luctus ut enim. Cras elit nisi, posuere vitae tincidunt id, posuere ac dolor.</div>
            <div><ul>
                <li>Cras commodo viverra congue.</li>
                <li>Fusce elit mi, scelerisque tincidunt elementum sed, fringilla a lectus.</li>
                <li>Cras bibendum, magna et tristique tempus, nibh nulla tempor lectus, et mattis lacus massa sit amet mi.</li>
                <li>Nunc vel sapien mi, in scelerisque tellus.</li>
                <li>Nullam consectetur nibh nec nunc placerat quis egestas enim auctor.</li>
            </ul></div>
        </div>
        
        <div class="separator-dark-padding"></div>

		</section><!-- /#main -->
		
		<?php woo_main_after(); ?>
		
    </div><!-- /#content -->

</div><!-- /#content-wrapper -->
		
<?php get_footer(); ?>