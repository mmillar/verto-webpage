<?php
/**
 * Template Name: MindMerge
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
        <div class="product-logo">
            <img src= "../../wp-content/uploads/2012/10/products_mindmerge.png">
        </div>
        <div class ="product-desc">
            <div class= "product-about-title">
                <p>About MindMerge</p>
            </div>
            <div class="line-separator"></div>
            <div class = "product-about">
                   <p> Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                     Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>

        </div>
        
        <?php woo_loop_after(); ?>
        <?php woo_pagenav(); ?>
		<?php wp_reset_postdata(); ?>                

        </section><!-- /#main -->

        <section id="product-features">

            <div class = "feature-title">Features</div>
            <div class ="dotted-line"></div>
            <ul class = "product-features-numbered">
                <li class = "mmproduct1">
        
                <img src="../../wp-content/uploads/2012/10/Products_MM_Circle1.png">  <p> Features </p>
            Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                     Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                
                <li class = "mmproduct2">
                    <img src ="../../wp-content/uploads/2012/10/Products_MM_Circle2.png"><p> Features </p>
                Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                     Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>

                <li class = "mmproduct3">
                    <img src = "../../wp-content/uploads/2012/10/Products_MM_Circle3.png"><p> Features </p>
                Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                     Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>

                <li class = "mmproduct4"><img src="../../wp-content/uploads/2012/10/Products_MM_Circle4.png"><p> Features </p>
                Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                     Sed in dui elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            </ul>
        </section>

        <section id ="product-menu">
      
        </section>
        
        <?php woo_main_after(); ?>
            


    </div><!-- /#content -->    
		
<?php get_footer(); ?>