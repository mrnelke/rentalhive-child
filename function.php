
<?php

function your_theme_enqueue_styles() {

	$parent_style = 'hivetheme-parent-frontend';

	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array($parent_style),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}

add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_styles' );


// Add functions here //