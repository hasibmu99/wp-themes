<?php 

/**
 * Enqueue scripts and styles.
 */
	
function bingo_scripts() {
	wp_enqueue_style( 'bingo-style', get_stylesheet_uri() );

	wp_enqueue_style('bingo_font' , get_template_directory_uri(). '/plugins/themefisher-font/style.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_bootstrap' , get_template_directory_uri(). '/plugins/bootstrap/css/bootstrap.min.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_lightbox2' , get_template_directory_uri(). '/plugins/lightbox2/dist/css/lightbox.min.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_carousel' , get_template_directory_uri(). '/plugins/slick-carousel/slick/slick.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_slick' , get_template_directory_uri(). '/plugins/slick-carousel/slick/slick-theme.css' , array(), null, 'all' ); 
	
	wp_enqueue_style('bingo_style' , get_template_directory_uri(). '/css/style.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_green' , get_template_directory_uri(). '/css/colors/green.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_red' , get_template_directory_uri(). '/css/colors/red.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_blue' , get_template_directory_uri(). '/css/colors/blue.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_light_blue' , get_template_directory_uri(). '/css/colors/light-blue.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_yellow' , get_template_directory_uri(). '/css/colors/yellow.css' , array(), null, 'all' ); 
	wp_enqueue_style('bingo_light_green' , get_template_directory_uri(). '/css/colors/light-green.css' , array(), null, 'all' ); 
	
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bingo_bootstrap', BINGO_PATH_PLUGIN . 'bootstrap/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bingo_parallax', BINGO_PATH_PLUGIN . 'parallax/jquery.parallax-1.1.3.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bingo_countup', BINGO_PATH_PLUGIN . 'countup/countup.js', array(), '20151215', true );
	wp_enqueue_script( 'bingo_lightbox2', BINGO_PATH_PLUGIN . 'lightbox2/dist/js/lightbox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bingo_slick_carousel', BINGO_PATH_PLUGIN . 'slick-carousel/slick/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bingo_mixitup', BINGO_PATH_PLUGIN . 'mixitup/dist/mixitup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bingo_smooth_scroll', BINGO_PATH_PLUGIN . 'smooth-scroll/dist/js/smooth-scroll.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bingo_js', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );

	wp_enqueue_script( 'bingo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bingo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bingo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

