<?php
/**
 * Template Name: RightPath
 *
 * The blog page template displays the "blog-style" template on a sub-page. 
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options;
 get_header();
 
/**
 * The Variables
 *
 * Setup default variables, overriding them if the "Theme Options" have been saved.
 */
	
	$settings = array(
					'thumb_w' => 505, 
					'thumb_h' => 284, 
					'thumb_align' => 'alignleft',
                    'post_content' => 'excerpt'
					);
					
	$settings = woo_get_dynamic_values( $settings );
?>
    <!-- #content Starts -->
    <div id="content" class="col-full">
    
        <?php woo_main_before(); ?>
        
        <section id="product-main" class="product_main">       
		
		<?php woo_loop_before(); 
        $array = wp_get_attachment_image_src();?>
        <div class="product-logo" id="rightpath">
            <img src="<?php bloginfo('template_directory');?>/images/products_rightpath.png">
        </div>
        <div class="product-desc" id="rightpath">
            <div class="product-about-title"><p>About RightPath</p></div>
            <div class="line-separator"></div>
            <div class="product-about">
                <p>Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
                Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        
        <?php woo_loop_after(); ?>
        <?php woo_pagenav(); ?>
		<?php wp_reset_postdata(); ?>                

        </section><!-- /#main -->

        <section id="product-features">

            <div class="feature-title" id="rightpath">Features</div>
            <div class="dotted-line"></div>
            <ul class="product-features-numbered">
                <li class="rpproduct1">
                    <img src="<?php bloginfo('template_directory');?>/images/ico-rightpath-circle-1.png" />  <p> Features </p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>
                
                <li class="rpproduct2">
                    <img src ="<?php bloginfo('template_directory');?>/images/ico-rightpath-circle-2.png" /> <p> Features </p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>

                <li class="rpproduct3">
                    <img src = "<?php bloginfo('template_directory');?>/images/ico-rightpath-circle-3.png" /> <p> Features </p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>

                <li class="rpproduct4">
                    <img src="<?php bloginfo('template_directory');?>/images/ico-rightpath-circle-4.png" /> <p> Features </p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>
            </ul>
        </section>

        <section id ="product-menu">
      
        </section>
        
        <?php woo_main_after(); ?>
            


    </div><!-- /#content -->    
		
<?php get_footer(); ?>