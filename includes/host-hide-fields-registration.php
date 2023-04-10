<?php
// VENDOR: HIDE Tags and quantity fields during Registration

// Delete tag field from listing registration page.
add_filter(
	'hivepress/v1/forms/listing_update',
	function( $form ) {
		if ( isset( $form['fields']['tags'] ) ) {
			unset($form['fields']['tags']);
		}

		return $form;
	},
	1000
);

// Delete quantity field from listing registration page.
add_filter(
	'hivepress/v1/forms/listing_update',
	function( $form ) {
		if ( isset( $form['fields']['quantity'] ) ) {
			unset($form['fields']['quantity']);
		}

		return $form;
	},
	1000
);