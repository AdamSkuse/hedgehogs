<?php

function get_assets() {
	wp_enqueue_style( 'hedgehogs', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'get_assets' );

function custom_excerpt_length( $length ) {
	return 40;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function mat_widget_areas() {
    register_sidebar( array(
        'name' => 'Theme Sidebar',
        'id' => 'mat-sidebar',
        'description' => 'The main sidebar shown on the right in our awesome theme',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ));
}

add_action( 'widgets_init', 'mat_widget_areas' );
