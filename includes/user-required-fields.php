<?php
// USER PROFILE: Required fields in USER PROFILE

// makes fields required in USER PROFILE 
add_filter(
	'hivepress/v1/forms/user_update',
	function( $form ) {
		$form['fields']['image']['required'] = true;
		$form['fields']['first_name']['required'] = true;
		$form['fields']['last_name']['required'] = true;
		$form['fields']['description']['required'] = true;

		return $form;
	},
	1000
);


add_filter(
	'hivepress/v1/forms/user_update/errors',
	function( $errors, $form ) {
		$user = $form->get_model();

		if ( $user && ! $user->get_image__id() ) {
			$errors[] = 'Пожалуйста, загрузите изображение профиля.';
		}

		return $errors;
	},
	1000,
	2
);


add_filter(
'hivepress/v1/forms/user_update',
function( $form ) {
if(isset($form['fields']['image'])){
$form['fields']['image']['description'] = '';
		}
return $form;
	},
1000
);
