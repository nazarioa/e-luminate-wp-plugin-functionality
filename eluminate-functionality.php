<?php
/**
 * Created by PhpStorm.
 * User: nazario
 * Date: 6/4/18
 * Time: 12:12 AM
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           EluminateFunctionality
 *
 * @wordpress-plugin
 * Plugin Name: E-luminate Youtube Gallery
 * Description: Leverages youtube-embed-plus code to create a simple way to embed youtube videos
 * Version: 1.0.0
 * Author: Niztech
 * Author URI: http://www.niztech.com
 * Text Domain: eluminate_functionality
 * Domain Path: /languages
 * Requires License:    no
 */

if ( ! function_exists( 'register_eluminate_post_types' ) ) {

// Register Custom Post Type
	function register_eluminate_post_types() {

		$labels = array(
			'name'                  => _x( 'Video Series', 'Post Type General Name', 'eluminate_functionality' ),
			'singular_name'         => _x( 'Video Series', 'Post Type Singular Name', 'eluminate_functionality' ),
			'menu_name'             => __( 'Video Series', 'eluminate_functionality' ),
			'name_admin_bar'        => __( 'Video Series', 'eluminate_functionality' ),
			'archives'              => __( 'Video Series Archives', 'eluminate_functionality' ),
			'attributes'            => __( 'Video Series Attributes', 'eluminate_functionality' ),
			'parent_item_colon'     => __( 'Parent Item:', 'eluminate_functionality' ),
			'all_items'             => __( 'All Video Series', 'eluminate_functionality' ),
			'add_new_item'          => __( 'Add New Video Series', 'eluminate_functionality' ),
			'add_new'               => __( 'Add New', 'eluminate_functionality' ),
			'new_item'              => __( 'New Video Series', 'eluminate_functionality' ),
			'edit_item'             => __( 'Edit Video Series', 'eluminate_functionality' ),
			'update_item'           => __( 'Update Video Series', 'eluminate_functionality' ),
			'view_item'             => __( 'View Video Series', 'eluminate_functionality' ),
			'view_items'            => __( 'View Items', 'eluminate_functionality' ),
			'search_items'          => __( 'Search Video Series', 'eluminate_functionality' ),
			'not_found'             => __( 'Not found', 'eluminate_functionality' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'eluminate_functionality' ),
			'featured_image'        => __( 'Featured Image', 'eluminate_functionality' ),
			'set_featured_image'    => __( 'Set featured image', 'eluminate_functionality' ),
			'remove_featured_image' => __( 'Remove featured image', 'eluminate_functionality' ),
			'use_featured_image'    => __( 'Use as featured image', 'eluminate_functionality' ),
			'insert_into_item'      => __( 'Insert into item', 'eluminate_functionality' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'eluminate_functionality' ),
			'items_list'            => __( 'Video Series list', 'eluminate_functionality' ),
			'items_list_navigation' => __( 'Items list navigation', 'eluminate_functionality' ),
			'filter_items_list'     => __( 'Filter Video Series list', 'eluminate_functionality' ),
		);
		$args   = array(
			'label'               => __( 'Video Series', 'eluminate_functionality' ),
			'description'         => __( 'Posts that show a series of videos', 'eluminate_functionality' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'revisions' ),
			'taxonomies'          => array( 'video_category' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => false,
		);
		register_post_type( 'video_series', $args );

	}

	add_action( 'init', 'register_eluminate_post_types', 0 );

}