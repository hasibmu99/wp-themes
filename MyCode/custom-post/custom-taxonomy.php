<?php
add_action( 'init', 'register_portfolio' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function register_portfolio() {
	$labels = array(
		'name'               => _x( 'portfolio', 'post type general name', 'bingo' ),
		'singular_name'      => _x( 'portfolio', 'post type singular name', 'bingo' ),
		'menu_name'          => _x( 'portfolio', 'admin menu', 'bingo' ),
		'name_admin_bar'     => _x( 'portfolio', 'add new on admin bar', 'bingo' ),
		'add_new'            => _x( 'Add New', 'portfolio', 'bingo' ),
		'add_new_item'       => __( 'Add New portfolio', 'bingo' ),
		'new_item'           => __( 'New portfolio', 'bingo' ),
		'edit_item'          => __( 'Edit portfolio', 'bingo' ),
		'view_item'          => __( 'View portfolio', 'bingo' ),
		'all_items'          => __( 'All portfolio', 'bingo' ),
		'search_items'       => __( 'Search portfolio', 'bingo' ),
		'parent_item_colon'  => __( 'Parent portfolio:', 'bingo' ),
		'not_found'          => __( 'No portfolio found.', 'bingo' ),
		'not_found_in_trash' => __( 'No portfolio found in Trash.', 'bingo' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'bingo' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
	);

    register_post_type( 'bingo_portfolio', $args );
    
    
}

if(! function_exists('custom_taxonomy')){
    function custom_taxonomy(){
        register_taxonomy(
            'portfolios_category', //taxonomyName
            'bingo_portfolio', // Post type
            [
                'label' => 'Portfolios Category',
                'rewrite'   => ['slug' => 'portfolio-cat'],
                'hierarchical'  => true
            ]
        );
    }
    add_action('init', 'custom_taxonomy');
}

