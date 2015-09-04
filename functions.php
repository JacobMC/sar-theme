<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

include 'sar-settings.php';

/*-------------------------------------------------------------------------------*
 *	Add Theme Support
 *-------------------------------------------------------------------------------*/

/*
 * Add theme support for custom menus and featured images.
 */
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

/*
 *	Define the length of excerpts.
 */
function sar_excerpt_length( $length ) {
	return 25;
} // end sar_excerpt_length

add_filter( 'excerpt_length', 'sar_excerpt_length', 999 );

/*
 * Add default content width
 */
if ( !isset( $content_width ) ) {
	$content_width = 900;
}


/*-------------------------------------------------------------------------------*
 *	Register Menus	
 *-------------------------------------------------------------------------------*/

/*
 *	Registers custom theme menus. There are two menus per major 
 *	menu heading (Chapter, Join, SAR, and Contact) as well as two
 *	menus located in the footer.
 */
function sar_register_theme_menus() {

	register_nav_menus(
		array(
			'chapter-menu-left' => __( 'Left Chapter Menu', 'sar-theme' ),
			'chapter-menu-right' => __( 'Right Chapter Menu', 'sar-theme' ),
			'join-menu-left' => __( 'Left Join Menu', 'sar-theme' ),
			'join-menu-right' => __( 'Right Join Menu', 'sar-theme' ),
			'sar-menu-left' => __( 'Left SAR Menu', 'sar-theme' ),
			'sar-menu-right' => __( 'Right SAR Menu', 'sar-theme' ),
			'contact-menu-left' => __( 'Left Contact Menu', 'sar-theme' ),
			'contact-menu-right' => __( 'Right Contact Menu', 'sar-theme' ),
			'footer-menu-main' => __( 'Main Footer Menu', 'sar-theme' ),
			'footer-menu-sub' => __( 'Secondary Footer Menu', 'sar-theme' )
		)
	);

} // end sar_register_nav_menus
add_action( 'init', 'sar_register_theme_menus' );


/*-------------------------------------------------------------------------------*
 *	Include CSS and JS files
 *-------------------------------------------------------------------------------*/

// CSS files
function sar_theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap_theme_css', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'yamm_css', get_template_directory_uri() . '/css/yamm.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

} // end sar_theme_styles
add_action( 'wp_enqueue_scripts', 'sar_theme_styles' );

// JS files
function sar_theme_js() {

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );

} // end sar_theme_js
add_action( 'wp_enqueue_scripts', 'sar_theme_js' );


/*-------------------------------------------------------------------------------*
 * Sidebars and Widgets
 *-------------------------------------------------------------------------------*/

add_action( 'widgets_init', 'sar_register_widgets' );
/*
 * This function registers a new widget area.
 */
function sar_register_widgets() {

	register_sidebar(array(
		'name' => 'Blog Sidebar',
		'id' => 'blog',
		'description' => 'Displays on the sides of pages in the blog section',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Page Sidebar',
		'id' => 'page',
		'description' => 'Displays on the sides of pages with a sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Chapter Menu Sidebar',
		'id' => 'chapter',
		'description' => 'Displays in the Chapter menu pane',
		'before_widget' => '<div class="nav-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Join Menu Sidebar',
		'id' => 'join',
		'description' => 'Displays in the Join menu pane',
		'before_widget' => '<div class="nav-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'SAR Menu Sidebar',
		'id' => 'sar',
		'description' => 'Displays in the SAR menu pane',
		'before_widget' => '<div class="nav-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Contact Menu Sidebar',
		'id' => 'contact',
		'description' => 'Displays in the Contact menu pane',
		'before_widget' => '<div class="nav-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

} // end sar_register_widgets