<?php
add_action( 'init', 'custom_hero' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function custom_hero() {
	$labels = array(
		'name'               => _x( 'bingo_slider', 'post type general name', 'bingo' ),
		'singular_name'      => _x( 'bingo_slider', 'post type singular name', 'bingo' ),
		'menu_name'          => _x( 'bingo_slider', 'admin menu', 'bingo' ),
		'name_admin_bar'     => _x( 'bingo_slider', 'add new on admin bar', 'bingo' ),
		'add_new'            => _x( 'Add New', 'bingo_slider', 'bingo' ),
		'add_new_item'       => __( 'Add New bingo_slider', 'bingo' ),
		'new_item'           => __( 'New bingo_slider', 'bingo' ),
		'edit_item'          => __( 'Edit bingo_slider', 'bingo' ),
		'view_item'          => __( 'View bingo_slider', 'bingo' ),
		'all_items'          => __( 'All bingo_slider', 'bingo' ),
		'search_items'       => __( 'Search bingo_slider', 'bingo' ),
		'parent_item_colon'  => __( 'Parent bingo_slider:', 'bingo' ),
		'not_found'          => __( 'No bingo_slider found.', 'bingo' ),
		'not_found_in_trash' => __( 'No bingo_slider found in Trash.', 'bingo' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'bingo' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'bingo_slider', $args );
}