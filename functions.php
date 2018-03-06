<?php

if ( ! function_exists( 'school_new_the_custom_logo' ) ) :
function school_new_the_custom_logo() {
        if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
        }
}
endif;

if ( ! function_exists( 'school_new_setup' ) ) :

function school_new_setup() {

     add_theme_support( 'custom-logo', 
        array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        ) );

        register_nav_menus( array(
                'primary' => __( 'Primary Menu', 'school_new' ),
        ) );


}
endif;
add_action( 'after_setup_theme', 'school_new_setup' );

function school_custom_header_setup() {
//	$color_scheme        = school_get_color_scheme();
//	$default_text_color  = trim( $color_scheme[4], '#' );

	/**
	 * Filter Twenty Fifteen custom-header support arguments.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default_text_color     Default color of the header text.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 954.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
	 *     @type string $wp-head-callback       Callback function used to styles the header image and text
	 *                                          displayed on the blog.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'school_custom_header_args', array(
		//'default-text-color'     => $default_text_color,
		'width'                  => 954,
		'height'                 => 1300,
	//	'wp-head-callback'       => 'school_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'school_custom_header_setup' );