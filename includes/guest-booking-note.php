<?php
// USER: HIDE or MAKE required NOTE during Booking

/* HIDE NOTE
add_filter(
	'hivepress/v1/forms/booking_confirm',
	function ( $form ) {
		if(isset($form['fields']['note'])){
			unset($form['fields']['note']);
		}
		
		return $form;
	},
	1000
);

*/

add_filter(
	'hivepress/v1/forms/booking_confirm',
	function ( $form ) {
		$form['fields']['note']['required'] = true;
		
		
		return $form;
	},
	1000
);






