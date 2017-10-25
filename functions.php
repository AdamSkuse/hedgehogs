<?php

function get_assets() {
	wp_enqueue_style( 'hedgehogs', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'get_assets' );

function custom_excerpt_length( $length ) {
	return 40;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
