<?php
/*  ADD CSS TO ADMIN EDITOR
    ========================================================================== */
	add_editor_style('_/css/custom-editor-style.css');
	//Customise the TinyMCE editor
	function make_mce_awesome( $init ) {
	    $init['theme_advanced_blockformats'] = 'h2,h3,h4,h5,h6,p';
	    $init['theme_advanced_disable'] = 'underline, wp_help';
	    $init['theme_advanced_buttons2_add'] = 'styleselect';
	    $init['theme_advanced_styles'] = "Small=small";
	    return $init;
	}
	add_filter('tiny_mce_before_init', 'make_mce_awesome');



/*  INCLUDE CUSTOM POST TYPE
    ========================================================================== */
	//include ("inc/cpt-example.php");



/*  INCLUDE CATEGORY CHECK LIST FIX
    ========================================================================== */
	include ("inc/category-checklist.php");



/*  NAVIGATION MENUS
    ========================================================================== */
	add_action( 'init', 'register_my_menus' );
	function register_my_menus() {
		register_nav_menus(array(
		'primary' => 'Primary',
	));
	}



/*  PAGE PAGINATION
    ========================================================================== */
	function wp_pagenavi() {
		global $wp_query, $wp_rewrite;
		$pages = '';
		$max = $wp_query->max_num_pages;
		if (!$current = get_query_var('paged')) $current = 1;
		$args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
		$args['total'] = $max;
		$args['current'] = $current;

		$total = 1;
		$args['mid_size'] = 3;
		$args['end_size'] = 1;
		$args['prev_text'] = '«';
		$args['next_text'] = '»';

		if ($max > 1) echo '</pre>
		<div class="wp-pagenavi">';
		if ($total == 1 && $max > 1) {
			$pages = '<span class="pages">Page ' . $current . ' of ' . $max . '</span>';
			//echo paginate_links($args) . $pages;
			$prev = get_previous_posts_link();
			$next = get_next_posts_link();
			echo '<span class="prev-page">'.$prev.'</span>';  
			echo '<span class="next-page">'.$next.'</span>';  
			echo $pages;
		}
		if ($max > 1) echo '</div>
		<pre>';
	}	




/*  WORDPRESS CLEAN UP
    ========================================================================== */
	//remove links for images as default
	update_option('image_default_link_type' , '');
	
	//remove admin bar by default
	add_filter( 'show_admin_bar', '__return_false' );	
	
	//remove inline width and height added to images
	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
	add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
	add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
	function remove_thumbnail_dimensions( $html ) {
    		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    		return $html;
	}

	// Clean up the <head>
	function removeHeadLinks() {
		remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
		remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
		remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
		remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
		remove_action( 'wp_head', 'index_rel_link' ); // index link
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
		remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
		remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
	}
	add_action('init', 'removeHeadLinks');
	function remove_recent_comments_style() {
	    global $wp_widget_factory;
	    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
	}
	add_action('widgets_init', 'remove_recent_comments_style');





/*  CUSTOM BRANDING FOR LOGIN AND ADMIN
    ========================================================================== */
	include ("inc/branding.php");




/*  USEFUL FUNCTIONS 
    ========================================================================== */
	/*custom image crops for news articles */
//	if ( function_exists( 'add_image_size' ) ) { 
//		add_image_size( 'news-thumb', 100, 100, true ); //300 pixels wide (and unlimited height)
//	}


?>
