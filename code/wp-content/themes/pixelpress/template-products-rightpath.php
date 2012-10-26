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
    <div id="content">
    
        <?php woo_main_before(); ?>
        
        <div id="product-main-wrapper">
            <section id="product-main" class="product_main">       
    		
    		<?php woo_loop_before(); 
            $array = wp_get_attachment_image_src();?>
            <div class="product-logo" id="rightpath">
                <img src="<?php bloginfo('template_directory');?>/images/Banner_RP.png">
            </div>
            
            <?php woo_loop_after(); ?>
            <?php woo_pagenav(); ?>
    		<?php wp_reset_postdata(); ?>                

            </section><!-- /#product-main -->
        </div><!-- /#product-main-wrapper -->

        <div id="product-features-wrapper">
            <section id="product-features">

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
            </section><!-- /#product-features -->
        </div><!-- /#product-features-wrapper -->
        
        <?php woo_main_after(); ?>

    </div><!-- /#content -->   
		
<?php get_footer(); ?>