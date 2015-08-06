<?php

//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*-------------------------------------------------------------------------------*
 *	Register Theme Settings
 *-------------------------------------------------------------------------------*/

function sar_theme_init() {

	/*
	 * Register Carousel Settings
	 */
	register_setting( 'sar_slide_one_options', 'carousel_one_options' );
	register_setting( 'sar_slide_two_options', 'carousel_two_options' );
	register_setting( 'sar_slide_three_options', 'carousel_three_options' );

	/*
	 * Register Tile Settings
	 */
	register_setting( 'sar_tile_one_options', 'tile_one_options' );
	register_setting( 'sar_tile_two_options', 'tile_two_options' );
	register_setting( 'sar_tile_three_options', 'tile_three_options' );

	/*
	 * Register Featurette Settings
	 */
	register_setting( 'sar_featurette_one_options', 'featurette_one_options' );
	register_setting( 'sar_featurette_two_options', 'featurette_two_options' );
	register_setting( 'sar_featurette_three_options', 'featurette_three_options' );


	/*
	 * Register Carousel Sections
	 */
	add_settings_section(
		'sar_carousel_one_section',
		'Carousel Slide One Settings',
		'sar_carousel_section_callback',
		'sar_slide_one_options'
	);

	add_settings_section(
		'sar_carousel_two_section',
		'Carousel Slide Two Settings',
		'sar_carousel_section_callback',
		'sar_slide_two_options'
	);

	add_settings_section(
		'sar_carousel_three_section',
		'Carousel Slide Three Settings',
		'sar_carousel_section_callback',
		'sar_slide_three_options'
	);

	/*
	 * Register Tile Sections
	 */
	add_settings_section(
		'sar_tile_one_section',
		'Feature Tile One Settings',
		'sar_tile_section_callback',
		'sar_tile_one_options'
	);

	add_settings_section(
		'sar_tile_two_section',
		'Feature Tile Two Settings',
		'sar_tile_section_callback',
		'sar_tile_two_options'
	);

	add_settings_section(
		'sar_tile_three_section',
		'Feature Tile Three Settings',
		'sar_tile_section_callback',
		'sar_tile_three_options'
	);

	/*
	 * Register Featurette Sections
	 */
	add_settings_section(
		'sar_featurette_one_section',
		'Featurette One Settings',
		'sar_featurette_section_callback',
		'sar_featurette_one_options'
	);

	add_settings_section(
		'sar_featurette_two_section',
		'Featurette Two Settings',
		'sar_featurette_section_callback',
		'sar_featurette_two_options'
	);

	add_settings_section(
		'sar_featurette_three_section',
		'Featurette three Settings',
		'sar_featurette_section_callback',
		'sar_featurette_three_options'
	);



	/*
	 * Register Slide One Settings
	 */
	add_settings_field(
		'sar_slide_one_image',
		'First Slide Image',
		create_function( '', 'sar_image_callback( "carousel", "one", "slide" );' ),
		'sar_slide_one_options',
		'sar_carousel_one_section'
	);

	add_settings_field(
		'sar_slide_one_header',
		'First Slide Header',
		create_function( '', 'sar_header_callback( "carousel", "one", "slide" );' ),
		'sar_slide_one_options',
		'sar_carousel_one_section'
	);

	add_settings_field(
		'sar_slide_one_description',
		'First Slide Description',
		create_function( '', 'sar_description_callback( "carousel", "one", "slide" );' ),
		'sar_slide_one_options',
		'sar_carousel_one_section'
	);

	add_settings_field(
		'sar_slide_one_link',
		'First Slide Link',
		create_function( '', 'sar_link_callback( "carousel", "one", "slide" );' ),
		'sar_slide_one_options',
		'sar_carousel_one_section'
	);

	add_settings_field(
		'sar_slide_one_linktext',
		'First Slide Link Text',
		create_function( '', 'sar_linktext_callback( "carousel", "one", "slide" );' ),
		'sar_slide_one_options',
		'sar_carousel_one_section'
	);


	/*
	 * Register Slide Two Settings
	 */
	add_settings_field(
		'sar_slide_two_image',
		'Second Slide Image',
		create_function( '', 'sar_image_callback( "carousel", "two", "slide" );' ),
		'sar_slide_two_options',
		'sar_carousel_two_section'
	);

	add_settings_field(
		'sar_slide_two_header',
		'Second Slide Header',
		create_function( '', 'sar_header_callback( "carousel", "two", "slide" );' ),
		'sar_slide_two_options',
		'sar_carousel_two_section'
	);

	add_settings_field(
		'sar_slide_two_description',
		'Second Slide Description',
		create_function( '', 'sar_description_callback( "carousel", "two", "slide" );' ),
		'sar_slide_two_options',
		'sar_carousel_two_section'
	);

	add_settings_field(
		'sar_slide_two_link',
		'Second Slide Link',
		create_function( '', 'sar_link_callback( "carousel", "two", "slide" );' ),
		'sar_slide_two_options',
		'sar_carousel_two_section'
	);

	add_settings_field(
		'sar_slide_two_linktext',
		'Second Slide Link Text',
		create_function( '', 'sar_linktext_callback( "carousel", "two", "slide" );' ),
		'sar_slide_two_options',
		'sar_carousel_two_section'
	);


	/*
	 * Register Slide Three Settings
	 */
	add_settings_field(
		'sar_slide_three_image',
		'Third Slide Image',
		create_function( '', 'sar_image_callback( "carousel", "three", "slide" );' ),
		'sar_slide_three_options',
		'sar_carousel_three_section'
	);

	add_settings_field(
		'sar_slide_three_header',
		'Third Slide Header',
		create_function( '', 'sar_header_callback( "carousel", "three", "slide" );' ),
		'sar_slide_three_options',
		'sar_carousel_three_section'
	);

	add_settings_field(
		'sar_slide_three_description',
		'Third Slide Description',
		create_function( '', 'sar_description_callback( "carousel", "three", "slide" );' ),
		'sar_slide_three_options',
		'sar_carousel_three_section'
	);

	add_settings_field(
		'sar_slide_three_link',
		'Third Slide Link',
		create_function( '', 'sar_link_callback( "carousel", "three", "slide" );' ),
		'sar_slide_three_options',
		'sar_carousel_three_section'
	);

	add_settings_field(
		'sar_slide_three_linktext',
		'Third Slide Link Text',
		create_function( '', 'sar_linktext_callback( "carousel", "three", "slide" );' ),
		'sar_slide_three_options',
		'sar_carousel_three_section'
	);

	/*
	 * Register Tile One Settings
	 */
	add_settings_field(
		'sar_tile_one_image',
		'First Tile Image',
		create_function( '', 'sar_image_callback( "tile", "one", "tile" );' ),
		'sar_tile_one_options',
		'sar_tile_one_section' 
	);

	add_settings_field(
		'sar_tile_one_header',
		'First Tile Header',
		create_function( '', 'sar_header_callback( "tile", "one", "tile" );' ),
		'sar_tile_one_options',
		'sar_tile_one_section'
	);

	add_settings_field(
		'sar_tile_one_description',
		'First Tile Description',
		create_function( '', 'sar_description_callback( "tile", "one", "tile" );' ),
		'sar_tile_one_options',
		'sar_tile_one_section'
	);

	add_settings_field(
		'sar_tile_one_link',
		'First Tile Link',
		create_function( '', 'sar_link_callback( "tile", "one", "tile" );' ),
		'sar_tile_one_options',
		'sar_tile_one_section'
	);

	add_settings_field(
		'sar_tile_one_linktext',
		'First Tile Link Text',
		create_function( '', 'sar_linktext_callback( "tile", "one", "tile" );' ),
		'sar_tile_one_options',
		'sar_tile_one_section'
	);

	/*
	 * Register Tile Two Settings
	 */
	add_settings_field(
		'sar_tile_two_image',
		'Second Tile Image',
		create_function( '', 'sar_image_callback( "tile", "two", "tile" );' ),
		'sar_tile_two_options',
		'sar_tile_two_section' 
	);

	add_settings_field(
		'sar_tile_two_header',
		'Second Tile Header',
		create_function( '', 'sar_header_callback( "tile", "two", "tile" );' ),
		'sar_tile_two_options',
		'sar_tile_two_section'
	);

	add_settings_field(
		'sar_tile_two_description',
		'Second Tile Description',
		create_function( '', 'sar_description_callback( "tile", "two", "tile" );' ),
		'sar_tile_two_options',
		'sar_tile_two_section'
	);

	add_settings_field(
		'sar_tile_two_link',
		'Second Tile Link',
		create_function( '', 'sar_link_callback( "tile", "two", "tile" );' ),
		'sar_tile_two_options',
		'sar_tile_two_section'
	);

	add_settings_field(
		'sar_tile_two_linktext',
		'Second Tile Link Text',
		create_function( '', 'sar_linktext_callback( "tile", "two", "tile" );' ),
		'sar_tile_two_options',
		'sar_tile_two_section'
	);

	/*
	 * Register Tile Three Settings
	 */
	add_settings_field(
		'sar_tile_three_image',
		'Third Tile Image',
		create_function( '', 'sar_image_callback( "tile", "three", "tile" );' ),
		'sar_tile_three_options',
		'sar_tile_three_section' 
	);

	add_settings_field(
		'sar_tile_three_header',
		'Third Tile Header',
		create_function( '', 'sar_header_callback( "tile", "three", "tile" );' ),
		'sar_tile_three_options',
		'sar_tile_three_section'
	);

	add_settings_field(
		'sar_tile_three_description',
		'Third Tile Description',
		create_function( '', 'sar_description_callback( "tile", "three", "tile" );' ),
		'sar_tile_three_options',
		'sar_tile_three_section'
	);

	add_settings_field(
		'sar_tile_three_link',
		'Third Tile Link',
		create_function( '', 'sar_link_callback( "tile", "three", "tile" );' ),
		'sar_tile_three_options',
		'sar_tile_three_section'
	);

	add_settings_field(
		'sar_tile_three_linktext',
		'Third Tile Link Text',
		create_function( '', 'sar_linktext_callback( "tile", "three", "tile" );' ),
		'sar_tile_three_options',
		'sar_tile_three_section'
	);

	/*
	 * Register Featurette One Settings
	 */
	add_settings_field(
		'sar_featurette_one_visibility',
		'First Featurette Visibility',
		create_function( '', 'sar_visibility_callback( "featurette", "one", "featurette" );' ),
		'sar_featurette_one_options',
		'sar_featurette_one_section'
	);

	add_settings_field(
		'sar_featurette_one_image',
		'First Featurette Image',
		create_function( '', 'sar_image_callback( "featurette", "one", "featurette" );' ),
		'sar_featurette_one_options',
		'sar_featurette_one_section'
	);

	add_settings_field(
		'sar_featurette_one_header_main',
		'First Featurette Main Header',
		create_function( '', 'sar_header_callback( "featurette", "one", "featurette" );' ),
		'sar_featurette_one_options',
		'sar_featurette_one_section'
	);

	add_settings_field(
		'sar_featurette_one_header_sub',
		'First Featurette Sub Header',
		create_function( '', 'sar_subheader_callback( "featurette", "one", "featurette" );' ),
		'sar_featurette_one_options',
		'sar_featurette_one_section'
	);

	add_settings_field(
		'sar_featurette_one_description',
		'First Featurette Description',
		create_function( '', 'sar_description_callback( "featurette", "one", "featurette" );' ),
		'sar_featurette_one_options',
		'sar_featurette_one_section'
	);

	add_settings_field(
		'sar_featurette_one_link',
		'First Featurette Link',
		create_function( '', 'sar_link_callback( "featurette", "one", "featurette" );' ),
		'sar_featurette_one_options',
		'sar_featurette_one_section'
	);

	add_settings_field(
		'sar_featurette_one_linktext',
		'First Featurette Link Text',
		create_function( '', 'sar_linktext_callback( "featurette", "one", "featurette" );' ),
		'sar_featurette_one_options',
		'sar_featurette_one_section'
	);


	/*
	 * Register Featurette Two Settings
	 */
	add_settings_field(
		'sar_featurette_two_visibility',
		'Second Featurette Visibility',
		create_function( '', 'sar_visibility_callback( "featurette", "two", "featurette" );' ),
		'sar_featurette_two_options',
		'sar_featurette_two_section'
	);

	add_settings_field(
		'sar_featurette_two_image',
		'Second Featurette Image',
		create_function( '', 'sar_image_callback( "featurette", "two", "featurette" );' ),
		'sar_featurette_two_options',
		'sar_featurette_two_section'
	);

	add_settings_field(
		'sar_featurette_two_header_main',
		'Second Featurette Main Header',
		create_function( '', 'sar_header_callback( "featurette", "two", "featurette" );' ),
		'sar_featurette_two_options',
		'sar_featurette_two_section'
	);

	add_settings_field(
		'sar_featurette_two_header_sub',
		'Second Featurette Sub Header',
		create_function( '', 'sar_subheader_callback( "featurette", "two", "featurette" );' ),
		'sar_featurette_two_options',
		'sar_featurette_two_section'
	);

	add_settings_field(
		'sar_featurette_two_description',
		'Second Featurette Description',
		create_function( '', 'sar_description_callback( "featurette", "two", "featurette" );' ),
		'sar_featurette_two_options',
		'sar_featurette_two_section'
	);

	add_settings_field(
		'sar_featurette_two_link',
		'Second Featurette Link',
		create_function( '', 'sar_link_callback( "featurette", "two", "featurette" );' ),
		'sar_featurette_two_options',
		'sar_featurette_two_section'
	);

	add_settings_field(
		'sar_featurette_two_linktext',
		'Second Featurette Link Text',
		create_function( '', 'sar_linktext_callback( "featurette", "two", "featurette" );' ),
		'sar_featurette_two_options',
		'sar_featurette_two_section'
	);


	/*
	 * Register Featurette Three Settings
	 */
	add_settings_field(
		'sar_featurette_three_visibility',
		'Third Featurette Visibility',
		create_function( '', 'sar_visibility_callback( "featurette", "three", "featurette" );' ),
		'sar_featurette_three_options',
		'sar_featurette_three_section'
	);

	add_settings_field(
		'sar_featurette_three_image',
		'Third Featurette Image',
		create_function( '', 'sar_image_callback( "featurette", "three", "featurette" );' ),
		'sar_featurette_three_options',
		'sar_featurette_three_section'
	);

	add_settings_field(
		'sar_featurette_three_header_main',
		'Third Featurette Main Header',
		create_function( '', 'sar_header_callback( "featurette", "three", "featurette" );' ),
		'sar_featurette_three_options',
		'sar_featurette_three_section'
	);

	add_settings_field(
		'sar_featurette_three_header_sub',
		'Third Featurette Sub Header',
		create_function( '', 'sar_subheader_callback( "featurette", "three", "featurette" );' ),
		'sar_featurette_three_options',
		'sar_featurette_three_section'
	);

	add_settings_field(
		'sar_featurette_three_description',
		'Third Featurette Description',
		create_function( '', 'sar_description_callback( "featurette", "three", "featurette" );' ),
		'sar_featurette_three_options',
		'sar_featurette_three_section'
	);

	add_settings_field(
		'sar_featurette_three_link',
		'Third Featurette Link',
		create_function( '', 'sar_link_callback( "featurette", "three", "featurette" );' ),
		'sar_featurette_three_options',
		'sar_featurette_three_section'
	);

	add_settings_field(
		'sar_featurette_three_linktext',
		'Third Featurette Link Text',
		create_function( '', 'sar_linktext_callback( "featurette", "three", "featurette" );' ),
		'sar_featurette_three_options',
		'sar_featurette_three_section'
	);


} // end sar_theme_init

add_filter( 'admin_init', 'sar_theme_init' );

/*-------------------------------------------------------------------------------*
 *	Define Section Callbacks
 *-------------------------------------------------------------------------------*/

function sar_carousel_section_callback() {

} // end sar_carousel_one_section_callback

function sar_tile_section_callback() {

} // end sar_tile_section_callback

function sar_featurette_section_callback() {

} // end sar_featurette_section_callback


/*-------------------------------------------------------------------------------*
 *	Validation Callback
 *-------------------------------------------------------------------------------*/

function sar_validate_all_things( $input ) {

	$output = array();

	foreach( $input as $key => $value ) {

		if( isset( $input[ $key ] ) ) {

			$output[ $key ] = strip_tags( stripslashes( $input[ $key ] ) );

		}

	}

	return apply_filters( 'sar_validate_all_things', $output, $input );

} // end sar_validate_all_things


/*-------------------------------------------------------------------------------*
 *	Define Field Callbacks
 *-------------------------------------------------------------------------------*/

function sar_header_callback( $setting, $number, $type ) {

	$options = get_option( $setting . '_' . $number . '_options' );

	if( !isset( $options[ $type . '_header' ] ) ) {
		$options[ $type . '_header' ] = '';
	}

	$html = '<input type="text" id="sar_' . $type . '_' . $number . '_header" name="' . $setting . '_' . $number . '_options[' . $type . '_header]" value="' . $options[ $type . '_header' ] . '" />';
	$html .= '<lable for="sar_' . $type . '_header"> Header for this ' . $type . '.</label>';

	echo $html;

} // end sar_header_callback

function sar_subheader_callback( $setting, $number, $type ) {

	$options = get_option( $setting . '_' . $number . '_options' );

	if( !isset( $options[ $type . '_subheader' ] ) ) {
		$options[ $type . '_subheader' ] = '';
	}

	$html = '<input type="text" id="sar_' . $type . '_' . $number . '_subheader" name="' . $setting . '_' . $number . '_options[' . $type . '_subheader]" value="' . $options[ $type . '_subheader' ] . '" />';
	$html .= '<lable for="sar_' . $type . '_subheader"> Sub Header for this ' . $type . '.</label>';

	echo $html;

} // end sar_subheader_callback

function sar_description_callback( $setting, $number, $type ) {

	$options = get_option( $setting . '_' . $number . '_options' );

	if( !isset( $options[ $type . '_description' ] ) ) {
		$options[ $type . '_description' ] = '';
	}

	$html = '<textarea id="sar_' . $type . '_' . $number . '_description" name="' . $setting . '_' . $number . '_options[' . $type . '_description]">' . $options[ $type . '_description' ] . '</textarea>';
	$html .= '<label for="sar_' . $type . '_description"> Description for this ' . $type . '.';

	echo $html;

} // end sar_description_callback

function sar_image_callback( $setting, $number, $type ) {

	$options = get_option( $setting . '_' . $number . '_options' );

	if( !isset( $options[ $type . '_image' ] ) ) {
		$options[ $type . '_image' ] = '';
	}

	$html = '<input type="text" id="sar_' . $type . '_' . $number . '_image" name="' . $setting . '_' . $number . '_options[' . $type . '_image]" value="' . $options[ $type . '_image' ] . '" />';
	$html .= '<label for="sar_' . $type . '_image"> URL for this ' . $type . ' image.</label>';

	echo $html;

} // end sar_image_callback

function sar_link_callback( $setting, $number, $type ) {

	$options = get_option( $setting . '_' . $number . '_options' );

	if( !isset( $options[ $type . '_link' ] ) ) {
		$options[ $type . '_link' ] = '';
	}

	$html = '<input type="text" id="sar_' . $type . '_' . $number . '_link" name="' . $setting . '_' . $number . '_options[' . $type . '_link]" value="' . $options[ $type . '_link' ] . '" />';
	$html .= '<label for="sar_' . $type . '_link"> URL for this ' . $type . ' link.</label>';

	echo $html;

} // end sar_link_callback

function sar_linktext_callback( $setting, $number, $type ) {

	$options = get_option( $setting . '_' . $number . '_options' );

	if( !isset( $options[ $type . '_linktext' ] ) ) {
		$options[ $type . '_linktext' ] = '';
	}

	$html = '<input type="text" id="sar_' . $type . '_' . $number . '_linktext" name="' . $setting . '_' . $number . '_options[' . $type . '_linktext]" value="' . $options[ $type . '_linktext' ] . '" />';
	$html .= '<label for="sar_' . $type . '_linktext"> Text to be linked.</label>';

	echo $html;

} // end sar_linktext_callback

function sar_visibility_callback( $setting, $number, $type ) {

	$options = get_option( $setting . '_' . $number . '_options' );

	if( !isset( $options[ $type . '_visibility' ] ) ) {
		$options[ $type . '_visibility' ] = false;
	}

	$html = '<input type="checkbox" id="sar_' . $type . '_' . $number . '_visibility" name="' . $setting . '_' . $number . '_options[' . $type . '_visibility]" value="1"' . checked( 1, $options[$type . '_visibility'], false ) . '/>';
	$html .= '<label for="sar_' . $type . '_visibility">Show ' . ucfirst( $type ) . '</label>';

	echo $html;

} // end sar_visibility_callback


/*-------------------------------------------------------------------------------*
 *	Add Theme Options Pages
 *-------------------------------------------------------------------------------*/

function sar_add_settings_page() {

 	add_menu_page(
 		__( 'SAR Options', 'sarsettings' ),
 		__( 'SAR Options', 'sarsettings' ),
 		'edit_theme_options',
 		'sarsettings',
 		'sar_theme_options_page',
 		'dashicons-admin-generic'
 	);

 	add_submenu_page(
 		'sarsettings',
 		__( 'Carousel Options', 'sarsettings' ),
 		__( 'Carousel Options', 'sarsettings' ),
 		'edit_theme_options',
 		'sarsettings',
 		create_function( '', 'sar_options_display( "Carousel Options", "sar_carousel_options", "slide" );' )
 	);

 	add_submenu_page(
 		'sarsettings',
 		__( 'Feature Tiles', 'sarsettings' ),
 		__( 'Feature Tiles', 'sarsettings' ),
 		'edit_theme_options',
 		'sar_tile_options',
 		create_function( '', 'sar_options_display( "Feature Tile Options", "sar_tile_options", "tile" );' )
 	);

 	add_submenu_page(
 		'sarsettings',
 		__( 'Featurettes', 'sarsettings' ),
 		__( 'Featurettes', 'sarsettings' ),
 		'edit_theme_options',
 		'sar_featurette_options',
 		create_function( '', 'sar_options_display( "Featurette Options", "sar_featurette_options", "featurette");' )
 	);

} // end sar_add_settings_page
add_action( 'admin_menu', 'sar_add_settings_page' );

/*-------------------------------------------------------------------------------*
 *	Define Page Display Callbacks
 *-------------------------------------------------------------------------------*/

function sar_theme_options_page() {

} // end sar_theme_options_page

function sar_options_display( $title, $page, $type ) {
?>

	<div class="wrap">

		<h2><?php echo $title; ?> - <?php echo wp_get_theme(); ?></h2>
		<?php settings_errors(); ?>

		<?php
			$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : $type . '_one';
		?>

		<h2 class="nav-tab-wrapper">
			<a href="?page=<?php echo $page; ?>&tab=<?php echo $type; ?>_one" class="nav-tab <?php echo $active_tab == $type . '_one' ? 'nav-tab-active' : ''; ?>"><?php echo ucfirst( $type ); ?> One</a>
			<a href="?page=<?php echo $page; ?>&tab=<?php echo $type; ?>_two" class="nav-tab <?php echo $active_tab == $type . '_two' ? 'nav-tab-active' : ''; ?>"><?php echo ucfirst( $type ); ?> Two</a>
			<a href="?page=<?php echo $page; ?>&tab=<?php echo $type; ?>_three" class="nav-tab <?php echo $active_tab == $type . '_three' ? 'nav-tab-active' : ''; ?>"><?php echo ucfirst( $type ); ?> Three</a>
		</h2>

		<form method="post" action="options.php">

			<?php 

				if( $active_tab == $type . '_one' ) {

					settings_fields( 'sar_' . $type . '_one_options' );
					do_settings_sections( 'sar_' . $type . '_one_options' );

				} else if( $active_tab == $type . '_two' ) {

					settings_fields( 'sar_' . $type . '_two_options' );
					do_settings_sections( 'sar_' . $type . '_two_options' );

				} else {

					settings_fields( 'sar_' . $type . '_three_options' );
					do_settings_sections( 'sar_' . $type . '_three_options' );

				}

				submit_button(); 
			?>

		</form>

	</div>

<?php


}