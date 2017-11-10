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

register_nav_menus( array(
	'footer-menu' => 'Hedgehog Theme Footer Menu',
) );

function hedgehog_custom_logo_setup() {
    $defaults = array(
        'height'      => 200,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'hedgehog_custom_logo_setup' );

function max_title_length( $title ) {
  $max = 40;
  if( strlen( $title ) > $max ) {
    return substr( $title, 0, $max ). " &hellip;";
  } else {
  return $title;
  }
}

function new_excerpt_more($more) {
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
