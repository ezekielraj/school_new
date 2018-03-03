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

add_theme_support( 'custom-logo', array(
                'height'      => 248,
                'width'       => 248,
                'flex-height' => true,
        ) );

}
endif;
add_action( 'after_setup_theme', 'school_new_setup' );

