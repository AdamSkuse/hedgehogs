<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    if ( has_custom_logo() ) {
            echo '<a href="' . home_url() . '"><img class="site-header__logo" src="'. esc_url( $logo[0] ) .'"></a>';
    }
  ?>
  <div class="site-header__title"><h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1></div>
</header>
  <div class="stripe--top"></div>
  <div class="stripe--bottom"></div>
