<?php

	/* ========================================================================================================================
	
	Cartogram Post Types and Taxonomies Functions v.1.0
	
	======================================================================================================================== */

	function create_post_types() {

		$processLabels = array(
			'name' => __( 'Process Parts' ),
			'singular_name' => __( 'Process Part' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Process Part' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Process Part' ),
			'new_item' => __( 'New Process Part' ),
			'view' => __( 'View Process Part' ),
			'view_item' => __( 'View Process Part' ),
			'search_items' => __( 'Search Process Parts' ),
			'not_found' => __( 'No Process Part found' ),
			'not_found_in_trash' => __( 'No Process Parts found in Trash' ),
			'parent' => __( 'Parent Process Part' ),
		);
		
		$processArgs = array(
			'labels' => $processLabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array(''),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'process' , $processArgs );

		$casestudiesLabels = array(
			'name' => __( 'Case Studies' ),
			'singular_name' => __( 'Case Study' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Case Study' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Case Study' ),
			'new_item' => __( 'New Case Study' ),
			'view' => __( 'View Case Study' ),
			'view_item' => __( 'View Case Study' ),
			'search_items' => __( 'Search Case Studies' ),
			'not_found' => __( 'No Case Studie found' ),
			'not_found_in_trash' => __( 'No Case Studies found in Trash' ),
			'parent' => __( 'Parent Case Study' ),
		);
		
		$casestudiesArgs = array(
			'labels' => $casestudiesLabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array(''),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'casestudies' , $casestudiesArgs );

		flush_rewrite_rules( false );

	}

	 function create_taxonomies() {
	
	// 	$labels = array(
	//     	'name' => __( 'Collections' ),
	//     	'singular_name' => __( 'Collection' ),
	//     	'search_items' =>  __( 'Search Collections' ),
	//     	'all_items' => __( 'All Collections' ),
	//     	'parent_item' => __( 'Parent Collection' ),
	//     	'parent_item_colon' => __( 'Parent Collection:' ),
	//     	'edit_item' => __( 'Edit Collection' ),
	//     	'update_item' => __( 'Update Collection' ),
	//     	'add_new_item' => __( 'Add New Collection' ),
	//     	'new_item_name' => __( 'New Collection Name' )
	//   	);
	//   	register_taxonomy('collection','photos',array(
	//     	'hierarchical' => true,
	//     	'labels' => $labels
	//   	));
	// 	flush_rewrite_rules( false );
	 }
?>