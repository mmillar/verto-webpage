<?php
/**
 * Template Name: Blog
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
        
        <section id="main" class="col-left">       
		
		<?php woo_loop_before(); ?>

        <?php
        	if ( get_query_var( 'paged') ) { $paged = get_query_var( 'paged' ); } elseif ( get_query_var( 'page') ) { $paged = get_query_var( 'page' ); } else { $paged = 1; }
        	
        	$query_args = array(
        						'post_type' => 'post', 
        						'paged' => $paged
        					);
        	
        	$query_args = apply_filters( 'woo_blog_template_query_args', $query_args ); // Do not remove. Used to exclude categories from displaying here.
        	
        	remove_filter( 'pre_get_posts', 'woo_exclude_categories_homepage' );
        	
        	// The Query
			query_posts( $query_args );
        	if (have_posts()) { 
				$count = 0;
        		while (have_posts()) { the_post(); $count++;
        ?>                                                            
            <!-- Post Starts -->
            <article <?php post_class(); ?>>

                <header>
                	<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                </header>
                
                <?php woo_post_meta(); ?>
                
                <section class="entry fix">
                    <?php if ( isset( $settings['post_content'] ) && $settings['post_content'] != 'content' ) { woo_image( 'width=' . $settings['thumb_w'] . '&height=' . $settings['thumb_h'] . '&class=thumbnail ' . $settings['thumb_align'] ); } ?>
					<?php global $more; $more = 0; ?>	                                        
                    <?php if ( isset( $settings['post_content'] ) && $settings['post_content'] == 'content' ) { the_content(__( 'Read More...', 'woothemes' ) ); } else { the_excerpt(); } ?>
                </section>
    			
                <footer class="post-more">      
                	<?php if ( isset( $settings['post_content'] ) && $settings['post_content'] == 'excerpt' ) { ?>
                    <span class="read-more"><a href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'Continue Reading &rarr;', 'woothemes' ); ?>" class="button"><?php _e( 'Continue Reading', 'woothemes' ); ?></a></span>
                    <?php } ?>
                </footer>   
    
            </article><!-- /.post -->
                                                
        <?php
        		} // End WHILE Loop
        	
        	} else {
        ?>
            <article <?php post_class(); ?>>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
            </article><!-- /.post -->
        <?php } // End IF Statement ?> 
        
        <?php woo_loop_after(); ?>
        <?php woo_pagenav(); ?>
		<?php wp_reset_postdata(); ?>                

        </section><!-- /#main -->
        
        <?php woo_main_after(); ?>
            
		<?php get_sidebar(); ?>

    </div><!-- /#content -->    
		
<?php get_footer(); ?>