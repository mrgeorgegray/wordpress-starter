<?php
/*  CUSTOM POST TYPE EXAMPLE 
    ========================================================================== */
	add_action( 'init', 'create_example_post_type' );
	function create_example_post_type() {
		register_post_type( 'example',
			array(
				'labels' => array(
					'name' => __( 'Examples' ),
					'singular_name' => __( 'Example' ),
	  				'add_new' => __( 'Add Example' ),
	  				'add_new_item' => __( 'Add New Example'),
	  				'edit' => __( 'Edit Example'),
	  				'edit_item' => __( 'Edit Example'),
	  				'new_item' => __( 'New Example'),
	  				'view' => __( 'View Examples'),
	  				'view_item' => __( 'View Example'),
	  				'search_items' => __( 'Search Examples'),
	  				'not_found' => __( 'No Examples Found'),
	  				'not_found_in_trash' => __( 'No Examples Found in Trash'),
	  				'parent' => __( 'Parent Example')
				),
			'public' => true,
			'has_archive' => false,
	    'supports' => array( 'title' )
			)
		);
		flush_rewrite_rules( true );
	}