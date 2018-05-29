<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bingo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bingo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bingo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( [
		'name'			=> esc_html__('footer_1','bingo'),
		'id'			=> 'footer_1',
		'description'	=> esc_html__('Add Widgets Here','bingo'),
		'before_widget'	=> '<div class="container"><div class="row"><div class="col-sm-3 col-md-3 col-lg-3"><div class="single-widget">',
		'after_widget'	=> '</div></div></div></div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	] );

	register_sidebar( [
		'name'			=> esc_html__('footer_2','bingo'),
		'id'			=> 'footer_2',
		'description'	=> esc_html__('Add Widgets Here','bingo'),
		'before_widget'	=> '<div class="container"><div class="row"><div class="col-sm-3 col-md-3 col-lg-3"><div class="single-widget">',
		'after_widget'	=> '</div></div></div></div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	] );

	register_sidebar( [
		'name'			=> esc_html__('footer_3','bingo'),
		'id'			=> 'footer_3',
		'description'	=> esc_html__('Add Widgets Here','bingo'),
		'before_widget'	=> '<div class="container"><div class="row"><div class="col-sm-3 col-md-3 col-lg-3"><div class="single-widget">',
		'after_widget'	=> '</div></div></div></div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	] );

	register_sidebar( [
		'name'			=> esc_html__('footer_4','bingo'),
		'id'			=> 'footer_4',
		'description'	=> esc_html__('Add Widgets Here','bingo'),
		'before_widget'	=> '<div class="container"><div class="row"><div class="col-sm-3 col-md-3 col-lg-3"><div class="single-widget">',
		'after_widget'	=> '</div></div></div></div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	] );
	
}
add_action( 'widgets_init', 'bingo_widgets_init' );

			
			
				