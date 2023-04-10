<?php
// LISTINGS: Display Format Price Attribute for Marketplace
add_filter(
	'hivepress/v1/models/listing/attributes',
	function( $attributes ) {
		if ( isset( $attributes['price'] ) ) {
			$attributes['price']['display_format'] = '%value% / ночь %icon%';
			
		}

		return $attributes;
	},
	1000
);

