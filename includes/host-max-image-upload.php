<?php
// VENDOR: Max. IMAGES Uploaded for Submit Listing

// Max pictures to be uploaded.
add_filter(
	'hivepress/v1/models/listing',
	function( $model ) {
		$model['fields']['images']['max_files'] =20;

		return $model;
	}
);