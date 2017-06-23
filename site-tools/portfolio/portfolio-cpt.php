<?php

// Register Custom Post Type
function portfolio() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'toolbox' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'toolbox' ),
		'menu_name'             => __( 'Portfolio', 'toolbox' ),
		'name_admin_bar'        => __( 'Portfolio', 'toolbox' ),
		'archives'              => __( 'Portfolio Archives', 'toolbox' ),
		'attributes'            => __( 'Portfolio Attributes', 'toolbox' ),
		'parent_item_colon'     => __( 'Parent Portfolio Item:', 'toolbox' ),
		'all_items'             => __( 'All Portfolio Items', 'toolbox' ),
		'add_new_item'          => __( 'Add New Portfolio Item', 'toolbox' ),
		'add_new'               => __( 'Add New Portfolio Item', 'toolbox' ),
		'new_item'              => __( 'New Portfolio Item', 'toolbox' ),
		'edit_item'             => __( 'Edit Portfolio Item', 'toolbox' ),
		'update_item'           => __( 'Update Portfolio Item', 'toolbox' ),
		'view_item'             => __( 'View Portfolio Item', 'toolbox' ),
		'view_items'            => __( 'View Portfolio Items', 'toolbox' ),
		'search_items'          => __( 'Search Portfolio Item', 'toolbox' ),
		'not_found'             => __( 'Not found', 'toolbox' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'toolbox' ),
		'featured_image'        => __( 'Featured Image', 'toolbox' ),
		'set_featured_image'    => __( 'Set featured image', 'toolbox' ),
		'remove_featured_image' => __( 'Remove featured image', 'toolbox' ),
		'use_featured_image'    => __( 'Use as featured image', 'toolbox' ),
		'insert_into_item'      => __( 'Insert into Portfolio item', 'toolbox' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio item', 'toolbox' ),
		'items_list'            => __( 'Portfolio Items list', 'toolbox' ),
		'items_list_navigation' => __( 'Portfolio Items list navigation', 'toolbox' ),
		'filter_items_list'     => __( 'Filter Portfolio items list', 'toolbox' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'toolbox' ),
		'description'           => __( 'Portfolio Items', 'toolbox' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio', 0 );

?>