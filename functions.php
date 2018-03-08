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

	add_theme_support( 'custom-header', apply_filters( 'school_custom_header_args', array(
		//'default-text-color'     => $default_text_color,
		'width'                  => 1300,
		'height'                 => 980,
	//	'wp-head-callback'       => 'school_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'school_custom_header_setup' );