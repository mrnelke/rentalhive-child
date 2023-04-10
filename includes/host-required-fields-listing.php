<?php
// VENDOR: Pages Images, Location, Price Extras (Descriptions & Required fields) Registration

/*// Title for "COMPLETE PROFILE" Page / Registration 
add_filter(
	'hivepress/v1/templates/listing_submit_profile_page/blocks',
	function($blocks, $template){
		$listing = $template->get_context('listing');

		if($listing){
			$template->set_context('page_title', 'Шаг 1: полный профиль ');	
		}
		return $blocks;
	},
	1000,
	2
);
*/

/*
// Title for "Select Category" Page / Registration 
add_filter(
	'hivepress/v1/templates/listing_submit_category_page/blocks',
	function( $blocks, $template ) {
		
		$template->set_context('page_title', 'Шаг 2: выберите категорию');
		
		return $blocks;
	},
	1000,
	2
);

*/

/*
add_filter(
	'hivepress/v1/templates/listing_submit_category_page',
	function( $template ) {
		return hivepress()->helper->merge_trees(
			$template,
			[
				'blocks' => [
					'page_content' => [
						'blocks' => [
							'custom_category_text' => [
								'type' => 'content',
								'content' => 'Your text here',
								'_order' => 9,
							]
						],
					],
				],
			]
		);
	},
	1000
);
*/

/*
// Title for "ADD DETAILS" Page / Registration 
add_filter(
	'hivepress/v1/templates/listing_submit_details_page/blocks',
	function($blocks, $template){
		$listing = $template->get_context('listing');

		if($listing){
			$template->set_context('page_title', 'Шаг 3: добавьте детали ');	
		}
		return $blocks;
	},
	1000,
	2
);
*/


// Desription for "ADD DETAILS" Page / Images 
add_filter(
	'hivepress/v1/models/listing',
	function( $model ) {
		$model['fields']['images']['description']  = 'Вы можете загрузить до 20 изображений. Пожалуйста, загружайте только 3 фотографии за раз! Максимальная ширина 1024px. Максимальная высота также 1024px. Максимальный размер 64MB. Используйте по возможности горизонтальные изображения. Также попробуйте использовать высокое разрешение 300 dpi. Сочетайте отличные изображения с вниманием к деталям, таким как камин, сауна, великолепный вид или барбекю на заднем дворе. Будут удалены следующие изображения: неправильного формата, а также неуместные и несвязанные изображения, включая графику, логотипы, веб-сайты и изображения с рамками и спецэффектами.';
		return $model;
	},
	1000
);

// Desription for "ADD DETAILS" Page / Title 
add_filter(
	'hivepress/v1/models/listing',
	function( $model ) {
		$model['fields']['title']['description']  = 'Ваш заголовок — это первое, что видят гости. Это должно привлечь их внимание. Ваш заголовок должен нравиться вашей аудитории и сигнализировать о том, что он соответствует всем ожиданиям ваших гостей.';
		return $model;
	},
	1000
);

// Desription for "ADD DETAILS" Page / PRICE  
add_filter(
	'hivepress/v1/forms/listing_update',
	function( $form ) {
		if ( isset( $form['fields']['price'] ) ) {
			$form['fields']['price']['placeholder'] = '';
			$form['fields']['price']['description'] = 'Добавьте цену за сутки в рублях. Пример: 5500. Пожалуйста, ознакомьтесь с инструкциями по расчету цены <a href="http://moyatvoya.ru/baza-znanij-dlya-partnerov#cena-za-noc" target="_blank" rel="noopener noreferrer">здесь</a>.';
		}

		return $form;
	},
	1000
);



// Desription for "ADD DETAILS" Page / LOCATION / DESCRIPTION / PRICE EXTRAS 
add_filter(
	'hivepress/v1/forms/listing_submit',
	function( $form ) {
		
		// Change field Location description.
		if(isset($form['fields']['location'])){
			$form['fields']['location']['description'] = 'Постарайтесь найти свой адрес, либо как можно ближе по локации, точный адрес можете указать в описании объекта.';
		}
		
		// Change field Description description.
		if(isset($form['fields']['description'])){
			$form['fields']['description']['description'] = 'Напишите все подробности о вашем объекте для привлечения гостей (минимум 300 слов для подтверждения учетных записей): где он расположен, особенности, вид, окружение, доступ к автомагистралям, супермаркетам, ресторанам и т. д. Пожалуйста, не включайте ссылки, изображения, видео, номера телефонов и логотипы!';
		}
		
		// Change field Price extras description.
		if(isset($form['fields']['price_extras'])){
			$form['fields']['price_extras']['description'] = 'Добавьте дополнительно цену за гостя/услугу/животное, которая добавляются к цене вашего бронирования за ночь (пример:если гость бронирует на 5 ночей,то сумма умножается на 5, то есть умножается автоматически на кол-во забронированных ночей.)';
		}
		
		return $form;
	},
	1000
);



