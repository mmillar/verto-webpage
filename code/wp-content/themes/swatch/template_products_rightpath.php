<?php
/*
Template Name: Product pages - Rightpath
*/
?>
<?php
	get_header();
	global $woo_options;
?>
       
    <div id="content" class="page col-full">

        <div id="product-display">
            <div id="product-slider">
            <?php
            if (function_exists('get_thethe_image_slider')) {
                            print get_thethe_image_slider('ProductSlider');
            } ?>
            </div>
            <div id="product-gap"></div>
            <div id="product-desc">
                <div class="label">
                    <img src="<?php echo get_template_directory_uri() ?>/images/custom/logo_rightpath.png"/>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula sodales interdum. Vestibulum vestibulum purus eget mi molestie bibendum. Duis tristique, elit quis laoreet dapibus, elit nisi blandit risus, nec dapibus urna justo eget sem. In pretium sem ac massa viverra aliquam. Ut hendrerit, elit sit amet cursus adipiscing, enim velit varius purus, at mollis elit tortor eu nisl.
                </p>
                <p>
                    Donec ut erat dolor, ac aliquet risus, Sed lectus enim, consequat a aliquam eu, porta faucibus turpis. Maecenas tempus erat mi, in elementum lectus. Integer quis orci eu augue aliquet posuere. Morbi at quam elit. Fusce interdum felis id diam dignissim ultrices.
                </p>
                <p>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/custom/product_request_demo.png" /></a>
                </p>
            </div>
        </div>

        <br />
		           
		<?php if ( $woo_options['woo_breadcrumbs_show'] == 'true' ) { ?>
			<div id="breadcrumbs">
				<?php woo_breadcrumbs(); ?>
			</div><!--/#breadcrumbs -->
		<?php } ?>  			

        <?php if ( have_posts() ) { $count = 0; ?>
        <?php while ( have_posts() ) { the_post(); $count++; ?>
                                                                    
            <div <?php post_class('lifted'); ?>>

			    <!--<h1 class="title"><?php the_title(); ?></h1>-->

                <div class="">
    
                	<?php the_content(); ?>
			
               	</div><!-- /.entry -->

				<?php edit_post_link( __( '{ Edit }', 'woothemes' ), '<span class="small">', '</span>' ); ?>
                
            </div><!-- /.post -->
            
            <?php
            	$comm = 'both';
            	if ( isset( $woo_options['woo_comments'] ) && ( $woo_options['woo_comments'] != '' ) ) { $comm = $woo_options['woo_comments']; }
            	if ( ($comm == 'page' || $comm == 'both' ) ) {
            		comments_template();
            	}
            ?>
                                                
		<?php
				} // End WHILE Loop
			} else {
		?>
			<div <?php post_class(); ?>>
            	<p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
            </div><!-- /.post -->
        <?php } ?>  

    </div><!-- /#content -->
		
<?php get_footer(); ?>