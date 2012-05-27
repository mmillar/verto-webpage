<?php
	get_header();
	global $woo_options;
?>
       
    <div id="content" class="page col-full">
		           
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