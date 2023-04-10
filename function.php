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

// Admin

// Global
require_once( __DIR__ . '/includes/global-allow-svg.php');

// User 
require_once( __DIR__ . '/includes/user-first-last-name-registration.php');
require_once( __DIR__ . '/includes/user-required-fields.php');


// Hosts
require_once( __DIR__ . '/includes/host-booking-note.php');
require_once( __DIR__ . '/includes/host-hide-fields-registration.php');
require_once( __DIR__ . '/includes/host-max-image-upload.php');
require_once( __DIR__ . '/includes/host-required-fields-listing.php')

// Guests
require_once( __DIR__ . '/includes/guest-booking-note.php');

// Listings
require_once( __DIR__ . '/includes/listing-display-format-price.php');


