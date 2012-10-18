<?php
/**
 * Search Form Template
 *
 * This template is a customised search form.
 *
 * @package WooFramework
 * @subpackage Template
 */
?>
<div class="search_main fix">
    <form method="get" class="searchform" action="<?php echo home_url( '/' ); ?>" style="margin-bottom: 10px; border-bottom: 0;">
        <input type="text" style="width:300px; height:20px; border: 1px solid; font-size:14px;" class="field s" name="s" placeholder="<?php esc_attr_e( 'Search Verto', 'woothemes' ); ?>" />
        <input type="image" style="height:20px; position:relative; right: 8%; bottom: 2.5px;"src="<?php echo get_template_directory_uri(); ?>/images/ico-search.png" class="search-submit" name="submit" alt="Submit" />
    </form>    
</div><!--/.search_main-->