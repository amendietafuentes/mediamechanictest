<?php

function enqueue_styles_child_theme() {

	$parent_style = 'generic-style';
	$child_style  = 'generic-child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );


if ( ! function_exists('projects') ) {

// Register Custom Post Type
function projects() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'projects_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'projects_domain' ),
		'menu_name'             => __( 'Projects', 'projects_domain' ),
		'name_admin_bar'        => __( 'Projects', 'projects_domain' ),
		'archives'              => __( 'Item Archives', 'projects_domain' ),
		//'attributes'            => __( 'Item Attributes', 'projects_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'projects_domain' ),
		'all_items'             => __( 'All Items', 'projects_domain' ),
		'add_new_item'          => __( 'Add New Item', 'projects_domain' ),
		'add_new'               => __( 'Add New', 'projects_domain' ),
		'new_item'              => __( 'New Item', 'projects_domain' ),
		'edit_item'             => __( 'Edit Item', 'projects_domain' ),
		'update_item'           => __( 'Update Item', 'projects_domain' ),
		'view_item'             => __( 'View Item', 'projects_domain' ),
		'view_items'            => __( 'View Items', 'projects_domain' ),
		'search_items'          => __( 'Search Item', 'projects_domain' ),
		'not_found'             => __( 'Not found', 'projects_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'projects_domain' ),
		'featured_image'        => __( 'Featured Image', 'projects_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'projects_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'projects_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'projects_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'projects_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'projects_domain' ),
		'items_list'            => __( 'Items list', 'projects_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'projects_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'projects_domain' ),
	);
	
	$rewrite = array(
		'slug'                  => 'projects',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	
	$args = array(
		'label'                 => __( 'Project', 'projects_domain' ),
		'description'           => __( 'Archive: Projects', 'projects_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	
	register_post_type( 'projects', $args );

}

add_action( 'init', 'projects', 0 );

}


function add_my_post_types_to_query( $query ) {
	if ( (is_single() || is_home() || is_category() ) || is_archive() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'projects' ) );

	return $query;
}

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

if ( ! function_exists( 'state_custom_taxonomy' ) ) {

// Register Custom State Taxonomy for Projects  Custom Posts
function state_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'States', 'Taxonomy General Name', 'state_main' ),
		'singular_name'              => _x( 'State', 'Taxonomy Singular Name', 'state_main' ),
		'menu_name'                  => __( 'State', 'state_main' ),
		'all_items'                  => __( 'All Items', 'state_main' ),
		'parent_item'                => __( 'Parent Item', 'state_main' ),
		'parent_item_colon'          => __( 'Parent Item:', 'state_main' ),
		'new_item_name'              => __( 'New Item Name', 'state_main' ),
		'add_new_item'               => __( 'Add New Item', 'state_main' ),
		'edit_item'                  => __( 'Edit Item', 'state_main' ),
		'update_item'                => __( 'Update Item', 'state_main' ),
		'view_item'                  => __( 'View Item', 'state_main' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'state_main' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'state_main' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'state_main' ),
		'popular_items'              => __( 'Popular Items', 'state_main' ),
		'search_items'               => __( 'Search Items', 'state_main' ),
		'not_found'                  => __( 'Not Found', 'state_main' ),
		'no_terms'                   => __( 'No items', 'state_main' ),
		'items_list'                 => __( 'Items list', 'state_main' ),
		'items_list_navigation'      => __( 'Items list navigation', 'state_main' ),
	);
	$rewrite = array(
		'slug'                       => 'state',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'state', array( 'projects' ), $args );

}
add_action( 'init', 'state_custom_taxonomy', 0 );

}