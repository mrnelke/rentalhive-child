<?php
// VENDOR: Booking Notes for Vendors / Make requires / Hide

// MAKE BOOKING NOTE REQUIRED 
add_filter(
	'hivepress/v1/forms/listing_update',
	function( $form ) {
                if(isset($form['fields']['purchase_note'])){
                    $form['fields']['purchase_note']['required'] = true;
                }

		return $form;
	},
	1000
);

// MAKE BOOKING NOTE ONLY AVAILABLE AFTER PURCHASE! 

add_filter(
	'hivepress/v1/templates/booking_view_page/blocks',
	function ($blocks, $template){
		$order = $template->get_context('order');

		if( ! $order || ! in_array($order->get_status(), ['completed', 'processing'])){
			$blocks = hivepress()->helper->merge_trees(
					[ 'blocks' => $blocks ],
					[
						'blocks' => [
						    	'booking_note' => [
									'type' => 'content',
							    	'content' => '',
						    	],
					     	],
				]
				)['blocks'];
		}
		
		return $blocks;
	},
	1000,
	2
);
