<?php
add_action( 'wp_enqueue_scripts', 'get_assets' );

function get_assets() {
	wp_enqueue_style( 'hedgehogs', get_stylesheet_uri() );
}
