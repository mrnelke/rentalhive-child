<?php
// <!-- USER REGISTRATION: Add first and last name fields to the user registration form -->

add_filter(
	'hivepress/v1/forms/user_register',
	function ( $form ) {
		$form['fields'] = array_merge(
			$form['fields'],
			[
				'first_name' => [
					'required' => true,
					'_order'   => 1,
				],

				'last_name'  => [
					'required' => true,
					'_order'   => 2,
				],
			]
		);

		return $form;
	},
	100
);

add_action(
	'hivepress/v1/models/user/register',
	function( $user_id, $values ) {
		if ( isset( $values['first_name'] ) ) {
			update_user_meta( $user_id, 'first_name', $values['first_name'] );
		}

		if ( isset( $values['last_name'] ) ) {
			update_user_meta( $user_id, 'last_name', $values['last_name'] );
		}
	},
	10,
	2
);
