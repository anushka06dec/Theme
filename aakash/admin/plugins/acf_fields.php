<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_572d52d14f592',
	'title' => 'About Detail',
	'fields' => array (
		array (
			'key' => 'field_572d52eb77b86',
			'label' => 'My Image',
			'name' => 'my_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_572d538c77b87',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572d53d177b88',
			'label' => 'SubHeading',
			'name' => 'subheading',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572d53fd77b89',
					'label' => 'SubHeading Text',
					'name' => 'subheading_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
		array (
			'key' => 'field_572d541877b8a',
			'label' => 'Content',
			'name' => 'content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_572db0d9b64c3',
			'label' => 'My Resume',
			'name' => 'my_resume',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572e072a2b5dc',
	'title' => 'Clients',
	'fields' => array (
		array (
			'key' => 'field_572e07df21819',
			'label' => 'Client Heading',
			'name' => 'client_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572e07ec2181a',
			'label' => 'Client List',
			'name' => 'client_list',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572e073c623b5',
					'label' => 'Client Logo',
					'name' => 'client_logo',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/portfolio.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572e010bb1a02',
	'title' => 'Contact Details',
	'fields' => array (
		array (
			'key' => 'field_572e012385da8',
			'label' => 'Contact Title',
			'name' => 'contact_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572e016385da9',
			'label' => 'Address Icon',
			'name' => 'address_icon',
			'type' => 'font-awesome',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'fa-map-marker',
			'save_format' => 'element',
			'allow_null' => 0,
			'enqueue_fa' => 0,
			'fa_live_preview' => '',
			'choices' => array (
				'null' => '- Select -',
				'fa-500px' => '&#xf26e; fa-500px',
				'fa-adjust' => '&#xf042; fa-adjust',
				'fa-adn' => '&#xf170; fa-adn',
				'fa-align-center' => '&#xf037; fa-align-center',
				'fa-align-justify' => '&#xf039; fa-align-justify',
				'fa-align-left' => '&#xf036; fa-align-left',
				'fa-align-right' => '&#xf038; fa-align-right',
				'fa-amazon' => '&#xf270; fa-amazon',
				'fa-ambulance' => '&#xf0f9; fa-ambulance',
				'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
				'fa-anchor' => '&#xf13d; fa-anchor',
				'fa-android' => '&#xf17b; fa-android',
				'fa-angellist' => '&#xf209; fa-angellist',
				'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
				'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
				'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
				'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
				'fa-angle-down' => '&#xf107; fa-angle-down',
				'fa-angle-left' => '&#xf104; fa-angle-left',
				'fa-angle-right' => '&#xf105; fa-angle-right',
				'fa-angle-up' => '&#xf106; fa-angle-up',
				'fa-apple' => '&#xf179; fa-apple',
				'fa-archive' => '&#xf187; fa-archive',
				'fa-area-chart' => '&#xf1fe; fa-area-chart',
				'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
				'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
				'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
				'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
				'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
				'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
				'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
				'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
				'fa-arrow-down' => '&#xf063; fa-arrow-down',
				'fa-arrow-left' => '&#xf060; fa-arrow-left',
				'fa-arrow-right' => '&#xf061; fa-arrow-right',
				'fa-arrow-up' => '&#xf062; fa-arrow-up',
				'fa-arrows' => '&#xf047; fa-arrows',
				'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
				'fa-arrows-h' => '&#xf07e; fa-arrows-h',
				'fa-arrows-v' => '&#xf07d; fa-arrows-v',
				'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
				'fa-asterisk' => '&#xf069; fa-asterisk',
				'fa-at' => '&#xf1fa; fa-at',
				'fa-audio-description' => '&#xf29e; fa-audio-description',
				'fa-backward' => '&#xf04a; fa-backward',
				'fa-balance-scale' => '&#xf24e; fa-balance-scale',
				'fa-ban' => '&#xf05e; fa-ban',
				'fa-bar-chart' => '&#xf080; fa-bar-chart',
				'fa-barcode' => '&#xf02a; fa-barcode',
				'fa-bars' => '&#xf0c9; fa-bars',
				'fa-battery-empty' => '&#xf244; fa-battery-empty',
				'fa-battery-full' => '&#xf240; fa-battery-full',
				'fa-battery-half' => '&#xf242; fa-battery-half',
				'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
				'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
				'fa-bed' => '&#xf236; fa-bed',
				'fa-beer' => '&#xf0fc; fa-beer',
				'fa-behance' => '&#xf1b4; fa-behance',
				'fa-behance-square' => '&#xf1b5; fa-behance-square',
				'fa-bell' => '&#xf0f3; fa-bell',
				'fa-bell-o' => '&#xf0a2; fa-bell-o',
				'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
				'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
				'fa-bicycle' => '&#xf206; fa-bicycle',
				'fa-binoculars' => '&#xf1e5; fa-binoculars',
				'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
				'fa-bitbucket' => '&#xf171; fa-bitbucket',
				'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
				'fa-black-tie' => '&#xf27e; fa-black-tie',
				'fa-blind' => '&#xf29d; fa-blind',
				'fa-bluetooth' => '&#xf293; fa-bluetooth',
				'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
				'fa-bold' => '&#xf032; fa-bold',
				'fa-bolt' => '&#xf0e7; fa-bolt',
				'fa-bomb' => '&#xf1e2; fa-bomb',
				'fa-book' => '&#xf02d; fa-book',
				'fa-bookmark' => '&#xf02e; fa-bookmark',
				'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
				'fa-braille' => '&#xf2a1; fa-braille',
				'fa-briefcase' => '&#xf0b1; fa-briefcase',
				'fa-btc' => '&#xf15a; fa-btc',
				'fa-bug' => '&#xf188; fa-bug',
				'fa-building' => '&#xf1ad; fa-building',
				'fa-building-o' => '&#xf0f7; fa-building-o',
				'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
				'fa-bullseye' => '&#xf140; fa-bullseye',
				'fa-bus' => '&#xf207; fa-bus',
				'fa-buysellads' => '&#xf20d; fa-buysellads',
				'fa-calculator' => '&#xf1ec; fa-calculator',
				'fa-calendar' => '&#xf073; fa-calendar',
				'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
				'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
				'fa-calendar-o' => '&#xf133; fa-calendar-o',
				'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
				'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
				'fa-camera' => '&#xf030; fa-camera',
				'fa-camera-retro' => '&#xf083; fa-camera-retro',
				'fa-car' => '&#xf1b9; fa-car',
				'fa-caret-down' => '&#xf0d7; fa-caret-down',
				'fa-caret-left' => '&#xf0d9; fa-caret-left',
				'fa-caret-right' => '&#xf0da; fa-caret-right',
				'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
				'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
				'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
				'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
				'fa-caret-up' => '&#xf0d8; fa-caret-up',
				'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
				'fa-cart-plus' => '&#xf217; fa-cart-plus',
				'fa-cc' => '&#xf20a; fa-cc',
				'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
				'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
				'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
				'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
				'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
				'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
				'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
				'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
				'fa-certificate' => '&#xf0a3; fa-certificate',
				'fa-chain-broken' => '&#xf127; fa-chain-broken',
				'fa-check' => '&#xf00c; fa-check',
				'fa-check-circle' => '&#xf058; fa-check-circle',
				'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
				'fa-check-square' => '&#xf14a; fa-check-square',
				'fa-check-square-o' => '&#xf046; fa-check-square-o',
				'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
				'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
				'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
				'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
				'fa-chevron-down' => '&#xf078; fa-chevron-down',
				'fa-chevron-left' => '&#xf053; fa-chevron-left',
				'fa-chevron-right' => '&#xf054; fa-chevron-right',
				'fa-chevron-up' => '&#xf077; fa-chevron-up',
				'fa-child' => '&#xf1ae; fa-child',
				'fa-chrome' => '&#xf268; fa-chrome',
				'fa-circle' => '&#xf111; fa-circle',
				'fa-circle-o' => '&#xf10c; fa-circle-o',
				'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
				'fa-circle-thin' => '&#xf1db; fa-circle-thin',
				'fa-clipboard' => '&#xf0ea; fa-clipboard',
				'fa-clock-o' => '&#xf017; fa-clock-o',
				'fa-clone' => '&#xf24d; fa-clone',
				'fa-cloud' => '&#xf0c2; fa-cloud',
				'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
				'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
				'fa-code' => '&#xf121; fa-code',
				'fa-code-fork' => '&#xf126; fa-code-fork',
				'fa-codepen' => '&#xf1cb; fa-codepen',
				'fa-codiepie' => '&#xf284; fa-codiepie',
				'fa-coffee' => '&#xf0f4; fa-coffee',
				'fa-cog' => '&#xf013; fa-cog',
				'fa-cogs' => '&#xf085; fa-cogs',
				'fa-columns' => '&#xf0db; fa-columns',
				'fa-comment' => '&#xf075; fa-comment',
				'fa-comment-o' => '&#xf0e5; fa-comment-o',
				'fa-commenting' => '&#xf27a; fa-commenting',
				'fa-commenting-o' => '&#xf27b; fa-commenting-o',
				'fa-comments' => '&#xf086; fa-comments',
				'fa-comments-o' => '&#xf0e6; fa-comments-o',
				'fa-compass' => '&#xf14e; fa-compass',
				'fa-compress' => '&#xf066; fa-compress',
				'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
				'fa-contao' => '&#xf26d; fa-contao',
				'fa-copyright' => '&#xf1f9; fa-copyright',
				'fa-creative-commons' => '&#xf25e; fa-creative-commons',
				'fa-credit-card' => '&#xf09d; fa-credit-card',
				'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
				'fa-crop' => '&#xf125; fa-crop',
				'fa-crosshairs' => '&#xf05b; fa-crosshairs',
				'fa-css3' => '&#xf13c; fa-css3',
				'fa-cube' => '&#xf1b2; fa-cube',
				'fa-cubes' => '&#xf1b3; fa-cubes',
				'fa-cutlery' => '&#xf0f5; fa-cutlery',
				'fa-dashcube' => '&#xf210; fa-dashcube',
				'fa-database' => '&#xf1c0; fa-database',
				'fa-deaf' => '&#xf2a4; fa-deaf',
				'fa-delicious' => '&#xf1a5; fa-delicious',
				'fa-desktop' => '&#xf108; fa-desktop',
				'fa-deviantart' => '&#xf1bd; fa-deviantart',
				'fa-diamond' => '&#xf219; fa-diamond',
				'fa-digg' => '&#xf1a6; fa-digg',
				'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
				'fa-download' => '&#xf019; fa-download',
				'fa-dribbble' => '&#xf17d; fa-dribbble',
				'fa-dropbox' => '&#xf16b; fa-dropbox',
				'fa-drupal' => '&#xf1a9; fa-drupal',
				'fa-edge' => '&#xf282; fa-edge',
				'fa-eject' => '&#xf052; fa-eject',
				'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
				'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
				'fa-empire' => '&#xf1d1; fa-empire',
				'fa-envelope' => '&#xf0e0; fa-envelope',
				'fa-envelope-o' => '&#xf003; fa-envelope-o',
				'fa-envelope-square' => '&#xf199; fa-envelope-square',
				'fa-envira' => '&#xf299; fa-envira',
				'fa-eraser' => '&#xf12d; fa-eraser',
				'fa-eur' => '&#xf153; fa-eur',
				'fa-exchange' => '&#xf0ec; fa-exchange',
				'fa-exclamation' => '&#xf12a; fa-exclamation',
				'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
				'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
				'fa-expand' => '&#xf065; fa-expand',
				'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
				'fa-external-link' => '&#xf08e; fa-external-link',
				'fa-external-link-square' => '&#xf14c; fa-external-link-square',
				'fa-eye' => '&#xf06e; fa-eye',
				'fa-eye-slash' => '&#xf070; fa-eye-slash',
				'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
				'fa-facebook' => '&#xf09a; fa-facebook',
				'fa-facebook-official' => '&#xf230; fa-facebook-official',
				'fa-facebook-square' => '&#xf082; fa-facebook-square',
				'fa-fast-backward' => '&#xf049; fa-fast-backward',
				'fa-fast-forward' => '&#xf050; fa-fast-forward',
				'fa-fax' => '&#xf1ac; fa-fax',
				'fa-female' => '&#xf182; fa-female',
				'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
				'fa-file' => '&#xf15b; fa-file',
				'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
				'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
				'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
				'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
				'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
				'fa-file-o' => '&#xf016; fa-file-o',
				'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
				'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
				'fa-file-text' => '&#xf15c; fa-file-text',
				'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
				'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
				'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
				'fa-files-o' => '&#xf0c5; fa-files-o',
				'fa-film' => '&#xf008; fa-film',
				'fa-filter' => '&#xf0b0; fa-filter',
				'fa-fire' => '&#xf06d; fa-fire',
				'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
				'fa-firefox' => '&#xf269; fa-firefox',
				'fa-first-order' => '&#xf2b0; fa-first-order',
				'fa-flag' => '&#xf024; fa-flag',
				'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
				'fa-flag-o' => '&#xf11d; fa-flag-o',
				'fa-flask' => '&#xf0c3; fa-flask',
				'fa-flickr' => '&#xf16e; fa-flickr',
				'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
				'fa-folder' => '&#xf07b; fa-folder',
				'fa-folder-o' => '&#xf114; fa-folder-o',
				'fa-folder-open' => '&#xf07c; fa-folder-open',
				'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
				'fa-font' => '&#xf031; fa-font',
				'fa-fonticons' => '&#xf280; fa-fonticons',
				'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
				'fa-forumbee' => '&#xf211; fa-forumbee',
				'fa-forward' => '&#xf04e; fa-forward',
				'fa-foursquare' => '&#xf180; fa-foursquare',
				'fa-frown-o' => '&#xf119; fa-frown-o',
				'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
				'fa-gamepad' => '&#xf11b; fa-gamepad',
				'fa-gavel' => '&#xf0e3; fa-gavel',
				'fa-gbp' => '&#xf154; fa-gbp',
				'fa-genderless' => '&#xf22d; fa-genderless',
				'fa-get-pocket' => '&#xf265; fa-get-pocket',
				'fa-gg' => '&#xf260; fa-gg',
				'fa-gg-circle' => '&#xf261; fa-gg-circle',
				'fa-gift' => '&#xf06b; fa-gift',
				'fa-git' => '&#xf1d3; fa-git',
				'fa-git-square' => '&#xf1d2; fa-git-square',
				'fa-github' => '&#xf09b; fa-github',
				'fa-github-alt' => '&#xf113; fa-github-alt',
				'fa-github-square' => '&#xf092; fa-github-square',
				'fa-gitlab' => '&#xf296; fa-gitlab',
				'fa-glass' => '&#xf000; fa-glass',
				'fa-glide' => '&#xf2a5; fa-glide',
				'fa-glide-g' => '&#xf2a6; fa-glide-g',
				'fa-globe' => '&#xf0ac; fa-globe',
				'fa-google' => '&#xf1a0; fa-google',
				'fa-google-plus' => '&#xf0d5; fa-google-plus',
				'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
				'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
				'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
				'fa-gratipay' => '&#xf184; fa-gratipay',
				'fa-h-square' => '&#xf0fd; fa-h-square',
				'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
				'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
				'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
				'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
				'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
				'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
				'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
				'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
				'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
				'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
				'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
				'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
				'fa-hashtag' => '&#xf292; fa-hashtag',
				'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
				'fa-header' => '&#xf1dc; fa-header',
				'fa-headphones' => '&#xf025; fa-headphones',
				'fa-heart' => '&#xf004; fa-heart',
				'fa-heart-o' => '&#xf08a; fa-heart-o',
				'fa-heartbeat' => '&#xf21e; fa-heartbeat',
				'fa-history' => '&#xf1da; fa-history',
				'fa-home' => '&#xf015; fa-home',
				'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
				'fa-hourglass' => '&#xf254; fa-hourglass',
				'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
				'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
				'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
				'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
				'fa-houzz' => '&#xf27c; fa-houzz',
				'fa-html5' => '&#xf13b; fa-html5',
				'fa-i-cursor' => '&#xf246; fa-i-cursor',
				'fa-ils' => '&#xf20b; fa-ils',
				'fa-inbox' => '&#xf01c; fa-inbox',
				'fa-indent' => '&#xf03c; fa-indent',
				'fa-industry' => '&#xf275; fa-industry',
				'fa-info' => '&#xf129; fa-info',
				'fa-info-circle' => '&#xf05a; fa-info-circle',
				'fa-inr' => '&#xf156; fa-inr',
				'fa-instagram' => '&#xf16d; fa-instagram',
				'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
				'fa-ioxhost' => '&#xf208; fa-ioxhost',
				'fa-italic' => '&#xf033; fa-italic',
				'fa-joomla' => '&#xf1aa; fa-joomla',
				'fa-jpy' => '&#xf157; fa-jpy',
				'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
				'fa-key' => '&#xf084; fa-key',
				'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
				'fa-krw' => '&#xf159; fa-krw',
				'fa-language' => '&#xf1ab; fa-language',
				'fa-laptop' => '&#xf109; fa-laptop',
				'fa-lastfm' => '&#xf202; fa-lastfm',
				'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
				'fa-leaf' => '&#xf06c; fa-leaf',
				'fa-leanpub' => '&#xf212; fa-leanpub',
				'fa-lemon-o' => '&#xf094; fa-lemon-o',
				'fa-level-down' => '&#xf149; fa-level-down',
				'fa-level-up' => '&#xf148; fa-level-up',
				'fa-life-ring' => '&#xf1cd; fa-life-ring',
				'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
				'fa-line-chart' => '&#xf201; fa-line-chart',
				'fa-link' => '&#xf0c1; fa-link',
				'fa-linkedin' => '&#xf0e1; fa-linkedin',
				'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
				'fa-linux' => '&#xf17c; fa-linux',
				'fa-list' => '&#xf03a; fa-list',
				'fa-list-alt' => '&#xf022; fa-list-alt',
				'fa-list-ol' => '&#xf0cb; fa-list-ol',
				'fa-list-ul' => '&#xf0ca; fa-list-ul',
				'fa-location-arrow' => '&#xf124; fa-location-arrow',
				'fa-lock' => '&#xf023; fa-lock',
				'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
				'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
				'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
				'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
				'fa-low-vision' => '&#xf2a8; fa-low-vision',
				'fa-magic' => '&#xf0d0; fa-magic',
				'fa-magnet' => '&#xf076; fa-magnet',
				'fa-male' => '&#xf183; fa-male',
				'fa-map' => '&#xf279; fa-map',
				'fa-map-marker' => '&#xf041; fa-map-marker',
				'fa-map-o' => '&#xf278; fa-map-o',
				'fa-map-pin' => '&#xf276; fa-map-pin',
				'fa-map-signs' => '&#xf277; fa-map-signs',
				'fa-mars' => '&#xf222; fa-mars',
				'fa-mars-double' => '&#xf227; fa-mars-double',
				'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
				'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
				'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
				'fa-maxcdn' => '&#xf136; fa-maxcdn',
				'fa-meanpath' => '&#xf20c; fa-meanpath',
				'fa-medium' => '&#xf23a; fa-medium',
				'fa-medkit' => '&#xf0fa; fa-medkit',
				'fa-meh-o' => '&#xf11a; fa-meh-o',
				'fa-mercury' => '&#xf223; fa-mercury',
				'fa-microphone' => '&#xf130; fa-microphone',
				'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
				'fa-minus' => '&#xf068; fa-minus',
				'fa-minus-circle' => '&#xf056; fa-minus-circle',
				'fa-minus-square' => '&#xf146; fa-minus-square',
				'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
				'fa-mixcloud' => '&#xf289; fa-mixcloud',
				'fa-mobile' => '&#xf10b; fa-mobile',
				'fa-modx' => '&#xf285; fa-modx',
				'fa-money' => '&#xf0d6; fa-money',
				'fa-moon-o' => '&#xf186; fa-moon-o',
				'fa-motorcycle' => '&#xf21c; fa-motorcycle',
				'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
				'fa-music' => '&#xf001; fa-music',
				'fa-neuter' => '&#xf22c; fa-neuter',
				'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
				'fa-object-group' => '&#xf247; fa-object-group',
				'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
				'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
				'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
				'fa-opencart' => '&#xf23d; fa-opencart',
				'fa-openid' => '&#xf19b; fa-openid',
				'fa-opera' => '&#xf26a; fa-opera',
				'fa-optin-monster' => '&#xf23c; fa-optin-monster',
				'fa-outdent' => '&#xf03b; fa-outdent',
				'fa-pagelines' => '&#xf18c; fa-pagelines',
				'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
				'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
				'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
				'fa-paperclip' => '&#xf0c6; fa-paperclip',
				'fa-paragraph' => '&#xf1dd; fa-paragraph',
				'fa-pause' => '&#xf04c; fa-pause',
				'fa-pause-circle' => '&#xf28b; fa-pause-circle',
				'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
				'fa-paw' => '&#xf1b0; fa-paw',
				'fa-paypal' => '&#xf1ed; fa-paypal',
				'fa-pencil' => '&#xf040; fa-pencil',
				'fa-pencil-square' => '&#xf14b; fa-pencil-square',
				'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
				'fa-percent' => '&#xf295; fa-percent',
				'fa-phone' => '&#xf095; fa-phone',
				'fa-phone-square' => '&#xf098; fa-phone-square',
				'fa-picture-o' => '&#xf03e; fa-picture-o',
				'fa-pie-chart' => '&#xf200; fa-pie-chart',
				'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
				'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
				'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
				'fa-pinterest' => '&#xf0d2; fa-pinterest',
				'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
				'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
				'fa-plane' => '&#xf072; fa-plane',
				'fa-play' => '&#xf04b; fa-play',
				'fa-play-circle' => '&#xf144; fa-play-circle',
				'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
				'fa-plug' => '&#xf1e6; fa-plug',
				'fa-plus' => '&#xf067; fa-plus',
				'fa-plus-circle' => '&#xf055; fa-plus-circle',
				'fa-plus-square' => '&#xf0fe; fa-plus-square',
				'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
				'fa-power-off' => '&#xf011; fa-power-off',
				'fa-print' => '&#xf02f; fa-print',
				'fa-product-hunt' => '&#xf288; fa-product-hunt',
				'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
				'fa-qq' => '&#xf1d6; fa-qq',
				'fa-qrcode' => '&#xf029; fa-qrcode',
				'fa-question' => '&#xf128; fa-question',
				'fa-question-circle' => '&#xf059; fa-question-circle',
				'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
				'fa-quote-left' => '&#xf10d; fa-quote-left',
				'fa-quote-right' => '&#xf10e; fa-quote-right',
				'fa-random' => '&#xf074; fa-random',
				'fa-rebel' => '&#xf1d0; fa-rebel',
				'fa-recycle' => '&#xf1b8; fa-recycle',
				'fa-reddit' => '&#xf1a1; fa-reddit',
				'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
				'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
				'fa-refresh' => '&#xf021; fa-refresh',
				'fa-registered' => '&#xf25d; fa-registered',
				'fa-renren' => '&#xf18b; fa-renren',
				'fa-repeat' => '&#xf01e; fa-repeat',
				'fa-reply' => '&#xf112; fa-reply',
				'fa-reply-all' => '&#xf122; fa-reply-all',
				'fa-retweet' => '&#xf079; fa-retweet',
				'fa-road' => '&#xf018; fa-road',
				'fa-rocket' => '&#xf135; fa-rocket',
				'fa-rss' => '&#xf09e; fa-rss',
				'fa-rss-square' => '&#xf143; fa-rss-square',
				'fa-rub' => '&#xf158; fa-rub',
				'fa-safari' => '&#xf267; fa-safari',
				'fa-scissors' => '&#xf0c4; fa-scissors',
				'fa-scribd' => '&#xf28a; fa-scribd',
				'fa-search' => '&#xf002; fa-search',
				'fa-search-minus' => '&#xf010; fa-search-minus',
				'fa-search-plus' => '&#xf00e; fa-search-plus',
				'fa-sellsy' => '&#xf213; fa-sellsy',
				'fa-server' => '&#xf233; fa-server',
				'fa-share' => '&#xf064; fa-share',
				'fa-share-alt' => '&#xf1e0; fa-share-alt',
				'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
				'fa-share-square' => '&#xf14d; fa-share-square',
				'fa-share-square-o' => '&#xf045; fa-share-square-o',
				'fa-shield' => '&#xf132; fa-shield',
				'fa-ship' => '&#xf21a; fa-ship',
				'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
				'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
				'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
				'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
				'fa-sign-in' => '&#xf090; fa-sign-in',
				'fa-sign-language' => '&#xf2a7; fa-sign-language',
				'fa-sign-out' => '&#xf08b; fa-sign-out',
				'fa-signal' => '&#xf012; fa-signal',
				'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
				'fa-sitemap' => '&#xf0e8; fa-sitemap',
				'fa-skyatlas' => '&#xf216; fa-skyatlas',
				'fa-skype' => '&#xf17e; fa-skype',
				'fa-slack' => '&#xf198; fa-slack',
				'fa-sliders' => '&#xf1de; fa-sliders',
				'fa-slideshare' => '&#xf1e7; fa-slideshare',
				'fa-smile-o' => '&#xf118; fa-smile-o',
				'fa-snapchat' => '&#xf2ab; fa-snapchat',
				'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
				'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
				'fa-sort' => '&#xf0dc; fa-sort',
				'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
				'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
				'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
				'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
				'fa-sort-asc' => '&#xf0de; fa-sort-asc',
				'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
				'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
				'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
				'fa-soundcloud' => '&#xf1be; fa-soundcloud',
				'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
				'fa-spinner' => '&#xf110; fa-spinner',
				'fa-spoon' => '&#xf1b1; fa-spoon',
				'fa-spotify' => '&#xf1bc; fa-spotify',
				'fa-square' => '&#xf0c8; fa-square',
				'fa-square-o' => '&#xf096; fa-square-o',
				'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
				'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
				'fa-star' => '&#xf005; fa-star',
				'fa-star-half' => '&#xf089; fa-star-half',
				'fa-star-half-o' => '&#xf123; fa-star-half-o',
				'fa-star-o' => '&#xf006; fa-star-o',
				'fa-steam' => '&#xf1b6; fa-steam',
				'fa-steam-square' => '&#xf1b7; fa-steam-square',
				'fa-step-backward' => '&#xf048; fa-step-backward',
				'fa-step-forward' => '&#xf051; fa-step-forward',
				'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
				'fa-sticky-note' => '&#xf249; fa-sticky-note',
				'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
				'fa-stop' => '&#xf04d; fa-stop',
				'fa-stop-circle' => '&#xf28d; fa-stop-circle',
				'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
				'fa-street-view' => '&#xf21d; fa-street-view',
				'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
				'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
				'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
				'fa-subscript' => '&#xf12c; fa-subscript',
				'fa-subway' => '&#xf239; fa-subway',
				'fa-suitcase' => '&#xf0f2; fa-suitcase',
				'fa-sun-o' => '&#xf185; fa-sun-o',
				'fa-superscript' => '&#xf12b; fa-superscript',
				'fa-table' => '&#xf0ce; fa-table',
				'fa-tablet' => '&#xf10a; fa-tablet',
				'fa-tachometer' => '&#xf0e4; fa-tachometer',
				'fa-tag' => '&#xf02b; fa-tag',
				'fa-tags' => '&#xf02c; fa-tags',
				'fa-tasks' => '&#xf0ae; fa-tasks',
				'fa-taxi' => '&#xf1ba; fa-taxi',
				'fa-television' => '&#xf26c; fa-television',
				'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
				'fa-terminal' => '&#xf120; fa-terminal',
				'fa-text-height' => '&#xf034; fa-text-height',
				'fa-text-width' => '&#xf035; fa-text-width',
				'fa-th' => '&#xf00a; fa-th',
				'fa-th-large' => '&#xf009; fa-th-large',
				'fa-th-list' => '&#xf00b; fa-th-list',
				'fa-themeisle' => '&#xf2b2; fa-themeisle',
				'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
				'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
				'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
				'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
				'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
				'fa-ticket' => '&#xf145; fa-ticket',
				'fa-times' => '&#xf00d; fa-times',
				'fa-times-circle' => '&#xf057; fa-times-circle',
				'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
				'fa-tint' => '&#xf043; fa-tint',
				'fa-toggle-off' => '&#xf204; fa-toggle-off',
				'fa-toggle-on' => '&#xf205; fa-toggle-on',
				'fa-trademark' => '&#xf25c; fa-trademark',
				'fa-train' => '&#xf238; fa-train',
				'fa-transgender' => '&#xf224; fa-transgender',
				'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
				'fa-trash' => '&#xf1f8; fa-trash',
				'fa-trash-o' => '&#xf014; fa-trash-o',
				'fa-tree' => '&#xf1bb; fa-tree',
				'fa-trello' => '&#xf181; fa-trello',
				'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
				'fa-trophy' => '&#xf091; fa-trophy',
				'fa-truck' => '&#xf0d1; fa-truck',
				'fa-try' => '&#xf195; fa-try',
				'fa-tty' => '&#xf1e4; fa-tty',
				'fa-tumblr' => '&#xf173; fa-tumblr',
				'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
				'fa-twitch' => '&#xf1e8; fa-twitch',
				'fa-twitter' => '&#xf099; fa-twitter',
				'fa-twitter-square' => '&#xf081; fa-twitter-square',
				'fa-umbrella' => '&#xf0e9; fa-umbrella',
				'fa-underline' => '&#xf0cd; fa-underline',
				'fa-undo' => '&#xf0e2; fa-undo',
				'fa-universal-access' => '&#xf29a; fa-universal-access',
				'fa-university' => '&#xf19c; fa-university',
				'fa-unlock' => '&#xf09c; fa-unlock',
				'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
				'fa-upload' => '&#xf093; fa-upload',
				'fa-usb' => '&#xf287; fa-usb',
				'fa-usd' => '&#xf155; fa-usd',
				'fa-user' => '&#xf007; fa-user',
				'fa-user-md' => '&#xf0f0; fa-user-md',
				'fa-user-plus' => '&#xf234; fa-user-plus',
				'fa-user-secret' => '&#xf21b; fa-user-secret',
				'fa-user-times' => '&#xf235; fa-user-times',
				'fa-users' => '&#xf0c0; fa-users',
				'fa-venus' => '&#xf221; fa-venus',
				'fa-venus-double' => '&#xf226; fa-venus-double',
				'fa-venus-mars' => '&#xf228; fa-venus-mars',
				'fa-viacoin' => '&#xf237; fa-viacoin',
				'fa-viadeo' => '&#xf2a9; fa-viadeo',
				'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
				'fa-video-camera' => '&#xf03d; fa-video-camera',
				'fa-vimeo' => '&#xf27d; fa-vimeo',
				'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
				'fa-vine' => '&#xf1ca; fa-vine',
				'fa-vk' => '&#xf189; fa-vk',
				'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
				'fa-volume-down' => '&#xf027; fa-volume-down',
				'fa-volume-off' => '&#xf026; fa-volume-off',
				'fa-volume-up' => '&#xf028; fa-volume-up',
				'fa-weibo' => '&#xf18a; fa-weibo',
				'fa-weixin' => '&#xf1d7; fa-weixin',
				'fa-whatsapp' => '&#xf232; fa-whatsapp',
				'fa-wheelchair' => '&#xf193; fa-wheelchair',
				'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
				'fa-wifi' => '&#xf1eb; fa-wifi',
				'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
				'fa-windows' => '&#xf17a; fa-windows',
				'fa-wordpress' => '&#xf19a; fa-wordpress',
				'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
				'fa-wpforms' => '&#xf298; fa-wpforms',
				'fa-wrench' => '&#xf0ad; fa-wrench',
				'fa-xing' => '&#xf168; fa-xing',
				'fa-xing-square' => '&#xf169; fa-xing-square',
				'fa-y-combinator' => '&#xf23b; fa-y-combinator',
				'fa-yahoo' => '&#xf19e; fa-yahoo',
				'fa-yelp' => '&#xf1e9; fa-yelp',
				'fa-yoast' => '&#xf2b1; fa-yoast',
				'fa-youtube' => '&#xf167; fa-youtube',
				'fa-youtube-play' => '&#xf16a; fa-youtube-play',
				'fa-youtube-square' => '&#xf166; fa-youtube-square',
			),
		),
		array (
			'key' => 'field_572e018785daa',
			'label' => 'Address',
			'name' => 'address',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572e019585dab',
			'label' => 'Email Icon',
			'name' => 'email_icon',
			'type' => 'font-awesome',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'fa-at',
			'save_format' => 'element',
			'allow_null' => 0,
			'enqueue_fa' => 0,
			'fa_live_preview' => '',
			'choices' => array (
				'null' => '- Select -',
				'fa-500px' => '&#xf26e; fa-500px',
				'fa-adjust' => '&#xf042; fa-adjust',
				'fa-adn' => '&#xf170; fa-adn',
				'fa-align-center' => '&#xf037; fa-align-center',
				'fa-align-justify' => '&#xf039; fa-align-justify',
				'fa-align-left' => '&#xf036; fa-align-left',
				'fa-align-right' => '&#xf038; fa-align-right',
				'fa-amazon' => '&#xf270; fa-amazon',
				'fa-ambulance' => '&#xf0f9; fa-ambulance',
				'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
				'fa-anchor' => '&#xf13d; fa-anchor',
				'fa-android' => '&#xf17b; fa-android',
				'fa-angellist' => '&#xf209; fa-angellist',
				'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
				'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
				'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
				'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
				'fa-angle-down' => '&#xf107; fa-angle-down',
				'fa-angle-left' => '&#xf104; fa-angle-left',
				'fa-angle-right' => '&#xf105; fa-angle-right',
				'fa-angle-up' => '&#xf106; fa-angle-up',
				'fa-apple' => '&#xf179; fa-apple',
				'fa-archive' => '&#xf187; fa-archive',
				'fa-area-chart' => '&#xf1fe; fa-area-chart',
				'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
				'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
				'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
				'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
				'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
				'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
				'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
				'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
				'fa-arrow-down' => '&#xf063; fa-arrow-down',
				'fa-arrow-left' => '&#xf060; fa-arrow-left',
				'fa-arrow-right' => '&#xf061; fa-arrow-right',
				'fa-arrow-up' => '&#xf062; fa-arrow-up',
				'fa-arrows' => '&#xf047; fa-arrows',
				'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
				'fa-arrows-h' => '&#xf07e; fa-arrows-h',
				'fa-arrows-v' => '&#xf07d; fa-arrows-v',
				'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
				'fa-asterisk' => '&#xf069; fa-asterisk',
				'fa-at' => '&#xf1fa; fa-at',
				'fa-audio-description' => '&#xf29e; fa-audio-description',
				'fa-backward' => '&#xf04a; fa-backward',
				'fa-balance-scale' => '&#xf24e; fa-balance-scale',
				'fa-ban' => '&#xf05e; fa-ban',
				'fa-bar-chart' => '&#xf080; fa-bar-chart',
				'fa-barcode' => '&#xf02a; fa-barcode',
				'fa-bars' => '&#xf0c9; fa-bars',
				'fa-battery-empty' => '&#xf244; fa-battery-empty',
				'fa-battery-full' => '&#xf240; fa-battery-full',
				'fa-battery-half' => '&#xf242; fa-battery-half',
				'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
				'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
				'fa-bed' => '&#xf236; fa-bed',
				'fa-beer' => '&#xf0fc; fa-beer',
				'fa-behance' => '&#xf1b4; fa-behance',
				'fa-behance-square' => '&#xf1b5; fa-behance-square',
				'fa-bell' => '&#xf0f3; fa-bell',
				'fa-bell-o' => '&#xf0a2; fa-bell-o',
				'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
				'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
				'fa-bicycle' => '&#xf206; fa-bicycle',
				'fa-binoculars' => '&#xf1e5; fa-binoculars',
				'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
				'fa-bitbucket' => '&#xf171; fa-bitbucket',
				'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
				'fa-black-tie' => '&#xf27e; fa-black-tie',
				'fa-blind' => '&#xf29d; fa-blind',
				'fa-bluetooth' => '&#xf293; fa-bluetooth',
				'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
				'fa-bold' => '&#xf032; fa-bold',
				'fa-bolt' => '&#xf0e7; fa-bolt',
				'fa-bomb' => '&#xf1e2; fa-bomb',
				'fa-book' => '&#xf02d; fa-book',
				'fa-bookmark' => '&#xf02e; fa-bookmark',
				'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
				'fa-braille' => '&#xf2a1; fa-braille',
				'fa-briefcase' => '&#xf0b1; fa-briefcase',
				'fa-btc' => '&#xf15a; fa-btc',
				'fa-bug' => '&#xf188; fa-bug',
				'fa-building' => '&#xf1ad; fa-building',
				'fa-building-o' => '&#xf0f7; fa-building-o',
				'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
				'fa-bullseye' => '&#xf140; fa-bullseye',
				'fa-bus' => '&#xf207; fa-bus',
				'fa-buysellads' => '&#xf20d; fa-buysellads',
				'fa-calculator' => '&#xf1ec; fa-calculator',
				'fa-calendar' => '&#xf073; fa-calendar',
				'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
				'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
				'fa-calendar-o' => '&#xf133; fa-calendar-o',
				'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
				'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
				'fa-camera' => '&#xf030; fa-camera',
				'fa-camera-retro' => '&#xf083; fa-camera-retro',
				'fa-car' => '&#xf1b9; fa-car',
				'fa-caret-down' => '&#xf0d7; fa-caret-down',
				'fa-caret-left' => '&#xf0d9; fa-caret-left',
				'fa-caret-right' => '&#xf0da; fa-caret-right',
				'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
				'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
				'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
				'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
				'fa-caret-up' => '&#xf0d8; fa-caret-up',
				'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
				'fa-cart-plus' => '&#xf217; fa-cart-plus',
				'fa-cc' => '&#xf20a; fa-cc',
				'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
				'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
				'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
				'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
				'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
				'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
				'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
				'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
				'fa-certificate' => '&#xf0a3; fa-certificate',
				'fa-chain-broken' => '&#xf127; fa-chain-broken',
				'fa-check' => '&#xf00c; fa-check',
				'fa-check-circle' => '&#xf058; fa-check-circle',
				'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
				'fa-check-square' => '&#xf14a; fa-check-square',
				'fa-check-square-o' => '&#xf046; fa-check-square-o',
				'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
				'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
				'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
				'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
				'fa-chevron-down' => '&#xf078; fa-chevron-down',
				'fa-chevron-left' => '&#xf053; fa-chevron-left',
				'fa-chevron-right' => '&#xf054; fa-chevron-right',
				'fa-chevron-up' => '&#xf077; fa-chevron-up',
				'fa-child' => '&#xf1ae; fa-child',
				'fa-chrome' => '&#xf268; fa-chrome',
				'fa-circle' => '&#xf111; fa-circle',
				'fa-circle-o' => '&#xf10c; fa-circle-o',
				'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
				'fa-circle-thin' => '&#xf1db; fa-circle-thin',
				'fa-clipboard' => '&#xf0ea; fa-clipboard',
				'fa-clock-o' => '&#xf017; fa-clock-o',
				'fa-clone' => '&#xf24d; fa-clone',
				'fa-cloud' => '&#xf0c2; fa-cloud',
				'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
				'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
				'fa-code' => '&#xf121; fa-code',
				'fa-code-fork' => '&#xf126; fa-code-fork',
				'fa-codepen' => '&#xf1cb; fa-codepen',
				'fa-codiepie' => '&#xf284; fa-codiepie',
				'fa-coffee' => '&#xf0f4; fa-coffee',
				'fa-cog' => '&#xf013; fa-cog',
				'fa-cogs' => '&#xf085; fa-cogs',
				'fa-columns' => '&#xf0db; fa-columns',
				'fa-comment' => '&#xf075; fa-comment',
				'fa-comment-o' => '&#xf0e5; fa-comment-o',
				'fa-commenting' => '&#xf27a; fa-commenting',
				'fa-commenting-o' => '&#xf27b; fa-commenting-o',
				'fa-comments' => '&#xf086; fa-comments',
				'fa-comments-o' => '&#xf0e6; fa-comments-o',
				'fa-compass' => '&#xf14e; fa-compass',
				'fa-compress' => '&#xf066; fa-compress',
				'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
				'fa-contao' => '&#xf26d; fa-contao',
				'fa-copyright' => '&#xf1f9; fa-copyright',
				'fa-creative-commons' => '&#xf25e; fa-creative-commons',
				'fa-credit-card' => '&#xf09d; fa-credit-card',
				'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
				'fa-crop' => '&#xf125; fa-crop',
				'fa-crosshairs' => '&#xf05b; fa-crosshairs',
				'fa-css3' => '&#xf13c; fa-css3',
				'fa-cube' => '&#xf1b2; fa-cube',
				'fa-cubes' => '&#xf1b3; fa-cubes',
				'fa-cutlery' => '&#xf0f5; fa-cutlery',
				'fa-dashcube' => '&#xf210; fa-dashcube',
				'fa-database' => '&#xf1c0; fa-database',
				'fa-deaf' => '&#xf2a4; fa-deaf',
				'fa-delicious' => '&#xf1a5; fa-delicious',
				'fa-desktop' => '&#xf108; fa-desktop',
				'fa-deviantart' => '&#xf1bd; fa-deviantart',
				'fa-diamond' => '&#xf219; fa-diamond',
				'fa-digg' => '&#xf1a6; fa-digg',
				'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
				'fa-download' => '&#xf019; fa-download',
				'fa-dribbble' => '&#xf17d; fa-dribbble',
				'fa-dropbox' => '&#xf16b; fa-dropbox',
				'fa-drupal' => '&#xf1a9; fa-drupal',
				'fa-edge' => '&#xf282; fa-edge',
				'fa-eject' => '&#xf052; fa-eject',
				'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
				'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
				'fa-empire' => '&#xf1d1; fa-empire',
				'fa-envelope' => '&#xf0e0; fa-envelope',
				'fa-envelope-o' => '&#xf003; fa-envelope-o',
				'fa-envelope-square' => '&#xf199; fa-envelope-square',
				'fa-envira' => '&#xf299; fa-envira',
				'fa-eraser' => '&#xf12d; fa-eraser',
				'fa-eur' => '&#xf153; fa-eur',
				'fa-exchange' => '&#xf0ec; fa-exchange',
				'fa-exclamation' => '&#xf12a; fa-exclamation',
				'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
				'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
				'fa-expand' => '&#xf065; fa-expand',
				'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
				'fa-external-link' => '&#xf08e; fa-external-link',
				'fa-external-link-square' => '&#xf14c; fa-external-link-square',
				'fa-eye' => '&#xf06e; fa-eye',
				'fa-eye-slash' => '&#xf070; fa-eye-slash',
				'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
				'fa-facebook' => '&#xf09a; fa-facebook',
				'fa-facebook-official' => '&#xf230; fa-facebook-official',
				'fa-facebook-square' => '&#xf082; fa-facebook-square',
				'fa-fast-backward' => '&#xf049; fa-fast-backward',
				'fa-fast-forward' => '&#xf050; fa-fast-forward',
				'fa-fax' => '&#xf1ac; fa-fax',
				'fa-female' => '&#xf182; fa-female',
				'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
				'fa-file' => '&#xf15b; fa-file',
				'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
				'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
				'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
				'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
				'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
				'fa-file-o' => '&#xf016; fa-file-o',
				'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
				'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
				'fa-file-text' => '&#xf15c; fa-file-text',
				'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
				'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
				'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
				'fa-files-o' => '&#xf0c5; fa-files-o',
				'fa-film' => '&#xf008; fa-film',
				'fa-filter' => '&#xf0b0; fa-filter',
				'fa-fire' => '&#xf06d; fa-fire',
				'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
				'fa-firefox' => '&#xf269; fa-firefox',
				'fa-first-order' => '&#xf2b0; fa-first-order',
				'fa-flag' => '&#xf024; fa-flag',
				'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
				'fa-flag-o' => '&#xf11d; fa-flag-o',
				'fa-flask' => '&#xf0c3; fa-flask',
				'fa-flickr' => '&#xf16e; fa-flickr',
				'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
				'fa-folder' => '&#xf07b; fa-folder',
				'fa-folder-o' => '&#xf114; fa-folder-o',
				'fa-folder-open' => '&#xf07c; fa-folder-open',
				'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
				'fa-font' => '&#xf031; fa-font',
				'fa-fonticons' => '&#xf280; fa-fonticons',
				'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
				'fa-forumbee' => '&#xf211; fa-forumbee',
				'fa-forward' => '&#xf04e; fa-forward',
				'fa-foursquare' => '&#xf180; fa-foursquare',
				'fa-frown-o' => '&#xf119; fa-frown-o',
				'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
				'fa-gamepad' => '&#xf11b; fa-gamepad',
				'fa-gavel' => '&#xf0e3; fa-gavel',
				'fa-gbp' => '&#xf154; fa-gbp',
				'fa-genderless' => '&#xf22d; fa-genderless',
				'fa-get-pocket' => '&#xf265; fa-get-pocket',
				'fa-gg' => '&#xf260; fa-gg',
				'fa-gg-circle' => '&#xf261; fa-gg-circle',
				'fa-gift' => '&#xf06b; fa-gift',
				'fa-git' => '&#xf1d3; fa-git',
				'fa-git-square' => '&#xf1d2; fa-git-square',
				'fa-github' => '&#xf09b; fa-github',
				'fa-github-alt' => '&#xf113; fa-github-alt',
				'fa-github-square' => '&#xf092; fa-github-square',
				'fa-gitlab' => '&#xf296; fa-gitlab',
				'fa-glass' => '&#xf000; fa-glass',
				'fa-glide' => '&#xf2a5; fa-glide',
				'fa-glide-g' => '&#xf2a6; fa-glide-g',
				'fa-globe' => '&#xf0ac; fa-globe',
				'fa-google' => '&#xf1a0; fa-google',
				'fa-google-plus' => '&#xf0d5; fa-google-plus',
				'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
				'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
				'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
				'fa-gratipay' => '&#xf184; fa-gratipay',
				'fa-h-square' => '&#xf0fd; fa-h-square',
				'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
				'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
				'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
				'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
				'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
				'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
				'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
				'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
				'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
				'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
				'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
				'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
				'fa-hashtag' => '&#xf292; fa-hashtag',
				'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
				'fa-header' => '&#xf1dc; fa-header',
				'fa-headphones' => '&#xf025; fa-headphones',
				'fa-heart' => '&#xf004; fa-heart',
				'fa-heart-o' => '&#xf08a; fa-heart-o',
				'fa-heartbeat' => '&#xf21e; fa-heartbeat',
				'fa-history' => '&#xf1da; fa-history',
				'fa-home' => '&#xf015; fa-home',
				'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
				'fa-hourglass' => '&#xf254; fa-hourglass',
				'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
				'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
				'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
				'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
				'fa-houzz' => '&#xf27c; fa-houzz',
				'fa-html5' => '&#xf13b; fa-html5',
				'fa-i-cursor' => '&#xf246; fa-i-cursor',
				'fa-ils' => '&#xf20b; fa-ils',
				'fa-inbox' => '&#xf01c; fa-inbox',
				'fa-indent' => '&#xf03c; fa-indent',
				'fa-industry' => '&#xf275; fa-industry',
				'fa-info' => '&#xf129; fa-info',
				'fa-info-circle' => '&#xf05a; fa-info-circle',
				'fa-inr' => '&#xf156; fa-inr',
				'fa-instagram' => '&#xf16d; fa-instagram',
				'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
				'fa-ioxhost' => '&#xf208; fa-ioxhost',
				'fa-italic' => '&#xf033; fa-italic',
				'fa-joomla' => '&#xf1aa; fa-joomla',
				'fa-jpy' => '&#xf157; fa-jpy',
				'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
				'fa-key' => '&#xf084; fa-key',
				'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
				'fa-krw' => '&#xf159; fa-krw',
				'fa-language' => '&#xf1ab; fa-language',
				'fa-laptop' => '&#xf109; fa-laptop',
				'fa-lastfm' => '&#xf202; fa-lastfm',
				'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
				'fa-leaf' => '&#xf06c; fa-leaf',
				'fa-leanpub' => '&#xf212; fa-leanpub',
				'fa-lemon-o' => '&#xf094; fa-lemon-o',
				'fa-level-down' => '&#xf149; fa-level-down',
				'fa-level-up' => '&#xf148; fa-level-up',
				'fa-life-ring' => '&#xf1cd; fa-life-ring',
				'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
				'fa-line-chart' => '&#xf201; fa-line-chart',
				'fa-link' => '&#xf0c1; fa-link',
				'fa-linkedin' => '&#xf0e1; fa-linkedin',
				'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
				'fa-linux' => '&#xf17c; fa-linux',
				'fa-list' => '&#xf03a; fa-list',
				'fa-list-alt' => '&#xf022; fa-list-alt',
				'fa-list-ol' => '&#xf0cb; fa-list-ol',
				'fa-list-ul' => '&#xf0ca; fa-list-ul',
				'fa-location-arrow' => '&#xf124; fa-location-arrow',
				'fa-lock' => '&#xf023; fa-lock',
				'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
				'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
				'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
				'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
				'fa-low-vision' => '&#xf2a8; fa-low-vision',
				'fa-magic' => '&#xf0d0; fa-magic',
				'fa-magnet' => '&#xf076; fa-magnet',
				'fa-male' => '&#xf183; fa-male',
				'fa-map' => '&#xf279; fa-map',
				'fa-map-marker' => '&#xf041; fa-map-marker',
				'fa-map-o' => '&#xf278; fa-map-o',
				'fa-map-pin' => '&#xf276; fa-map-pin',
				'fa-map-signs' => '&#xf277; fa-map-signs',
				'fa-mars' => '&#xf222; fa-mars',
				'fa-mars-double' => '&#xf227; fa-mars-double',
				'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
				'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
				'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
				'fa-maxcdn' => '&#xf136; fa-maxcdn',
				'fa-meanpath' => '&#xf20c; fa-meanpath',
				'fa-medium' => '&#xf23a; fa-medium',
				'fa-medkit' => '&#xf0fa; fa-medkit',
				'fa-meh-o' => '&#xf11a; fa-meh-o',
				'fa-mercury' => '&#xf223; fa-mercury',
				'fa-microphone' => '&#xf130; fa-microphone',
				'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
				'fa-minus' => '&#xf068; fa-minus',
				'fa-minus-circle' => '&#xf056; fa-minus-circle',
				'fa-minus-square' => '&#xf146; fa-minus-square',
				'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
				'fa-mixcloud' => '&#xf289; fa-mixcloud',
				'fa-mobile' => '&#xf10b; fa-mobile',
				'fa-modx' => '&#xf285; fa-modx',
				'fa-money' => '&#xf0d6; fa-money',
				'fa-moon-o' => '&#xf186; fa-moon-o',
				'fa-motorcycle' => '&#xf21c; fa-motorcycle',
				'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
				'fa-music' => '&#xf001; fa-music',
				'fa-neuter' => '&#xf22c; fa-neuter',
				'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
				'fa-object-group' => '&#xf247; fa-object-group',
				'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
				'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
				'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
				'fa-opencart' => '&#xf23d; fa-opencart',
				'fa-openid' => '&#xf19b; fa-openid',
				'fa-opera' => '&#xf26a; fa-opera',
				'fa-optin-monster' => '&#xf23c; fa-optin-monster',
				'fa-outdent' => '&#xf03b; fa-outdent',
				'fa-pagelines' => '&#xf18c; fa-pagelines',
				'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
				'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
				'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
				'fa-paperclip' => '&#xf0c6; fa-paperclip',
				'fa-paragraph' => '&#xf1dd; fa-paragraph',
				'fa-pause' => '&#xf04c; fa-pause',
				'fa-pause-circle' => '&#xf28b; fa-pause-circle',
				'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
				'fa-paw' => '&#xf1b0; fa-paw',
				'fa-paypal' => '&#xf1ed; fa-paypal',
				'fa-pencil' => '&#xf040; fa-pencil',
				'fa-pencil-square' => '&#xf14b; fa-pencil-square',
				'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
				'fa-percent' => '&#xf295; fa-percent',
				'fa-phone' => '&#xf095; fa-phone',
				'fa-phone-square' => '&#xf098; fa-phone-square',
				'fa-picture-o' => '&#xf03e; fa-picture-o',
				'fa-pie-chart' => '&#xf200; fa-pie-chart',
				'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
				'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
				'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
				'fa-pinterest' => '&#xf0d2; fa-pinterest',
				'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
				'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
				'fa-plane' => '&#xf072; fa-plane',
				'fa-play' => '&#xf04b; fa-play',
				'fa-play-circle' => '&#xf144; fa-play-circle',
				'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
				'fa-plug' => '&#xf1e6; fa-plug',
				'fa-plus' => '&#xf067; fa-plus',
				'fa-plus-circle' => '&#xf055; fa-plus-circle',
				'fa-plus-square' => '&#xf0fe; fa-plus-square',
				'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
				'fa-power-off' => '&#xf011; fa-power-off',
				'fa-print' => '&#xf02f; fa-print',
				'fa-product-hunt' => '&#xf288; fa-product-hunt',
				'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
				'fa-qq' => '&#xf1d6; fa-qq',
				'fa-qrcode' => '&#xf029; fa-qrcode',
				'fa-question' => '&#xf128; fa-question',
				'fa-question-circle' => '&#xf059; fa-question-circle',
				'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
				'fa-quote-left' => '&#xf10d; fa-quote-left',
				'fa-quote-right' => '&#xf10e; fa-quote-right',
				'fa-random' => '&#xf074; fa-random',
				'fa-rebel' => '&#xf1d0; fa-rebel',
				'fa-recycle' => '&#xf1b8; fa-recycle',
				'fa-reddit' => '&#xf1a1; fa-reddit',
				'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
				'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
				'fa-refresh' => '&#xf021; fa-refresh',
				'fa-registered' => '&#xf25d; fa-registered',
				'fa-renren' => '&#xf18b; fa-renren',
				'fa-repeat' => '&#xf01e; fa-repeat',
				'fa-reply' => '&#xf112; fa-reply',
				'fa-reply-all' => '&#xf122; fa-reply-all',
				'fa-retweet' => '&#xf079; fa-retweet',
				'fa-road' => '&#xf018; fa-road',
				'fa-rocket' => '&#xf135; fa-rocket',
				'fa-rss' => '&#xf09e; fa-rss',
				'fa-rss-square' => '&#xf143; fa-rss-square',
				'fa-rub' => '&#xf158; fa-rub',
				'fa-safari' => '&#xf267; fa-safari',
				'fa-scissors' => '&#xf0c4; fa-scissors',
				'fa-scribd' => '&#xf28a; fa-scribd',
				'fa-search' => '&#xf002; fa-search',
				'fa-search-minus' => '&#xf010; fa-search-minus',
				'fa-search-plus' => '&#xf00e; fa-search-plus',
				'fa-sellsy' => '&#xf213; fa-sellsy',
				'fa-server' => '&#xf233; fa-server',
				'fa-share' => '&#xf064; fa-share',
				'fa-share-alt' => '&#xf1e0; fa-share-alt',
				'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
				'fa-share-square' => '&#xf14d; fa-share-square',
				'fa-share-square-o' => '&#xf045; fa-share-square-o',
				'fa-shield' => '&#xf132; fa-shield',
				'fa-ship' => '&#xf21a; fa-ship',
				'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
				'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
				'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
				'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
				'fa-sign-in' => '&#xf090; fa-sign-in',
				'fa-sign-language' => '&#xf2a7; fa-sign-language',
				'fa-sign-out' => '&#xf08b; fa-sign-out',
				'fa-signal' => '&#xf012; fa-signal',
				'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
				'fa-sitemap' => '&#xf0e8; fa-sitemap',
				'fa-skyatlas' => '&#xf216; fa-skyatlas',
				'fa-skype' => '&#xf17e; fa-skype',
				'fa-slack' => '&#xf198; fa-slack',
				'fa-sliders' => '&#xf1de; fa-sliders',
				'fa-slideshare' => '&#xf1e7; fa-slideshare',
				'fa-smile-o' => '&#xf118; fa-smile-o',
				'fa-snapchat' => '&#xf2ab; fa-snapchat',
				'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
				'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
				'fa-sort' => '&#xf0dc; fa-sort',
				'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
				'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
				'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
				'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
				'fa-sort-asc' => '&#xf0de; fa-sort-asc',
				'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
				'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
				'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
				'fa-soundcloud' => '&#xf1be; fa-soundcloud',
				'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
				'fa-spinner' => '&#xf110; fa-spinner',
				'fa-spoon' => '&#xf1b1; fa-spoon',
				'fa-spotify' => '&#xf1bc; fa-spotify',
				'fa-square' => '&#xf0c8; fa-square',
				'fa-square-o' => '&#xf096; fa-square-o',
				'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
				'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
				'fa-star' => '&#xf005; fa-star',
				'fa-star-half' => '&#xf089; fa-star-half',
				'fa-star-half-o' => '&#xf123; fa-star-half-o',
				'fa-star-o' => '&#xf006; fa-star-o',
				'fa-steam' => '&#xf1b6; fa-steam',
				'fa-steam-square' => '&#xf1b7; fa-steam-square',
				'fa-step-backward' => '&#xf048; fa-step-backward',
				'fa-step-forward' => '&#xf051; fa-step-forward',
				'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
				'fa-sticky-note' => '&#xf249; fa-sticky-note',
				'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
				'fa-stop' => '&#xf04d; fa-stop',
				'fa-stop-circle' => '&#xf28d; fa-stop-circle',
				'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
				'fa-street-view' => '&#xf21d; fa-street-view',
				'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
				'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
				'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
				'fa-subscript' => '&#xf12c; fa-subscript',
				'fa-subway' => '&#xf239; fa-subway',
				'fa-suitcase' => '&#xf0f2; fa-suitcase',
				'fa-sun-o' => '&#xf185; fa-sun-o',
				'fa-superscript' => '&#xf12b; fa-superscript',
				'fa-table' => '&#xf0ce; fa-table',
				'fa-tablet' => '&#xf10a; fa-tablet',
				'fa-tachometer' => '&#xf0e4; fa-tachometer',
				'fa-tag' => '&#xf02b; fa-tag',
				'fa-tags' => '&#xf02c; fa-tags',
				'fa-tasks' => '&#xf0ae; fa-tasks',
				'fa-taxi' => '&#xf1ba; fa-taxi',
				'fa-television' => '&#xf26c; fa-television',
				'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
				'fa-terminal' => '&#xf120; fa-terminal',
				'fa-text-height' => '&#xf034; fa-text-height',
				'fa-text-width' => '&#xf035; fa-text-width',
				'fa-th' => '&#xf00a; fa-th',
				'fa-th-large' => '&#xf009; fa-th-large',
				'fa-th-list' => '&#xf00b; fa-th-list',
				'fa-themeisle' => '&#xf2b2; fa-themeisle',
				'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
				'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
				'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
				'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
				'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
				'fa-ticket' => '&#xf145; fa-ticket',
				'fa-times' => '&#xf00d; fa-times',
				'fa-times-circle' => '&#xf057; fa-times-circle',
				'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
				'fa-tint' => '&#xf043; fa-tint',
				'fa-toggle-off' => '&#xf204; fa-toggle-off',
				'fa-toggle-on' => '&#xf205; fa-toggle-on',
				'fa-trademark' => '&#xf25c; fa-trademark',
				'fa-train' => '&#xf238; fa-train',
				'fa-transgender' => '&#xf224; fa-transgender',
				'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
				'fa-trash' => '&#xf1f8; fa-trash',
				'fa-trash-o' => '&#xf014; fa-trash-o',
				'fa-tree' => '&#xf1bb; fa-tree',
				'fa-trello' => '&#xf181; fa-trello',
				'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
				'fa-trophy' => '&#xf091; fa-trophy',
				'fa-truck' => '&#xf0d1; fa-truck',
				'fa-try' => '&#xf195; fa-try',
				'fa-tty' => '&#xf1e4; fa-tty',
				'fa-tumblr' => '&#xf173; fa-tumblr',
				'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
				'fa-twitch' => '&#xf1e8; fa-twitch',
				'fa-twitter' => '&#xf099; fa-twitter',
				'fa-twitter-square' => '&#xf081; fa-twitter-square',
				'fa-umbrella' => '&#xf0e9; fa-umbrella',
				'fa-underline' => '&#xf0cd; fa-underline',
				'fa-undo' => '&#xf0e2; fa-undo',
				'fa-universal-access' => '&#xf29a; fa-universal-access',
				'fa-university' => '&#xf19c; fa-university',
				'fa-unlock' => '&#xf09c; fa-unlock',
				'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
				'fa-upload' => '&#xf093; fa-upload',
				'fa-usb' => '&#xf287; fa-usb',
				'fa-usd' => '&#xf155; fa-usd',
				'fa-user' => '&#xf007; fa-user',
				'fa-user-md' => '&#xf0f0; fa-user-md',
				'fa-user-plus' => '&#xf234; fa-user-plus',
				'fa-user-secret' => '&#xf21b; fa-user-secret',
				'fa-user-times' => '&#xf235; fa-user-times',
				'fa-users' => '&#xf0c0; fa-users',
				'fa-venus' => '&#xf221; fa-venus',
				'fa-venus-double' => '&#xf226; fa-venus-double',
				'fa-venus-mars' => '&#xf228; fa-venus-mars',
				'fa-viacoin' => '&#xf237; fa-viacoin',
				'fa-viadeo' => '&#xf2a9; fa-viadeo',
				'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
				'fa-video-camera' => '&#xf03d; fa-video-camera',
				'fa-vimeo' => '&#xf27d; fa-vimeo',
				'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
				'fa-vine' => '&#xf1ca; fa-vine',
				'fa-vk' => '&#xf189; fa-vk',
				'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
				'fa-volume-down' => '&#xf027; fa-volume-down',
				'fa-volume-off' => '&#xf026; fa-volume-off',
				'fa-volume-up' => '&#xf028; fa-volume-up',
				'fa-weibo' => '&#xf18a; fa-weibo',
				'fa-weixin' => '&#xf1d7; fa-weixin',
				'fa-whatsapp' => '&#xf232; fa-whatsapp',
				'fa-wheelchair' => '&#xf193; fa-wheelchair',
				'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
				'fa-wifi' => '&#xf1eb; fa-wifi',
				'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
				'fa-windows' => '&#xf17a; fa-windows',
				'fa-wordpress' => '&#xf19a; fa-wordpress',
				'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
				'fa-wpforms' => '&#xf298; fa-wpforms',
				'fa-wrench' => '&#xf0ad; fa-wrench',
				'fa-xing' => '&#xf168; fa-xing',
				'fa-xing-square' => '&#xf169; fa-xing-square',
				'fa-y-combinator' => '&#xf23b; fa-y-combinator',
				'fa-yahoo' => '&#xf19e; fa-yahoo',
				'fa-yelp' => '&#xf1e9; fa-yelp',
				'fa-yoast' => '&#xf2b1; fa-yoast',
				'fa-youtube' => '&#xf167; fa-youtube',
				'fa-youtube-play' => '&#xf16a; fa-youtube-play',
				'fa-youtube-square' => '&#xf166; fa-youtube-square',
			),
		),
		array (
			'key' => 'field_572e01d885dac',
			'label' => 'Email',
			'name' => 'email',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_572e01eb85dad',
			'label' => 'Phone Icon',
			'name' => 'phone_icon',
			'type' => 'font-awesome',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'fa-phone',
			'save_format' => 'element',
			'allow_null' => 0,
			'enqueue_fa' => 0,
			'fa_live_preview' => '',
			'choices' => array (
				'null' => '- Select -',
				'fa-500px' => '&#xf26e; fa-500px',
				'fa-adjust' => '&#xf042; fa-adjust',
				'fa-adn' => '&#xf170; fa-adn',
				'fa-align-center' => '&#xf037; fa-align-center',
				'fa-align-justify' => '&#xf039; fa-align-justify',
				'fa-align-left' => '&#xf036; fa-align-left',
				'fa-align-right' => '&#xf038; fa-align-right',
				'fa-amazon' => '&#xf270; fa-amazon',
				'fa-ambulance' => '&#xf0f9; fa-ambulance',
				'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
				'fa-anchor' => '&#xf13d; fa-anchor',
				'fa-android' => '&#xf17b; fa-android',
				'fa-angellist' => '&#xf209; fa-angellist',
				'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
				'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
				'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
				'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
				'fa-angle-down' => '&#xf107; fa-angle-down',
				'fa-angle-left' => '&#xf104; fa-angle-left',
				'fa-angle-right' => '&#xf105; fa-angle-right',
				'fa-angle-up' => '&#xf106; fa-angle-up',
				'fa-apple' => '&#xf179; fa-apple',
				'fa-archive' => '&#xf187; fa-archive',
				'fa-area-chart' => '&#xf1fe; fa-area-chart',
				'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
				'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
				'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
				'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
				'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
				'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
				'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
				'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
				'fa-arrow-down' => '&#xf063; fa-arrow-down',
				'fa-arrow-left' => '&#xf060; fa-arrow-left',
				'fa-arrow-right' => '&#xf061; fa-arrow-right',
				'fa-arrow-up' => '&#xf062; fa-arrow-up',
				'fa-arrows' => '&#xf047; fa-arrows',
				'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
				'fa-arrows-h' => '&#xf07e; fa-arrows-h',
				'fa-arrows-v' => '&#xf07d; fa-arrows-v',
				'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
				'fa-asterisk' => '&#xf069; fa-asterisk',
				'fa-at' => '&#xf1fa; fa-at',
				'fa-audio-description' => '&#xf29e; fa-audio-description',
				'fa-backward' => '&#xf04a; fa-backward',
				'fa-balance-scale' => '&#xf24e; fa-balance-scale',
				'fa-ban' => '&#xf05e; fa-ban',
				'fa-bar-chart' => '&#xf080; fa-bar-chart',
				'fa-barcode' => '&#xf02a; fa-barcode',
				'fa-bars' => '&#xf0c9; fa-bars',
				'fa-battery-empty' => '&#xf244; fa-battery-empty',
				'fa-battery-full' => '&#xf240; fa-battery-full',
				'fa-battery-half' => '&#xf242; fa-battery-half',
				'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
				'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
				'fa-bed' => '&#xf236; fa-bed',
				'fa-beer' => '&#xf0fc; fa-beer',
				'fa-behance' => '&#xf1b4; fa-behance',
				'fa-behance-square' => '&#xf1b5; fa-behance-square',
				'fa-bell' => '&#xf0f3; fa-bell',
				'fa-bell-o' => '&#xf0a2; fa-bell-o',
				'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
				'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
				'fa-bicycle' => '&#xf206; fa-bicycle',
				'fa-binoculars' => '&#xf1e5; fa-binoculars',
				'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
				'fa-bitbucket' => '&#xf171; fa-bitbucket',
				'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
				'fa-black-tie' => '&#xf27e; fa-black-tie',
				'fa-blind' => '&#xf29d; fa-blind',
				'fa-bluetooth' => '&#xf293; fa-bluetooth',
				'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
				'fa-bold' => '&#xf032; fa-bold',
				'fa-bolt' => '&#xf0e7; fa-bolt',
				'fa-bomb' => '&#xf1e2; fa-bomb',
				'fa-book' => '&#xf02d; fa-book',
				'fa-bookmark' => '&#xf02e; fa-bookmark',
				'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
				'fa-braille' => '&#xf2a1; fa-braille',
				'fa-briefcase' => '&#xf0b1; fa-briefcase',
				'fa-btc' => '&#xf15a; fa-btc',
				'fa-bug' => '&#xf188; fa-bug',
				'fa-building' => '&#xf1ad; fa-building',
				'fa-building-o' => '&#xf0f7; fa-building-o',
				'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
				'fa-bullseye' => '&#xf140; fa-bullseye',
				'fa-bus' => '&#xf207; fa-bus',
				'fa-buysellads' => '&#xf20d; fa-buysellads',
				'fa-calculator' => '&#xf1ec; fa-calculator',
				'fa-calendar' => '&#xf073; fa-calendar',
				'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
				'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
				'fa-calendar-o' => '&#xf133; fa-calendar-o',
				'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
				'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
				'fa-camera' => '&#xf030; fa-camera',
				'fa-camera-retro' => '&#xf083; fa-camera-retro',
				'fa-car' => '&#xf1b9; fa-car',
				'fa-caret-down' => '&#xf0d7; fa-caret-down',
				'fa-caret-left' => '&#xf0d9; fa-caret-left',
				'fa-caret-right' => '&#xf0da; fa-caret-right',
				'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
				'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
				'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
				'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
				'fa-caret-up' => '&#xf0d8; fa-caret-up',
				'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
				'fa-cart-plus' => '&#xf217; fa-cart-plus',
				'fa-cc' => '&#xf20a; fa-cc',
				'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
				'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
				'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
				'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
				'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
				'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
				'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
				'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
				'fa-certificate' => '&#xf0a3; fa-certificate',
				'fa-chain-broken' => '&#xf127; fa-chain-broken',
				'fa-check' => '&#xf00c; fa-check',
				'fa-check-circle' => '&#xf058; fa-check-circle',
				'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
				'fa-check-square' => '&#xf14a; fa-check-square',
				'fa-check-square-o' => '&#xf046; fa-check-square-o',
				'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
				'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
				'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
				'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
				'fa-chevron-down' => '&#xf078; fa-chevron-down',
				'fa-chevron-left' => '&#xf053; fa-chevron-left',
				'fa-chevron-right' => '&#xf054; fa-chevron-right',
				'fa-chevron-up' => '&#xf077; fa-chevron-up',
				'fa-child' => '&#xf1ae; fa-child',
				'fa-chrome' => '&#xf268; fa-chrome',
				'fa-circle' => '&#xf111; fa-circle',
				'fa-circle-o' => '&#xf10c; fa-circle-o',
				'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
				'fa-circle-thin' => '&#xf1db; fa-circle-thin',
				'fa-clipboard' => '&#xf0ea; fa-clipboard',
				'fa-clock-o' => '&#xf017; fa-clock-o',
				'fa-clone' => '&#xf24d; fa-clone',
				'fa-cloud' => '&#xf0c2; fa-cloud',
				'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
				'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
				'fa-code' => '&#xf121; fa-code',
				'fa-code-fork' => '&#xf126; fa-code-fork',
				'fa-codepen' => '&#xf1cb; fa-codepen',
				'fa-codiepie' => '&#xf284; fa-codiepie',
				'fa-coffee' => '&#xf0f4; fa-coffee',
				'fa-cog' => '&#xf013; fa-cog',
				'fa-cogs' => '&#xf085; fa-cogs',
				'fa-columns' => '&#xf0db; fa-columns',
				'fa-comment' => '&#xf075; fa-comment',
				'fa-comment-o' => '&#xf0e5; fa-comment-o',
				'fa-commenting' => '&#xf27a; fa-commenting',
				'fa-commenting-o' => '&#xf27b; fa-commenting-o',
				'fa-comments' => '&#xf086; fa-comments',
				'fa-comments-o' => '&#xf0e6; fa-comments-o',
				'fa-compass' => '&#xf14e; fa-compass',
				'fa-compress' => '&#xf066; fa-compress',
				'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
				'fa-contao' => '&#xf26d; fa-contao',
				'fa-copyright' => '&#xf1f9; fa-copyright',
				'fa-creative-commons' => '&#xf25e; fa-creative-commons',
				'fa-credit-card' => '&#xf09d; fa-credit-card',
				'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
				'fa-crop' => '&#xf125; fa-crop',
				'fa-crosshairs' => '&#xf05b; fa-crosshairs',
				'fa-css3' => '&#xf13c; fa-css3',
				'fa-cube' => '&#xf1b2; fa-cube',
				'fa-cubes' => '&#xf1b3; fa-cubes',
				'fa-cutlery' => '&#xf0f5; fa-cutlery',
				'fa-dashcube' => '&#xf210; fa-dashcube',
				'fa-database' => '&#xf1c0; fa-database',
				'fa-deaf' => '&#xf2a4; fa-deaf',
				'fa-delicious' => '&#xf1a5; fa-delicious',
				'fa-desktop' => '&#xf108; fa-desktop',
				'fa-deviantart' => '&#xf1bd; fa-deviantart',
				'fa-diamond' => '&#xf219; fa-diamond',
				'fa-digg' => '&#xf1a6; fa-digg',
				'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
				'fa-download' => '&#xf019; fa-download',
				'fa-dribbble' => '&#xf17d; fa-dribbble',
				'fa-dropbox' => '&#xf16b; fa-dropbox',
				'fa-drupal' => '&#xf1a9; fa-drupal',
				'fa-edge' => '&#xf282; fa-edge',
				'fa-eject' => '&#xf052; fa-eject',
				'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
				'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
				'fa-empire' => '&#xf1d1; fa-empire',
				'fa-envelope' => '&#xf0e0; fa-envelope',
				'fa-envelope-o' => '&#xf003; fa-envelope-o',
				'fa-envelope-square' => '&#xf199; fa-envelope-square',
				'fa-envira' => '&#xf299; fa-envira',
				'fa-eraser' => '&#xf12d; fa-eraser',
				'fa-eur' => '&#xf153; fa-eur',
				'fa-exchange' => '&#xf0ec; fa-exchange',
				'fa-exclamation' => '&#xf12a; fa-exclamation',
				'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
				'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
				'fa-expand' => '&#xf065; fa-expand',
				'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
				'fa-external-link' => '&#xf08e; fa-external-link',
				'fa-external-link-square' => '&#xf14c; fa-external-link-square',
				'fa-eye' => '&#xf06e; fa-eye',
				'fa-eye-slash' => '&#xf070; fa-eye-slash',
				'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
				'fa-facebook' => '&#xf09a; fa-facebook',
				'fa-facebook-official' => '&#xf230; fa-facebook-official',
				'fa-facebook-square' => '&#xf082; fa-facebook-square',
				'fa-fast-backward' => '&#xf049; fa-fast-backward',
				'fa-fast-forward' => '&#xf050; fa-fast-forward',
				'fa-fax' => '&#xf1ac; fa-fax',
				'fa-female' => '&#xf182; fa-female',
				'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
				'fa-file' => '&#xf15b; fa-file',
				'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
				'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
				'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
				'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
				'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
				'fa-file-o' => '&#xf016; fa-file-o',
				'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
				'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
				'fa-file-text' => '&#xf15c; fa-file-text',
				'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
				'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
				'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
				'fa-files-o' => '&#xf0c5; fa-files-o',
				'fa-film' => '&#xf008; fa-film',
				'fa-filter' => '&#xf0b0; fa-filter',
				'fa-fire' => '&#xf06d; fa-fire',
				'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
				'fa-firefox' => '&#xf269; fa-firefox',
				'fa-first-order' => '&#xf2b0; fa-first-order',
				'fa-flag' => '&#xf024; fa-flag',
				'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
				'fa-flag-o' => '&#xf11d; fa-flag-o',
				'fa-flask' => '&#xf0c3; fa-flask',
				'fa-flickr' => '&#xf16e; fa-flickr',
				'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
				'fa-folder' => '&#xf07b; fa-folder',
				'fa-folder-o' => '&#xf114; fa-folder-o',
				'fa-folder-open' => '&#xf07c; fa-folder-open',
				'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
				'fa-font' => '&#xf031; fa-font',
				'fa-fonticons' => '&#xf280; fa-fonticons',
				'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
				'fa-forumbee' => '&#xf211; fa-forumbee',
				'fa-forward' => '&#xf04e; fa-forward',
				'fa-foursquare' => '&#xf180; fa-foursquare',
				'fa-frown-o' => '&#xf119; fa-frown-o',
				'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
				'fa-gamepad' => '&#xf11b; fa-gamepad',
				'fa-gavel' => '&#xf0e3; fa-gavel',
				'fa-gbp' => '&#xf154; fa-gbp',
				'fa-genderless' => '&#xf22d; fa-genderless',
				'fa-get-pocket' => '&#xf265; fa-get-pocket',
				'fa-gg' => '&#xf260; fa-gg',
				'fa-gg-circle' => '&#xf261; fa-gg-circle',
				'fa-gift' => '&#xf06b; fa-gift',
				'fa-git' => '&#xf1d3; fa-git',
				'fa-git-square' => '&#xf1d2; fa-git-square',
				'fa-github' => '&#xf09b; fa-github',
				'fa-github-alt' => '&#xf113; fa-github-alt',
				'fa-github-square' => '&#xf092; fa-github-square',
				'fa-gitlab' => '&#xf296; fa-gitlab',
				'fa-glass' => '&#xf000; fa-glass',
				'fa-glide' => '&#xf2a5; fa-glide',
				'fa-glide-g' => '&#xf2a6; fa-glide-g',
				'fa-globe' => '&#xf0ac; fa-globe',
				'fa-google' => '&#xf1a0; fa-google',
				'fa-google-plus' => '&#xf0d5; fa-google-plus',
				'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
				'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
				'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
				'fa-gratipay' => '&#xf184; fa-gratipay',
				'fa-h-square' => '&#xf0fd; fa-h-square',
				'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
				'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
				'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
				'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
				'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
				'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
				'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
				'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
				'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
				'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
				'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
				'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
				'fa-hashtag' => '&#xf292; fa-hashtag',
				'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
				'fa-header' => '&#xf1dc; fa-header',
				'fa-headphones' => '&#xf025; fa-headphones',
				'fa-heart' => '&#xf004; fa-heart',
				'fa-heart-o' => '&#xf08a; fa-heart-o',
				'fa-heartbeat' => '&#xf21e; fa-heartbeat',
				'fa-history' => '&#xf1da; fa-history',
				'fa-home' => '&#xf015; fa-home',
				'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
				'fa-hourglass' => '&#xf254; fa-hourglass',
				'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
				'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
				'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
				'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
				'fa-houzz' => '&#xf27c; fa-houzz',
				'fa-html5' => '&#xf13b; fa-html5',
				'fa-i-cursor' => '&#xf246; fa-i-cursor',
				'fa-ils' => '&#xf20b; fa-ils',
				'fa-inbox' => '&#xf01c; fa-inbox',
				'fa-indent' => '&#xf03c; fa-indent',
				'fa-industry' => '&#xf275; fa-industry',
				'fa-info' => '&#xf129; fa-info',
				'fa-info-circle' => '&#xf05a; fa-info-circle',
				'fa-inr' => '&#xf156; fa-inr',
				'fa-instagram' => '&#xf16d; fa-instagram',
				'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
				'fa-ioxhost' => '&#xf208; fa-ioxhost',
				'fa-italic' => '&#xf033; fa-italic',
				'fa-joomla' => '&#xf1aa; fa-joomla',
				'fa-jpy' => '&#xf157; fa-jpy',
				'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
				'fa-key' => '&#xf084; fa-key',
				'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
				'fa-krw' => '&#xf159; fa-krw',
				'fa-language' => '&#xf1ab; fa-language',
				'fa-laptop' => '&#xf109; fa-laptop',
				'fa-lastfm' => '&#xf202; fa-lastfm',
				'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
				'fa-leaf' => '&#xf06c; fa-leaf',
				'fa-leanpub' => '&#xf212; fa-leanpub',
				'fa-lemon-o' => '&#xf094; fa-lemon-o',
				'fa-level-down' => '&#xf149; fa-level-down',
				'fa-level-up' => '&#xf148; fa-level-up',
				'fa-life-ring' => '&#xf1cd; fa-life-ring',
				'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
				'fa-line-chart' => '&#xf201; fa-line-chart',
				'fa-link' => '&#xf0c1; fa-link',
				'fa-linkedin' => '&#xf0e1; fa-linkedin',
				'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
				'fa-linux' => '&#xf17c; fa-linux',
				'fa-list' => '&#xf03a; fa-list',
				'fa-list-alt' => '&#xf022; fa-list-alt',
				'fa-list-ol' => '&#xf0cb; fa-list-ol',
				'fa-list-ul' => '&#xf0ca; fa-list-ul',
				'fa-location-arrow' => '&#xf124; fa-location-arrow',
				'fa-lock' => '&#xf023; fa-lock',
				'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
				'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
				'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
				'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
				'fa-low-vision' => '&#xf2a8; fa-low-vision',
				'fa-magic' => '&#xf0d0; fa-magic',
				'fa-magnet' => '&#xf076; fa-magnet',
				'fa-male' => '&#xf183; fa-male',
				'fa-map' => '&#xf279; fa-map',
				'fa-map-marker' => '&#xf041; fa-map-marker',
				'fa-map-o' => '&#xf278; fa-map-o',
				'fa-map-pin' => '&#xf276; fa-map-pin',
				'fa-map-signs' => '&#xf277; fa-map-signs',
				'fa-mars' => '&#xf222; fa-mars',
				'fa-mars-double' => '&#xf227; fa-mars-double',
				'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
				'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
				'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
				'fa-maxcdn' => '&#xf136; fa-maxcdn',
				'fa-meanpath' => '&#xf20c; fa-meanpath',
				'fa-medium' => '&#xf23a; fa-medium',
				'fa-medkit' => '&#xf0fa; fa-medkit',
				'fa-meh-o' => '&#xf11a; fa-meh-o',
				'fa-mercury' => '&#xf223; fa-mercury',
				'fa-microphone' => '&#xf130; fa-microphone',
				'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
				'fa-minus' => '&#xf068; fa-minus',
				'fa-minus-circle' => '&#xf056; fa-minus-circle',
				'fa-minus-square' => '&#xf146; fa-minus-square',
				'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
				'fa-mixcloud' => '&#xf289; fa-mixcloud',
				'fa-mobile' => '&#xf10b; fa-mobile',
				'fa-modx' => '&#xf285; fa-modx',
				'fa-money' => '&#xf0d6; fa-money',
				'fa-moon-o' => '&#xf186; fa-moon-o',
				'fa-motorcycle' => '&#xf21c; fa-motorcycle',
				'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
				'fa-music' => '&#xf001; fa-music',
				'fa-neuter' => '&#xf22c; fa-neuter',
				'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
				'fa-object-group' => '&#xf247; fa-object-group',
				'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
				'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
				'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
				'fa-opencart' => '&#xf23d; fa-opencart',
				'fa-openid' => '&#xf19b; fa-openid',
				'fa-opera' => '&#xf26a; fa-opera',
				'fa-optin-monster' => '&#xf23c; fa-optin-monster',
				'fa-outdent' => '&#xf03b; fa-outdent',
				'fa-pagelines' => '&#xf18c; fa-pagelines',
				'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
				'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
				'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
				'fa-paperclip' => '&#xf0c6; fa-paperclip',
				'fa-paragraph' => '&#xf1dd; fa-paragraph',
				'fa-pause' => '&#xf04c; fa-pause',
				'fa-pause-circle' => '&#xf28b; fa-pause-circle',
				'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
				'fa-paw' => '&#xf1b0; fa-paw',
				'fa-paypal' => '&#xf1ed; fa-paypal',
				'fa-pencil' => '&#xf040; fa-pencil',
				'fa-pencil-square' => '&#xf14b; fa-pencil-square',
				'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
				'fa-percent' => '&#xf295; fa-percent',
				'fa-phone' => '&#xf095; fa-phone',
				'fa-phone-square' => '&#xf098; fa-phone-square',
				'fa-picture-o' => '&#xf03e; fa-picture-o',
				'fa-pie-chart' => '&#xf200; fa-pie-chart',
				'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
				'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
				'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
				'fa-pinterest' => '&#xf0d2; fa-pinterest',
				'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
				'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
				'fa-plane' => '&#xf072; fa-plane',
				'fa-play' => '&#xf04b; fa-play',
				'fa-play-circle' => '&#xf144; fa-play-circle',
				'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
				'fa-plug' => '&#xf1e6; fa-plug',
				'fa-plus' => '&#xf067; fa-plus',
				'fa-plus-circle' => '&#xf055; fa-plus-circle',
				'fa-plus-square' => '&#xf0fe; fa-plus-square',
				'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
				'fa-power-off' => '&#xf011; fa-power-off',
				'fa-print' => '&#xf02f; fa-print',
				'fa-product-hunt' => '&#xf288; fa-product-hunt',
				'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
				'fa-qq' => '&#xf1d6; fa-qq',
				'fa-qrcode' => '&#xf029; fa-qrcode',
				'fa-question' => '&#xf128; fa-question',
				'fa-question-circle' => '&#xf059; fa-question-circle',
				'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
				'fa-quote-left' => '&#xf10d; fa-quote-left',
				'fa-quote-right' => '&#xf10e; fa-quote-right',
				'fa-random' => '&#xf074; fa-random',
				'fa-rebel' => '&#xf1d0; fa-rebel',
				'fa-recycle' => '&#xf1b8; fa-recycle',
				'fa-reddit' => '&#xf1a1; fa-reddit',
				'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
				'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
				'fa-refresh' => '&#xf021; fa-refresh',
				'fa-registered' => '&#xf25d; fa-registered',
				'fa-renren' => '&#xf18b; fa-renren',
				'fa-repeat' => '&#xf01e; fa-repeat',
				'fa-reply' => '&#xf112; fa-reply',
				'fa-reply-all' => '&#xf122; fa-reply-all',
				'fa-retweet' => '&#xf079; fa-retweet',
				'fa-road' => '&#xf018; fa-road',
				'fa-rocket' => '&#xf135; fa-rocket',
				'fa-rss' => '&#xf09e; fa-rss',
				'fa-rss-square' => '&#xf143; fa-rss-square',
				'fa-rub' => '&#xf158; fa-rub',
				'fa-safari' => '&#xf267; fa-safari',
				'fa-scissors' => '&#xf0c4; fa-scissors',
				'fa-scribd' => '&#xf28a; fa-scribd',
				'fa-search' => '&#xf002; fa-search',
				'fa-search-minus' => '&#xf010; fa-search-minus',
				'fa-search-plus' => '&#xf00e; fa-search-plus',
				'fa-sellsy' => '&#xf213; fa-sellsy',
				'fa-server' => '&#xf233; fa-server',
				'fa-share' => '&#xf064; fa-share',
				'fa-share-alt' => '&#xf1e0; fa-share-alt',
				'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
				'fa-share-square' => '&#xf14d; fa-share-square',
				'fa-share-square-o' => '&#xf045; fa-share-square-o',
				'fa-shield' => '&#xf132; fa-shield',
				'fa-ship' => '&#xf21a; fa-ship',
				'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
				'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
				'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
				'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
				'fa-sign-in' => '&#xf090; fa-sign-in',
				'fa-sign-language' => '&#xf2a7; fa-sign-language',
				'fa-sign-out' => '&#xf08b; fa-sign-out',
				'fa-signal' => '&#xf012; fa-signal',
				'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
				'fa-sitemap' => '&#xf0e8; fa-sitemap',
				'fa-skyatlas' => '&#xf216; fa-skyatlas',
				'fa-skype' => '&#xf17e; fa-skype',
				'fa-slack' => '&#xf198; fa-slack',
				'fa-sliders' => '&#xf1de; fa-sliders',
				'fa-slideshare' => '&#xf1e7; fa-slideshare',
				'fa-smile-o' => '&#xf118; fa-smile-o',
				'fa-snapchat' => '&#xf2ab; fa-snapchat',
				'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
				'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
				'fa-sort' => '&#xf0dc; fa-sort',
				'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
				'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
				'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
				'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
				'fa-sort-asc' => '&#xf0de; fa-sort-asc',
				'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
				'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
				'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
				'fa-soundcloud' => '&#xf1be; fa-soundcloud',
				'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
				'fa-spinner' => '&#xf110; fa-spinner',
				'fa-spoon' => '&#xf1b1; fa-spoon',
				'fa-spotify' => '&#xf1bc; fa-spotify',
				'fa-square' => '&#xf0c8; fa-square',
				'fa-square-o' => '&#xf096; fa-square-o',
				'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
				'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
				'fa-star' => '&#xf005; fa-star',
				'fa-star-half' => '&#xf089; fa-star-half',
				'fa-star-half-o' => '&#xf123; fa-star-half-o',
				'fa-star-o' => '&#xf006; fa-star-o',
				'fa-steam' => '&#xf1b6; fa-steam',
				'fa-steam-square' => '&#xf1b7; fa-steam-square',
				'fa-step-backward' => '&#xf048; fa-step-backward',
				'fa-step-forward' => '&#xf051; fa-step-forward',
				'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
				'fa-sticky-note' => '&#xf249; fa-sticky-note',
				'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
				'fa-stop' => '&#xf04d; fa-stop',
				'fa-stop-circle' => '&#xf28d; fa-stop-circle',
				'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
				'fa-street-view' => '&#xf21d; fa-street-view',
				'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
				'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
				'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
				'fa-subscript' => '&#xf12c; fa-subscript',
				'fa-subway' => '&#xf239; fa-subway',
				'fa-suitcase' => '&#xf0f2; fa-suitcase',
				'fa-sun-o' => '&#xf185; fa-sun-o',
				'fa-superscript' => '&#xf12b; fa-superscript',
				'fa-table' => '&#xf0ce; fa-table',
				'fa-tablet' => '&#xf10a; fa-tablet',
				'fa-tachometer' => '&#xf0e4; fa-tachometer',
				'fa-tag' => '&#xf02b; fa-tag',
				'fa-tags' => '&#xf02c; fa-tags',
				'fa-tasks' => '&#xf0ae; fa-tasks',
				'fa-taxi' => '&#xf1ba; fa-taxi',
				'fa-television' => '&#xf26c; fa-television',
				'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
				'fa-terminal' => '&#xf120; fa-terminal',
				'fa-text-height' => '&#xf034; fa-text-height',
				'fa-text-width' => '&#xf035; fa-text-width',
				'fa-th' => '&#xf00a; fa-th',
				'fa-th-large' => '&#xf009; fa-th-large',
				'fa-th-list' => '&#xf00b; fa-th-list',
				'fa-themeisle' => '&#xf2b2; fa-themeisle',
				'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
				'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
				'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
				'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
				'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
				'fa-ticket' => '&#xf145; fa-ticket',
				'fa-times' => '&#xf00d; fa-times',
				'fa-times-circle' => '&#xf057; fa-times-circle',
				'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
				'fa-tint' => '&#xf043; fa-tint',
				'fa-toggle-off' => '&#xf204; fa-toggle-off',
				'fa-toggle-on' => '&#xf205; fa-toggle-on',
				'fa-trademark' => '&#xf25c; fa-trademark',
				'fa-train' => '&#xf238; fa-train',
				'fa-transgender' => '&#xf224; fa-transgender',
				'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
				'fa-trash' => '&#xf1f8; fa-trash',
				'fa-trash-o' => '&#xf014; fa-trash-o',
				'fa-tree' => '&#xf1bb; fa-tree',
				'fa-trello' => '&#xf181; fa-trello',
				'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
				'fa-trophy' => '&#xf091; fa-trophy',
				'fa-truck' => '&#xf0d1; fa-truck',
				'fa-try' => '&#xf195; fa-try',
				'fa-tty' => '&#xf1e4; fa-tty',
				'fa-tumblr' => '&#xf173; fa-tumblr',
				'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
				'fa-twitch' => '&#xf1e8; fa-twitch',
				'fa-twitter' => '&#xf099; fa-twitter',
				'fa-twitter-square' => '&#xf081; fa-twitter-square',
				'fa-umbrella' => '&#xf0e9; fa-umbrella',
				'fa-underline' => '&#xf0cd; fa-underline',
				'fa-undo' => '&#xf0e2; fa-undo',
				'fa-universal-access' => '&#xf29a; fa-universal-access',
				'fa-university' => '&#xf19c; fa-university',
				'fa-unlock' => '&#xf09c; fa-unlock',
				'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
				'fa-upload' => '&#xf093; fa-upload',
				'fa-usb' => '&#xf287; fa-usb',
				'fa-usd' => '&#xf155; fa-usd',
				'fa-user' => '&#xf007; fa-user',
				'fa-user-md' => '&#xf0f0; fa-user-md',
				'fa-user-plus' => '&#xf234; fa-user-plus',
				'fa-user-secret' => '&#xf21b; fa-user-secret',
				'fa-user-times' => '&#xf235; fa-user-times',
				'fa-users' => '&#xf0c0; fa-users',
				'fa-venus' => '&#xf221; fa-venus',
				'fa-venus-double' => '&#xf226; fa-venus-double',
				'fa-venus-mars' => '&#xf228; fa-venus-mars',
				'fa-viacoin' => '&#xf237; fa-viacoin',
				'fa-viadeo' => '&#xf2a9; fa-viadeo',
				'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
				'fa-video-camera' => '&#xf03d; fa-video-camera',
				'fa-vimeo' => '&#xf27d; fa-vimeo',
				'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
				'fa-vine' => '&#xf1ca; fa-vine',
				'fa-vk' => '&#xf189; fa-vk',
				'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
				'fa-volume-down' => '&#xf027; fa-volume-down',
				'fa-volume-off' => '&#xf026; fa-volume-off',
				'fa-volume-up' => '&#xf028; fa-volume-up',
				'fa-weibo' => '&#xf18a; fa-weibo',
				'fa-weixin' => '&#xf1d7; fa-weixin',
				'fa-whatsapp' => '&#xf232; fa-whatsapp',
				'fa-wheelchair' => '&#xf193; fa-wheelchair',
				'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
				'fa-wifi' => '&#xf1eb; fa-wifi',
				'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
				'fa-windows' => '&#xf17a; fa-windows',
				'fa-wordpress' => '&#xf19a; fa-wordpress',
				'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
				'fa-wpforms' => '&#xf298; fa-wpforms',
				'fa-wrench' => '&#xf0ad; fa-wrench',
				'fa-xing' => '&#xf168; fa-xing',
				'fa-xing-square' => '&#xf169; fa-xing-square',
				'fa-y-combinator' => '&#xf23b; fa-y-combinator',
				'fa-yahoo' => '&#xf19e; fa-yahoo',
				'fa-yelp' => '&#xf1e9; fa-yelp',
				'fa-yoast' => '&#xf2b1; fa-yoast',
				'fa-youtube' => '&#xf167; fa-youtube',
				'fa-youtube-play' => '&#xf16a; fa-youtube-play',
				'fa-youtube-square' => '&#xf166; fa-youtube-square',
			),
		),
		array (
			'key' => 'field_572e021085dae',
			'label' => 'Phone',
			'name' => 'phone',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572e026e6a69d',
			'label' => 'Longitude',
			'name' => 'longitude',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572e027b6a69e',
			'label' => 'Latitude',
			'name' => 'latitude',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572e030072048',
			'label' => 'Contact Form Title',
			'name' => 'contact_form_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572e033472049',
			'label' => 'Contact Form Content',
			'name' => 'contact_form_content',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/contact.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572dc4a7049c9',
	'title' => 'Education',
	'fields' => array (
		array (
			'key' => 'field_572dc4b9cf15d',
			'label' => 'Education Heading',
			'name' => 'education_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572dc4410973a',
			'label' => 'Education',
			'name' => 'education',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572dc4410973b',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'font-awesome',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'null',
					'save_format' => 'element',
					'allow_null' => 0,
					'enqueue_fa' => 0,
					'fa_live_preview' => '',
					'choices' => array (
						'null' => '- Select -',
						'fa-500px' => '&#xf26e; fa-500px',
						'fa-adjust' => '&#xf042; fa-adjust',
						'fa-adn' => '&#xf170; fa-adn',
						'fa-align-center' => '&#xf037; fa-align-center',
						'fa-align-justify' => '&#xf039; fa-align-justify',
						'fa-align-left' => '&#xf036; fa-align-left',
						'fa-align-right' => '&#xf038; fa-align-right',
						'fa-amazon' => '&#xf270; fa-amazon',
						'fa-ambulance' => '&#xf0f9; fa-ambulance',
						'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
						'fa-anchor' => '&#xf13d; fa-anchor',
						'fa-android' => '&#xf17b; fa-android',
						'fa-angellist' => '&#xf209; fa-angellist',
						'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
						'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
						'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
						'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
						'fa-angle-down' => '&#xf107; fa-angle-down',
						'fa-angle-left' => '&#xf104; fa-angle-left',
						'fa-angle-right' => '&#xf105; fa-angle-right',
						'fa-angle-up' => '&#xf106; fa-angle-up',
						'fa-apple' => '&#xf179; fa-apple',
						'fa-archive' => '&#xf187; fa-archive',
						'fa-area-chart' => '&#xf1fe; fa-area-chart',
						'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
						'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
						'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
						'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
						'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
						'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
						'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
						'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
						'fa-arrow-down' => '&#xf063; fa-arrow-down',
						'fa-arrow-left' => '&#xf060; fa-arrow-left',
						'fa-arrow-right' => '&#xf061; fa-arrow-right',
						'fa-arrow-up' => '&#xf062; fa-arrow-up',
						'fa-arrows' => '&#xf047; fa-arrows',
						'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
						'fa-arrows-h' => '&#xf07e; fa-arrows-h',
						'fa-arrows-v' => '&#xf07d; fa-arrows-v',
						'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
						'fa-asterisk' => '&#xf069; fa-asterisk',
						'fa-at' => '&#xf1fa; fa-at',
						'fa-audio-description' => '&#xf29e; fa-audio-description',
						'fa-backward' => '&#xf04a; fa-backward',
						'fa-balance-scale' => '&#xf24e; fa-balance-scale',
						'fa-ban' => '&#xf05e; fa-ban',
						'fa-bar-chart' => '&#xf080; fa-bar-chart',
						'fa-barcode' => '&#xf02a; fa-barcode',
						'fa-bars' => '&#xf0c9; fa-bars',
						'fa-battery-empty' => '&#xf244; fa-battery-empty',
						'fa-battery-full' => '&#xf240; fa-battery-full',
						'fa-battery-half' => '&#xf242; fa-battery-half',
						'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
						'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
						'fa-bed' => '&#xf236; fa-bed',
						'fa-beer' => '&#xf0fc; fa-beer',
						'fa-behance' => '&#xf1b4; fa-behance',
						'fa-behance-square' => '&#xf1b5; fa-behance-square',
						'fa-bell' => '&#xf0f3; fa-bell',
						'fa-bell-o' => '&#xf0a2; fa-bell-o',
						'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
						'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
						'fa-bicycle' => '&#xf206; fa-bicycle',
						'fa-binoculars' => '&#xf1e5; fa-binoculars',
						'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
						'fa-bitbucket' => '&#xf171; fa-bitbucket',
						'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
						'fa-black-tie' => '&#xf27e; fa-black-tie',
						'fa-blind' => '&#xf29d; fa-blind',
						'fa-bluetooth' => '&#xf293; fa-bluetooth',
						'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
						'fa-bold' => '&#xf032; fa-bold',
						'fa-bolt' => '&#xf0e7; fa-bolt',
						'fa-bomb' => '&#xf1e2; fa-bomb',
						'fa-book' => '&#xf02d; fa-book',
						'fa-bookmark' => '&#xf02e; fa-bookmark',
						'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
						'fa-braille' => '&#xf2a1; fa-braille',
						'fa-briefcase' => '&#xf0b1; fa-briefcase',
						'fa-btc' => '&#xf15a; fa-btc',
						'fa-bug' => '&#xf188; fa-bug',
						'fa-building' => '&#xf1ad; fa-building',
						'fa-building-o' => '&#xf0f7; fa-building-o',
						'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
						'fa-bullseye' => '&#xf140; fa-bullseye',
						'fa-bus' => '&#xf207; fa-bus',
						'fa-buysellads' => '&#xf20d; fa-buysellads',
						'fa-calculator' => '&#xf1ec; fa-calculator',
						'fa-calendar' => '&#xf073; fa-calendar',
						'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
						'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
						'fa-calendar-o' => '&#xf133; fa-calendar-o',
						'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
						'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
						'fa-camera' => '&#xf030; fa-camera',
						'fa-camera-retro' => '&#xf083; fa-camera-retro',
						'fa-car' => '&#xf1b9; fa-car',
						'fa-caret-down' => '&#xf0d7; fa-caret-down',
						'fa-caret-left' => '&#xf0d9; fa-caret-left',
						'fa-caret-right' => '&#xf0da; fa-caret-right',
						'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
						'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
						'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
						'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
						'fa-caret-up' => '&#xf0d8; fa-caret-up',
						'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
						'fa-cart-plus' => '&#xf217; fa-cart-plus',
						'fa-cc' => '&#xf20a; fa-cc',
						'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
						'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
						'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
						'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
						'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
						'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
						'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
						'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
						'fa-certificate' => '&#xf0a3; fa-certificate',
						'fa-chain-broken' => '&#xf127; fa-chain-broken',
						'fa-check' => '&#xf00c; fa-check',
						'fa-check-circle' => '&#xf058; fa-check-circle',
						'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
						'fa-check-square' => '&#xf14a; fa-check-square',
						'fa-check-square-o' => '&#xf046; fa-check-square-o',
						'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
						'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
						'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
						'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
						'fa-chevron-down' => '&#xf078; fa-chevron-down',
						'fa-chevron-left' => '&#xf053; fa-chevron-left',
						'fa-chevron-right' => '&#xf054; fa-chevron-right',
						'fa-chevron-up' => '&#xf077; fa-chevron-up',
						'fa-child' => '&#xf1ae; fa-child',
						'fa-chrome' => '&#xf268; fa-chrome',
						'fa-circle' => '&#xf111; fa-circle',
						'fa-circle-o' => '&#xf10c; fa-circle-o',
						'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
						'fa-circle-thin' => '&#xf1db; fa-circle-thin',
						'fa-clipboard' => '&#xf0ea; fa-clipboard',
						'fa-clock-o' => '&#xf017; fa-clock-o',
						'fa-clone' => '&#xf24d; fa-clone',
						'fa-cloud' => '&#xf0c2; fa-cloud',
						'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
						'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
						'fa-code' => '&#xf121; fa-code',
						'fa-code-fork' => '&#xf126; fa-code-fork',
						'fa-codepen' => '&#xf1cb; fa-codepen',
						'fa-codiepie' => '&#xf284; fa-codiepie',
						'fa-coffee' => '&#xf0f4; fa-coffee',
						'fa-cog' => '&#xf013; fa-cog',
						'fa-cogs' => '&#xf085; fa-cogs',
						'fa-columns' => '&#xf0db; fa-columns',
						'fa-comment' => '&#xf075; fa-comment',
						'fa-comment-o' => '&#xf0e5; fa-comment-o',
						'fa-commenting' => '&#xf27a; fa-commenting',
						'fa-commenting-o' => '&#xf27b; fa-commenting-o',
						'fa-comments' => '&#xf086; fa-comments',
						'fa-comments-o' => '&#xf0e6; fa-comments-o',
						'fa-compass' => '&#xf14e; fa-compass',
						'fa-compress' => '&#xf066; fa-compress',
						'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
						'fa-contao' => '&#xf26d; fa-contao',
						'fa-copyright' => '&#xf1f9; fa-copyright',
						'fa-creative-commons' => '&#xf25e; fa-creative-commons',
						'fa-credit-card' => '&#xf09d; fa-credit-card',
						'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
						'fa-crop' => '&#xf125; fa-crop',
						'fa-crosshairs' => '&#xf05b; fa-crosshairs',
						'fa-css3' => '&#xf13c; fa-css3',
						'fa-cube' => '&#xf1b2; fa-cube',
						'fa-cubes' => '&#xf1b3; fa-cubes',
						'fa-cutlery' => '&#xf0f5; fa-cutlery',
						'fa-dashcube' => '&#xf210; fa-dashcube',
						'fa-database' => '&#xf1c0; fa-database',
						'fa-deaf' => '&#xf2a4; fa-deaf',
						'fa-delicious' => '&#xf1a5; fa-delicious',
						'fa-desktop' => '&#xf108; fa-desktop',
						'fa-deviantart' => '&#xf1bd; fa-deviantart',
						'fa-diamond' => '&#xf219; fa-diamond',
						'fa-digg' => '&#xf1a6; fa-digg',
						'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
						'fa-download' => '&#xf019; fa-download',
						'fa-dribbble' => '&#xf17d; fa-dribbble',
						'fa-dropbox' => '&#xf16b; fa-dropbox',
						'fa-drupal' => '&#xf1a9; fa-drupal',
						'fa-edge' => '&#xf282; fa-edge',
						'fa-eject' => '&#xf052; fa-eject',
						'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
						'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
						'fa-empire' => '&#xf1d1; fa-empire',
						'fa-envelope' => '&#xf0e0; fa-envelope',
						'fa-envelope-o' => '&#xf003; fa-envelope-o',
						'fa-envelope-square' => '&#xf199; fa-envelope-square',
						'fa-envira' => '&#xf299; fa-envira',
						'fa-eraser' => '&#xf12d; fa-eraser',
						'fa-eur' => '&#xf153; fa-eur',
						'fa-exchange' => '&#xf0ec; fa-exchange',
						'fa-exclamation' => '&#xf12a; fa-exclamation',
						'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
						'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
						'fa-expand' => '&#xf065; fa-expand',
						'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
						'fa-external-link' => '&#xf08e; fa-external-link',
						'fa-external-link-square' => '&#xf14c; fa-external-link-square',
						'fa-eye' => '&#xf06e; fa-eye',
						'fa-eye-slash' => '&#xf070; fa-eye-slash',
						'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
						'fa-facebook' => '&#xf09a; fa-facebook',
						'fa-facebook-official' => '&#xf230; fa-facebook-official',
						'fa-facebook-square' => '&#xf082; fa-facebook-square',
						'fa-fast-backward' => '&#xf049; fa-fast-backward',
						'fa-fast-forward' => '&#xf050; fa-fast-forward',
						'fa-fax' => '&#xf1ac; fa-fax',
						'fa-female' => '&#xf182; fa-female',
						'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
						'fa-file' => '&#xf15b; fa-file',
						'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
						'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
						'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
						'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
						'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
						'fa-file-o' => '&#xf016; fa-file-o',
						'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
						'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
						'fa-file-text' => '&#xf15c; fa-file-text',
						'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
						'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
						'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
						'fa-files-o' => '&#xf0c5; fa-files-o',
						'fa-film' => '&#xf008; fa-film',
						'fa-filter' => '&#xf0b0; fa-filter',
						'fa-fire' => '&#xf06d; fa-fire',
						'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
						'fa-firefox' => '&#xf269; fa-firefox',
						'fa-first-order' => '&#xf2b0; fa-first-order',
						'fa-flag' => '&#xf024; fa-flag',
						'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
						'fa-flag-o' => '&#xf11d; fa-flag-o',
						'fa-flask' => '&#xf0c3; fa-flask',
						'fa-flickr' => '&#xf16e; fa-flickr',
						'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
						'fa-folder' => '&#xf07b; fa-folder',
						'fa-folder-o' => '&#xf114; fa-folder-o',
						'fa-folder-open' => '&#xf07c; fa-folder-open',
						'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
						'fa-font' => '&#xf031; fa-font',
						'fa-fonticons' => '&#xf280; fa-fonticons',
						'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
						'fa-forumbee' => '&#xf211; fa-forumbee',
						'fa-forward' => '&#xf04e; fa-forward',
						'fa-foursquare' => '&#xf180; fa-foursquare',
						'fa-frown-o' => '&#xf119; fa-frown-o',
						'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
						'fa-gamepad' => '&#xf11b; fa-gamepad',
						'fa-gavel' => '&#xf0e3; fa-gavel',
						'fa-gbp' => '&#xf154; fa-gbp',
						'fa-genderless' => '&#xf22d; fa-genderless',
						'fa-get-pocket' => '&#xf265; fa-get-pocket',
						'fa-gg' => '&#xf260; fa-gg',
						'fa-gg-circle' => '&#xf261; fa-gg-circle',
						'fa-gift' => '&#xf06b; fa-gift',
						'fa-git' => '&#xf1d3; fa-git',
						'fa-git-square' => '&#xf1d2; fa-git-square',
						'fa-github' => '&#xf09b; fa-github',
						'fa-github-alt' => '&#xf113; fa-github-alt',
						'fa-github-square' => '&#xf092; fa-github-square',
						'fa-gitlab' => '&#xf296; fa-gitlab',
						'fa-glass' => '&#xf000; fa-glass',
						'fa-glide' => '&#xf2a5; fa-glide',
						'fa-glide-g' => '&#xf2a6; fa-glide-g',
						'fa-globe' => '&#xf0ac; fa-globe',
						'fa-google' => '&#xf1a0; fa-google',
						'fa-google-plus' => '&#xf0d5; fa-google-plus',
						'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
						'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
						'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
						'fa-gratipay' => '&#xf184; fa-gratipay',
						'fa-h-square' => '&#xf0fd; fa-h-square',
						'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
						'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
						'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
						'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
						'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
						'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
						'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
						'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
						'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
						'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
						'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
						'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
						'fa-hashtag' => '&#xf292; fa-hashtag',
						'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
						'fa-header' => '&#xf1dc; fa-header',
						'fa-headphones' => '&#xf025; fa-headphones',
						'fa-heart' => '&#xf004; fa-heart',
						'fa-heart-o' => '&#xf08a; fa-heart-o',
						'fa-heartbeat' => '&#xf21e; fa-heartbeat',
						'fa-history' => '&#xf1da; fa-history',
						'fa-home' => '&#xf015; fa-home',
						'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
						'fa-hourglass' => '&#xf254; fa-hourglass',
						'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
						'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
						'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
						'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
						'fa-houzz' => '&#xf27c; fa-houzz',
						'fa-html5' => '&#xf13b; fa-html5',
						'fa-i-cursor' => '&#xf246; fa-i-cursor',
						'fa-ils' => '&#xf20b; fa-ils',
						'fa-inbox' => '&#xf01c; fa-inbox',
						'fa-indent' => '&#xf03c; fa-indent',
						'fa-industry' => '&#xf275; fa-industry',
						'fa-info' => '&#xf129; fa-info',
						'fa-info-circle' => '&#xf05a; fa-info-circle',
						'fa-inr' => '&#xf156; fa-inr',
						'fa-instagram' => '&#xf16d; fa-instagram',
						'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
						'fa-ioxhost' => '&#xf208; fa-ioxhost',
						'fa-italic' => '&#xf033; fa-italic',
						'fa-joomla' => '&#xf1aa; fa-joomla',
						'fa-jpy' => '&#xf157; fa-jpy',
						'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
						'fa-key' => '&#xf084; fa-key',
						'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
						'fa-krw' => '&#xf159; fa-krw',
						'fa-language' => '&#xf1ab; fa-language',
						'fa-laptop' => '&#xf109; fa-laptop',
						'fa-lastfm' => '&#xf202; fa-lastfm',
						'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
						'fa-leaf' => '&#xf06c; fa-leaf',
						'fa-leanpub' => '&#xf212; fa-leanpub',
						'fa-lemon-o' => '&#xf094; fa-lemon-o',
						'fa-level-down' => '&#xf149; fa-level-down',
						'fa-level-up' => '&#xf148; fa-level-up',
						'fa-life-ring' => '&#xf1cd; fa-life-ring',
						'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
						'fa-line-chart' => '&#xf201; fa-line-chart',
						'fa-link' => '&#xf0c1; fa-link',
						'fa-linkedin' => '&#xf0e1; fa-linkedin',
						'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
						'fa-linux' => '&#xf17c; fa-linux',
						'fa-list' => '&#xf03a; fa-list',
						'fa-list-alt' => '&#xf022; fa-list-alt',
						'fa-list-ol' => '&#xf0cb; fa-list-ol',
						'fa-list-ul' => '&#xf0ca; fa-list-ul',
						'fa-location-arrow' => '&#xf124; fa-location-arrow',
						'fa-lock' => '&#xf023; fa-lock',
						'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
						'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
						'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
						'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
						'fa-low-vision' => '&#xf2a8; fa-low-vision',
						'fa-magic' => '&#xf0d0; fa-magic',
						'fa-magnet' => '&#xf076; fa-magnet',
						'fa-male' => '&#xf183; fa-male',
						'fa-map' => '&#xf279; fa-map',
						'fa-map-marker' => '&#xf041; fa-map-marker',
						'fa-map-o' => '&#xf278; fa-map-o',
						'fa-map-pin' => '&#xf276; fa-map-pin',
						'fa-map-signs' => '&#xf277; fa-map-signs',
						'fa-mars' => '&#xf222; fa-mars',
						'fa-mars-double' => '&#xf227; fa-mars-double',
						'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
						'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
						'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
						'fa-maxcdn' => '&#xf136; fa-maxcdn',
						'fa-meanpath' => '&#xf20c; fa-meanpath',
						'fa-medium' => '&#xf23a; fa-medium',
						'fa-medkit' => '&#xf0fa; fa-medkit',
						'fa-meh-o' => '&#xf11a; fa-meh-o',
						'fa-mercury' => '&#xf223; fa-mercury',
						'fa-microphone' => '&#xf130; fa-microphone',
						'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
						'fa-minus' => '&#xf068; fa-minus',
						'fa-minus-circle' => '&#xf056; fa-minus-circle',
						'fa-minus-square' => '&#xf146; fa-minus-square',
						'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
						'fa-mixcloud' => '&#xf289; fa-mixcloud',
						'fa-mobile' => '&#xf10b; fa-mobile',
						'fa-modx' => '&#xf285; fa-modx',
						'fa-money' => '&#xf0d6; fa-money',
						'fa-moon-o' => '&#xf186; fa-moon-o',
						'fa-motorcycle' => '&#xf21c; fa-motorcycle',
						'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
						'fa-music' => '&#xf001; fa-music',
						'fa-neuter' => '&#xf22c; fa-neuter',
						'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
						'fa-object-group' => '&#xf247; fa-object-group',
						'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
						'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
						'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
						'fa-opencart' => '&#xf23d; fa-opencart',
						'fa-openid' => '&#xf19b; fa-openid',
						'fa-opera' => '&#xf26a; fa-opera',
						'fa-optin-monster' => '&#xf23c; fa-optin-monster',
						'fa-outdent' => '&#xf03b; fa-outdent',
						'fa-pagelines' => '&#xf18c; fa-pagelines',
						'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
						'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
						'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
						'fa-paperclip' => '&#xf0c6; fa-paperclip',
						'fa-paragraph' => '&#xf1dd; fa-paragraph',
						'fa-pause' => '&#xf04c; fa-pause',
						'fa-pause-circle' => '&#xf28b; fa-pause-circle',
						'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
						'fa-paw' => '&#xf1b0; fa-paw',
						'fa-paypal' => '&#xf1ed; fa-paypal',
						'fa-pencil' => '&#xf040; fa-pencil',
						'fa-pencil-square' => '&#xf14b; fa-pencil-square',
						'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
						'fa-percent' => '&#xf295; fa-percent',
						'fa-phone' => '&#xf095; fa-phone',
						'fa-phone-square' => '&#xf098; fa-phone-square',
						'fa-picture-o' => '&#xf03e; fa-picture-o',
						'fa-pie-chart' => '&#xf200; fa-pie-chart',
						'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
						'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
						'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
						'fa-pinterest' => '&#xf0d2; fa-pinterest',
						'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
						'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
						'fa-plane' => '&#xf072; fa-plane',
						'fa-play' => '&#xf04b; fa-play',
						'fa-play-circle' => '&#xf144; fa-play-circle',
						'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
						'fa-plug' => '&#xf1e6; fa-plug',
						'fa-plus' => '&#xf067; fa-plus',
						'fa-plus-circle' => '&#xf055; fa-plus-circle',
						'fa-plus-square' => '&#xf0fe; fa-plus-square',
						'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
						'fa-power-off' => '&#xf011; fa-power-off',
						'fa-print' => '&#xf02f; fa-print',
						'fa-product-hunt' => '&#xf288; fa-product-hunt',
						'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
						'fa-qq' => '&#xf1d6; fa-qq',
						'fa-qrcode' => '&#xf029; fa-qrcode',
						'fa-question' => '&#xf128; fa-question',
						'fa-question-circle' => '&#xf059; fa-question-circle',
						'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
						'fa-quote-left' => '&#xf10d; fa-quote-left',
						'fa-quote-right' => '&#xf10e; fa-quote-right',
						'fa-random' => '&#xf074; fa-random',
						'fa-rebel' => '&#xf1d0; fa-rebel',
						'fa-recycle' => '&#xf1b8; fa-recycle',
						'fa-reddit' => '&#xf1a1; fa-reddit',
						'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
						'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
						'fa-refresh' => '&#xf021; fa-refresh',
						'fa-registered' => '&#xf25d; fa-registered',
						'fa-renren' => '&#xf18b; fa-renren',
						'fa-repeat' => '&#xf01e; fa-repeat',
						'fa-reply' => '&#xf112; fa-reply',
						'fa-reply-all' => '&#xf122; fa-reply-all',
						'fa-retweet' => '&#xf079; fa-retweet',
						'fa-road' => '&#xf018; fa-road',
						'fa-rocket' => '&#xf135; fa-rocket',
						'fa-rss' => '&#xf09e; fa-rss',
						'fa-rss-square' => '&#xf143; fa-rss-square',
						'fa-rub' => '&#xf158; fa-rub',
						'fa-safari' => '&#xf267; fa-safari',
						'fa-scissors' => '&#xf0c4; fa-scissors',
						'fa-scribd' => '&#xf28a; fa-scribd',
						'fa-search' => '&#xf002; fa-search',
						'fa-search-minus' => '&#xf010; fa-search-minus',
						'fa-search-plus' => '&#xf00e; fa-search-plus',
						'fa-sellsy' => '&#xf213; fa-sellsy',
						'fa-server' => '&#xf233; fa-server',
						'fa-share' => '&#xf064; fa-share',
						'fa-share-alt' => '&#xf1e0; fa-share-alt',
						'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
						'fa-share-square' => '&#xf14d; fa-share-square',
						'fa-share-square-o' => '&#xf045; fa-share-square-o',
						'fa-shield' => '&#xf132; fa-shield',
						'fa-ship' => '&#xf21a; fa-ship',
						'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
						'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
						'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
						'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
						'fa-sign-in' => '&#xf090; fa-sign-in',
						'fa-sign-language' => '&#xf2a7; fa-sign-language',
						'fa-sign-out' => '&#xf08b; fa-sign-out',
						'fa-signal' => '&#xf012; fa-signal',
						'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
						'fa-sitemap' => '&#xf0e8; fa-sitemap',
						'fa-skyatlas' => '&#xf216; fa-skyatlas',
						'fa-skype' => '&#xf17e; fa-skype',
						'fa-slack' => '&#xf198; fa-slack',
						'fa-sliders' => '&#xf1de; fa-sliders',
						'fa-slideshare' => '&#xf1e7; fa-slideshare',
						'fa-smile-o' => '&#xf118; fa-smile-o',
						'fa-snapchat' => '&#xf2ab; fa-snapchat',
						'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
						'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
						'fa-sort' => '&#xf0dc; fa-sort',
						'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
						'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
						'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
						'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
						'fa-sort-asc' => '&#xf0de; fa-sort-asc',
						'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
						'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
						'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
						'fa-soundcloud' => '&#xf1be; fa-soundcloud',
						'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
						'fa-spinner' => '&#xf110; fa-spinner',
						'fa-spoon' => '&#xf1b1; fa-spoon',
						'fa-spotify' => '&#xf1bc; fa-spotify',
						'fa-square' => '&#xf0c8; fa-square',
						'fa-square-o' => '&#xf096; fa-square-o',
						'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
						'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
						'fa-star' => '&#xf005; fa-star',
						'fa-star-half' => '&#xf089; fa-star-half',
						'fa-star-half-o' => '&#xf123; fa-star-half-o',
						'fa-star-o' => '&#xf006; fa-star-o',
						'fa-steam' => '&#xf1b6; fa-steam',
						'fa-steam-square' => '&#xf1b7; fa-steam-square',
						'fa-step-backward' => '&#xf048; fa-step-backward',
						'fa-step-forward' => '&#xf051; fa-step-forward',
						'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
						'fa-sticky-note' => '&#xf249; fa-sticky-note',
						'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
						'fa-stop' => '&#xf04d; fa-stop',
						'fa-stop-circle' => '&#xf28d; fa-stop-circle',
						'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
						'fa-street-view' => '&#xf21d; fa-street-view',
						'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
						'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
						'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
						'fa-subscript' => '&#xf12c; fa-subscript',
						'fa-subway' => '&#xf239; fa-subway',
						'fa-suitcase' => '&#xf0f2; fa-suitcase',
						'fa-sun-o' => '&#xf185; fa-sun-o',
						'fa-superscript' => '&#xf12b; fa-superscript',
						'fa-table' => '&#xf0ce; fa-table',
						'fa-tablet' => '&#xf10a; fa-tablet',
						'fa-tachometer' => '&#xf0e4; fa-tachometer',
						'fa-tag' => '&#xf02b; fa-tag',
						'fa-tags' => '&#xf02c; fa-tags',
						'fa-tasks' => '&#xf0ae; fa-tasks',
						'fa-taxi' => '&#xf1ba; fa-taxi',
						'fa-television' => '&#xf26c; fa-television',
						'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
						'fa-terminal' => '&#xf120; fa-terminal',
						'fa-text-height' => '&#xf034; fa-text-height',
						'fa-text-width' => '&#xf035; fa-text-width',
						'fa-th' => '&#xf00a; fa-th',
						'fa-th-large' => '&#xf009; fa-th-large',
						'fa-th-list' => '&#xf00b; fa-th-list',
						'fa-themeisle' => '&#xf2b2; fa-themeisle',
						'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
						'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
						'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
						'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
						'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
						'fa-ticket' => '&#xf145; fa-ticket',
						'fa-times' => '&#xf00d; fa-times',
						'fa-times-circle' => '&#xf057; fa-times-circle',
						'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
						'fa-tint' => '&#xf043; fa-tint',
						'fa-toggle-off' => '&#xf204; fa-toggle-off',
						'fa-toggle-on' => '&#xf205; fa-toggle-on',
						'fa-trademark' => '&#xf25c; fa-trademark',
						'fa-train' => '&#xf238; fa-train',
						'fa-transgender' => '&#xf224; fa-transgender',
						'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
						'fa-trash' => '&#xf1f8; fa-trash',
						'fa-trash-o' => '&#xf014; fa-trash-o',
						'fa-tree' => '&#xf1bb; fa-tree',
						'fa-trello' => '&#xf181; fa-trello',
						'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
						'fa-trophy' => '&#xf091; fa-trophy',
						'fa-truck' => '&#xf0d1; fa-truck',
						'fa-try' => '&#xf195; fa-try',
						'fa-tty' => '&#xf1e4; fa-tty',
						'fa-tumblr' => '&#xf173; fa-tumblr',
						'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
						'fa-twitch' => '&#xf1e8; fa-twitch',
						'fa-twitter' => '&#xf099; fa-twitter',
						'fa-twitter-square' => '&#xf081; fa-twitter-square',
						'fa-umbrella' => '&#xf0e9; fa-umbrella',
						'fa-underline' => '&#xf0cd; fa-underline',
						'fa-undo' => '&#xf0e2; fa-undo',
						'fa-universal-access' => '&#xf29a; fa-universal-access',
						'fa-university' => '&#xf19c; fa-university',
						'fa-unlock' => '&#xf09c; fa-unlock',
						'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
						'fa-upload' => '&#xf093; fa-upload',
						'fa-usb' => '&#xf287; fa-usb',
						'fa-usd' => '&#xf155; fa-usd',
						'fa-user' => '&#xf007; fa-user',
						'fa-user-md' => '&#xf0f0; fa-user-md',
						'fa-user-plus' => '&#xf234; fa-user-plus',
						'fa-user-secret' => '&#xf21b; fa-user-secret',
						'fa-user-times' => '&#xf235; fa-user-times',
						'fa-users' => '&#xf0c0; fa-users',
						'fa-venus' => '&#xf221; fa-venus',
						'fa-venus-double' => '&#xf226; fa-venus-double',
						'fa-venus-mars' => '&#xf228; fa-venus-mars',
						'fa-viacoin' => '&#xf237; fa-viacoin',
						'fa-viadeo' => '&#xf2a9; fa-viadeo',
						'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
						'fa-video-camera' => '&#xf03d; fa-video-camera',
						'fa-vimeo' => '&#xf27d; fa-vimeo',
						'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
						'fa-vine' => '&#xf1ca; fa-vine',
						'fa-vk' => '&#xf189; fa-vk',
						'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
						'fa-volume-down' => '&#xf027; fa-volume-down',
						'fa-volume-off' => '&#xf026; fa-volume-off',
						'fa-volume-up' => '&#xf028; fa-volume-up',
						'fa-weibo' => '&#xf18a; fa-weibo',
						'fa-weixin' => '&#xf1d7; fa-weixin',
						'fa-whatsapp' => '&#xf232; fa-whatsapp',
						'fa-wheelchair' => '&#xf193; fa-wheelchair',
						'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
						'fa-wifi' => '&#xf1eb; fa-wifi',
						'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
						'fa-windows' => '&#xf17a; fa-windows',
						'fa-wordpress' => '&#xf19a; fa-wordpress',
						'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
						'fa-wpforms' => '&#xf298; fa-wpforms',
						'fa-wrench' => '&#xf0ad; fa-wrench',
						'fa-xing' => '&#xf168; fa-xing',
						'fa-xing-square' => '&#xf169; fa-xing-square',
						'fa-y-combinator' => '&#xf23b; fa-y-combinator',
						'fa-yahoo' => '&#xf19e; fa-yahoo',
						'fa-yelp' => '&#xf1e9; fa-yelp',
						'fa-yoast' => '&#xf2b1; fa-yoast',
						'fa-youtube' => '&#xf167; fa-youtube',
						'fa-youtube-play' => '&#xf16a; fa-youtube-play',
						'fa-youtube-square' => '&#xf166; fa-youtube-square',
					),
				),
				array (
					'key' => 'field_572dc4410973c',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'text',
					'instructions' => 'Conpany Name or University Name',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572dc4410973d',
					'label' => 'Sub Heading',
					'name' => 'sub_heading',
					'type' => 'text',
					'instructions' => 'Your Position In company or Degree',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572dc4410973e',
					'label' => 'Tenure',
					'name' => 'tenure',
					'type' => 'text',
					'instructions' => 'Enter Duration',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572dc4410973f',
					'label' => 'Content',
					'name' => 'content',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/resume.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572d5c8267082',
	'title' => 'Experience',
	'fields' => array (
		array (
			'key' => 'field_572dc476eab94',
			'label' => 'Experience Heading',
			'name' => 'experience_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572d5d035c689',
			'label' => 'Experience',
			'name' => 'experience',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572d5d145c68a',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'font-awesome',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'null',
					'save_format' => 'element',
					'allow_null' => 0,
					'enqueue_fa' => 0,
					'fa_live_preview' => '',
					'choices' => array (
						'null' => '- Select -',
						'fa-500px' => '&#xf26e; fa-500px',
						'fa-adjust' => '&#xf042; fa-adjust',
						'fa-adn' => '&#xf170; fa-adn',
						'fa-align-center' => '&#xf037; fa-align-center',
						'fa-align-justify' => '&#xf039; fa-align-justify',
						'fa-align-left' => '&#xf036; fa-align-left',
						'fa-align-right' => '&#xf038; fa-align-right',
						'fa-amazon' => '&#xf270; fa-amazon',
						'fa-ambulance' => '&#xf0f9; fa-ambulance',
						'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
						'fa-anchor' => '&#xf13d; fa-anchor',
						'fa-android' => '&#xf17b; fa-android',
						'fa-angellist' => '&#xf209; fa-angellist',
						'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
						'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
						'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
						'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
						'fa-angle-down' => '&#xf107; fa-angle-down',
						'fa-angle-left' => '&#xf104; fa-angle-left',
						'fa-angle-right' => '&#xf105; fa-angle-right',
						'fa-angle-up' => '&#xf106; fa-angle-up',
						'fa-apple' => '&#xf179; fa-apple',
						'fa-archive' => '&#xf187; fa-archive',
						'fa-area-chart' => '&#xf1fe; fa-area-chart',
						'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
						'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
						'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
						'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
						'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
						'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
						'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
						'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
						'fa-arrow-down' => '&#xf063; fa-arrow-down',
						'fa-arrow-left' => '&#xf060; fa-arrow-left',
						'fa-arrow-right' => '&#xf061; fa-arrow-right',
						'fa-arrow-up' => '&#xf062; fa-arrow-up',
						'fa-arrows' => '&#xf047; fa-arrows',
						'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
						'fa-arrows-h' => '&#xf07e; fa-arrows-h',
						'fa-arrows-v' => '&#xf07d; fa-arrows-v',
						'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
						'fa-asterisk' => '&#xf069; fa-asterisk',
						'fa-at' => '&#xf1fa; fa-at',
						'fa-audio-description' => '&#xf29e; fa-audio-description',
						'fa-backward' => '&#xf04a; fa-backward',
						'fa-balance-scale' => '&#xf24e; fa-balance-scale',
						'fa-ban' => '&#xf05e; fa-ban',
						'fa-bar-chart' => '&#xf080; fa-bar-chart',
						'fa-barcode' => '&#xf02a; fa-barcode',
						'fa-bars' => '&#xf0c9; fa-bars',
						'fa-battery-empty' => '&#xf244; fa-battery-empty',
						'fa-battery-full' => '&#xf240; fa-battery-full',
						'fa-battery-half' => '&#xf242; fa-battery-half',
						'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
						'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
						'fa-bed' => '&#xf236; fa-bed',
						'fa-beer' => '&#xf0fc; fa-beer',
						'fa-behance' => '&#xf1b4; fa-behance',
						'fa-behance-square' => '&#xf1b5; fa-behance-square',
						'fa-bell' => '&#xf0f3; fa-bell',
						'fa-bell-o' => '&#xf0a2; fa-bell-o',
						'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
						'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
						'fa-bicycle' => '&#xf206; fa-bicycle',
						'fa-binoculars' => '&#xf1e5; fa-binoculars',
						'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
						'fa-bitbucket' => '&#xf171; fa-bitbucket',
						'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
						'fa-black-tie' => '&#xf27e; fa-black-tie',
						'fa-blind' => '&#xf29d; fa-blind',
						'fa-bluetooth' => '&#xf293; fa-bluetooth',
						'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
						'fa-bold' => '&#xf032; fa-bold',
						'fa-bolt' => '&#xf0e7; fa-bolt',
						'fa-bomb' => '&#xf1e2; fa-bomb',
						'fa-book' => '&#xf02d; fa-book',
						'fa-bookmark' => '&#xf02e; fa-bookmark',
						'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
						'fa-braille' => '&#xf2a1; fa-braille',
						'fa-briefcase' => '&#xf0b1; fa-briefcase',
						'fa-btc' => '&#xf15a; fa-btc',
						'fa-bug' => '&#xf188; fa-bug',
						'fa-building' => '&#xf1ad; fa-building',
						'fa-building-o' => '&#xf0f7; fa-building-o',
						'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
						'fa-bullseye' => '&#xf140; fa-bullseye',
						'fa-bus' => '&#xf207; fa-bus',
						'fa-buysellads' => '&#xf20d; fa-buysellads',
						'fa-calculator' => '&#xf1ec; fa-calculator',
						'fa-calendar' => '&#xf073; fa-calendar',
						'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
						'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
						'fa-calendar-o' => '&#xf133; fa-calendar-o',
						'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
						'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
						'fa-camera' => '&#xf030; fa-camera',
						'fa-camera-retro' => '&#xf083; fa-camera-retro',
						'fa-car' => '&#xf1b9; fa-car',
						'fa-caret-down' => '&#xf0d7; fa-caret-down',
						'fa-caret-left' => '&#xf0d9; fa-caret-left',
						'fa-caret-right' => '&#xf0da; fa-caret-right',
						'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
						'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
						'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
						'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
						'fa-caret-up' => '&#xf0d8; fa-caret-up',
						'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
						'fa-cart-plus' => '&#xf217; fa-cart-plus',
						'fa-cc' => '&#xf20a; fa-cc',
						'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
						'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
						'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
						'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
						'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
						'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
						'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
						'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
						'fa-certificate' => '&#xf0a3; fa-certificate',
						'fa-chain-broken' => '&#xf127; fa-chain-broken',
						'fa-check' => '&#xf00c; fa-check',
						'fa-check-circle' => '&#xf058; fa-check-circle',
						'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
						'fa-check-square' => '&#xf14a; fa-check-square',
						'fa-check-square-o' => '&#xf046; fa-check-square-o',
						'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
						'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
						'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
						'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
						'fa-chevron-down' => '&#xf078; fa-chevron-down',
						'fa-chevron-left' => '&#xf053; fa-chevron-left',
						'fa-chevron-right' => '&#xf054; fa-chevron-right',
						'fa-chevron-up' => '&#xf077; fa-chevron-up',
						'fa-child' => '&#xf1ae; fa-child',
						'fa-chrome' => '&#xf268; fa-chrome',
						'fa-circle' => '&#xf111; fa-circle',
						'fa-circle-o' => '&#xf10c; fa-circle-o',
						'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
						'fa-circle-thin' => '&#xf1db; fa-circle-thin',
						'fa-clipboard' => '&#xf0ea; fa-clipboard',
						'fa-clock-o' => '&#xf017; fa-clock-o',
						'fa-clone' => '&#xf24d; fa-clone',
						'fa-cloud' => '&#xf0c2; fa-cloud',
						'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
						'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
						'fa-code' => '&#xf121; fa-code',
						'fa-code-fork' => '&#xf126; fa-code-fork',
						'fa-codepen' => '&#xf1cb; fa-codepen',
						'fa-codiepie' => '&#xf284; fa-codiepie',
						'fa-coffee' => '&#xf0f4; fa-coffee',
						'fa-cog' => '&#xf013; fa-cog',
						'fa-cogs' => '&#xf085; fa-cogs',
						'fa-columns' => '&#xf0db; fa-columns',
						'fa-comment' => '&#xf075; fa-comment',
						'fa-comment-o' => '&#xf0e5; fa-comment-o',
						'fa-commenting' => '&#xf27a; fa-commenting',
						'fa-commenting-o' => '&#xf27b; fa-commenting-o',
						'fa-comments' => '&#xf086; fa-comments',
						'fa-comments-o' => '&#xf0e6; fa-comments-o',
						'fa-compass' => '&#xf14e; fa-compass',
						'fa-compress' => '&#xf066; fa-compress',
						'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
						'fa-contao' => '&#xf26d; fa-contao',
						'fa-copyright' => '&#xf1f9; fa-copyright',
						'fa-creative-commons' => '&#xf25e; fa-creative-commons',
						'fa-credit-card' => '&#xf09d; fa-credit-card',
						'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
						'fa-crop' => '&#xf125; fa-crop',
						'fa-crosshairs' => '&#xf05b; fa-crosshairs',
						'fa-css3' => '&#xf13c; fa-css3',
						'fa-cube' => '&#xf1b2; fa-cube',
						'fa-cubes' => '&#xf1b3; fa-cubes',
						'fa-cutlery' => '&#xf0f5; fa-cutlery',
						'fa-dashcube' => '&#xf210; fa-dashcube',
						'fa-database' => '&#xf1c0; fa-database',
						'fa-deaf' => '&#xf2a4; fa-deaf',
						'fa-delicious' => '&#xf1a5; fa-delicious',
						'fa-desktop' => '&#xf108; fa-desktop',
						'fa-deviantart' => '&#xf1bd; fa-deviantart',
						'fa-diamond' => '&#xf219; fa-diamond',
						'fa-digg' => '&#xf1a6; fa-digg',
						'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
						'fa-download' => '&#xf019; fa-download',
						'fa-dribbble' => '&#xf17d; fa-dribbble',
						'fa-dropbox' => '&#xf16b; fa-dropbox',
						'fa-drupal' => '&#xf1a9; fa-drupal',
						'fa-edge' => '&#xf282; fa-edge',
						'fa-eject' => '&#xf052; fa-eject',
						'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
						'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
						'fa-empire' => '&#xf1d1; fa-empire',
						'fa-envelope' => '&#xf0e0; fa-envelope',
						'fa-envelope-o' => '&#xf003; fa-envelope-o',
						'fa-envelope-square' => '&#xf199; fa-envelope-square',
						'fa-envira' => '&#xf299; fa-envira',
						'fa-eraser' => '&#xf12d; fa-eraser',
						'fa-eur' => '&#xf153; fa-eur',
						'fa-exchange' => '&#xf0ec; fa-exchange',
						'fa-exclamation' => '&#xf12a; fa-exclamation',
						'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
						'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
						'fa-expand' => '&#xf065; fa-expand',
						'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
						'fa-external-link' => '&#xf08e; fa-external-link',
						'fa-external-link-square' => '&#xf14c; fa-external-link-square',
						'fa-eye' => '&#xf06e; fa-eye',
						'fa-eye-slash' => '&#xf070; fa-eye-slash',
						'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
						'fa-facebook' => '&#xf09a; fa-facebook',
						'fa-facebook-official' => '&#xf230; fa-facebook-official',
						'fa-facebook-square' => '&#xf082; fa-facebook-square',
						'fa-fast-backward' => '&#xf049; fa-fast-backward',
						'fa-fast-forward' => '&#xf050; fa-fast-forward',
						'fa-fax' => '&#xf1ac; fa-fax',
						'fa-female' => '&#xf182; fa-female',
						'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
						'fa-file' => '&#xf15b; fa-file',
						'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
						'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
						'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
						'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
						'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
						'fa-file-o' => '&#xf016; fa-file-o',
						'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
						'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
						'fa-file-text' => '&#xf15c; fa-file-text',
						'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
						'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
						'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
						'fa-files-o' => '&#xf0c5; fa-files-o',
						'fa-film' => '&#xf008; fa-film',
						'fa-filter' => '&#xf0b0; fa-filter',
						'fa-fire' => '&#xf06d; fa-fire',
						'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
						'fa-firefox' => '&#xf269; fa-firefox',
						'fa-first-order' => '&#xf2b0; fa-first-order',
						'fa-flag' => '&#xf024; fa-flag',
						'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
						'fa-flag-o' => '&#xf11d; fa-flag-o',
						'fa-flask' => '&#xf0c3; fa-flask',
						'fa-flickr' => '&#xf16e; fa-flickr',
						'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
						'fa-folder' => '&#xf07b; fa-folder',
						'fa-folder-o' => '&#xf114; fa-folder-o',
						'fa-folder-open' => '&#xf07c; fa-folder-open',
						'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
						'fa-font' => '&#xf031; fa-font',
						'fa-fonticons' => '&#xf280; fa-fonticons',
						'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
						'fa-forumbee' => '&#xf211; fa-forumbee',
						'fa-forward' => '&#xf04e; fa-forward',
						'fa-foursquare' => '&#xf180; fa-foursquare',
						'fa-frown-o' => '&#xf119; fa-frown-o',
						'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
						'fa-gamepad' => '&#xf11b; fa-gamepad',
						'fa-gavel' => '&#xf0e3; fa-gavel',
						'fa-gbp' => '&#xf154; fa-gbp',
						'fa-genderless' => '&#xf22d; fa-genderless',
						'fa-get-pocket' => '&#xf265; fa-get-pocket',
						'fa-gg' => '&#xf260; fa-gg',
						'fa-gg-circle' => '&#xf261; fa-gg-circle',
						'fa-gift' => '&#xf06b; fa-gift',
						'fa-git' => '&#xf1d3; fa-git',
						'fa-git-square' => '&#xf1d2; fa-git-square',
						'fa-github' => '&#xf09b; fa-github',
						'fa-github-alt' => '&#xf113; fa-github-alt',
						'fa-github-square' => '&#xf092; fa-github-square',
						'fa-gitlab' => '&#xf296; fa-gitlab',
						'fa-glass' => '&#xf000; fa-glass',
						'fa-glide' => '&#xf2a5; fa-glide',
						'fa-glide-g' => '&#xf2a6; fa-glide-g',
						'fa-globe' => '&#xf0ac; fa-globe',
						'fa-google' => '&#xf1a0; fa-google',
						'fa-google-plus' => '&#xf0d5; fa-google-plus',
						'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
						'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
						'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
						'fa-gratipay' => '&#xf184; fa-gratipay',
						'fa-h-square' => '&#xf0fd; fa-h-square',
						'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
						'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
						'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
						'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
						'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
						'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
						'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
						'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
						'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
						'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
						'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
						'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
						'fa-hashtag' => '&#xf292; fa-hashtag',
						'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
						'fa-header' => '&#xf1dc; fa-header',
						'fa-headphones' => '&#xf025; fa-headphones',
						'fa-heart' => '&#xf004; fa-heart',
						'fa-heart-o' => '&#xf08a; fa-heart-o',
						'fa-heartbeat' => '&#xf21e; fa-heartbeat',
						'fa-history' => '&#xf1da; fa-history',
						'fa-home' => '&#xf015; fa-home',
						'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
						'fa-hourglass' => '&#xf254; fa-hourglass',
						'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
						'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
						'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
						'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
						'fa-houzz' => '&#xf27c; fa-houzz',
						'fa-html5' => '&#xf13b; fa-html5',
						'fa-i-cursor' => '&#xf246; fa-i-cursor',
						'fa-ils' => '&#xf20b; fa-ils',
						'fa-inbox' => '&#xf01c; fa-inbox',
						'fa-indent' => '&#xf03c; fa-indent',
						'fa-industry' => '&#xf275; fa-industry',
						'fa-info' => '&#xf129; fa-info',
						'fa-info-circle' => '&#xf05a; fa-info-circle',
						'fa-inr' => '&#xf156; fa-inr',
						'fa-instagram' => '&#xf16d; fa-instagram',
						'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
						'fa-ioxhost' => '&#xf208; fa-ioxhost',
						'fa-italic' => '&#xf033; fa-italic',
						'fa-joomla' => '&#xf1aa; fa-joomla',
						'fa-jpy' => '&#xf157; fa-jpy',
						'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
						'fa-key' => '&#xf084; fa-key',
						'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
						'fa-krw' => '&#xf159; fa-krw',
						'fa-language' => '&#xf1ab; fa-language',
						'fa-laptop' => '&#xf109; fa-laptop',
						'fa-lastfm' => '&#xf202; fa-lastfm',
						'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
						'fa-leaf' => '&#xf06c; fa-leaf',
						'fa-leanpub' => '&#xf212; fa-leanpub',
						'fa-lemon-o' => '&#xf094; fa-lemon-o',
						'fa-level-down' => '&#xf149; fa-level-down',
						'fa-level-up' => '&#xf148; fa-level-up',
						'fa-life-ring' => '&#xf1cd; fa-life-ring',
						'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
						'fa-line-chart' => '&#xf201; fa-line-chart',
						'fa-link' => '&#xf0c1; fa-link',
						'fa-linkedin' => '&#xf0e1; fa-linkedin',
						'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
						'fa-linux' => '&#xf17c; fa-linux',
						'fa-list' => '&#xf03a; fa-list',
						'fa-list-alt' => '&#xf022; fa-list-alt',
						'fa-list-ol' => '&#xf0cb; fa-list-ol',
						'fa-list-ul' => '&#xf0ca; fa-list-ul',
						'fa-location-arrow' => '&#xf124; fa-location-arrow',
						'fa-lock' => '&#xf023; fa-lock',
						'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
						'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
						'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
						'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
						'fa-low-vision' => '&#xf2a8; fa-low-vision',
						'fa-magic' => '&#xf0d0; fa-magic',
						'fa-magnet' => '&#xf076; fa-magnet',
						'fa-male' => '&#xf183; fa-male',
						'fa-map' => '&#xf279; fa-map',
						'fa-map-marker' => '&#xf041; fa-map-marker',
						'fa-map-o' => '&#xf278; fa-map-o',
						'fa-map-pin' => '&#xf276; fa-map-pin',
						'fa-map-signs' => '&#xf277; fa-map-signs',
						'fa-mars' => '&#xf222; fa-mars',
						'fa-mars-double' => '&#xf227; fa-mars-double',
						'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
						'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
						'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
						'fa-maxcdn' => '&#xf136; fa-maxcdn',
						'fa-meanpath' => '&#xf20c; fa-meanpath',
						'fa-medium' => '&#xf23a; fa-medium',
						'fa-medkit' => '&#xf0fa; fa-medkit',
						'fa-meh-o' => '&#xf11a; fa-meh-o',
						'fa-mercury' => '&#xf223; fa-mercury',
						'fa-microphone' => '&#xf130; fa-microphone',
						'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
						'fa-minus' => '&#xf068; fa-minus',
						'fa-minus-circle' => '&#xf056; fa-minus-circle',
						'fa-minus-square' => '&#xf146; fa-minus-square',
						'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
						'fa-mixcloud' => '&#xf289; fa-mixcloud',
						'fa-mobile' => '&#xf10b; fa-mobile',
						'fa-modx' => '&#xf285; fa-modx',
						'fa-money' => '&#xf0d6; fa-money',
						'fa-moon-o' => '&#xf186; fa-moon-o',
						'fa-motorcycle' => '&#xf21c; fa-motorcycle',
						'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
						'fa-music' => '&#xf001; fa-music',
						'fa-neuter' => '&#xf22c; fa-neuter',
						'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
						'fa-object-group' => '&#xf247; fa-object-group',
						'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
						'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
						'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
						'fa-opencart' => '&#xf23d; fa-opencart',
						'fa-openid' => '&#xf19b; fa-openid',
						'fa-opera' => '&#xf26a; fa-opera',
						'fa-optin-monster' => '&#xf23c; fa-optin-monster',
						'fa-outdent' => '&#xf03b; fa-outdent',
						'fa-pagelines' => '&#xf18c; fa-pagelines',
						'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
						'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
						'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
						'fa-paperclip' => '&#xf0c6; fa-paperclip',
						'fa-paragraph' => '&#xf1dd; fa-paragraph',
						'fa-pause' => '&#xf04c; fa-pause',
						'fa-pause-circle' => '&#xf28b; fa-pause-circle',
						'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
						'fa-paw' => '&#xf1b0; fa-paw',
						'fa-paypal' => '&#xf1ed; fa-paypal',
						'fa-pencil' => '&#xf040; fa-pencil',
						'fa-pencil-square' => '&#xf14b; fa-pencil-square',
						'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
						'fa-percent' => '&#xf295; fa-percent',
						'fa-phone' => '&#xf095; fa-phone',
						'fa-phone-square' => '&#xf098; fa-phone-square',
						'fa-picture-o' => '&#xf03e; fa-picture-o',
						'fa-pie-chart' => '&#xf200; fa-pie-chart',
						'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
						'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
						'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
						'fa-pinterest' => '&#xf0d2; fa-pinterest',
						'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
						'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
						'fa-plane' => '&#xf072; fa-plane',
						'fa-play' => '&#xf04b; fa-play',
						'fa-play-circle' => '&#xf144; fa-play-circle',
						'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
						'fa-plug' => '&#xf1e6; fa-plug',
						'fa-plus' => '&#xf067; fa-plus',
						'fa-plus-circle' => '&#xf055; fa-plus-circle',
						'fa-plus-square' => '&#xf0fe; fa-plus-square',
						'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
						'fa-power-off' => '&#xf011; fa-power-off',
						'fa-print' => '&#xf02f; fa-print',
						'fa-product-hunt' => '&#xf288; fa-product-hunt',
						'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
						'fa-qq' => '&#xf1d6; fa-qq',
						'fa-qrcode' => '&#xf029; fa-qrcode',
						'fa-question' => '&#xf128; fa-question',
						'fa-question-circle' => '&#xf059; fa-question-circle',
						'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
						'fa-quote-left' => '&#xf10d; fa-quote-left',
						'fa-quote-right' => '&#xf10e; fa-quote-right',
						'fa-random' => '&#xf074; fa-random',
						'fa-rebel' => '&#xf1d0; fa-rebel',
						'fa-recycle' => '&#xf1b8; fa-recycle',
						'fa-reddit' => '&#xf1a1; fa-reddit',
						'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
						'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
						'fa-refresh' => '&#xf021; fa-refresh',
						'fa-registered' => '&#xf25d; fa-registered',
						'fa-renren' => '&#xf18b; fa-renren',
						'fa-repeat' => '&#xf01e; fa-repeat',
						'fa-reply' => '&#xf112; fa-reply',
						'fa-reply-all' => '&#xf122; fa-reply-all',
						'fa-retweet' => '&#xf079; fa-retweet',
						'fa-road' => '&#xf018; fa-road',
						'fa-rocket' => '&#xf135; fa-rocket',
						'fa-rss' => '&#xf09e; fa-rss',
						'fa-rss-square' => '&#xf143; fa-rss-square',
						'fa-rub' => '&#xf158; fa-rub',
						'fa-safari' => '&#xf267; fa-safari',
						'fa-scissors' => '&#xf0c4; fa-scissors',
						'fa-scribd' => '&#xf28a; fa-scribd',
						'fa-search' => '&#xf002; fa-search',
						'fa-search-minus' => '&#xf010; fa-search-minus',
						'fa-search-plus' => '&#xf00e; fa-search-plus',
						'fa-sellsy' => '&#xf213; fa-sellsy',
						'fa-server' => '&#xf233; fa-server',
						'fa-share' => '&#xf064; fa-share',
						'fa-share-alt' => '&#xf1e0; fa-share-alt',
						'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
						'fa-share-square' => '&#xf14d; fa-share-square',
						'fa-share-square-o' => '&#xf045; fa-share-square-o',
						'fa-shield' => '&#xf132; fa-shield',
						'fa-ship' => '&#xf21a; fa-ship',
						'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
						'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
						'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
						'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
						'fa-sign-in' => '&#xf090; fa-sign-in',
						'fa-sign-language' => '&#xf2a7; fa-sign-language',
						'fa-sign-out' => '&#xf08b; fa-sign-out',
						'fa-signal' => '&#xf012; fa-signal',
						'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
						'fa-sitemap' => '&#xf0e8; fa-sitemap',
						'fa-skyatlas' => '&#xf216; fa-skyatlas',
						'fa-skype' => '&#xf17e; fa-skype',
						'fa-slack' => '&#xf198; fa-slack',
						'fa-sliders' => '&#xf1de; fa-sliders',
						'fa-slideshare' => '&#xf1e7; fa-slideshare',
						'fa-smile-o' => '&#xf118; fa-smile-o',
						'fa-snapchat' => '&#xf2ab; fa-snapchat',
						'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
						'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
						'fa-sort' => '&#xf0dc; fa-sort',
						'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
						'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
						'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
						'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
						'fa-sort-asc' => '&#xf0de; fa-sort-asc',
						'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
						'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
						'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
						'fa-soundcloud' => '&#xf1be; fa-soundcloud',
						'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
						'fa-spinner' => '&#xf110; fa-spinner',
						'fa-spoon' => '&#xf1b1; fa-spoon',
						'fa-spotify' => '&#xf1bc; fa-spotify',
						'fa-square' => '&#xf0c8; fa-square',
						'fa-square-o' => '&#xf096; fa-square-o',
						'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
						'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
						'fa-star' => '&#xf005; fa-star',
						'fa-star-half' => '&#xf089; fa-star-half',
						'fa-star-half-o' => '&#xf123; fa-star-half-o',
						'fa-star-o' => '&#xf006; fa-star-o',
						'fa-steam' => '&#xf1b6; fa-steam',
						'fa-steam-square' => '&#xf1b7; fa-steam-square',
						'fa-step-backward' => '&#xf048; fa-step-backward',
						'fa-step-forward' => '&#xf051; fa-step-forward',
						'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
						'fa-sticky-note' => '&#xf249; fa-sticky-note',
						'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
						'fa-stop' => '&#xf04d; fa-stop',
						'fa-stop-circle' => '&#xf28d; fa-stop-circle',
						'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
						'fa-street-view' => '&#xf21d; fa-street-view',
						'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
						'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
						'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
						'fa-subscript' => '&#xf12c; fa-subscript',
						'fa-subway' => '&#xf239; fa-subway',
						'fa-suitcase' => '&#xf0f2; fa-suitcase',
						'fa-sun-o' => '&#xf185; fa-sun-o',
						'fa-superscript' => '&#xf12b; fa-superscript',
						'fa-table' => '&#xf0ce; fa-table',
						'fa-tablet' => '&#xf10a; fa-tablet',
						'fa-tachometer' => '&#xf0e4; fa-tachometer',
						'fa-tag' => '&#xf02b; fa-tag',
						'fa-tags' => '&#xf02c; fa-tags',
						'fa-tasks' => '&#xf0ae; fa-tasks',
						'fa-taxi' => '&#xf1ba; fa-taxi',
						'fa-television' => '&#xf26c; fa-television',
						'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
						'fa-terminal' => '&#xf120; fa-terminal',
						'fa-text-height' => '&#xf034; fa-text-height',
						'fa-text-width' => '&#xf035; fa-text-width',
						'fa-th' => '&#xf00a; fa-th',
						'fa-th-large' => '&#xf009; fa-th-large',
						'fa-th-list' => '&#xf00b; fa-th-list',
						'fa-themeisle' => '&#xf2b2; fa-themeisle',
						'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
						'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
						'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
						'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
						'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
						'fa-ticket' => '&#xf145; fa-ticket',
						'fa-times' => '&#xf00d; fa-times',
						'fa-times-circle' => '&#xf057; fa-times-circle',
						'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
						'fa-tint' => '&#xf043; fa-tint',
						'fa-toggle-off' => '&#xf204; fa-toggle-off',
						'fa-toggle-on' => '&#xf205; fa-toggle-on',
						'fa-trademark' => '&#xf25c; fa-trademark',
						'fa-train' => '&#xf238; fa-train',
						'fa-transgender' => '&#xf224; fa-transgender',
						'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
						'fa-trash' => '&#xf1f8; fa-trash',
						'fa-trash-o' => '&#xf014; fa-trash-o',
						'fa-tree' => '&#xf1bb; fa-tree',
						'fa-trello' => '&#xf181; fa-trello',
						'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
						'fa-trophy' => '&#xf091; fa-trophy',
						'fa-truck' => '&#xf0d1; fa-truck',
						'fa-try' => '&#xf195; fa-try',
						'fa-tty' => '&#xf1e4; fa-tty',
						'fa-tumblr' => '&#xf173; fa-tumblr',
						'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
						'fa-twitch' => '&#xf1e8; fa-twitch',
						'fa-twitter' => '&#xf099; fa-twitter',
						'fa-twitter-square' => '&#xf081; fa-twitter-square',
						'fa-umbrella' => '&#xf0e9; fa-umbrella',
						'fa-underline' => '&#xf0cd; fa-underline',
						'fa-undo' => '&#xf0e2; fa-undo',
						'fa-universal-access' => '&#xf29a; fa-universal-access',
						'fa-university' => '&#xf19c; fa-university',
						'fa-unlock' => '&#xf09c; fa-unlock',
						'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
						'fa-upload' => '&#xf093; fa-upload',
						'fa-usb' => '&#xf287; fa-usb',
						'fa-usd' => '&#xf155; fa-usd',
						'fa-user' => '&#xf007; fa-user',
						'fa-user-md' => '&#xf0f0; fa-user-md',
						'fa-user-plus' => '&#xf234; fa-user-plus',
						'fa-user-secret' => '&#xf21b; fa-user-secret',
						'fa-user-times' => '&#xf235; fa-user-times',
						'fa-users' => '&#xf0c0; fa-users',
						'fa-venus' => '&#xf221; fa-venus',
						'fa-venus-double' => '&#xf226; fa-venus-double',
						'fa-venus-mars' => '&#xf228; fa-venus-mars',
						'fa-viacoin' => '&#xf237; fa-viacoin',
						'fa-viadeo' => '&#xf2a9; fa-viadeo',
						'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
						'fa-video-camera' => '&#xf03d; fa-video-camera',
						'fa-vimeo' => '&#xf27d; fa-vimeo',
						'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
						'fa-vine' => '&#xf1ca; fa-vine',
						'fa-vk' => '&#xf189; fa-vk',
						'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
						'fa-volume-down' => '&#xf027; fa-volume-down',
						'fa-volume-off' => '&#xf026; fa-volume-off',
						'fa-volume-up' => '&#xf028; fa-volume-up',
						'fa-weibo' => '&#xf18a; fa-weibo',
						'fa-weixin' => '&#xf1d7; fa-weixin',
						'fa-whatsapp' => '&#xf232; fa-whatsapp',
						'fa-wheelchair' => '&#xf193; fa-wheelchair',
						'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
						'fa-wifi' => '&#xf1eb; fa-wifi',
						'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
						'fa-windows' => '&#xf17a; fa-windows',
						'fa-wordpress' => '&#xf19a; fa-wordpress',
						'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
						'fa-wpforms' => '&#xf298; fa-wpforms',
						'fa-wrench' => '&#xf0ad; fa-wrench',
						'fa-xing' => '&#xf168; fa-xing',
						'fa-xing-square' => '&#xf169; fa-xing-square',
						'fa-y-combinator' => '&#xf23b; fa-y-combinator',
						'fa-yahoo' => '&#xf19e; fa-yahoo',
						'fa-yelp' => '&#xf1e9; fa-yelp',
						'fa-yoast' => '&#xf2b1; fa-yoast',
						'fa-youtube' => '&#xf167; fa-youtube',
						'fa-youtube-play' => '&#xf16a; fa-youtube-play',
						'fa-youtube-square' => '&#xf166; fa-youtube-square',
					),
				),
				array (
					'key' => 'field_572d5d6b5c68b',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'text',
					'instructions' => 'Conpany Name or University Name',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572d5dcc5c68c',
					'label' => 'Sub Heading',
					'name' => 'sub_heading',
					'type' => 'text',
					'instructions' => 'Your Position In company or Degree',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572d5e045c68d',
					'label' => 'Tenure',
					'name' => 'tenure',
					'type' => 'text',
					'instructions' => 'Enter Duration',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572d5e605c68e',
					'label' => 'Content',
					'name' => 'content',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/resume.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5746633468741',
	'title' => 'Header Color',
	'fields' => array (
		array (
			'key' => 'field_5746636d21b0c',
			'label' => 'Header Color',
			'name' => 'header_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'templates/home.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572c94c776ded',
	'title' => 'My Profile',
	'fields' => array (
		array (
			'key' => 'field_572c95141faab',
			'label' => 'My Image',
			'name' => 'my_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_572c95471faac',
			'label' => 'My Name',
			'name' => 'my_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572d552903d39',
	'title' => 'Overview',
	'fields' => array (
		array (
			'key' => 'field_572d57b6beec1',
			'label' => 'Overview',
			'name' => 'overview',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572d57c4beec2',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572d580bbeec3',
					'label' => 'Sub Heading',
					'name' => 'sub_heading',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572d5816beec4',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'font-awesome',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'null',
					'save_format' => 'element',
					'allow_null' => 0,
					'enqueue_fa' => 0,
					'fa_live_preview' => '',
					'choices' => array (
						'null' => '- Select -',
						'fa-500px' => '&#xf26e; fa-500px',
						'fa-adjust' => '&#xf042; fa-adjust',
						'fa-adn' => '&#xf170; fa-adn',
						'fa-align-center' => '&#xf037; fa-align-center',
						'fa-align-justify' => '&#xf039; fa-align-justify',
						'fa-align-left' => '&#xf036; fa-align-left',
						'fa-align-right' => '&#xf038; fa-align-right',
						'fa-amazon' => '&#xf270; fa-amazon',
						'fa-ambulance' => '&#xf0f9; fa-ambulance',
						'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
						'fa-anchor' => '&#xf13d; fa-anchor',
						'fa-android' => '&#xf17b; fa-android',
						'fa-angellist' => '&#xf209; fa-angellist',
						'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
						'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
						'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
						'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
						'fa-angle-down' => '&#xf107; fa-angle-down',
						'fa-angle-left' => '&#xf104; fa-angle-left',
						'fa-angle-right' => '&#xf105; fa-angle-right',
						'fa-angle-up' => '&#xf106; fa-angle-up',
						'fa-apple' => '&#xf179; fa-apple',
						'fa-archive' => '&#xf187; fa-archive',
						'fa-area-chart' => '&#xf1fe; fa-area-chart',
						'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
						'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
						'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
						'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
						'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
						'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
						'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
						'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
						'fa-arrow-down' => '&#xf063; fa-arrow-down',
						'fa-arrow-left' => '&#xf060; fa-arrow-left',
						'fa-arrow-right' => '&#xf061; fa-arrow-right',
						'fa-arrow-up' => '&#xf062; fa-arrow-up',
						'fa-arrows' => '&#xf047; fa-arrows',
						'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
						'fa-arrows-h' => '&#xf07e; fa-arrows-h',
						'fa-arrows-v' => '&#xf07d; fa-arrows-v',
						'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
						'fa-asterisk' => '&#xf069; fa-asterisk',
						'fa-at' => '&#xf1fa; fa-at',
						'fa-audio-description' => '&#xf29e; fa-audio-description',
						'fa-backward' => '&#xf04a; fa-backward',
						'fa-balance-scale' => '&#xf24e; fa-balance-scale',
						'fa-ban' => '&#xf05e; fa-ban',
						'fa-bar-chart' => '&#xf080; fa-bar-chart',
						'fa-barcode' => '&#xf02a; fa-barcode',
						'fa-bars' => '&#xf0c9; fa-bars',
						'fa-battery-empty' => '&#xf244; fa-battery-empty',
						'fa-battery-full' => '&#xf240; fa-battery-full',
						'fa-battery-half' => '&#xf242; fa-battery-half',
						'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
						'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
						'fa-bed' => '&#xf236; fa-bed',
						'fa-beer' => '&#xf0fc; fa-beer',
						'fa-behance' => '&#xf1b4; fa-behance',
						'fa-behance-square' => '&#xf1b5; fa-behance-square',
						'fa-bell' => '&#xf0f3; fa-bell',
						'fa-bell-o' => '&#xf0a2; fa-bell-o',
						'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
						'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
						'fa-bicycle' => '&#xf206; fa-bicycle',
						'fa-binoculars' => '&#xf1e5; fa-binoculars',
						'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
						'fa-bitbucket' => '&#xf171; fa-bitbucket',
						'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
						'fa-black-tie' => '&#xf27e; fa-black-tie',
						'fa-blind' => '&#xf29d; fa-blind',
						'fa-bluetooth' => '&#xf293; fa-bluetooth',
						'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
						'fa-bold' => '&#xf032; fa-bold',
						'fa-bolt' => '&#xf0e7; fa-bolt',
						'fa-bomb' => '&#xf1e2; fa-bomb',
						'fa-book' => '&#xf02d; fa-book',
						'fa-bookmark' => '&#xf02e; fa-bookmark',
						'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
						'fa-braille' => '&#xf2a1; fa-braille',
						'fa-briefcase' => '&#xf0b1; fa-briefcase',
						'fa-btc' => '&#xf15a; fa-btc',
						'fa-bug' => '&#xf188; fa-bug',
						'fa-building' => '&#xf1ad; fa-building',
						'fa-building-o' => '&#xf0f7; fa-building-o',
						'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
						'fa-bullseye' => '&#xf140; fa-bullseye',
						'fa-bus' => '&#xf207; fa-bus',
						'fa-buysellads' => '&#xf20d; fa-buysellads',
						'fa-calculator' => '&#xf1ec; fa-calculator',
						'fa-calendar' => '&#xf073; fa-calendar',
						'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
						'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
						'fa-calendar-o' => '&#xf133; fa-calendar-o',
						'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
						'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
						'fa-camera' => '&#xf030; fa-camera',
						'fa-camera-retro' => '&#xf083; fa-camera-retro',
						'fa-car' => '&#xf1b9; fa-car',
						'fa-caret-down' => '&#xf0d7; fa-caret-down',
						'fa-caret-left' => '&#xf0d9; fa-caret-left',
						'fa-caret-right' => '&#xf0da; fa-caret-right',
						'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
						'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
						'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
						'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
						'fa-caret-up' => '&#xf0d8; fa-caret-up',
						'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
						'fa-cart-plus' => '&#xf217; fa-cart-plus',
						'fa-cc' => '&#xf20a; fa-cc',
						'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
						'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
						'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
						'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
						'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
						'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
						'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
						'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
						'fa-certificate' => '&#xf0a3; fa-certificate',
						'fa-chain-broken' => '&#xf127; fa-chain-broken',
						'fa-check' => '&#xf00c; fa-check',
						'fa-check-circle' => '&#xf058; fa-check-circle',
						'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
						'fa-check-square' => '&#xf14a; fa-check-square',
						'fa-check-square-o' => '&#xf046; fa-check-square-o',
						'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
						'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
						'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
						'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
						'fa-chevron-down' => '&#xf078; fa-chevron-down',
						'fa-chevron-left' => '&#xf053; fa-chevron-left',
						'fa-chevron-right' => '&#xf054; fa-chevron-right',
						'fa-chevron-up' => '&#xf077; fa-chevron-up',
						'fa-child' => '&#xf1ae; fa-child',
						'fa-chrome' => '&#xf268; fa-chrome',
						'fa-circle' => '&#xf111; fa-circle',
						'fa-circle-o' => '&#xf10c; fa-circle-o',
						'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
						'fa-circle-thin' => '&#xf1db; fa-circle-thin',
						'fa-clipboard' => '&#xf0ea; fa-clipboard',
						'fa-clock-o' => '&#xf017; fa-clock-o',
						'fa-clone' => '&#xf24d; fa-clone',
						'fa-cloud' => '&#xf0c2; fa-cloud',
						'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
						'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
						'fa-code' => '&#xf121; fa-code',
						'fa-code-fork' => '&#xf126; fa-code-fork',
						'fa-codepen' => '&#xf1cb; fa-codepen',
						'fa-codiepie' => '&#xf284; fa-codiepie',
						'fa-coffee' => '&#xf0f4; fa-coffee',
						'fa-cog' => '&#xf013; fa-cog',
						'fa-cogs' => '&#xf085; fa-cogs',
						'fa-columns' => '&#xf0db; fa-columns',
						'fa-comment' => '&#xf075; fa-comment',
						'fa-comment-o' => '&#xf0e5; fa-comment-o',
						'fa-commenting' => '&#xf27a; fa-commenting',
						'fa-commenting-o' => '&#xf27b; fa-commenting-o',
						'fa-comments' => '&#xf086; fa-comments',
						'fa-comments-o' => '&#xf0e6; fa-comments-o',
						'fa-compass' => '&#xf14e; fa-compass',
						'fa-compress' => '&#xf066; fa-compress',
						'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
						'fa-contao' => '&#xf26d; fa-contao',
						'fa-copyright' => '&#xf1f9; fa-copyright',
						'fa-creative-commons' => '&#xf25e; fa-creative-commons',
						'fa-credit-card' => '&#xf09d; fa-credit-card',
						'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
						'fa-crop' => '&#xf125; fa-crop',
						'fa-crosshairs' => '&#xf05b; fa-crosshairs',
						'fa-css3' => '&#xf13c; fa-css3',
						'fa-cube' => '&#xf1b2; fa-cube',
						'fa-cubes' => '&#xf1b3; fa-cubes',
						'fa-cutlery' => '&#xf0f5; fa-cutlery',
						'fa-dashcube' => '&#xf210; fa-dashcube',
						'fa-database' => '&#xf1c0; fa-database',
						'fa-deaf' => '&#xf2a4; fa-deaf',
						'fa-delicious' => '&#xf1a5; fa-delicious',
						'fa-desktop' => '&#xf108; fa-desktop',
						'fa-deviantart' => '&#xf1bd; fa-deviantart',
						'fa-diamond' => '&#xf219; fa-diamond',
						'fa-digg' => '&#xf1a6; fa-digg',
						'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
						'fa-download' => '&#xf019; fa-download',
						'fa-dribbble' => '&#xf17d; fa-dribbble',
						'fa-dropbox' => '&#xf16b; fa-dropbox',
						'fa-drupal' => '&#xf1a9; fa-drupal',
						'fa-edge' => '&#xf282; fa-edge',
						'fa-eject' => '&#xf052; fa-eject',
						'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
						'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
						'fa-empire' => '&#xf1d1; fa-empire',
						'fa-envelope' => '&#xf0e0; fa-envelope',
						'fa-envelope-o' => '&#xf003; fa-envelope-o',
						'fa-envelope-square' => '&#xf199; fa-envelope-square',
						'fa-envira' => '&#xf299; fa-envira',
						'fa-eraser' => '&#xf12d; fa-eraser',
						'fa-eur' => '&#xf153; fa-eur',
						'fa-exchange' => '&#xf0ec; fa-exchange',
						'fa-exclamation' => '&#xf12a; fa-exclamation',
						'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
						'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
						'fa-expand' => '&#xf065; fa-expand',
						'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
						'fa-external-link' => '&#xf08e; fa-external-link',
						'fa-external-link-square' => '&#xf14c; fa-external-link-square',
						'fa-eye' => '&#xf06e; fa-eye',
						'fa-eye-slash' => '&#xf070; fa-eye-slash',
						'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
						'fa-facebook' => '&#xf09a; fa-facebook',
						'fa-facebook-official' => '&#xf230; fa-facebook-official',
						'fa-facebook-square' => '&#xf082; fa-facebook-square',
						'fa-fast-backward' => '&#xf049; fa-fast-backward',
						'fa-fast-forward' => '&#xf050; fa-fast-forward',
						'fa-fax' => '&#xf1ac; fa-fax',
						'fa-female' => '&#xf182; fa-female',
						'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
						'fa-file' => '&#xf15b; fa-file',
						'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
						'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
						'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
						'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
						'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
						'fa-file-o' => '&#xf016; fa-file-o',
						'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
						'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
						'fa-file-text' => '&#xf15c; fa-file-text',
						'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
						'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
						'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
						'fa-files-o' => '&#xf0c5; fa-files-o',
						'fa-film' => '&#xf008; fa-film',
						'fa-filter' => '&#xf0b0; fa-filter',
						'fa-fire' => '&#xf06d; fa-fire',
						'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
						'fa-firefox' => '&#xf269; fa-firefox',
						'fa-first-order' => '&#xf2b0; fa-first-order',
						'fa-flag' => '&#xf024; fa-flag',
						'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
						'fa-flag-o' => '&#xf11d; fa-flag-o',
						'fa-flask' => '&#xf0c3; fa-flask',
						'fa-flickr' => '&#xf16e; fa-flickr',
						'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
						'fa-folder' => '&#xf07b; fa-folder',
						'fa-folder-o' => '&#xf114; fa-folder-o',
						'fa-folder-open' => '&#xf07c; fa-folder-open',
						'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
						'fa-font' => '&#xf031; fa-font',
						'fa-fonticons' => '&#xf280; fa-fonticons',
						'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
						'fa-forumbee' => '&#xf211; fa-forumbee',
						'fa-forward' => '&#xf04e; fa-forward',
						'fa-foursquare' => '&#xf180; fa-foursquare',
						'fa-frown-o' => '&#xf119; fa-frown-o',
						'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
						'fa-gamepad' => '&#xf11b; fa-gamepad',
						'fa-gavel' => '&#xf0e3; fa-gavel',
						'fa-gbp' => '&#xf154; fa-gbp',
						'fa-genderless' => '&#xf22d; fa-genderless',
						'fa-get-pocket' => '&#xf265; fa-get-pocket',
						'fa-gg' => '&#xf260; fa-gg',
						'fa-gg-circle' => '&#xf261; fa-gg-circle',
						'fa-gift' => '&#xf06b; fa-gift',
						'fa-git' => '&#xf1d3; fa-git',
						'fa-git-square' => '&#xf1d2; fa-git-square',
						'fa-github' => '&#xf09b; fa-github',
						'fa-github-alt' => '&#xf113; fa-github-alt',
						'fa-github-square' => '&#xf092; fa-github-square',
						'fa-gitlab' => '&#xf296; fa-gitlab',
						'fa-glass' => '&#xf000; fa-glass',
						'fa-glide' => '&#xf2a5; fa-glide',
						'fa-glide-g' => '&#xf2a6; fa-glide-g',
						'fa-globe' => '&#xf0ac; fa-globe',
						'fa-google' => '&#xf1a0; fa-google',
						'fa-google-plus' => '&#xf0d5; fa-google-plus',
						'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
						'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
						'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
						'fa-gratipay' => '&#xf184; fa-gratipay',
						'fa-h-square' => '&#xf0fd; fa-h-square',
						'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
						'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
						'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
						'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
						'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
						'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
						'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
						'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
						'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
						'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
						'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
						'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
						'fa-hashtag' => '&#xf292; fa-hashtag',
						'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
						'fa-header' => '&#xf1dc; fa-header',
						'fa-headphones' => '&#xf025; fa-headphones',
						'fa-heart' => '&#xf004; fa-heart',
						'fa-heart-o' => '&#xf08a; fa-heart-o',
						'fa-heartbeat' => '&#xf21e; fa-heartbeat',
						'fa-history' => '&#xf1da; fa-history',
						'fa-home' => '&#xf015; fa-home',
						'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
						'fa-hourglass' => '&#xf254; fa-hourglass',
						'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
						'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
						'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
						'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
						'fa-houzz' => '&#xf27c; fa-houzz',
						'fa-html5' => '&#xf13b; fa-html5',
						'fa-i-cursor' => '&#xf246; fa-i-cursor',
						'fa-ils' => '&#xf20b; fa-ils',
						'fa-inbox' => '&#xf01c; fa-inbox',
						'fa-indent' => '&#xf03c; fa-indent',
						'fa-industry' => '&#xf275; fa-industry',
						'fa-info' => '&#xf129; fa-info',
						'fa-info-circle' => '&#xf05a; fa-info-circle',
						'fa-inr' => '&#xf156; fa-inr',
						'fa-instagram' => '&#xf16d; fa-instagram',
						'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
						'fa-ioxhost' => '&#xf208; fa-ioxhost',
						'fa-italic' => '&#xf033; fa-italic',
						'fa-joomla' => '&#xf1aa; fa-joomla',
						'fa-jpy' => '&#xf157; fa-jpy',
						'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
						'fa-key' => '&#xf084; fa-key',
						'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
						'fa-krw' => '&#xf159; fa-krw',
						'fa-language' => '&#xf1ab; fa-language',
						'fa-laptop' => '&#xf109; fa-laptop',
						'fa-lastfm' => '&#xf202; fa-lastfm',
						'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
						'fa-leaf' => '&#xf06c; fa-leaf',
						'fa-leanpub' => '&#xf212; fa-leanpub',
						'fa-lemon-o' => '&#xf094; fa-lemon-o',
						'fa-level-down' => '&#xf149; fa-level-down',
						'fa-level-up' => '&#xf148; fa-level-up',
						'fa-life-ring' => '&#xf1cd; fa-life-ring',
						'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
						'fa-line-chart' => '&#xf201; fa-line-chart',
						'fa-link' => '&#xf0c1; fa-link',
						'fa-linkedin' => '&#xf0e1; fa-linkedin',
						'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
						'fa-linux' => '&#xf17c; fa-linux',
						'fa-list' => '&#xf03a; fa-list',
						'fa-list-alt' => '&#xf022; fa-list-alt',
						'fa-list-ol' => '&#xf0cb; fa-list-ol',
						'fa-list-ul' => '&#xf0ca; fa-list-ul',
						'fa-location-arrow' => '&#xf124; fa-location-arrow',
						'fa-lock' => '&#xf023; fa-lock',
						'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
						'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
						'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
						'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
						'fa-low-vision' => '&#xf2a8; fa-low-vision',
						'fa-magic' => '&#xf0d0; fa-magic',
						'fa-magnet' => '&#xf076; fa-magnet',
						'fa-male' => '&#xf183; fa-male',
						'fa-map' => '&#xf279; fa-map',
						'fa-map-marker' => '&#xf041; fa-map-marker',
						'fa-map-o' => '&#xf278; fa-map-o',
						'fa-map-pin' => '&#xf276; fa-map-pin',
						'fa-map-signs' => '&#xf277; fa-map-signs',
						'fa-mars' => '&#xf222; fa-mars',
						'fa-mars-double' => '&#xf227; fa-mars-double',
						'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
						'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
						'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
						'fa-maxcdn' => '&#xf136; fa-maxcdn',
						'fa-meanpath' => '&#xf20c; fa-meanpath',
						'fa-medium' => '&#xf23a; fa-medium',
						'fa-medkit' => '&#xf0fa; fa-medkit',
						'fa-meh-o' => '&#xf11a; fa-meh-o',
						'fa-mercury' => '&#xf223; fa-mercury',
						'fa-microphone' => '&#xf130; fa-microphone',
						'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
						'fa-minus' => '&#xf068; fa-minus',
						'fa-minus-circle' => '&#xf056; fa-minus-circle',
						'fa-minus-square' => '&#xf146; fa-minus-square',
						'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
						'fa-mixcloud' => '&#xf289; fa-mixcloud',
						'fa-mobile' => '&#xf10b; fa-mobile',
						'fa-modx' => '&#xf285; fa-modx',
						'fa-money' => '&#xf0d6; fa-money',
						'fa-moon-o' => '&#xf186; fa-moon-o',
						'fa-motorcycle' => '&#xf21c; fa-motorcycle',
						'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
						'fa-music' => '&#xf001; fa-music',
						'fa-neuter' => '&#xf22c; fa-neuter',
						'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
						'fa-object-group' => '&#xf247; fa-object-group',
						'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
						'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
						'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
						'fa-opencart' => '&#xf23d; fa-opencart',
						'fa-openid' => '&#xf19b; fa-openid',
						'fa-opera' => '&#xf26a; fa-opera',
						'fa-optin-monster' => '&#xf23c; fa-optin-monster',
						'fa-outdent' => '&#xf03b; fa-outdent',
						'fa-pagelines' => '&#xf18c; fa-pagelines',
						'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
						'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
						'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
						'fa-paperclip' => '&#xf0c6; fa-paperclip',
						'fa-paragraph' => '&#xf1dd; fa-paragraph',
						'fa-pause' => '&#xf04c; fa-pause',
						'fa-pause-circle' => '&#xf28b; fa-pause-circle',
						'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
						'fa-paw' => '&#xf1b0; fa-paw',
						'fa-paypal' => '&#xf1ed; fa-paypal',
						'fa-pencil' => '&#xf040; fa-pencil',
						'fa-pencil-square' => '&#xf14b; fa-pencil-square',
						'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
						'fa-percent' => '&#xf295; fa-percent',
						'fa-phone' => '&#xf095; fa-phone',
						'fa-phone-square' => '&#xf098; fa-phone-square',
						'fa-picture-o' => '&#xf03e; fa-picture-o',
						'fa-pie-chart' => '&#xf200; fa-pie-chart',
						'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
						'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
						'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
						'fa-pinterest' => '&#xf0d2; fa-pinterest',
						'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
						'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
						'fa-plane' => '&#xf072; fa-plane',
						'fa-play' => '&#xf04b; fa-play',
						'fa-play-circle' => '&#xf144; fa-play-circle',
						'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
						'fa-plug' => '&#xf1e6; fa-plug',
						'fa-plus' => '&#xf067; fa-plus',
						'fa-plus-circle' => '&#xf055; fa-plus-circle',
						'fa-plus-square' => '&#xf0fe; fa-plus-square',
						'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
						'fa-power-off' => '&#xf011; fa-power-off',
						'fa-print' => '&#xf02f; fa-print',
						'fa-product-hunt' => '&#xf288; fa-product-hunt',
						'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
						'fa-qq' => '&#xf1d6; fa-qq',
						'fa-qrcode' => '&#xf029; fa-qrcode',
						'fa-question' => '&#xf128; fa-question',
						'fa-question-circle' => '&#xf059; fa-question-circle',
						'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
						'fa-quote-left' => '&#xf10d; fa-quote-left',
						'fa-quote-right' => '&#xf10e; fa-quote-right',
						'fa-random' => '&#xf074; fa-random',
						'fa-rebel' => '&#xf1d0; fa-rebel',
						'fa-recycle' => '&#xf1b8; fa-recycle',
						'fa-reddit' => '&#xf1a1; fa-reddit',
						'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
						'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
						'fa-refresh' => '&#xf021; fa-refresh',
						'fa-registered' => '&#xf25d; fa-registered',
						'fa-renren' => '&#xf18b; fa-renren',
						'fa-repeat' => '&#xf01e; fa-repeat',
						'fa-reply' => '&#xf112; fa-reply',
						'fa-reply-all' => '&#xf122; fa-reply-all',
						'fa-retweet' => '&#xf079; fa-retweet',
						'fa-road' => '&#xf018; fa-road',
						'fa-rocket' => '&#xf135; fa-rocket',
						'fa-rss' => '&#xf09e; fa-rss',
						'fa-rss-square' => '&#xf143; fa-rss-square',
						'fa-rub' => '&#xf158; fa-rub',
						'fa-safari' => '&#xf267; fa-safari',
						'fa-scissors' => '&#xf0c4; fa-scissors',
						'fa-scribd' => '&#xf28a; fa-scribd',
						'fa-search' => '&#xf002; fa-search',
						'fa-search-minus' => '&#xf010; fa-search-minus',
						'fa-search-plus' => '&#xf00e; fa-search-plus',
						'fa-sellsy' => '&#xf213; fa-sellsy',
						'fa-server' => '&#xf233; fa-server',
						'fa-share' => '&#xf064; fa-share',
						'fa-share-alt' => '&#xf1e0; fa-share-alt',
						'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
						'fa-share-square' => '&#xf14d; fa-share-square',
						'fa-share-square-o' => '&#xf045; fa-share-square-o',
						'fa-shield' => '&#xf132; fa-shield',
						'fa-ship' => '&#xf21a; fa-ship',
						'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
						'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
						'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
						'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
						'fa-sign-in' => '&#xf090; fa-sign-in',
						'fa-sign-language' => '&#xf2a7; fa-sign-language',
						'fa-sign-out' => '&#xf08b; fa-sign-out',
						'fa-signal' => '&#xf012; fa-signal',
						'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
						'fa-sitemap' => '&#xf0e8; fa-sitemap',
						'fa-skyatlas' => '&#xf216; fa-skyatlas',
						'fa-skype' => '&#xf17e; fa-skype',
						'fa-slack' => '&#xf198; fa-slack',
						'fa-sliders' => '&#xf1de; fa-sliders',
						'fa-slideshare' => '&#xf1e7; fa-slideshare',
						'fa-smile-o' => '&#xf118; fa-smile-o',
						'fa-snapchat' => '&#xf2ab; fa-snapchat',
						'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
						'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
						'fa-sort' => '&#xf0dc; fa-sort',
						'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
						'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
						'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
						'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
						'fa-sort-asc' => '&#xf0de; fa-sort-asc',
						'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
						'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
						'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
						'fa-soundcloud' => '&#xf1be; fa-soundcloud',
						'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
						'fa-spinner' => '&#xf110; fa-spinner',
						'fa-spoon' => '&#xf1b1; fa-spoon',
						'fa-spotify' => '&#xf1bc; fa-spotify',
						'fa-square' => '&#xf0c8; fa-square',
						'fa-square-o' => '&#xf096; fa-square-o',
						'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
						'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
						'fa-star' => '&#xf005; fa-star',
						'fa-star-half' => '&#xf089; fa-star-half',
						'fa-star-half-o' => '&#xf123; fa-star-half-o',
						'fa-star-o' => '&#xf006; fa-star-o',
						'fa-steam' => '&#xf1b6; fa-steam',
						'fa-steam-square' => '&#xf1b7; fa-steam-square',
						'fa-step-backward' => '&#xf048; fa-step-backward',
						'fa-step-forward' => '&#xf051; fa-step-forward',
						'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
						'fa-sticky-note' => '&#xf249; fa-sticky-note',
						'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
						'fa-stop' => '&#xf04d; fa-stop',
						'fa-stop-circle' => '&#xf28d; fa-stop-circle',
						'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
						'fa-street-view' => '&#xf21d; fa-street-view',
						'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
						'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
						'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
						'fa-subscript' => '&#xf12c; fa-subscript',
						'fa-subway' => '&#xf239; fa-subway',
						'fa-suitcase' => '&#xf0f2; fa-suitcase',
						'fa-sun-o' => '&#xf185; fa-sun-o',
						'fa-superscript' => '&#xf12b; fa-superscript',
						'fa-table' => '&#xf0ce; fa-table',
						'fa-tablet' => '&#xf10a; fa-tablet',
						'fa-tachometer' => '&#xf0e4; fa-tachometer',
						'fa-tag' => '&#xf02b; fa-tag',
						'fa-tags' => '&#xf02c; fa-tags',
						'fa-tasks' => '&#xf0ae; fa-tasks',
						'fa-taxi' => '&#xf1ba; fa-taxi',
						'fa-television' => '&#xf26c; fa-television',
						'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
						'fa-terminal' => '&#xf120; fa-terminal',
						'fa-text-height' => '&#xf034; fa-text-height',
						'fa-text-width' => '&#xf035; fa-text-width',
						'fa-th' => '&#xf00a; fa-th',
						'fa-th-large' => '&#xf009; fa-th-large',
						'fa-th-list' => '&#xf00b; fa-th-list',
						'fa-themeisle' => '&#xf2b2; fa-themeisle',
						'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
						'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
						'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
						'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
						'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
						'fa-ticket' => '&#xf145; fa-ticket',
						'fa-times' => '&#xf00d; fa-times',
						'fa-times-circle' => '&#xf057; fa-times-circle',
						'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
						'fa-tint' => '&#xf043; fa-tint',
						'fa-toggle-off' => '&#xf204; fa-toggle-off',
						'fa-toggle-on' => '&#xf205; fa-toggle-on',
						'fa-trademark' => '&#xf25c; fa-trademark',
						'fa-train' => '&#xf238; fa-train',
						'fa-transgender' => '&#xf224; fa-transgender',
						'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
						'fa-trash' => '&#xf1f8; fa-trash',
						'fa-trash-o' => '&#xf014; fa-trash-o',
						'fa-tree' => '&#xf1bb; fa-tree',
						'fa-trello' => '&#xf181; fa-trello',
						'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
						'fa-trophy' => '&#xf091; fa-trophy',
						'fa-truck' => '&#xf0d1; fa-truck',
						'fa-try' => '&#xf195; fa-try',
						'fa-tty' => '&#xf1e4; fa-tty',
						'fa-tumblr' => '&#xf173; fa-tumblr',
						'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
						'fa-twitch' => '&#xf1e8; fa-twitch',
						'fa-twitter' => '&#xf099; fa-twitter',
						'fa-twitter-square' => '&#xf081; fa-twitter-square',
						'fa-umbrella' => '&#xf0e9; fa-umbrella',
						'fa-underline' => '&#xf0cd; fa-underline',
						'fa-undo' => '&#xf0e2; fa-undo',
						'fa-universal-access' => '&#xf29a; fa-universal-access',
						'fa-university' => '&#xf19c; fa-university',
						'fa-unlock' => '&#xf09c; fa-unlock',
						'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
						'fa-upload' => '&#xf093; fa-upload',
						'fa-usb' => '&#xf287; fa-usb',
						'fa-usd' => '&#xf155; fa-usd',
						'fa-user' => '&#xf007; fa-user',
						'fa-user-md' => '&#xf0f0; fa-user-md',
						'fa-user-plus' => '&#xf234; fa-user-plus',
						'fa-user-secret' => '&#xf21b; fa-user-secret',
						'fa-user-times' => '&#xf235; fa-user-times',
						'fa-users' => '&#xf0c0; fa-users',
						'fa-venus' => '&#xf221; fa-venus',
						'fa-venus-double' => '&#xf226; fa-venus-double',
						'fa-venus-mars' => '&#xf228; fa-venus-mars',
						'fa-viacoin' => '&#xf237; fa-viacoin',
						'fa-viadeo' => '&#xf2a9; fa-viadeo',
						'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
						'fa-video-camera' => '&#xf03d; fa-video-camera',
						'fa-vimeo' => '&#xf27d; fa-vimeo',
						'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
						'fa-vine' => '&#xf1ca; fa-vine',
						'fa-vk' => '&#xf189; fa-vk',
						'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
						'fa-volume-down' => '&#xf027; fa-volume-down',
						'fa-volume-off' => '&#xf026; fa-volume-off',
						'fa-volume-up' => '&#xf028; fa-volume-up',
						'fa-weibo' => '&#xf18a; fa-weibo',
						'fa-weixin' => '&#xf1d7; fa-weixin',
						'fa-whatsapp' => '&#xf232; fa-whatsapp',
						'fa-wheelchair' => '&#xf193; fa-wheelchair',
						'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
						'fa-wifi' => '&#xf1eb; fa-wifi',
						'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
						'fa-windows' => '&#xf17a; fa-windows',
						'fa-wordpress' => '&#xf19a; fa-wordpress',
						'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
						'fa-wpforms' => '&#xf298; fa-wpforms',
						'fa-wrench' => '&#xf0ad; fa-wrench',
						'fa-xing' => '&#xf168; fa-xing',
						'fa-xing-square' => '&#xf169; fa-xing-square',
						'fa-y-combinator' => '&#xf23b; fa-y-combinator',
						'fa-yahoo' => '&#xf19e; fa-yahoo',
						'fa-yelp' => '&#xf1e9; fa-yelp',
						'fa-yoast' => '&#xf2b1; fa-yoast',
						'fa-youtube' => '&#xf167; fa-youtube',
						'fa-youtube-play' => '&#xf16a; fa-youtube-play',
						'fa-youtube-square' => '&#xf166; fa-youtube-square',
					),
				),
				array (
					'key' => 'field_572d5829beec5',
					'label' => 'Color',
					'name' => 'color',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/resume.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572e1fcb24c49',
	'title' => 'Project',
	'fields' => array (
		array (
			'key' => 'field_572e1fdcbffc5',
			'label' => 'Project Client',
			'name' => 'project_client',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572e1fecbffc6',
			'label' => 'Project URL',
			'name' => 'project_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'e.g. http://www.google.com',
		),
		array (
			'key' => 'field_572e201fbffc7',
			'label' => 'Project Images',
			'name' => 'project_images',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572e202abffc8',
					'label' => 'Project Slide Image',
					'name' => 'project_slide_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'project',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572dd50f76ca0',
	'title' => 'Skill',
	'fields' => array (
		array (
			'key' => 'field_572dd519c2219',
			'label' => 'Skill Heading',
			'name' => 'skill_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572dd4fd1db3a',
			'label' => 'Skill',
			'name' => 'skill',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572dd4fd1db3b',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'font-awesome',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'null',
					'save_format' => 'element',
					'allow_null' => 0,
					'enqueue_fa' => 0,
					'fa_live_preview' => '',
					'choices' => array (
						'null' => '- Select -',
						'fa-500px' => '&#xf26e; fa-500px',
						'fa-adjust' => '&#xf042; fa-adjust',
						'fa-adn' => '&#xf170; fa-adn',
						'fa-align-center' => '&#xf037; fa-align-center',
						'fa-align-justify' => '&#xf039; fa-align-justify',
						'fa-align-left' => '&#xf036; fa-align-left',
						'fa-align-right' => '&#xf038; fa-align-right',
						'fa-amazon' => '&#xf270; fa-amazon',
						'fa-ambulance' => '&#xf0f9; fa-ambulance',
						'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
						'fa-anchor' => '&#xf13d; fa-anchor',
						'fa-android' => '&#xf17b; fa-android',
						'fa-angellist' => '&#xf209; fa-angellist',
						'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
						'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
						'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
						'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
						'fa-angle-down' => '&#xf107; fa-angle-down',
						'fa-angle-left' => '&#xf104; fa-angle-left',
						'fa-angle-right' => '&#xf105; fa-angle-right',
						'fa-angle-up' => '&#xf106; fa-angle-up',
						'fa-apple' => '&#xf179; fa-apple',
						'fa-archive' => '&#xf187; fa-archive',
						'fa-area-chart' => '&#xf1fe; fa-area-chart',
						'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
						'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
						'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
						'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
						'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
						'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
						'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
						'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
						'fa-arrow-down' => '&#xf063; fa-arrow-down',
						'fa-arrow-left' => '&#xf060; fa-arrow-left',
						'fa-arrow-right' => '&#xf061; fa-arrow-right',
						'fa-arrow-up' => '&#xf062; fa-arrow-up',
						'fa-arrows' => '&#xf047; fa-arrows',
						'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
						'fa-arrows-h' => '&#xf07e; fa-arrows-h',
						'fa-arrows-v' => '&#xf07d; fa-arrows-v',
						'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
						'fa-asterisk' => '&#xf069; fa-asterisk',
						'fa-at' => '&#xf1fa; fa-at',
						'fa-audio-description' => '&#xf29e; fa-audio-description',
						'fa-backward' => '&#xf04a; fa-backward',
						'fa-balance-scale' => '&#xf24e; fa-balance-scale',
						'fa-ban' => '&#xf05e; fa-ban',
						'fa-bar-chart' => '&#xf080; fa-bar-chart',
						'fa-barcode' => '&#xf02a; fa-barcode',
						'fa-bars' => '&#xf0c9; fa-bars',
						'fa-battery-empty' => '&#xf244; fa-battery-empty',
						'fa-battery-full' => '&#xf240; fa-battery-full',
						'fa-battery-half' => '&#xf242; fa-battery-half',
						'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
						'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
						'fa-bed' => '&#xf236; fa-bed',
						'fa-beer' => '&#xf0fc; fa-beer',
						'fa-behance' => '&#xf1b4; fa-behance',
						'fa-behance-square' => '&#xf1b5; fa-behance-square',
						'fa-bell' => '&#xf0f3; fa-bell',
						'fa-bell-o' => '&#xf0a2; fa-bell-o',
						'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
						'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
						'fa-bicycle' => '&#xf206; fa-bicycle',
						'fa-binoculars' => '&#xf1e5; fa-binoculars',
						'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
						'fa-bitbucket' => '&#xf171; fa-bitbucket',
						'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
						'fa-black-tie' => '&#xf27e; fa-black-tie',
						'fa-blind' => '&#xf29d; fa-blind',
						'fa-bluetooth' => '&#xf293; fa-bluetooth',
						'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
						'fa-bold' => '&#xf032; fa-bold',
						'fa-bolt' => '&#xf0e7; fa-bolt',
						'fa-bomb' => '&#xf1e2; fa-bomb',
						'fa-book' => '&#xf02d; fa-book',
						'fa-bookmark' => '&#xf02e; fa-bookmark',
						'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
						'fa-braille' => '&#xf2a1; fa-braille',
						'fa-briefcase' => '&#xf0b1; fa-briefcase',
						'fa-btc' => '&#xf15a; fa-btc',
						'fa-bug' => '&#xf188; fa-bug',
						'fa-building' => '&#xf1ad; fa-building',
						'fa-building-o' => '&#xf0f7; fa-building-o',
						'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
						'fa-bullseye' => '&#xf140; fa-bullseye',
						'fa-bus' => '&#xf207; fa-bus',
						'fa-buysellads' => '&#xf20d; fa-buysellads',
						'fa-calculator' => '&#xf1ec; fa-calculator',
						'fa-calendar' => '&#xf073; fa-calendar',
						'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
						'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
						'fa-calendar-o' => '&#xf133; fa-calendar-o',
						'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
						'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
						'fa-camera' => '&#xf030; fa-camera',
						'fa-camera-retro' => '&#xf083; fa-camera-retro',
						'fa-car' => '&#xf1b9; fa-car',
						'fa-caret-down' => '&#xf0d7; fa-caret-down',
						'fa-caret-left' => '&#xf0d9; fa-caret-left',
						'fa-caret-right' => '&#xf0da; fa-caret-right',
						'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
						'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
						'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
						'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
						'fa-caret-up' => '&#xf0d8; fa-caret-up',
						'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
						'fa-cart-plus' => '&#xf217; fa-cart-plus',
						'fa-cc' => '&#xf20a; fa-cc',
						'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
						'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
						'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
						'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
						'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
						'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
						'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
						'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
						'fa-certificate' => '&#xf0a3; fa-certificate',
						'fa-chain-broken' => '&#xf127; fa-chain-broken',
						'fa-check' => '&#xf00c; fa-check',
						'fa-check-circle' => '&#xf058; fa-check-circle',
						'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
						'fa-check-square' => '&#xf14a; fa-check-square',
						'fa-check-square-o' => '&#xf046; fa-check-square-o',
						'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
						'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
						'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
						'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
						'fa-chevron-down' => '&#xf078; fa-chevron-down',
						'fa-chevron-left' => '&#xf053; fa-chevron-left',
						'fa-chevron-right' => '&#xf054; fa-chevron-right',
						'fa-chevron-up' => '&#xf077; fa-chevron-up',
						'fa-child' => '&#xf1ae; fa-child',
						'fa-chrome' => '&#xf268; fa-chrome',
						'fa-circle' => '&#xf111; fa-circle',
						'fa-circle-o' => '&#xf10c; fa-circle-o',
						'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
						'fa-circle-thin' => '&#xf1db; fa-circle-thin',
						'fa-clipboard' => '&#xf0ea; fa-clipboard',
						'fa-clock-o' => '&#xf017; fa-clock-o',
						'fa-clone' => '&#xf24d; fa-clone',
						'fa-cloud' => '&#xf0c2; fa-cloud',
						'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
						'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
						'fa-code' => '&#xf121; fa-code',
						'fa-code-fork' => '&#xf126; fa-code-fork',
						'fa-codepen' => '&#xf1cb; fa-codepen',
						'fa-codiepie' => '&#xf284; fa-codiepie',
						'fa-coffee' => '&#xf0f4; fa-coffee',
						'fa-cog' => '&#xf013; fa-cog',
						'fa-cogs' => '&#xf085; fa-cogs',
						'fa-columns' => '&#xf0db; fa-columns',
						'fa-comment' => '&#xf075; fa-comment',
						'fa-comment-o' => '&#xf0e5; fa-comment-o',
						'fa-commenting' => '&#xf27a; fa-commenting',
						'fa-commenting-o' => '&#xf27b; fa-commenting-o',
						'fa-comments' => '&#xf086; fa-comments',
						'fa-comments-o' => '&#xf0e6; fa-comments-o',
						'fa-compass' => '&#xf14e; fa-compass',
						'fa-compress' => '&#xf066; fa-compress',
						'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
						'fa-contao' => '&#xf26d; fa-contao',
						'fa-copyright' => '&#xf1f9; fa-copyright',
						'fa-creative-commons' => '&#xf25e; fa-creative-commons',
						'fa-credit-card' => '&#xf09d; fa-credit-card',
						'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
						'fa-crop' => '&#xf125; fa-crop',
						'fa-crosshairs' => '&#xf05b; fa-crosshairs',
						'fa-css3' => '&#xf13c; fa-css3',
						'fa-cube' => '&#xf1b2; fa-cube',
						'fa-cubes' => '&#xf1b3; fa-cubes',
						'fa-cutlery' => '&#xf0f5; fa-cutlery',
						'fa-dashcube' => '&#xf210; fa-dashcube',
						'fa-database' => '&#xf1c0; fa-database',
						'fa-deaf' => '&#xf2a4; fa-deaf',
						'fa-delicious' => '&#xf1a5; fa-delicious',
						'fa-desktop' => '&#xf108; fa-desktop',
						'fa-deviantart' => '&#xf1bd; fa-deviantart',
						'fa-diamond' => '&#xf219; fa-diamond',
						'fa-digg' => '&#xf1a6; fa-digg',
						'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
						'fa-download' => '&#xf019; fa-download',
						'fa-dribbble' => '&#xf17d; fa-dribbble',
						'fa-dropbox' => '&#xf16b; fa-dropbox',
						'fa-drupal' => '&#xf1a9; fa-drupal',
						'fa-edge' => '&#xf282; fa-edge',
						'fa-eject' => '&#xf052; fa-eject',
						'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
						'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
						'fa-empire' => '&#xf1d1; fa-empire',
						'fa-envelope' => '&#xf0e0; fa-envelope',
						'fa-envelope-o' => '&#xf003; fa-envelope-o',
						'fa-envelope-square' => '&#xf199; fa-envelope-square',
						'fa-envira' => '&#xf299; fa-envira',
						'fa-eraser' => '&#xf12d; fa-eraser',
						'fa-eur' => '&#xf153; fa-eur',
						'fa-exchange' => '&#xf0ec; fa-exchange',
						'fa-exclamation' => '&#xf12a; fa-exclamation',
						'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
						'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
						'fa-expand' => '&#xf065; fa-expand',
						'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
						'fa-external-link' => '&#xf08e; fa-external-link',
						'fa-external-link-square' => '&#xf14c; fa-external-link-square',
						'fa-eye' => '&#xf06e; fa-eye',
						'fa-eye-slash' => '&#xf070; fa-eye-slash',
						'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
						'fa-facebook' => '&#xf09a; fa-facebook',
						'fa-facebook-official' => '&#xf230; fa-facebook-official',
						'fa-facebook-square' => '&#xf082; fa-facebook-square',
						'fa-fast-backward' => '&#xf049; fa-fast-backward',
						'fa-fast-forward' => '&#xf050; fa-fast-forward',
						'fa-fax' => '&#xf1ac; fa-fax',
						'fa-female' => '&#xf182; fa-female',
						'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
						'fa-file' => '&#xf15b; fa-file',
						'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
						'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
						'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
						'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
						'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
						'fa-file-o' => '&#xf016; fa-file-o',
						'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
						'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
						'fa-file-text' => '&#xf15c; fa-file-text',
						'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
						'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
						'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
						'fa-files-o' => '&#xf0c5; fa-files-o',
						'fa-film' => '&#xf008; fa-film',
						'fa-filter' => '&#xf0b0; fa-filter',
						'fa-fire' => '&#xf06d; fa-fire',
						'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
						'fa-firefox' => '&#xf269; fa-firefox',
						'fa-first-order' => '&#xf2b0; fa-first-order',
						'fa-flag' => '&#xf024; fa-flag',
						'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
						'fa-flag-o' => '&#xf11d; fa-flag-o',
						'fa-flask' => '&#xf0c3; fa-flask',
						'fa-flickr' => '&#xf16e; fa-flickr',
						'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
						'fa-folder' => '&#xf07b; fa-folder',
						'fa-folder-o' => '&#xf114; fa-folder-o',
						'fa-folder-open' => '&#xf07c; fa-folder-open',
						'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
						'fa-font' => '&#xf031; fa-font',
						'fa-fonticons' => '&#xf280; fa-fonticons',
						'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
						'fa-forumbee' => '&#xf211; fa-forumbee',
						'fa-forward' => '&#xf04e; fa-forward',
						'fa-foursquare' => '&#xf180; fa-foursquare',
						'fa-frown-o' => '&#xf119; fa-frown-o',
						'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
						'fa-gamepad' => '&#xf11b; fa-gamepad',
						'fa-gavel' => '&#xf0e3; fa-gavel',
						'fa-gbp' => '&#xf154; fa-gbp',
						'fa-genderless' => '&#xf22d; fa-genderless',
						'fa-get-pocket' => '&#xf265; fa-get-pocket',
						'fa-gg' => '&#xf260; fa-gg',
						'fa-gg-circle' => '&#xf261; fa-gg-circle',
						'fa-gift' => '&#xf06b; fa-gift',
						'fa-git' => '&#xf1d3; fa-git',
						'fa-git-square' => '&#xf1d2; fa-git-square',
						'fa-github' => '&#xf09b; fa-github',
						'fa-github-alt' => '&#xf113; fa-github-alt',
						'fa-github-square' => '&#xf092; fa-github-square',
						'fa-gitlab' => '&#xf296; fa-gitlab',
						'fa-glass' => '&#xf000; fa-glass',
						'fa-glide' => '&#xf2a5; fa-glide',
						'fa-glide-g' => '&#xf2a6; fa-glide-g',
						'fa-globe' => '&#xf0ac; fa-globe',
						'fa-google' => '&#xf1a0; fa-google',
						'fa-google-plus' => '&#xf0d5; fa-google-plus',
						'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
						'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
						'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
						'fa-gratipay' => '&#xf184; fa-gratipay',
						'fa-h-square' => '&#xf0fd; fa-h-square',
						'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
						'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
						'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
						'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
						'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
						'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
						'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
						'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
						'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
						'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
						'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
						'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
						'fa-hashtag' => '&#xf292; fa-hashtag',
						'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
						'fa-header' => '&#xf1dc; fa-header',
						'fa-headphones' => '&#xf025; fa-headphones',
						'fa-heart' => '&#xf004; fa-heart',
						'fa-heart-o' => '&#xf08a; fa-heart-o',
						'fa-heartbeat' => '&#xf21e; fa-heartbeat',
						'fa-history' => '&#xf1da; fa-history',
						'fa-home' => '&#xf015; fa-home',
						'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
						'fa-hourglass' => '&#xf254; fa-hourglass',
						'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
						'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
						'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
						'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
						'fa-houzz' => '&#xf27c; fa-houzz',
						'fa-html5' => '&#xf13b; fa-html5',
						'fa-i-cursor' => '&#xf246; fa-i-cursor',
						'fa-ils' => '&#xf20b; fa-ils',
						'fa-inbox' => '&#xf01c; fa-inbox',
						'fa-indent' => '&#xf03c; fa-indent',
						'fa-industry' => '&#xf275; fa-industry',
						'fa-info' => '&#xf129; fa-info',
						'fa-info-circle' => '&#xf05a; fa-info-circle',
						'fa-inr' => '&#xf156; fa-inr',
						'fa-instagram' => '&#xf16d; fa-instagram',
						'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
						'fa-ioxhost' => '&#xf208; fa-ioxhost',
						'fa-italic' => '&#xf033; fa-italic',
						'fa-joomla' => '&#xf1aa; fa-joomla',
						'fa-jpy' => '&#xf157; fa-jpy',
						'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
						'fa-key' => '&#xf084; fa-key',
						'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
						'fa-krw' => '&#xf159; fa-krw',
						'fa-language' => '&#xf1ab; fa-language',
						'fa-laptop' => '&#xf109; fa-laptop',
						'fa-lastfm' => '&#xf202; fa-lastfm',
						'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
						'fa-leaf' => '&#xf06c; fa-leaf',
						'fa-leanpub' => '&#xf212; fa-leanpub',
						'fa-lemon-o' => '&#xf094; fa-lemon-o',
						'fa-level-down' => '&#xf149; fa-level-down',
						'fa-level-up' => '&#xf148; fa-level-up',
						'fa-life-ring' => '&#xf1cd; fa-life-ring',
						'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
						'fa-line-chart' => '&#xf201; fa-line-chart',
						'fa-link' => '&#xf0c1; fa-link',
						'fa-linkedin' => '&#xf0e1; fa-linkedin',
						'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
						'fa-linux' => '&#xf17c; fa-linux',
						'fa-list' => '&#xf03a; fa-list',
						'fa-list-alt' => '&#xf022; fa-list-alt',
						'fa-list-ol' => '&#xf0cb; fa-list-ol',
						'fa-list-ul' => '&#xf0ca; fa-list-ul',
						'fa-location-arrow' => '&#xf124; fa-location-arrow',
						'fa-lock' => '&#xf023; fa-lock',
						'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
						'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
						'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
						'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
						'fa-low-vision' => '&#xf2a8; fa-low-vision',
						'fa-magic' => '&#xf0d0; fa-magic',
						'fa-magnet' => '&#xf076; fa-magnet',
						'fa-male' => '&#xf183; fa-male',
						'fa-map' => '&#xf279; fa-map',
						'fa-map-marker' => '&#xf041; fa-map-marker',
						'fa-map-o' => '&#xf278; fa-map-o',
						'fa-map-pin' => '&#xf276; fa-map-pin',
						'fa-map-signs' => '&#xf277; fa-map-signs',
						'fa-mars' => '&#xf222; fa-mars',
						'fa-mars-double' => '&#xf227; fa-mars-double',
						'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
						'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
						'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
						'fa-maxcdn' => '&#xf136; fa-maxcdn',
						'fa-meanpath' => '&#xf20c; fa-meanpath',
						'fa-medium' => '&#xf23a; fa-medium',
						'fa-medkit' => '&#xf0fa; fa-medkit',
						'fa-meh-o' => '&#xf11a; fa-meh-o',
						'fa-mercury' => '&#xf223; fa-mercury',
						'fa-microphone' => '&#xf130; fa-microphone',
						'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
						'fa-minus' => '&#xf068; fa-minus',
						'fa-minus-circle' => '&#xf056; fa-minus-circle',
						'fa-minus-square' => '&#xf146; fa-minus-square',
						'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
						'fa-mixcloud' => '&#xf289; fa-mixcloud',
						'fa-mobile' => '&#xf10b; fa-mobile',
						'fa-modx' => '&#xf285; fa-modx',
						'fa-money' => '&#xf0d6; fa-money',
						'fa-moon-o' => '&#xf186; fa-moon-o',
						'fa-motorcycle' => '&#xf21c; fa-motorcycle',
						'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
						'fa-music' => '&#xf001; fa-music',
						'fa-neuter' => '&#xf22c; fa-neuter',
						'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
						'fa-object-group' => '&#xf247; fa-object-group',
						'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
						'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
						'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
						'fa-opencart' => '&#xf23d; fa-opencart',
						'fa-openid' => '&#xf19b; fa-openid',
						'fa-opera' => '&#xf26a; fa-opera',
						'fa-optin-monster' => '&#xf23c; fa-optin-monster',
						'fa-outdent' => '&#xf03b; fa-outdent',
						'fa-pagelines' => '&#xf18c; fa-pagelines',
						'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
						'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
						'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
						'fa-paperclip' => '&#xf0c6; fa-paperclip',
						'fa-paragraph' => '&#xf1dd; fa-paragraph',
						'fa-pause' => '&#xf04c; fa-pause',
						'fa-pause-circle' => '&#xf28b; fa-pause-circle',
						'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
						'fa-paw' => '&#xf1b0; fa-paw',
						'fa-paypal' => '&#xf1ed; fa-paypal',
						'fa-pencil' => '&#xf040; fa-pencil',
						'fa-pencil-square' => '&#xf14b; fa-pencil-square',
						'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
						'fa-percent' => '&#xf295; fa-percent',
						'fa-phone' => '&#xf095; fa-phone',
						'fa-phone-square' => '&#xf098; fa-phone-square',
						'fa-picture-o' => '&#xf03e; fa-picture-o',
						'fa-pie-chart' => '&#xf200; fa-pie-chart',
						'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
						'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
						'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
						'fa-pinterest' => '&#xf0d2; fa-pinterest',
						'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
						'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
						'fa-plane' => '&#xf072; fa-plane',
						'fa-play' => '&#xf04b; fa-play',
						'fa-play-circle' => '&#xf144; fa-play-circle',
						'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
						'fa-plug' => '&#xf1e6; fa-plug',
						'fa-plus' => '&#xf067; fa-plus',
						'fa-plus-circle' => '&#xf055; fa-plus-circle',
						'fa-plus-square' => '&#xf0fe; fa-plus-square',
						'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
						'fa-power-off' => '&#xf011; fa-power-off',
						'fa-print' => '&#xf02f; fa-print',
						'fa-product-hunt' => '&#xf288; fa-product-hunt',
						'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
						'fa-qq' => '&#xf1d6; fa-qq',
						'fa-qrcode' => '&#xf029; fa-qrcode',
						'fa-question' => '&#xf128; fa-question',
						'fa-question-circle' => '&#xf059; fa-question-circle',
						'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
						'fa-quote-left' => '&#xf10d; fa-quote-left',
						'fa-quote-right' => '&#xf10e; fa-quote-right',
						'fa-random' => '&#xf074; fa-random',
						'fa-rebel' => '&#xf1d0; fa-rebel',
						'fa-recycle' => '&#xf1b8; fa-recycle',
						'fa-reddit' => '&#xf1a1; fa-reddit',
						'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
						'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
						'fa-refresh' => '&#xf021; fa-refresh',
						'fa-registered' => '&#xf25d; fa-registered',
						'fa-renren' => '&#xf18b; fa-renren',
						'fa-repeat' => '&#xf01e; fa-repeat',
						'fa-reply' => '&#xf112; fa-reply',
						'fa-reply-all' => '&#xf122; fa-reply-all',
						'fa-retweet' => '&#xf079; fa-retweet',
						'fa-road' => '&#xf018; fa-road',
						'fa-rocket' => '&#xf135; fa-rocket',
						'fa-rss' => '&#xf09e; fa-rss',
						'fa-rss-square' => '&#xf143; fa-rss-square',
						'fa-rub' => '&#xf158; fa-rub',
						'fa-safari' => '&#xf267; fa-safari',
						'fa-scissors' => '&#xf0c4; fa-scissors',
						'fa-scribd' => '&#xf28a; fa-scribd',
						'fa-search' => '&#xf002; fa-search',
						'fa-search-minus' => '&#xf010; fa-search-minus',
						'fa-search-plus' => '&#xf00e; fa-search-plus',
						'fa-sellsy' => '&#xf213; fa-sellsy',
						'fa-server' => '&#xf233; fa-server',
						'fa-share' => '&#xf064; fa-share',
						'fa-share-alt' => '&#xf1e0; fa-share-alt',
						'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
						'fa-share-square' => '&#xf14d; fa-share-square',
						'fa-share-square-o' => '&#xf045; fa-share-square-o',
						'fa-shield' => '&#xf132; fa-shield',
						'fa-ship' => '&#xf21a; fa-ship',
						'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
						'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
						'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
						'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
						'fa-sign-in' => '&#xf090; fa-sign-in',
						'fa-sign-language' => '&#xf2a7; fa-sign-language',
						'fa-sign-out' => '&#xf08b; fa-sign-out',
						'fa-signal' => '&#xf012; fa-signal',
						'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
						'fa-sitemap' => '&#xf0e8; fa-sitemap',
						'fa-skyatlas' => '&#xf216; fa-skyatlas',
						'fa-skype' => '&#xf17e; fa-skype',
						'fa-slack' => '&#xf198; fa-slack',
						'fa-sliders' => '&#xf1de; fa-sliders',
						'fa-slideshare' => '&#xf1e7; fa-slideshare',
						'fa-smile-o' => '&#xf118; fa-smile-o',
						'fa-snapchat' => '&#xf2ab; fa-snapchat',
						'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
						'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
						'fa-sort' => '&#xf0dc; fa-sort',
						'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
						'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
						'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
						'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
						'fa-sort-asc' => '&#xf0de; fa-sort-asc',
						'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
						'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
						'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
						'fa-soundcloud' => '&#xf1be; fa-soundcloud',
						'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
						'fa-spinner' => '&#xf110; fa-spinner',
						'fa-spoon' => '&#xf1b1; fa-spoon',
						'fa-spotify' => '&#xf1bc; fa-spotify',
						'fa-square' => '&#xf0c8; fa-square',
						'fa-square-o' => '&#xf096; fa-square-o',
						'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
						'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
						'fa-star' => '&#xf005; fa-star',
						'fa-star-half' => '&#xf089; fa-star-half',
						'fa-star-half-o' => '&#xf123; fa-star-half-o',
						'fa-star-o' => '&#xf006; fa-star-o',
						'fa-steam' => '&#xf1b6; fa-steam',
						'fa-steam-square' => '&#xf1b7; fa-steam-square',
						'fa-step-backward' => '&#xf048; fa-step-backward',
						'fa-step-forward' => '&#xf051; fa-step-forward',
						'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
						'fa-sticky-note' => '&#xf249; fa-sticky-note',
						'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
						'fa-stop' => '&#xf04d; fa-stop',
						'fa-stop-circle' => '&#xf28d; fa-stop-circle',
						'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
						'fa-street-view' => '&#xf21d; fa-street-view',
						'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
						'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
						'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
						'fa-subscript' => '&#xf12c; fa-subscript',
						'fa-subway' => '&#xf239; fa-subway',
						'fa-suitcase' => '&#xf0f2; fa-suitcase',
						'fa-sun-o' => '&#xf185; fa-sun-o',
						'fa-superscript' => '&#xf12b; fa-superscript',
						'fa-table' => '&#xf0ce; fa-table',
						'fa-tablet' => '&#xf10a; fa-tablet',
						'fa-tachometer' => '&#xf0e4; fa-tachometer',
						'fa-tag' => '&#xf02b; fa-tag',
						'fa-tags' => '&#xf02c; fa-tags',
						'fa-tasks' => '&#xf0ae; fa-tasks',
						'fa-taxi' => '&#xf1ba; fa-taxi',
						'fa-television' => '&#xf26c; fa-television',
						'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
						'fa-terminal' => '&#xf120; fa-terminal',
						'fa-text-height' => '&#xf034; fa-text-height',
						'fa-text-width' => '&#xf035; fa-text-width',
						'fa-th' => '&#xf00a; fa-th',
						'fa-th-large' => '&#xf009; fa-th-large',
						'fa-th-list' => '&#xf00b; fa-th-list',
						'fa-themeisle' => '&#xf2b2; fa-themeisle',
						'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
						'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
						'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
						'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
						'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
						'fa-ticket' => '&#xf145; fa-ticket',
						'fa-times' => '&#xf00d; fa-times',
						'fa-times-circle' => '&#xf057; fa-times-circle',
						'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
						'fa-tint' => '&#xf043; fa-tint',
						'fa-toggle-off' => '&#xf204; fa-toggle-off',
						'fa-toggle-on' => '&#xf205; fa-toggle-on',
						'fa-trademark' => '&#xf25c; fa-trademark',
						'fa-train' => '&#xf238; fa-train',
						'fa-transgender' => '&#xf224; fa-transgender',
						'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
						'fa-trash' => '&#xf1f8; fa-trash',
						'fa-trash-o' => '&#xf014; fa-trash-o',
						'fa-tree' => '&#xf1bb; fa-tree',
						'fa-trello' => '&#xf181; fa-trello',
						'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
						'fa-trophy' => '&#xf091; fa-trophy',
						'fa-truck' => '&#xf0d1; fa-truck',
						'fa-try' => '&#xf195; fa-try',
						'fa-tty' => '&#xf1e4; fa-tty',
						'fa-tumblr' => '&#xf173; fa-tumblr',
						'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
						'fa-twitch' => '&#xf1e8; fa-twitch',
						'fa-twitter' => '&#xf099; fa-twitter',
						'fa-twitter-square' => '&#xf081; fa-twitter-square',
						'fa-umbrella' => '&#xf0e9; fa-umbrella',
						'fa-underline' => '&#xf0cd; fa-underline',
						'fa-undo' => '&#xf0e2; fa-undo',
						'fa-universal-access' => '&#xf29a; fa-universal-access',
						'fa-university' => '&#xf19c; fa-university',
						'fa-unlock' => '&#xf09c; fa-unlock',
						'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
						'fa-upload' => '&#xf093; fa-upload',
						'fa-usb' => '&#xf287; fa-usb',
						'fa-usd' => '&#xf155; fa-usd',
						'fa-user' => '&#xf007; fa-user',
						'fa-user-md' => '&#xf0f0; fa-user-md',
						'fa-user-plus' => '&#xf234; fa-user-plus',
						'fa-user-secret' => '&#xf21b; fa-user-secret',
						'fa-user-times' => '&#xf235; fa-user-times',
						'fa-users' => '&#xf0c0; fa-users',
						'fa-venus' => '&#xf221; fa-venus',
						'fa-venus-double' => '&#xf226; fa-venus-double',
						'fa-venus-mars' => '&#xf228; fa-venus-mars',
						'fa-viacoin' => '&#xf237; fa-viacoin',
						'fa-viadeo' => '&#xf2a9; fa-viadeo',
						'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
						'fa-video-camera' => '&#xf03d; fa-video-camera',
						'fa-vimeo' => '&#xf27d; fa-vimeo',
						'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
						'fa-vine' => '&#xf1ca; fa-vine',
						'fa-vk' => '&#xf189; fa-vk',
						'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
						'fa-volume-down' => '&#xf027; fa-volume-down',
						'fa-volume-off' => '&#xf026; fa-volume-off',
						'fa-volume-up' => '&#xf028; fa-volume-up',
						'fa-weibo' => '&#xf18a; fa-weibo',
						'fa-weixin' => '&#xf1d7; fa-weixin',
						'fa-whatsapp' => '&#xf232; fa-whatsapp',
						'fa-wheelchair' => '&#xf193; fa-wheelchair',
						'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
						'fa-wifi' => '&#xf1eb; fa-wifi',
						'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
						'fa-windows' => '&#xf17a; fa-windows',
						'fa-wordpress' => '&#xf19a; fa-wordpress',
						'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
						'fa-wpforms' => '&#xf298; fa-wpforms',
						'fa-wrench' => '&#xf0ad; fa-wrench',
						'fa-xing' => '&#xf168; fa-xing',
						'fa-xing-square' => '&#xf169; fa-xing-square',
						'fa-y-combinator' => '&#xf23b; fa-y-combinator',
						'fa-yahoo' => '&#xf19e; fa-yahoo',
						'fa-yelp' => '&#xf1e9; fa-yelp',
						'fa-yoast' => '&#xf2b1; fa-yoast',
						'fa-youtube' => '&#xf167; fa-youtube',
						'fa-youtube-play' => '&#xf16a; fa-youtube-play',
						'fa-youtube-square' => '&#xf166; fa-youtube-square',
					),
				),
				array (
					'key' => 'field_572dd4fd1db3c',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'text',
					'instructions' => 'Conpany Name or University Name',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572dd57c5f613',
					'label' => 'My Skill',
					'name' => 'my_skill',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => '',
					'max' => '',
					'layout' => 'block',
					'button_label' => 'Add Row',
					'sub_fields' => array (
						array (
							'key' => 'field_572dd5865f614',
							'label' => 'Skill Name',
							'name' => 'skill_name',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_572dd59a5f615',
							'label' => 'Skill Percentage',
							'name' => 'skill_percentage',
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'min' => '',
							'max' => '',
							'step' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/resume.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572ef80061a72',
	'title' => 'Testimonials',
	'fields' => array (
		array (
			'key' => 'field_572ef822a269f',
			'label' => 'Testimonial Heading',
			'name' => 'testimonial_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572ef82ea26a0',
			'label' => 'Testimonials',
			'name' => 'testimonials',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572ef84ea26a1',
					'label' => 'Client Says',
					'name' => 'client_says',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572ef87ba26a2',
					'label' => 'Client Name',
					'name' => 'client_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572ef8a3a26a3',
					'label' => 'Company Name',
					'name' => 'company_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'testimonials',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572f546530a49',
	'title' => 'Theme Setting',
	'fields' => array (
		array (
			'key' => 'field_572f5477f8793',
			'label' => 'General',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_572f55e85f4af',
			'label' => 'Favicon',
			'name' => 'favicon',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_572f562a5f4b0',
			'label' => 'SEO keywords',
			'name' => 'seo_keywords',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572f587dce693',
			'label' => 'Copyright text',
			'name' => 'copyright_text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 6,
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572f571f77d3e',
			'label' => 'Socials',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_572f575f8b55f',
			'label' => 'Social',
			'name' => 'social',
			'type' => 'repeater',
			'instructions' => 'If some social network is not required - leave field empty.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572f57ae8b560',
					'label' => 'Social Icon',
					'name' => 'social_icon',
					'type' => 'font-awesome',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'null',
					'save_format' => 'element',
					'allow_null' => 0,
					'enqueue_fa' => 0,
					'fa_live_preview' => '',
					'choices' => array (
						'null' => '- Select -',
						'fa-500px' => '&#xf26e; fa-500px',
						'fa-adjust' => '&#xf042; fa-adjust',
						'fa-adn' => '&#xf170; fa-adn',
						'fa-align-center' => '&#xf037; fa-align-center',
						'fa-align-justify' => '&#xf039; fa-align-justify',
						'fa-align-left' => '&#xf036; fa-align-left',
						'fa-align-right' => '&#xf038; fa-align-right',
						'fa-amazon' => '&#xf270; fa-amazon',
						'fa-ambulance' => '&#xf0f9; fa-ambulance',
						'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
						'fa-anchor' => '&#xf13d; fa-anchor',
						'fa-android' => '&#xf17b; fa-android',
						'fa-angellist' => '&#xf209; fa-angellist',
						'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
						'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
						'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
						'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
						'fa-angle-down' => '&#xf107; fa-angle-down',
						'fa-angle-left' => '&#xf104; fa-angle-left',
						'fa-angle-right' => '&#xf105; fa-angle-right',
						'fa-angle-up' => '&#xf106; fa-angle-up',
						'fa-apple' => '&#xf179; fa-apple',
						'fa-archive' => '&#xf187; fa-archive',
						'fa-area-chart' => '&#xf1fe; fa-area-chart',
						'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
						'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
						'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
						'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
						'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
						'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
						'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
						'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
						'fa-arrow-down' => '&#xf063; fa-arrow-down',
						'fa-arrow-left' => '&#xf060; fa-arrow-left',
						'fa-arrow-right' => '&#xf061; fa-arrow-right',
						'fa-arrow-up' => '&#xf062; fa-arrow-up',
						'fa-arrows' => '&#xf047; fa-arrows',
						'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
						'fa-arrows-h' => '&#xf07e; fa-arrows-h',
						'fa-arrows-v' => '&#xf07d; fa-arrows-v',
						'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
						'fa-asterisk' => '&#xf069; fa-asterisk',
						'fa-at' => '&#xf1fa; fa-at',
						'fa-audio-description' => '&#xf29e; fa-audio-description',
						'fa-backward' => '&#xf04a; fa-backward',
						'fa-balance-scale' => '&#xf24e; fa-balance-scale',
						'fa-ban' => '&#xf05e; fa-ban',
						'fa-bar-chart' => '&#xf080; fa-bar-chart',
						'fa-barcode' => '&#xf02a; fa-barcode',
						'fa-bars' => '&#xf0c9; fa-bars',
						'fa-battery-empty' => '&#xf244; fa-battery-empty',
						'fa-battery-full' => '&#xf240; fa-battery-full',
						'fa-battery-half' => '&#xf242; fa-battery-half',
						'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
						'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
						'fa-bed' => '&#xf236; fa-bed',
						'fa-beer' => '&#xf0fc; fa-beer',
						'fa-behance' => '&#xf1b4; fa-behance',
						'fa-behance-square' => '&#xf1b5; fa-behance-square',
						'fa-bell' => '&#xf0f3; fa-bell',
						'fa-bell-o' => '&#xf0a2; fa-bell-o',
						'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
						'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
						'fa-bicycle' => '&#xf206; fa-bicycle',
						'fa-binoculars' => '&#xf1e5; fa-binoculars',
						'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
						'fa-bitbucket' => '&#xf171; fa-bitbucket',
						'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
						'fa-black-tie' => '&#xf27e; fa-black-tie',
						'fa-blind' => '&#xf29d; fa-blind',
						'fa-bluetooth' => '&#xf293; fa-bluetooth',
						'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
						'fa-bold' => '&#xf032; fa-bold',
						'fa-bolt' => '&#xf0e7; fa-bolt',
						'fa-bomb' => '&#xf1e2; fa-bomb',
						'fa-book' => '&#xf02d; fa-book',
						'fa-bookmark' => '&#xf02e; fa-bookmark',
						'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
						'fa-braille' => '&#xf2a1; fa-braille',
						'fa-briefcase' => '&#xf0b1; fa-briefcase',
						'fa-btc' => '&#xf15a; fa-btc',
						'fa-bug' => '&#xf188; fa-bug',
						'fa-building' => '&#xf1ad; fa-building',
						'fa-building-o' => '&#xf0f7; fa-building-o',
						'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
						'fa-bullseye' => '&#xf140; fa-bullseye',
						'fa-bus' => '&#xf207; fa-bus',
						'fa-buysellads' => '&#xf20d; fa-buysellads',
						'fa-calculator' => '&#xf1ec; fa-calculator',
						'fa-calendar' => '&#xf073; fa-calendar',
						'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
						'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
						'fa-calendar-o' => '&#xf133; fa-calendar-o',
						'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
						'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
						'fa-camera' => '&#xf030; fa-camera',
						'fa-camera-retro' => '&#xf083; fa-camera-retro',
						'fa-car' => '&#xf1b9; fa-car',
						'fa-caret-down' => '&#xf0d7; fa-caret-down',
						'fa-caret-left' => '&#xf0d9; fa-caret-left',
						'fa-caret-right' => '&#xf0da; fa-caret-right',
						'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
						'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
						'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
						'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
						'fa-caret-up' => '&#xf0d8; fa-caret-up',
						'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
						'fa-cart-plus' => '&#xf217; fa-cart-plus',
						'fa-cc' => '&#xf20a; fa-cc',
						'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
						'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
						'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
						'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
						'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
						'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
						'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
						'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
						'fa-certificate' => '&#xf0a3; fa-certificate',
						'fa-chain-broken' => '&#xf127; fa-chain-broken',
						'fa-check' => '&#xf00c; fa-check',
						'fa-check-circle' => '&#xf058; fa-check-circle',
						'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
						'fa-check-square' => '&#xf14a; fa-check-square',
						'fa-check-square-o' => '&#xf046; fa-check-square-o',
						'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
						'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
						'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
						'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
						'fa-chevron-down' => '&#xf078; fa-chevron-down',
						'fa-chevron-left' => '&#xf053; fa-chevron-left',
						'fa-chevron-right' => '&#xf054; fa-chevron-right',
						'fa-chevron-up' => '&#xf077; fa-chevron-up',
						'fa-child' => '&#xf1ae; fa-child',
						'fa-chrome' => '&#xf268; fa-chrome',
						'fa-circle' => '&#xf111; fa-circle',
						'fa-circle-o' => '&#xf10c; fa-circle-o',
						'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
						'fa-circle-thin' => '&#xf1db; fa-circle-thin',
						'fa-clipboard' => '&#xf0ea; fa-clipboard',
						'fa-clock-o' => '&#xf017; fa-clock-o',
						'fa-clone' => '&#xf24d; fa-clone',
						'fa-cloud' => '&#xf0c2; fa-cloud',
						'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
						'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
						'fa-code' => '&#xf121; fa-code',
						'fa-code-fork' => '&#xf126; fa-code-fork',
						'fa-codepen' => '&#xf1cb; fa-codepen',
						'fa-codiepie' => '&#xf284; fa-codiepie',
						'fa-coffee' => '&#xf0f4; fa-coffee',
						'fa-cog' => '&#xf013; fa-cog',
						'fa-cogs' => '&#xf085; fa-cogs',
						'fa-columns' => '&#xf0db; fa-columns',
						'fa-comment' => '&#xf075; fa-comment',
						'fa-comment-o' => '&#xf0e5; fa-comment-o',
						'fa-commenting' => '&#xf27a; fa-commenting',
						'fa-commenting-o' => '&#xf27b; fa-commenting-o',
						'fa-comments' => '&#xf086; fa-comments',
						'fa-comments-o' => '&#xf0e6; fa-comments-o',
						'fa-compass' => '&#xf14e; fa-compass',
						'fa-compress' => '&#xf066; fa-compress',
						'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
						'fa-contao' => '&#xf26d; fa-contao',
						'fa-copyright' => '&#xf1f9; fa-copyright',
						'fa-creative-commons' => '&#xf25e; fa-creative-commons',
						'fa-credit-card' => '&#xf09d; fa-credit-card',
						'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
						'fa-crop' => '&#xf125; fa-crop',
						'fa-crosshairs' => '&#xf05b; fa-crosshairs',
						'fa-css3' => '&#xf13c; fa-css3',
						'fa-cube' => '&#xf1b2; fa-cube',
						'fa-cubes' => '&#xf1b3; fa-cubes',
						'fa-cutlery' => '&#xf0f5; fa-cutlery',
						'fa-dashcube' => '&#xf210; fa-dashcube',
						'fa-database' => '&#xf1c0; fa-database',
						'fa-deaf' => '&#xf2a4; fa-deaf',
						'fa-delicious' => '&#xf1a5; fa-delicious',
						'fa-desktop' => '&#xf108; fa-desktop',
						'fa-deviantart' => '&#xf1bd; fa-deviantart',
						'fa-diamond' => '&#xf219; fa-diamond',
						'fa-digg' => '&#xf1a6; fa-digg',
						'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
						'fa-download' => '&#xf019; fa-download',
						'fa-dribbble' => '&#xf17d; fa-dribbble',
						'fa-dropbox' => '&#xf16b; fa-dropbox',
						'fa-drupal' => '&#xf1a9; fa-drupal',
						'fa-edge' => '&#xf282; fa-edge',
						'fa-eject' => '&#xf052; fa-eject',
						'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
						'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
						'fa-empire' => '&#xf1d1; fa-empire',
						'fa-envelope' => '&#xf0e0; fa-envelope',
						'fa-envelope-o' => '&#xf003; fa-envelope-o',
						'fa-envelope-square' => '&#xf199; fa-envelope-square',
						'fa-envira' => '&#xf299; fa-envira',
						'fa-eraser' => '&#xf12d; fa-eraser',
						'fa-eur' => '&#xf153; fa-eur',
						'fa-exchange' => '&#xf0ec; fa-exchange',
						'fa-exclamation' => '&#xf12a; fa-exclamation',
						'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
						'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
						'fa-expand' => '&#xf065; fa-expand',
						'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
						'fa-external-link' => '&#xf08e; fa-external-link',
						'fa-external-link-square' => '&#xf14c; fa-external-link-square',
						'fa-eye' => '&#xf06e; fa-eye',
						'fa-eye-slash' => '&#xf070; fa-eye-slash',
						'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
						'fa-facebook' => '&#xf09a; fa-facebook',
						'fa-facebook-official' => '&#xf230; fa-facebook-official',
						'fa-facebook-square' => '&#xf082; fa-facebook-square',
						'fa-fast-backward' => '&#xf049; fa-fast-backward',
						'fa-fast-forward' => '&#xf050; fa-fast-forward',
						'fa-fax' => '&#xf1ac; fa-fax',
						'fa-female' => '&#xf182; fa-female',
						'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
						'fa-file' => '&#xf15b; fa-file',
						'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
						'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
						'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
						'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
						'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
						'fa-file-o' => '&#xf016; fa-file-o',
						'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
						'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
						'fa-file-text' => '&#xf15c; fa-file-text',
						'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
						'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
						'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
						'fa-files-o' => '&#xf0c5; fa-files-o',
						'fa-film' => '&#xf008; fa-film',
						'fa-filter' => '&#xf0b0; fa-filter',
						'fa-fire' => '&#xf06d; fa-fire',
						'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
						'fa-firefox' => '&#xf269; fa-firefox',
						'fa-first-order' => '&#xf2b0; fa-first-order',
						'fa-flag' => '&#xf024; fa-flag',
						'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
						'fa-flag-o' => '&#xf11d; fa-flag-o',
						'fa-flask' => '&#xf0c3; fa-flask',
						'fa-flickr' => '&#xf16e; fa-flickr',
						'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
						'fa-folder' => '&#xf07b; fa-folder',
						'fa-folder-o' => '&#xf114; fa-folder-o',
						'fa-folder-open' => '&#xf07c; fa-folder-open',
						'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
						'fa-font' => '&#xf031; fa-font',
						'fa-fonticons' => '&#xf280; fa-fonticons',
						'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
						'fa-forumbee' => '&#xf211; fa-forumbee',
						'fa-forward' => '&#xf04e; fa-forward',
						'fa-foursquare' => '&#xf180; fa-foursquare',
						'fa-frown-o' => '&#xf119; fa-frown-o',
						'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
						'fa-gamepad' => '&#xf11b; fa-gamepad',
						'fa-gavel' => '&#xf0e3; fa-gavel',
						'fa-gbp' => '&#xf154; fa-gbp',
						'fa-genderless' => '&#xf22d; fa-genderless',
						'fa-get-pocket' => '&#xf265; fa-get-pocket',
						'fa-gg' => '&#xf260; fa-gg',
						'fa-gg-circle' => '&#xf261; fa-gg-circle',
						'fa-gift' => '&#xf06b; fa-gift',
						'fa-git' => '&#xf1d3; fa-git',
						'fa-git-square' => '&#xf1d2; fa-git-square',
						'fa-github' => '&#xf09b; fa-github',
						'fa-github-alt' => '&#xf113; fa-github-alt',
						'fa-github-square' => '&#xf092; fa-github-square',
						'fa-gitlab' => '&#xf296; fa-gitlab',
						'fa-glass' => '&#xf000; fa-glass',
						'fa-glide' => '&#xf2a5; fa-glide',
						'fa-glide-g' => '&#xf2a6; fa-glide-g',
						'fa-globe' => '&#xf0ac; fa-globe',
						'fa-google' => '&#xf1a0; fa-google',
						'fa-google-plus' => '&#xf0d5; fa-google-plus',
						'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
						'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
						'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
						'fa-gratipay' => '&#xf184; fa-gratipay',
						'fa-h-square' => '&#xf0fd; fa-h-square',
						'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
						'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
						'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
						'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
						'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
						'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
						'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
						'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
						'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
						'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
						'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
						'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
						'fa-hashtag' => '&#xf292; fa-hashtag',
						'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
						'fa-header' => '&#xf1dc; fa-header',
						'fa-headphones' => '&#xf025; fa-headphones',
						'fa-heart' => '&#xf004; fa-heart',
						'fa-heart-o' => '&#xf08a; fa-heart-o',
						'fa-heartbeat' => '&#xf21e; fa-heartbeat',
						'fa-history' => '&#xf1da; fa-history',
						'fa-home' => '&#xf015; fa-home',
						'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
						'fa-hourglass' => '&#xf254; fa-hourglass',
						'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
						'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
						'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
						'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
						'fa-houzz' => '&#xf27c; fa-houzz',
						'fa-html5' => '&#xf13b; fa-html5',
						'fa-i-cursor' => '&#xf246; fa-i-cursor',
						'fa-ils' => '&#xf20b; fa-ils',
						'fa-inbox' => '&#xf01c; fa-inbox',
						'fa-indent' => '&#xf03c; fa-indent',
						'fa-industry' => '&#xf275; fa-industry',
						'fa-info' => '&#xf129; fa-info',
						'fa-info-circle' => '&#xf05a; fa-info-circle',
						'fa-inr' => '&#xf156; fa-inr',
						'fa-instagram' => '&#xf16d; fa-instagram',
						'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
						'fa-ioxhost' => '&#xf208; fa-ioxhost',
						'fa-italic' => '&#xf033; fa-italic',
						'fa-joomla' => '&#xf1aa; fa-joomla',
						'fa-jpy' => '&#xf157; fa-jpy',
						'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
						'fa-key' => '&#xf084; fa-key',
						'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
						'fa-krw' => '&#xf159; fa-krw',
						'fa-language' => '&#xf1ab; fa-language',
						'fa-laptop' => '&#xf109; fa-laptop',
						'fa-lastfm' => '&#xf202; fa-lastfm',
						'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
						'fa-leaf' => '&#xf06c; fa-leaf',
						'fa-leanpub' => '&#xf212; fa-leanpub',
						'fa-lemon-o' => '&#xf094; fa-lemon-o',
						'fa-level-down' => '&#xf149; fa-level-down',
						'fa-level-up' => '&#xf148; fa-level-up',
						'fa-life-ring' => '&#xf1cd; fa-life-ring',
						'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
						'fa-line-chart' => '&#xf201; fa-line-chart',
						'fa-link' => '&#xf0c1; fa-link',
						'fa-linkedin' => '&#xf0e1; fa-linkedin',
						'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
						'fa-linux' => '&#xf17c; fa-linux',
						'fa-list' => '&#xf03a; fa-list',
						'fa-list-alt' => '&#xf022; fa-list-alt',
						'fa-list-ol' => '&#xf0cb; fa-list-ol',
						'fa-list-ul' => '&#xf0ca; fa-list-ul',
						'fa-location-arrow' => '&#xf124; fa-location-arrow',
						'fa-lock' => '&#xf023; fa-lock',
						'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
						'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
						'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
						'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
						'fa-low-vision' => '&#xf2a8; fa-low-vision',
						'fa-magic' => '&#xf0d0; fa-magic',
						'fa-magnet' => '&#xf076; fa-magnet',
						'fa-male' => '&#xf183; fa-male',
						'fa-map' => '&#xf279; fa-map',
						'fa-map-marker' => '&#xf041; fa-map-marker',
						'fa-map-o' => '&#xf278; fa-map-o',
						'fa-map-pin' => '&#xf276; fa-map-pin',
						'fa-map-signs' => '&#xf277; fa-map-signs',
						'fa-mars' => '&#xf222; fa-mars',
						'fa-mars-double' => '&#xf227; fa-mars-double',
						'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
						'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
						'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
						'fa-maxcdn' => '&#xf136; fa-maxcdn',
						'fa-meanpath' => '&#xf20c; fa-meanpath',
						'fa-medium' => '&#xf23a; fa-medium',
						'fa-medkit' => '&#xf0fa; fa-medkit',
						'fa-meh-o' => '&#xf11a; fa-meh-o',
						'fa-mercury' => '&#xf223; fa-mercury',
						'fa-microphone' => '&#xf130; fa-microphone',
						'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
						'fa-minus' => '&#xf068; fa-minus',
						'fa-minus-circle' => '&#xf056; fa-minus-circle',
						'fa-minus-square' => '&#xf146; fa-minus-square',
						'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
						'fa-mixcloud' => '&#xf289; fa-mixcloud',
						'fa-mobile' => '&#xf10b; fa-mobile',
						'fa-modx' => '&#xf285; fa-modx',
						'fa-money' => '&#xf0d6; fa-money',
						'fa-moon-o' => '&#xf186; fa-moon-o',
						'fa-motorcycle' => '&#xf21c; fa-motorcycle',
						'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
						'fa-music' => '&#xf001; fa-music',
						'fa-neuter' => '&#xf22c; fa-neuter',
						'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
						'fa-object-group' => '&#xf247; fa-object-group',
						'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
						'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
						'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
						'fa-opencart' => '&#xf23d; fa-opencart',
						'fa-openid' => '&#xf19b; fa-openid',
						'fa-opera' => '&#xf26a; fa-opera',
						'fa-optin-monster' => '&#xf23c; fa-optin-monster',
						'fa-outdent' => '&#xf03b; fa-outdent',
						'fa-pagelines' => '&#xf18c; fa-pagelines',
						'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
						'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
						'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
						'fa-paperclip' => '&#xf0c6; fa-paperclip',
						'fa-paragraph' => '&#xf1dd; fa-paragraph',
						'fa-pause' => '&#xf04c; fa-pause',
						'fa-pause-circle' => '&#xf28b; fa-pause-circle',
						'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
						'fa-paw' => '&#xf1b0; fa-paw',
						'fa-paypal' => '&#xf1ed; fa-paypal',
						'fa-pencil' => '&#xf040; fa-pencil',
						'fa-pencil-square' => '&#xf14b; fa-pencil-square',
						'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
						'fa-percent' => '&#xf295; fa-percent',
						'fa-phone' => '&#xf095; fa-phone',
						'fa-phone-square' => '&#xf098; fa-phone-square',
						'fa-picture-o' => '&#xf03e; fa-picture-o',
						'fa-pie-chart' => '&#xf200; fa-pie-chart',
						'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
						'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
						'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
						'fa-pinterest' => '&#xf0d2; fa-pinterest',
						'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
						'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
						'fa-plane' => '&#xf072; fa-plane',
						'fa-play' => '&#xf04b; fa-play',
						'fa-play-circle' => '&#xf144; fa-play-circle',
						'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
						'fa-plug' => '&#xf1e6; fa-plug',
						'fa-plus' => '&#xf067; fa-plus',
						'fa-plus-circle' => '&#xf055; fa-plus-circle',
						'fa-plus-square' => '&#xf0fe; fa-plus-square',
						'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
						'fa-power-off' => '&#xf011; fa-power-off',
						'fa-print' => '&#xf02f; fa-print',
						'fa-product-hunt' => '&#xf288; fa-product-hunt',
						'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
						'fa-qq' => '&#xf1d6; fa-qq',
						'fa-qrcode' => '&#xf029; fa-qrcode',
						'fa-question' => '&#xf128; fa-question',
						'fa-question-circle' => '&#xf059; fa-question-circle',
						'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
						'fa-quote-left' => '&#xf10d; fa-quote-left',
						'fa-quote-right' => '&#xf10e; fa-quote-right',
						'fa-random' => '&#xf074; fa-random',
						'fa-rebel' => '&#xf1d0; fa-rebel',
						'fa-recycle' => '&#xf1b8; fa-recycle',
						'fa-reddit' => '&#xf1a1; fa-reddit',
						'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
						'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
						'fa-refresh' => '&#xf021; fa-refresh',
						'fa-registered' => '&#xf25d; fa-registered',
						'fa-renren' => '&#xf18b; fa-renren',
						'fa-repeat' => '&#xf01e; fa-repeat',
						'fa-reply' => '&#xf112; fa-reply',
						'fa-reply-all' => '&#xf122; fa-reply-all',
						'fa-retweet' => '&#xf079; fa-retweet',
						'fa-road' => '&#xf018; fa-road',
						'fa-rocket' => '&#xf135; fa-rocket',
						'fa-rss' => '&#xf09e; fa-rss',
						'fa-rss-square' => '&#xf143; fa-rss-square',
						'fa-rub' => '&#xf158; fa-rub',
						'fa-safari' => '&#xf267; fa-safari',
						'fa-scissors' => '&#xf0c4; fa-scissors',
						'fa-scribd' => '&#xf28a; fa-scribd',
						'fa-search' => '&#xf002; fa-search',
						'fa-search-minus' => '&#xf010; fa-search-minus',
						'fa-search-plus' => '&#xf00e; fa-search-plus',
						'fa-sellsy' => '&#xf213; fa-sellsy',
						'fa-server' => '&#xf233; fa-server',
						'fa-share' => '&#xf064; fa-share',
						'fa-share-alt' => '&#xf1e0; fa-share-alt',
						'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
						'fa-share-square' => '&#xf14d; fa-share-square',
						'fa-share-square-o' => '&#xf045; fa-share-square-o',
						'fa-shield' => '&#xf132; fa-shield',
						'fa-ship' => '&#xf21a; fa-ship',
						'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
						'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
						'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
						'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
						'fa-sign-in' => '&#xf090; fa-sign-in',
						'fa-sign-language' => '&#xf2a7; fa-sign-language',
						'fa-sign-out' => '&#xf08b; fa-sign-out',
						'fa-signal' => '&#xf012; fa-signal',
						'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
						'fa-sitemap' => '&#xf0e8; fa-sitemap',
						'fa-skyatlas' => '&#xf216; fa-skyatlas',
						'fa-skype' => '&#xf17e; fa-skype',
						'fa-slack' => '&#xf198; fa-slack',
						'fa-sliders' => '&#xf1de; fa-sliders',
						'fa-slideshare' => '&#xf1e7; fa-slideshare',
						'fa-smile-o' => '&#xf118; fa-smile-o',
						'fa-snapchat' => '&#xf2ab; fa-snapchat',
						'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
						'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
						'fa-sort' => '&#xf0dc; fa-sort',
						'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
						'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
						'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
						'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
						'fa-sort-asc' => '&#xf0de; fa-sort-asc',
						'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
						'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
						'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
						'fa-soundcloud' => '&#xf1be; fa-soundcloud',
						'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
						'fa-spinner' => '&#xf110; fa-spinner',
						'fa-spoon' => '&#xf1b1; fa-spoon',
						'fa-spotify' => '&#xf1bc; fa-spotify',
						'fa-square' => '&#xf0c8; fa-square',
						'fa-square-o' => '&#xf096; fa-square-o',
						'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
						'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
						'fa-star' => '&#xf005; fa-star',
						'fa-star-half' => '&#xf089; fa-star-half',
						'fa-star-half-o' => '&#xf123; fa-star-half-o',
						'fa-star-o' => '&#xf006; fa-star-o',
						'fa-steam' => '&#xf1b6; fa-steam',
						'fa-steam-square' => '&#xf1b7; fa-steam-square',
						'fa-step-backward' => '&#xf048; fa-step-backward',
						'fa-step-forward' => '&#xf051; fa-step-forward',
						'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
						'fa-sticky-note' => '&#xf249; fa-sticky-note',
						'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
						'fa-stop' => '&#xf04d; fa-stop',
						'fa-stop-circle' => '&#xf28d; fa-stop-circle',
						'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
						'fa-street-view' => '&#xf21d; fa-street-view',
						'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
						'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
						'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
						'fa-subscript' => '&#xf12c; fa-subscript',
						'fa-subway' => '&#xf239; fa-subway',
						'fa-suitcase' => '&#xf0f2; fa-suitcase',
						'fa-sun-o' => '&#xf185; fa-sun-o',
						'fa-superscript' => '&#xf12b; fa-superscript',
						'fa-table' => '&#xf0ce; fa-table',
						'fa-tablet' => '&#xf10a; fa-tablet',
						'fa-tachometer' => '&#xf0e4; fa-tachometer',
						'fa-tag' => '&#xf02b; fa-tag',
						'fa-tags' => '&#xf02c; fa-tags',
						'fa-tasks' => '&#xf0ae; fa-tasks',
						'fa-taxi' => '&#xf1ba; fa-taxi',
						'fa-television' => '&#xf26c; fa-television',
						'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
						'fa-terminal' => '&#xf120; fa-terminal',
						'fa-text-height' => '&#xf034; fa-text-height',
						'fa-text-width' => '&#xf035; fa-text-width',
						'fa-th' => '&#xf00a; fa-th',
						'fa-th-large' => '&#xf009; fa-th-large',
						'fa-th-list' => '&#xf00b; fa-th-list',
						'fa-themeisle' => '&#xf2b2; fa-themeisle',
						'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
						'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
						'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
						'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
						'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
						'fa-ticket' => '&#xf145; fa-ticket',
						'fa-times' => '&#xf00d; fa-times',
						'fa-times-circle' => '&#xf057; fa-times-circle',
						'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
						'fa-tint' => '&#xf043; fa-tint',
						'fa-toggle-off' => '&#xf204; fa-toggle-off',
						'fa-toggle-on' => '&#xf205; fa-toggle-on',
						'fa-trademark' => '&#xf25c; fa-trademark',
						'fa-train' => '&#xf238; fa-train',
						'fa-transgender' => '&#xf224; fa-transgender',
						'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
						'fa-trash' => '&#xf1f8; fa-trash',
						'fa-trash-o' => '&#xf014; fa-trash-o',
						'fa-tree' => '&#xf1bb; fa-tree',
						'fa-trello' => '&#xf181; fa-trello',
						'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
						'fa-trophy' => '&#xf091; fa-trophy',
						'fa-truck' => '&#xf0d1; fa-truck',
						'fa-try' => '&#xf195; fa-try',
						'fa-tty' => '&#xf1e4; fa-tty',
						'fa-tumblr' => '&#xf173; fa-tumblr',
						'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
						'fa-twitch' => '&#xf1e8; fa-twitch',
						'fa-twitter' => '&#xf099; fa-twitter',
						'fa-twitter-square' => '&#xf081; fa-twitter-square',
						'fa-umbrella' => '&#xf0e9; fa-umbrella',
						'fa-underline' => '&#xf0cd; fa-underline',
						'fa-undo' => '&#xf0e2; fa-undo',
						'fa-universal-access' => '&#xf29a; fa-universal-access',
						'fa-university' => '&#xf19c; fa-university',
						'fa-unlock' => '&#xf09c; fa-unlock',
						'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
						'fa-upload' => '&#xf093; fa-upload',
						'fa-usb' => '&#xf287; fa-usb',
						'fa-usd' => '&#xf155; fa-usd',
						'fa-user' => '&#xf007; fa-user',
						'fa-user-md' => '&#xf0f0; fa-user-md',
						'fa-user-plus' => '&#xf234; fa-user-plus',
						'fa-user-secret' => '&#xf21b; fa-user-secret',
						'fa-user-times' => '&#xf235; fa-user-times',
						'fa-users' => '&#xf0c0; fa-users',
						'fa-venus' => '&#xf221; fa-venus',
						'fa-venus-double' => '&#xf226; fa-venus-double',
						'fa-venus-mars' => '&#xf228; fa-venus-mars',
						'fa-viacoin' => '&#xf237; fa-viacoin',
						'fa-viadeo' => '&#xf2a9; fa-viadeo',
						'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
						'fa-video-camera' => '&#xf03d; fa-video-camera',
						'fa-vimeo' => '&#xf27d; fa-vimeo',
						'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
						'fa-vine' => '&#xf1ca; fa-vine',
						'fa-vk' => '&#xf189; fa-vk',
						'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
						'fa-volume-down' => '&#xf027; fa-volume-down',
						'fa-volume-off' => '&#xf026; fa-volume-off',
						'fa-volume-up' => '&#xf028; fa-volume-up',
						'fa-weibo' => '&#xf18a; fa-weibo',
						'fa-weixin' => '&#xf1d7; fa-weixin',
						'fa-whatsapp' => '&#xf232; fa-whatsapp',
						'fa-wheelchair' => '&#xf193; fa-wheelchair',
						'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
						'fa-wifi' => '&#xf1eb; fa-wifi',
						'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
						'fa-windows' => '&#xf17a; fa-windows',
						'fa-wordpress' => '&#xf19a; fa-wordpress',
						'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
						'fa-wpforms' => '&#xf298; fa-wpforms',
						'fa-wrench' => '&#xf0ad; fa-wrench',
						'fa-xing' => '&#xf168; fa-xing',
						'fa-xing-square' => '&#xf169; fa-xing-square',
						'fa-y-combinator' => '&#xf23b; fa-y-combinator',
						'fa-yahoo' => '&#xf19e; fa-yahoo',
						'fa-yelp' => '&#xf1e9; fa-yelp',
						'fa-yoast' => '&#xf2b1; fa-yoast',
						'fa-youtube' => '&#xf167; fa-youtube',
						'fa-youtube-play' => '&#xf16a; fa-youtube-play',
						'fa-youtube-square' => '&#xf166; fa-youtube-square',
					),
				),
				array (
					'key' => 'field_572f57d78b561',
					'label' => 'Social Link',
					'name' => 'social_link',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'http://www.facebook.com/username',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme_setting',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572cbe6c74a77',
	'title' => 'Home Menu',
	'fields' => array (
		array (
			'key' => 'field_572cbed344fd9',
			'label' => 'Home Menu',
			'name' => 'home_menu',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572cbfdb44fda',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572cc27344fdb',
					'label' => 'Subheading',
					'name' => 'subheading',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => '',
					'max' => '',
					'layout' => 'table',
					'button_label' => 'Add Row',
					'sub_fields' => array (
						array (
							'key' => 'field_572cc28e44fdc',
							'label' => 'Subheading Text',
							'name' => 'subheading_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
				),
				array (
					'key' => 'field_572cc2a044fdd',
					'label' => 'Page Link',
					'name' => 'page_link',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
						0 => 'page',
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
				),
				array (
					'key' => 'field_572cc2d944fde',
					'label' => 'Page Icon',
					'name' => 'page_icon',
					'type' => 'font-awesome',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'null',
					'save_format' => 'element',
					'allow_null' => 0,
					'enqueue_fa' => 0,
					'fa_live_preview' => '',
					'choices' => array (
						'null' => '- Select -',
						'fa-500px' => '&#xf26e; fa-500px',
						'fa-adjust' => '&#xf042; fa-adjust',
						'fa-adn' => '&#xf170; fa-adn',
						'fa-align-center' => '&#xf037; fa-align-center',
						'fa-align-justify' => '&#xf039; fa-align-justify',
						'fa-align-left' => '&#xf036; fa-align-left',
						'fa-align-right' => '&#xf038; fa-align-right',
						'fa-amazon' => '&#xf270; fa-amazon',
						'fa-ambulance' => '&#xf0f9; fa-ambulance',
						'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
						'fa-anchor' => '&#xf13d; fa-anchor',
						'fa-android' => '&#xf17b; fa-android',
						'fa-angellist' => '&#xf209; fa-angellist',
						'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
						'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
						'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
						'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
						'fa-angle-down' => '&#xf107; fa-angle-down',
						'fa-angle-left' => '&#xf104; fa-angle-left',
						'fa-angle-right' => '&#xf105; fa-angle-right',
						'fa-angle-up' => '&#xf106; fa-angle-up',
						'fa-apple' => '&#xf179; fa-apple',
						'fa-archive' => '&#xf187; fa-archive',
						'fa-area-chart' => '&#xf1fe; fa-area-chart',
						'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
						'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
						'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
						'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
						'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
						'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
						'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
						'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
						'fa-arrow-down' => '&#xf063; fa-arrow-down',
						'fa-arrow-left' => '&#xf060; fa-arrow-left',
						'fa-arrow-right' => '&#xf061; fa-arrow-right',
						'fa-arrow-up' => '&#xf062; fa-arrow-up',
						'fa-arrows' => '&#xf047; fa-arrows',
						'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
						'fa-arrows-h' => '&#xf07e; fa-arrows-h',
						'fa-arrows-v' => '&#xf07d; fa-arrows-v',
						'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
						'fa-asterisk' => '&#xf069; fa-asterisk',
						'fa-at' => '&#xf1fa; fa-at',
						'fa-audio-description' => '&#xf29e; fa-audio-description',
						'fa-backward' => '&#xf04a; fa-backward',
						'fa-balance-scale' => '&#xf24e; fa-balance-scale',
						'fa-ban' => '&#xf05e; fa-ban',
						'fa-bar-chart' => '&#xf080; fa-bar-chart',
						'fa-barcode' => '&#xf02a; fa-barcode',
						'fa-bars' => '&#xf0c9; fa-bars',
						'fa-battery-empty' => '&#xf244; fa-battery-empty',
						'fa-battery-full' => '&#xf240; fa-battery-full',
						'fa-battery-half' => '&#xf242; fa-battery-half',
						'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
						'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
						'fa-bed' => '&#xf236; fa-bed',
						'fa-beer' => '&#xf0fc; fa-beer',
						'fa-behance' => '&#xf1b4; fa-behance',
						'fa-behance-square' => '&#xf1b5; fa-behance-square',
						'fa-bell' => '&#xf0f3; fa-bell',
						'fa-bell-o' => '&#xf0a2; fa-bell-o',
						'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
						'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
						'fa-bicycle' => '&#xf206; fa-bicycle',
						'fa-binoculars' => '&#xf1e5; fa-binoculars',
						'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
						'fa-bitbucket' => '&#xf171; fa-bitbucket',
						'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
						'fa-black-tie' => '&#xf27e; fa-black-tie',
						'fa-blind' => '&#xf29d; fa-blind',
						'fa-bluetooth' => '&#xf293; fa-bluetooth',
						'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
						'fa-bold' => '&#xf032; fa-bold',
						'fa-bolt' => '&#xf0e7; fa-bolt',
						'fa-bomb' => '&#xf1e2; fa-bomb',
						'fa-book' => '&#xf02d; fa-book',
						'fa-bookmark' => '&#xf02e; fa-bookmark',
						'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
						'fa-braille' => '&#xf2a1; fa-braille',
						'fa-briefcase' => '&#xf0b1; fa-briefcase',
						'fa-btc' => '&#xf15a; fa-btc',
						'fa-bug' => '&#xf188; fa-bug',
						'fa-building' => '&#xf1ad; fa-building',
						'fa-building-o' => '&#xf0f7; fa-building-o',
						'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
						'fa-bullseye' => '&#xf140; fa-bullseye',
						'fa-bus' => '&#xf207; fa-bus',
						'fa-buysellads' => '&#xf20d; fa-buysellads',
						'fa-calculator' => '&#xf1ec; fa-calculator',
						'fa-calendar' => '&#xf073; fa-calendar',
						'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
						'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
						'fa-calendar-o' => '&#xf133; fa-calendar-o',
						'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
						'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
						'fa-camera' => '&#xf030; fa-camera',
						'fa-camera-retro' => '&#xf083; fa-camera-retro',
						'fa-car' => '&#xf1b9; fa-car',
						'fa-caret-down' => '&#xf0d7; fa-caret-down',
						'fa-caret-left' => '&#xf0d9; fa-caret-left',
						'fa-caret-right' => '&#xf0da; fa-caret-right',
						'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
						'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
						'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
						'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
						'fa-caret-up' => '&#xf0d8; fa-caret-up',
						'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
						'fa-cart-plus' => '&#xf217; fa-cart-plus',
						'fa-cc' => '&#xf20a; fa-cc',
						'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
						'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
						'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
						'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
						'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
						'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
						'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
						'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
						'fa-certificate' => '&#xf0a3; fa-certificate',
						'fa-chain-broken' => '&#xf127; fa-chain-broken',
						'fa-check' => '&#xf00c; fa-check',
						'fa-check-circle' => '&#xf058; fa-check-circle',
						'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
						'fa-check-square' => '&#xf14a; fa-check-square',
						'fa-check-square-o' => '&#xf046; fa-check-square-o',
						'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
						'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
						'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
						'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
						'fa-chevron-down' => '&#xf078; fa-chevron-down',
						'fa-chevron-left' => '&#xf053; fa-chevron-left',
						'fa-chevron-right' => '&#xf054; fa-chevron-right',
						'fa-chevron-up' => '&#xf077; fa-chevron-up',
						'fa-child' => '&#xf1ae; fa-child',
						'fa-chrome' => '&#xf268; fa-chrome',
						'fa-circle' => '&#xf111; fa-circle',
						'fa-circle-o' => '&#xf10c; fa-circle-o',
						'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
						'fa-circle-thin' => '&#xf1db; fa-circle-thin',
						'fa-clipboard' => '&#xf0ea; fa-clipboard',
						'fa-clock-o' => '&#xf017; fa-clock-o',
						'fa-clone' => '&#xf24d; fa-clone',
						'fa-cloud' => '&#xf0c2; fa-cloud',
						'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
						'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
						'fa-code' => '&#xf121; fa-code',
						'fa-code-fork' => '&#xf126; fa-code-fork',
						'fa-codepen' => '&#xf1cb; fa-codepen',
						'fa-codiepie' => '&#xf284; fa-codiepie',
						'fa-coffee' => '&#xf0f4; fa-coffee',
						'fa-cog' => '&#xf013; fa-cog',
						'fa-cogs' => '&#xf085; fa-cogs',
						'fa-columns' => '&#xf0db; fa-columns',
						'fa-comment' => '&#xf075; fa-comment',
						'fa-comment-o' => '&#xf0e5; fa-comment-o',
						'fa-commenting' => '&#xf27a; fa-commenting',
						'fa-commenting-o' => '&#xf27b; fa-commenting-o',
						'fa-comments' => '&#xf086; fa-comments',
						'fa-comments-o' => '&#xf0e6; fa-comments-o',
						'fa-compass' => '&#xf14e; fa-compass',
						'fa-compress' => '&#xf066; fa-compress',
						'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
						'fa-contao' => '&#xf26d; fa-contao',
						'fa-copyright' => '&#xf1f9; fa-copyright',
						'fa-creative-commons' => '&#xf25e; fa-creative-commons',
						'fa-credit-card' => '&#xf09d; fa-credit-card',
						'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
						'fa-crop' => '&#xf125; fa-crop',
						'fa-crosshairs' => '&#xf05b; fa-crosshairs',
						'fa-css3' => '&#xf13c; fa-css3',
						'fa-cube' => '&#xf1b2; fa-cube',
						'fa-cubes' => '&#xf1b3; fa-cubes',
						'fa-cutlery' => '&#xf0f5; fa-cutlery',
						'fa-dashcube' => '&#xf210; fa-dashcube',
						'fa-database' => '&#xf1c0; fa-database',
						'fa-deaf' => '&#xf2a4; fa-deaf',
						'fa-delicious' => '&#xf1a5; fa-delicious',
						'fa-desktop' => '&#xf108; fa-desktop',
						'fa-deviantart' => '&#xf1bd; fa-deviantart',
						'fa-diamond' => '&#xf219; fa-diamond',
						'fa-digg' => '&#xf1a6; fa-digg',
						'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
						'fa-download' => '&#xf019; fa-download',
						'fa-dribbble' => '&#xf17d; fa-dribbble',
						'fa-dropbox' => '&#xf16b; fa-dropbox',
						'fa-drupal' => '&#xf1a9; fa-drupal',
						'fa-edge' => '&#xf282; fa-edge',
						'fa-eject' => '&#xf052; fa-eject',
						'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
						'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
						'fa-empire' => '&#xf1d1; fa-empire',
						'fa-envelope' => '&#xf0e0; fa-envelope',
						'fa-envelope-o' => '&#xf003; fa-envelope-o',
						'fa-envelope-square' => '&#xf199; fa-envelope-square',
						'fa-envira' => '&#xf299; fa-envira',
						'fa-eraser' => '&#xf12d; fa-eraser',
						'fa-eur' => '&#xf153; fa-eur',
						'fa-exchange' => '&#xf0ec; fa-exchange',
						'fa-exclamation' => '&#xf12a; fa-exclamation',
						'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
						'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
						'fa-expand' => '&#xf065; fa-expand',
						'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
						'fa-external-link' => '&#xf08e; fa-external-link',
						'fa-external-link-square' => '&#xf14c; fa-external-link-square',
						'fa-eye' => '&#xf06e; fa-eye',
						'fa-eye-slash' => '&#xf070; fa-eye-slash',
						'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
						'fa-facebook' => '&#xf09a; fa-facebook',
						'fa-facebook-official' => '&#xf230; fa-facebook-official',
						'fa-facebook-square' => '&#xf082; fa-facebook-square',
						'fa-fast-backward' => '&#xf049; fa-fast-backward',
						'fa-fast-forward' => '&#xf050; fa-fast-forward',
						'fa-fax' => '&#xf1ac; fa-fax',
						'fa-female' => '&#xf182; fa-female',
						'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
						'fa-file' => '&#xf15b; fa-file',
						'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
						'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
						'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
						'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
						'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
						'fa-file-o' => '&#xf016; fa-file-o',
						'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
						'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
						'fa-file-text' => '&#xf15c; fa-file-text',
						'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
						'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
						'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
						'fa-files-o' => '&#xf0c5; fa-files-o',
						'fa-film' => '&#xf008; fa-film',
						'fa-filter' => '&#xf0b0; fa-filter',
						'fa-fire' => '&#xf06d; fa-fire',
						'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
						'fa-firefox' => '&#xf269; fa-firefox',
						'fa-first-order' => '&#xf2b0; fa-first-order',
						'fa-flag' => '&#xf024; fa-flag',
						'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
						'fa-flag-o' => '&#xf11d; fa-flag-o',
						'fa-flask' => '&#xf0c3; fa-flask',
						'fa-flickr' => '&#xf16e; fa-flickr',
						'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
						'fa-folder' => '&#xf07b; fa-folder',
						'fa-folder-o' => '&#xf114; fa-folder-o',
						'fa-folder-open' => '&#xf07c; fa-folder-open',
						'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
						'fa-font' => '&#xf031; fa-font',
						'fa-fonticons' => '&#xf280; fa-fonticons',
						'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
						'fa-forumbee' => '&#xf211; fa-forumbee',
						'fa-forward' => '&#xf04e; fa-forward',
						'fa-foursquare' => '&#xf180; fa-foursquare',
						'fa-frown-o' => '&#xf119; fa-frown-o',
						'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
						'fa-gamepad' => '&#xf11b; fa-gamepad',
						'fa-gavel' => '&#xf0e3; fa-gavel',
						'fa-gbp' => '&#xf154; fa-gbp',
						'fa-genderless' => '&#xf22d; fa-genderless',
						'fa-get-pocket' => '&#xf265; fa-get-pocket',
						'fa-gg' => '&#xf260; fa-gg',
						'fa-gg-circle' => '&#xf261; fa-gg-circle',
						'fa-gift' => '&#xf06b; fa-gift',
						'fa-git' => '&#xf1d3; fa-git',
						'fa-git-square' => '&#xf1d2; fa-git-square',
						'fa-github' => '&#xf09b; fa-github',
						'fa-github-alt' => '&#xf113; fa-github-alt',
						'fa-github-square' => '&#xf092; fa-github-square',
						'fa-gitlab' => '&#xf296; fa-gitlab',
						'fa-glass' => '&#xf000; fa-glass',
						'fa-glide' => '&#xf2a5; fa-glide',
						'fa-glide-g' => '&#xf2a6; fa-glide-g',
						'fa-globe' => '&#xf0ac; fa-globe',
						'fa-google' => '&#xf1a0; fa-google',
						'fa-google-plus' => '&#xf0d5; fa-google-plus',
						'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
						'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
						'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
						'fa-gratipay' => '&#xf184; fa-gratipay',
						'fa-h-square' => '&#xf0fd; fa-h-square',
						'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
						'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
						'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
						'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
						'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
						'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
						'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
						'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
						'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
						'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
						'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
						'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
						'fa-hashtag' => '&#xf292; fa-hashtag',
						'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
						'fa-header' => '&#xf1dc; fa-header',
						'fa-headphones' => '&#xf025; fa-headphones',
						'fa-heart' => '&#xf004; fa-heart',
						'fa-heart-o' => '&#xf08a; fa-heart-o',
						'fa-heartbeat' => '&#xf21e; fa-heartbeat',
						'fa-history' => '&#xf1da; fa-history',
						'fa-home' => '&#xf015; fa-home',
						'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
						'fa-hourglass' => '&#xf254; fa-hourglass',
						'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
						'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
						'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
						'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
						'fa-houzz' => '&#xf27c; fa-houzz',
						'fa-html5' => '&#xf13b; fa-html5',
						'fa-i-cursor' => '&#xf246; fa-i-cursor',
						'fa-ils' => '&#xf20b; fa-ils',
						'fa-inbox' => '&#xf01c; fa-inbox',
						'fa-indent' => '&#xf03c; fa-indent',
						'fa-industry' => '&#xf275; fa-industry',
						'fa-info' => '&#xf129; fa-info',
						'fa-info-circle' => '&#xf05a; fa-info-circle',
						'fa-inr' => '&#xf156; fa-inr',
						'fa-instagram' => '&#xf16d; fa-instagram',
						'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
						'fa-ioxhost' => '&#xf208; fa-ioxhost',
						'fa-italic' => '&#xf033; fa-italic',
						'fa-joomla' => '&#xf1aa; fa-joomla',
						'fa-jpy' => '&#xf157; fa-jpy',
						'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
						'fa-key' => '&#xf084; fa-key',
						'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
						'fa-krw' => '&#xf159; fa-krw',
						'fa-language' => '&#xf1ab; fa-language',
						'fa-laptop' => '&#xf109; fa-laptop',
						'fa-lastfm' => '&#xf202; fa-lastfm',
						'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
						'fa-leaf' => '&#xf06c; fa-leaf',
						'fa-leanpub' => '&#xf212; fa-leanpub',
						'fa-lemon-o' => '&#xf094; fa-lemon-o',
						'fa-level-down' => '&#xf149; fa-level-down',
						'fa-level-up' => '&#xf148; fa-level-up',
						'fa-life-ring' => '&#xf1cd; fa-life-ring',
						'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
						'fa-line-chart' => '&#xf201; fa-line-chart',
						'fa-link' => '&#xf0c1; fa-link',
						'fa-linkedin' => '&#xf0e1; fa-linkedin',
						'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
						'fa-linux' => '&#xf17c; fa-linux',
						'fa-list' => '&#xf03a; fa-list',
						'fa-list-alt' => '&#xf022; fa-list-alt',
						'fa-list-ol' => '&#xf0cb; fa-list-ol',
						'fa-list-ul' => '&#xf0ca; fa-list-ul',
						'fa-location-arrow' => '&#xf124; fa-location-arrow',
						'fa-lock' => '&#xf023; fa-lock',
						'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
						'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
						'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
						'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
						'fa-low-vision' => '&#xf2a8; fa-low-vision',
						'fa-magic' => '&#xf0d0; fa-magic',
						'fa-magnet' => '&#xf076; fa-magnet',
						'fa-male' => '&#xf183; fa-male',
						'fa-map' => '&#xf279; fa-map',
						'fa-map-marker' => '&#xf041; fa-map-marker',
						'fa-map-o' => '&#xf278; fa-map-o',
						'fa-map-pin' => '&#xf276; fa-map-pin',
						'fa-map-signs' => '&#xf277; fa-map-signs',
						'fa-mars' => '&#xf222; fa-mars',
						'fa-mars-double' => '&#xf227; fa-mars-double',
						'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
						'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
						'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
						'fa-maxcdn' => '&#xf136; fa-maxcdn',
						'fa-meanpath' => '&#xf20c; fa-meanpath',
						'fa-medium' => '&#xf23a; fa-medium',
						'fa-medkit' => '&#xf0fa; fa-medkit',
						'fa-meh-o' => '&#xf11a; fa-meh-o',
						'fa-mercury' => '&#xf223; fa-mercury',
						'fa-microphone' => '&#xf130; fa-microphone',
						'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
						'fa-minus' => '&#xf068; fa-minus',
						'fa-minus-circle' => '&#xf056; fa-minus-circle',
						'fa-minus-square' => '&#xf146; fa-minus-square',
						'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
						'fa-mixcloud' => '&#xf289; fa-mixcloud',
						'fa-mobile' => '&#xf10b; fa-mobile',
						'fa-modx' => '&#xf285; fa-modx',
						'fa-money' => '&#xf0d6; fa-money',
						'fa-moon-o' => '&#xf186; fa-moon-o',
						'fa-motorcycle' => '&#xf21c; fa-motorcycle',
						'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
						'fa-music' => '&#xf001; fa-music',
						'fa-neuter' => '&#xf22c; fa-neuter',
						'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
						'fa-object-group' => '&#xf247; fa-object-group',
						'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
						'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
						'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
						'fa-opencart' => '&#xf23d; fa-opencart',
						'fa-openid' => '&#xf19b; fa-openid',
						'fa-opera' => '&#xf26a; fa-opera',
						'fa-optin-monster' => '&#xf23c; fa-optin-monster',
						'fa-outdent' => '&#xf03b; fa-outdent',
						'fa-pagelines' => '&#xf18c; fa-pagelines',
						'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
						'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
						'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
						'fa-paperclip' => '&#xf0c6; fa-paperclip',
						'fa-paragraph' => '&#xf1dd; fa-paragraph',
						'fa-pause' => '&#xf04c; fa-pause',
						'fa-pause-circle' => '&#xf28b; fa-pause-circle',
						'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
						'fa-paw' => '&#xf1b0; fa-paw',
						'fa-paypal' => '&#xf1ed; fa-paypal',
						'fa-pencil' => '&#xf040; fa-pencil',
						'fa-pencil-square' => '&#xf14b; fa-pencil-square',
						'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
						'fa-percent' => '&#xf295; fa-percent',
						'fa-phone' => '&#xf095; fa-phone',
						'fa-phone-square' => '&#xf098; fa-phone-square',
						'fa-picture-o' => '&#xf03e; fa-picture-o',
						'fa-pie-chart' => '&#xf200; fa-pie-chart',
						'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
						'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
						'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
						'fa-pinterest' => '&#xf0d2; fa-pinterest',
						'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
						'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
						'fa-plane' => '&#xf072; fa-plane',
						'fa-play' => '&#xf04b; fa-play',
						'fa-play-circle' => '&#xf144; fa-play-circle',
						'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
						'fa-plug' => '&#xf1e6; fa-plug',
						'fa-plus' => '&#xf067; fa-plus',
						'fa-plus-circle' => '&#xf055; fa-plus-circle',
						'fa-plus-square' => '&#xf0fe; fa-plus-square',
						'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
						'fa-power-off' => '&#xf011; fa-power-off',
						'fa-print' => '&#xf02f; fa-print',
						'fa-product-hunt' => '&#xf288; fa-product-hunt',
						'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
						'fa-qq' => '&#xf1d6; fa-qq',
						'fa-qrcode' => '&#xf029; fa-qrcode',
						'fa-question' => '&#xf128; fa-question',
						'fa-question-circle' => '&#xf059; fa-question-circle',
						'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
						'fa-quote-left' => '&#xf10d; fa-quote-left',
						'fa-quote-right' => '&#xf10e; fa-quote-right',
						'fa-random' => '&#xf074; fa-random',
						'fa-rebel' => '&#xf1d0; fa-rebel',
						'fa-recycle' => '&#xf1b8; fa-recycle',
						'fa-reddit' => '&#xf1a1; fa-reddit',
						'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
						'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
						'fa-refresh' => '&#xf021; fa-refresh',
						'fa-registered' => '&#xf25d; fa-registered',
						'fa-renren' => '&#xf18b; fa-renren',
						'fa-repeat' => '&#xf01e; fa-repeat',
						'fa-reply' => '&#xf112; fa-reply',
						'fa-reply-all' => '&#xf122; fa-reply-all',
						'fa-retweet' => '&#xf079; fa-retweet',
						'fa-road' => '&#xf018; fa-road',
						'fa-rocket' => '&#xf135; fa-rocket',
						'fa-rss' => '&#xf09e; fa-rss',
						'fa-rss-square' => '&#xf143; fa-rss-square',
						'fa-rub' => '&#xf158; fa-rub',
						'fa-safari' => '&#xf267; fa-safari',
						'fa-scissors' => '&#xf0c4; fa-scissors',
						'fa-scribd' => '&#xf28a; fa-scribd',
						'fa-search' => '&#xf002; fa-search',
						'fa-search-minus' => '&#xf010; fa-search-minus',
						'fa-search-plus' => '&#xf00e; fa-search-plus',
						'fa-sellsy' => '&#xf213; fa-sellsy',
						'fa-server' => '&#xf233; fa-server',
						'fa-share' => '&#xf064; fa-share',
						'fa-share-alt' => '&#xf1e0; fa-share-alt',
						'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
						'fa-share-square' => '&#xf14d; fa-share-square',
						'fa-share-square-o' => '&#xf045; fa-share-square-o',
						'fa-shield' => '&#xf132; fa-shield',
						'fa-ship' => '&#xf21a; fa-ship',
						'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
						'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
						'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
						'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
						'fa-sign-in' => '&#xf090; fa-sign-in',
						'fa-sign-language' => '&#xf2a7; fa-sign-language',
						'fa-sign-out' => '&#xf08b; fa-sign-out',
						'fa-signal' => '&#xf012; fa-signal',
						'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
						'fa-sitemap' => '&#xf0e8; fa-sitemap',
						'fa-skyatlas' => '&#xf216; fa-skyatlas',
						'fa-skype' => '&#xf17e; fa-skype',
						'fa-slack' => '&#xf198; fa-slack',
						'fa-sliders' => '&#xf1de; fa-sliders',
						'fa-slideshare' => '&#xf1e7; fa-slideshare',
						'fa-smile-o' => '&#xf118; fa-smile-o',
						'fa-snapchat' => '&#xf2ab; fa-snapchat',
						'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
						'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
						'fa-sort' => '&#xf0dc; fa-sort',
						'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
						'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
						'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
						'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
						'fa-sort-asc' => '&#xf0de; fa-sort-asc',
						'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
						'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
						'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
						'fa-soundcloud' => '&#xf1be; fa-soundcloud',
						'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
						'fa-spinner' => '&#xf110; fa-spinner',
						'fa-spoon' => '&#xf1b1; fa-spoon',
						'fa-spotify' => '&#xf1bc; fa-spotify',
						'fa-square' => '&#xf0c8; fa-square',
						'fa-square-o' => '&#xf096; fa-square-o',
						'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
						'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
						'fa-star' => '&#xf005; fa-star',
						'fa-star-half' => '&#xf089; fa-star-half',
						'fa-star-half-o' => '&#xf123; fa-star-half-o',
						'fa-star-o' => '&#xf006; fa-star-o',
						'fa-steam' => '&#xf1b6; fa-steam',
						'fa-steam-square' => '&#xf1b7; fa-steam-square',
						'fa-step-backward' => '&#xf048; fa-step-backward',
						'fa-step-forward' => '&#xf051; fa-step-forward',
						'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
						'fa-sticky-note' => '&#xf249; fa-sticky-note',
						'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
						'fa-stop' => '&#xf04d; fa-stop',
						'fa-stop-circle' => '&#xf28d; fa-stop-circle',
						'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
						'fa-street-view' => '&#xf21d; fa-street-view',
						'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
						'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
						'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
						'fa-subscript' => '&#xf12c; fa-subscript',
						'fa-subway' => '&#xf239; fa-subway',
						'fa-suitcase' => '&#xf0f2; fa-suitcase',
						'fa-sun-o' => '&#xf185; fa-sun-o',
						'fa-superscript' => '&#xf12b; fa-superscript',
						'fa-table' => '&#xf0ce; fa-table',
						'fa-tablet' => '&#xf10a; fa-tablet',
						'fa-tachometer' => '&#xf0e4; fa-tachometer',
						'fa-tag' => '&#xf02b; fa-tag',
						'fa-tags' => '&#xf02c; fa-tags',
						'fa-tasks' => '&#xf0ae; fa-tasks',
						'fa-taxi' => '&#xf1ba; fa-taxi',
						'fa-television' => '&#xf26c; fa-television',
						'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
						'fa-terminal' => '&#xf120; fa-terminal',
						'fa-text-height' => '&#xf034; fa-text-height',
						'fa-text-width' => '&#xf035; fa-text-width',
						'fa-th' => '&#xf00a; fa-th',
						'fa-th-large' => '&#xf009; fa-th-large',
						'fa-th-list' => '&#xf00b; fa-th-list',
						'fa-themeisle' => '&#xf2b2; fa-themeisle',
						'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
						'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
						'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
						'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
						'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
						'fa-ticket' => '&#xf145; fa-ticket',
						'fa-times' => '&#xf00d; fa-times',
						'fa-times-circle' => '&#xf057; fa-times-circle',
						'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
						'fa-tint' => '&#xf043; fa-tint',
						'fa-toggle-off' => '&#xf204; fa-toggle-off',
						'fa-toggle-on' => '&#xf205; fa-toggle-on',
						'fa-trademark' => '&#xf25c; fa-trademark',
						'fa-train' => '&#xf238; fa-train',
						'fa-transgender' => '&#xf224; fa-transgender',
						'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
						'fa-trash' => '&#xf1f8; fa-trash',
						'fa-trash-o' => '&#xf014; fa-trash-o',
						'fa-tree' => '&#xf1bb; fa-tree',
						'fa-trello' => '&#xf181; fa-trello',
						'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
						'fa-trophy' => '&#xf091; fa-trophy',
						'fa-truck' => '&#xf0d1; fa-truck',
						'fa-try' => '&#xf195; fa-try',
						'fa-tty' => '&#xf1e4; fa-tty',
						'fa-tumblr' => '&#xf173; fa-tumblr',
						'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
						'fa-twitch' => '&#xf1e8; fa-twitch',
						'fa-twitter' => '&#xf099; fa-twitter',
						'fa-twitter-square' => '&#xf081; fa-twitter-square',
						'fa-umbrella' => '&#xf0e9; fa-umbrella',
						'fa-underline' => '&#xf0cd; fa-underline',
						'fa-undo' => '&#xf0e2; fa-undo',
						'fa-universal-access' => '&#xf29a; fa-universal-access',
						'fa-university' => '&#xf19c; fa-university',
						'fa-unlock' => '&#xf09c; fa-unlock',
						'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
						'fa-upload' => '&#xf093; fa-upload',
						'fa-usb' => '&#xf287; fa-usb',
						'fa-usd' => '&#xf155; fa-usd',
						'fa-user' => '&#xf007; fa-user',
						'fa-user-md' => '&#xf0f0; fa-user-md',
						'fa-user-plus' => '&#xf234; fa-user-plus',
						'fa-user-secret' => '&#xf21b; fa-user-secret',
						'fa-user-times' => '&#xf235; fa-user-times',
						'fa-users' => '&#xf0c0; fa-users',
						'fa-venus' => '&#xf221; fa-venus',
						'fa-venus-double' => '&#xf226; fa-venus-double',
						'fa-venus-mars' => '&#xf228; fa-venus-mars',
						'fa-viacoin' => '&#xf237; fa-viacoin',
						'fa-viadeo' => '&#xf2a9; fa-viadeo',
						'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
						'fa-video-camera' => '&#xf03d; fa-video-camera',
						'fa-vimeo' => '&#xf27d; fa-vimeo',
						'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
						'fa-vine' => '&#xf1ca; fa-vine',
						'fa-vk' => '&#xf189; fa-vk',
						'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
						'fa-volume-down' => '&#xf027; fa-volume-down',
						'fa-volume-off' => '&#xf026; fa-volume-off',
						'fa-volume-up' => '&#xf028; fa-volume-up',
						'fa-weibo' => '&#xf18a; fa-weibo',
						'fa-weixin' => '&#xf1d7; fa-weixin',
						'fa-whatsapp' => '&#xf232; fa-whatsapp',
						'fa-wheelchair' => '&#xf193; fa-wheelchair',
						'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
						'fa-wifi' => '&#xf1eb; fa-wifi',
						'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
						'fa-windows' => '&#xf17a; fa-windows',
						'fa-wordpress' => '&#xf19a; fa-wordpress',
						'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
						'fa-wpforms' => '&#xf298; fa-wpforms',
						'fa-wrench' => '&#xf0ad; fa-wrench',
						'fa-xing' => '&#xf168; fa-xing',
						'fa-xing-square' => '&#xf169; fa-xing-square',
						'fa-y-combinator' => '&#xf23b; fa-y-combinator',
						'fa-yahoo' => '&#xf19e; fa-yahoo',
						'fa-yelp' => '&#xf1e9; fa-yelp',
						'fa-yoast' => '&#xf2b1; fa-yoast',
						'fa-youtube' => '&#xf167; fa-youtube',
						'fa-youtube-play' => '&#xf16a; fa-youtube-play',
						'fa-youtube-square' => '&#xf166; fa-youtube-square',
					),
				),
				array (
					'key' => 'field_5745adf45de2c',
					'label' => 'Menu Color',
					'name' => 'menu_color',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home.php',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_572d596212106',
	'title' => 'About Services',
	'fields' => array (
		array (
			'key' => 'field_572d59babf75e',
			'label' => 'Main Heading',
			'name' => 'main_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572d59ccbf75f',
			'label' => 'Service Box',
			'name' => 'service_box',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_572d59f1bf760',
					'label' => 'Service icon',
					'name' => 'service_icon',
					'type' => 'font-awesome',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'null',
					'save_format' => 'element',
					'allow_null' => 0,
					'enqueue_fa' => 0,
					'fa_live_preview' => '',
					'choices' => array (
						'null' => '- Select -',
						'fa-500px' => '&#xf26e; fa-500px',
						'fa-adjust' => '&#xf042; fa-adjust',
						'fa-adn' => '&#xf170; fa-adn',
						'fa-align-center' => '&#xf037; fa-align-center',
						'fa-align-justify' => '&#xf039; fa-align-justify',
						'fa-align-left' => '&#xf036; fa-align-left',
						'fa-align-right' => '&#xf038; fa-align-right',
						'fa-amazon' => '&#xf270; fa-amazon',
						'fa-ambulance' => '&#xf0f9; fa-ambulance',
						'fa-american-sign-language-interpreting' => '&#xf2a3; fa-american-sign-language-interpreting',
						'fa-anchor' => '&#xf13d; fa-anchor',
						'fa-android' => '&#xf17b; fa-android',
						'fa-angellist' => '&#xf209; fa-angellist',
						'fa-angle-double-down' => '&#xf103; fa-angle-double-down',
						'fa-angle-double-left' => '&#xf100; fa-angle-double-left',
						'fa-angle-double-right' => '&#xf101; fa-angle-double-right',
						'fa-angle-double-up' => '&#xf102; fa-angle-double-up',
						'fa-angle-down' => '&#xf107; fa-angle-down',
						'fa-angle-left' => '&#xf104; fa-angle-left',
						'fa-angle-right' => '&#xf105; fa-angle-right',
						'fa-angle-up' => '&#xf106; fa-angle-up',
						'fa-apple' => '&#xf179; fa-apple',
						'fa-archive' => '&#xf187; fa-archive',
						'fa-area-chart' => '&#xf1fe; fa-area-chart',
						'fa-arrow-circle-down' => '&#xf0ab; fa-arrow-circle-down',
						'fa-arrow-circle-left' => '&#xf0a8; fa-arrow-circle-left',
						'fa-arrow-circle-o-down' => '&#xf01a; fa-arrow-circle-o-down',
						'fa-arrow-circle-o-left' => '&#xf190; fa-arrow-circle-o-left',
						'fa-arrow-circle-o-right' => '&#xf18e; fa-arrow-circle-o-right',
						'fa-arrow-circle-o-up' => '&#xf01b; fa-arrow-circle-o-up',
						'fa-arrow-circle-right' => '&#xf0a9; fa-arrow-circle-right',
						'fa-arrow-circle-up' => '&#xf0aa; fa-arrow-circle-up',
						'fa-arrow-down' => '&#xf063; fa-arrow-down',
						'fa-arrow-left' => '&#xf060; fa-arrow-left',
						'fa-arrow-right' => '&#xf061; fa-arrow-right',
						'fa-arrow-up' => '&#xf062; fa-arrow-up',
						'fa-arrows' => '&#xf047; fa-arrows',
						'fa-arrows-alt' => '&#xf0b2; fa-arrows-alt',
						'fa-arrows-h' => '&#xf07e; fa-arrows-h',
						'fa-arrows-v' => '&#xf07d; fa-arrows-v',
						'fa-assistive-listening-systems' => '&#xf2a2; fa-assistive-listening-systems',
						'fa-asterisk' => '&#xf069; fa-asterisk',
						'fa-at' => '&#xf1fa; fa-at',
						'fa-audio-description' => '&#xf29e; fa-audio-description',
						'fa-backward' => '&#xf04a; fa-backward',
						'fa-balance-scale' => '&#xf24e; fa-balance-scale',
						'fa-ban' => '&#xf05e; fa-ban',
						'fa-bar-chart' => '&#xf080; fa-bar-chart',
						'fa-barcode' => '&#xf02a; fa-barcode',
						'fa-bars' => '&#xf0c9; fa-bars',
						'fa-battery-empty' => '&#xf244; fa-battery-empty',
						'fa-battery-full' => '&#xf240; fa-battery-full',
						'fa-battery-half' => '&#xf242; fa-battery-half',
						'fa-battery-quarter' => '&#xf243; fa-battery-quarter',
						'fa-battery-three-quarters' => '&#xf241; fa-battery-three-quarters',
						'fa-bed' => '&#xf236; fa-bed',
						'fa-beer' => '&#xf0fc; fa-beer',
						'fa-behance' => '&#xf1b4; fa-behance',
						'fa-behance-square' => '&#xf1b5; fa-behance-square',
						'fa-bell' => '&#xf0f3; fa-bell',
						'fa-bell-o' => '&#xf0a2; fa-bell-o',
						'fa-bell-slash' => '&#xf1f6; fa-bell-slash',
						'fa-bell-slash-o' => '&#xf1f7; fa-bell-slash-o',
						'fa-bicycle' => '&#xf206; fa-bicycle',
						'fa-binoculars' => '&#xf1e5; fa-binoculars',
						'fa-birthday-cake' => '&#xf1fd; fa-birthday-cake',
						'fa-bitbucket' => '&#xf171; fa-bitbucket',
						'fa-bitbucket-square' => '&#xf172; fa-bitbucket-square',
						'fa-black-tie' => '&#xf27e; fa-black-tie',
						'fa-blind' => '&#xf29d; fa-blind',
						'fa-bluetooth' => '&#xf293; fa-bluetooth',
						'fa-bluetooth-b' => '&#xf294; fa-bluetooth-b',
						'fa-bold' => '&#xf032; fa-bold',
						'fa-bolt' => '&#xf0e7; fa-bolt',
						'fa-bomb' => '&#xf1e2; fa-bomb',
						'fa-book' => '&#xf02d; fa-book',
						'fa-bookmark' => '&#xf02e; fa-bookmark',
						'fa-bookmark-o' => '&#xf097; fa-bookmark-o',
						'fa-braille' => '&#xf2a1; fa-braille',
						'fa-briefcase' => '&#xf0b1; fa-briefcase',
						'fa-btc' => '&#xf15a; fa-btc',
						'fa-bug' => '&#xf188; fa-bug',
						'fa-building' => '&#xf1ad; fa-building',
						'fa-building-o' => '&#xf0f7; fa-building-o',
						'fa-bullhorn' => '&#xf0a1; fa-bullhorn',
						'fa-bullseye' => '&#xf140; fa-bullseye',
						'fa-bus' => '&#xf207; fa-bus',
						'fa-buysellads' => '&#xf20d; fa-buysellads',
						'fa-calculator' => '&#xf1ec; fa-calculator',
						'fa-calendar' => '&#xf073; fa-calendar',
						'fa-calendar-check-o' => '&#xf274; fa-calendar-check-o',
						'fa-calendar-minus-o' => '&#xf272; fa-calendar-minus-o',
						'fa-calendar-o' => '&#xf133; fa-calendar-o',
						'fa-calendar-plus-o' => '&#xf271; fa-calendar-plus-o',
						'fa-calendar-times-o' => '&#xf273; fa-calendar-times-o',
						'fa-camera' => '&#xf030; fa-camera',
						'fa-camera-retro' => '&#xf083; fa-camera-retro',
						'fa-car' => '&#xf1b9; fa-car',
						'fa-caret-down' => '&#xf0d7; fa-caret-down',
						'fa-caret-left' => '&#xf0d9; fa-caret-left',
						'fa-caret-right' => '&#xf0da; fa-caret-right',
						'fa-caret-square-o-down' => '&#xf150; fa-caret-square-o-down',
						'fa-caret-square-o-left' => '&#xf191; fa-caret-square-o-left',
						'fa-caret-square-o-right' => '&#xf152; fa-caret-square-o-right',
						'fa-caret-square-o-up' => '&#xf151; fa-caret-square-o-up',
						'fa-caret-up' => '&#xf0d8; fa-caret-up',
						'fa-cart-arrow-down' => '&#xf218; fa-cart-arrow-down',
						'fa-cart-plus' => '&#xf217; fa-cart-plus',
						'fa-cc' => '&#xf20a; fa-cc',
						'fa-cc-amex' => '&#xf1f3; fa-cc-amex',
						'fa-cc-diners-club' => '&#xf24c; fa-cc-diners-club',
						'fa-cc-discover' => '&#xf1f2; fa-cc-discover',
						'fa-cc-jcb' => '&#xf24b; fa-cc-jcb',
						'fa-cc-mastercard' => '&#xf1f1; fa-cc-mastercard',
						'fa-cc-paypal' => '&#xf1f4; fa-cc-paypal',
						'fa-cc-stripe' => '&#xf1f5; fa-cc-stripe',
						'fa-cc-visa' => '&#xf1f0; fa-cc-visa',
						'fa-certificate' => '&#xf0a3; fa-certificate',
						'fa-chain-broken' => '&#xf127; fa-chain-broken',
						'fa-check' => '&#xf00c; fa-check',
						'fa-check-circle' => '&#xf058; fa-check-circle',
						'fa-check-circle-o' => '&#xf05d; fa-check-circle-o',
						'fa-check-square' => '&#xf14a; fa-check-square',
						'fa-check-square-o' => '&#xf046; fa-check-square-o',
						'fa-chevron-circle-down' => '&#xf13a; fa-chevron-circle-down',
						'fa-chevron-circle-left' => '&#xf137; fa-chevron-circle-left',
						'fa-chevron-circle-right' => '&#xf138; fa-chevron-circle-right',
						'fa-chevron-circle-up' => '&#xf139; fa-chevron-circle-up',
						'fa-chevron-down' => '&#xf078; fa-chevron-down',
						'fa-chevron-left' => '&#xf053; fa-chevron-left',
						'fa-chevron-right' => '&#xf054; fa-chevron-right',
						'fa-chevron-up' => '&#xf077; fa-chevron-up',
						'fa-child' => '&#xf1ae; fa-child',
						'fa-chrome' => '&#xf268; fa-chrome',
						'fa-circle' => '&#xf111; fa-circle',
						'fa-circle-o' => '&#xf10c; fa-circle-o',
						'fa-circle-o-notch' => '&#xf1ce; fa-circle-o-notch',
						'fa-circle-thin' => '&#xf1db; fa-circle-thin',
						'fa-clipboard' => '&#xf0ea; fa-clipboard',
						'fa-clock-o' => '&#xf017; fa-clock-o',
						'fa-clone' => '&#xf24d; fa-clone',
						'fa-cloud' => '&#xf0c2; fa-cloud',
						'fa-cloud-download' => '&#xf0ed; fa-cloud-download',
						'fa-cloud-upload' => '&#xf0ee; fa-cloud-upload',
						'fa-code' => '&#xf121; fa-code',
						'fa-code-fork' => '&#xf126; fa-code-fork',
						'fa-codepen' => '&#xf1cb; fa-codepen',
						'fa-codiepie' => '&#xf284; fa-codiepie',
						'fa-coffee' => '&#xf0f4; fa-coffee',
						'fa-cog' => '&#xf013; fa-cog',
						'fa-cogs' => '&#xf085; fa-cogs',
						'fa-columns' => '&#xf0db; fa-columns',
						'fa-comment' => '&#xf075; fa-comment',
						'fa-comment-o' => '&#xf0e5; fa-comment-o',
						'fa-commenting' => '&#xf27a; fa-commenting',
						'fa-commenting-o' => '&#xf27b; fa-commenting-o',
						'fa-comments' => '&#xf086; fa-comments',
						'fa-comments-o' => '&#xf0e6; fa-comments-o',
						'fa-compass' => '&#xf14e; fa-compass',
						'fa-compress' => '&#xf066; fa-compress',
						'fa-connectdevelop' => '&#xf20e; fa-connectdevelop',
						'fa-contao' => '&#xf26d; fa-contao',
						'fa-copyright' => '&#xf1f9; fa-copyright',
						'fa-creative-commons' => '&#xf25e; fa-creative-commons',
						'fa-credit-card' => '&#xf09d; fa-credit-card',
						'fa-credit-card-alt' => '&#xf283; fa-credit-card-alt',
						'fa-crop' => '&#xf125; fa-crop',
						'fa-crosshairs' => '&#xf05b; fa-crosshairs',
						'fa-css3' => '&#xf13c; fa-css3',
						'fa-cube' => '&#xf1b2; fa-cube',
						'fa-cubes' => '&#xf1b3; fa-cubes',
						'fa-cutlery' => '&#xf0f5; fa-cutlery',
						'fa-dashcube' => '&#xf210; fa-dashcube',
						'fa-database' => '&#xf1c0; fa-database',
						'fa-deaf' => '&#xf2a4; fa-deaf',
						'fa-delicious' => '&#xf1a5; fa-delicious',
						'fa-desktop' => '&#xf108; fa-desktop',
						'fa-deviantart' => '&#xf1bd; fa-deviantart',
						'fa-diamond' => '&#xf219; fa-diamond',
						'fa-digg' => '&#xf1a6; fa-digg',
						'fa-dot-circle-o' => '&#xf192; fa-dot-circle-o',
						'fa-download' => '&#xf019; fa-download',
						'fa-dribbble' => '&#xf17d; fa-dribbble',
						'fa-dropbox' => '&#xf16b; fa-dropbox',
						'fa-drupal' => '&#xf1a9; fa-drupal',
						'fa-edge' => '&#xf282; fa-edge',
						'fa-eject' => '&#xf052; fa-eject',
						'fa-ellipsis-h' => '&#xf141; fa-ellipsis-h',
						'fa-ellipsis-v' => '&#xf142; fa-ellipsis-v',
						'fa-empire' => '&#xf1d1; fa-empire',
						'fa-envelope' => '&#xf0e0; fa-envelope',
						'fa-envelope-o' => '&#xf003; fa-envelope-o',
						'fa-envelope-square' => '&#xf199; fa-envelope-square',
						'fa-envira' => '&#xf299; fa-envira',
						'fa-eraser' => '&#xf12d; fa-eraser',
						'fa-eur' => '&#xf153; fa-eur',
						'fa-exchange' => '&#xf0ec; fa-exchange',
						'fa-exclamation' => '&#xf12a; fa-exclamation',
						'fa-exclamation-circle' => '&#xf06a; fa-exclamation-circle',
						'fa-exclamation-triangle' => '&#xf071; fa-exclamation-triangle',
						'fa-expand' => '&#xf065; fa-expand',
						'fa-expeditedssl' => '&#xf23e; fa-expeditedssl',
						'fa-external-link' => '&#xf08e; fa-external-link',
						'fa-external-link-square' => '&#xf14c; fa-external-link-square',
						'fa-eye' => '&#xf06e; fa-eye',
						'fa-eye-slash' => '&#xf070; fa-eye-slash',
						'fa-eyedropper' => '&#xf1fb; fa-eyedropper',
						'fa-facebook' => '&#xf09a; fa-facebook',
						'fa-facebook-official' => '&#xf230; fa-facebook-official',
						'fa-facebook-square' => '&#xf082; fa-facebook-square',
						'fa-fast-backward' => '&#xf049; fa-fast-backward',
						'fa-fast-forward' => '&#xf050; fa-fast-forward',
						'fa-fax' => '&#xf1ac; fa-fax',
						'fa-female' => '&#xf182; fa-female',
						'fa-fighter-jet' => '&#xf0fb; fa-fighter-jet',
						'fa-file' => '&#xf15b; fa-file',
						'fa-file-archive-o' => '&#xf1c6; fa-file-archive-o',
						'fa-file-audio-o' => '&#xf1c7; fa-file-audio-o',
						'fa-file-code-o' => '&#xf1c9; fa-file-code-o',
						'fa-file-excel-o' => '&#xf1c3; fa-file-excel-o',
						'fa-file-image-o' => '&#xf1c5; fa-file-image-o',
						'fa-file-o' => '&#xf016; fa-file-o',
						'fa-file-pdf-o' => '&#xf1c1; fa-file-pdf-o',
						'fa-file-powerpoint-o' => '&#xf1c4; fa-file-powerpoint-o',
						'fa-file-text' => '&#xf15c; fa-file-text',
						'fa-file-text-o' => '&#xf0f6; fa-file-text-o',
						'fa-file-video-o' => '&#xf1c8; fa-file-video-o',
						'fa-file-word-o' => '&#xf1c2; fa-file-word-o',
						'fa-files-o' => '&#xf0c5; fa-files-o',
						'fa-film' => '&#xf008; fa-film',
						'fa-filter' => '&#xf0b0; fa-filter',
						'fa-fire' => '&#xf06d; fa-fire',
						'fa-fire-extinguisher' => '&#xf134; fa-fire-extinguisher',
						'fa-firefox' => '&#xf269; fa-firefox',
						'fa-first-order' => '&#xf2b0; fa-first-order',
						'fa-flag' => '&#xf024; fa-flag',
						'fa-flag-checkered' => '&#xf11e; fa-flag-checkered',
						'fa-flag-o' => '&#xf11d; fa-flag-o',
						'fa-flask' => '&#xf0c3; fa-flask',
						'fa-flickr' => '&#xf16e; fa-flickr',
						'fa-floppy-o' => '&#xf0c7; fa-floppy-o',
						'fa-folder' => '&#xf07b; fa-folder',
						'fa-folder-o' => '&#xf114; fa-folder-o',
						'fa-folder-open' => '&#xf07c; fa-folder-open',
						'fa-folder-open-o' => '&#xf115; fa-folder-open-o',
						'fa-font' => '&#xf031; fa-font',
						'fa-fonticons' => '&#xf280; fa-fonticons',
						'fa-fort-awesome' => '&#xf286; fa-fort-awesome',
						'fa-forumbee' => '&#xf211; fa-forumbee',
						'fa-forward' => '&#xf04e; fa-forward',
						'fa-foursquare' => '&#xf180; fa-foursquare',
						'fa-frown-o' => '&#xf119; fa-frown-o',
						'fa-futbol-o' => '&#xf1e3; fa-futbol-o',
						'fa-gamepad' => '&#xf11b; fa-gamepad',
						'fa-gavel' => '&#xf0e3; fa-gavel',
						'fa-gbp' => '&#xf154; fa-gbp',
						'fa-genderless' => '&#xf22d; fa-genderless',
						'fa-get-pocket' => '&#xf265; fa-get-pocket',
						'fa-gg' => '&#xf260; fa-gg',
						'fa-gg-circle' => '&#xf261; fa-gg-circle',
						'fa-gift' => '&#xf06b; fa-gift',
						'fa-git' => '&#xf1d3; fa-git',
						'fa-git-square' => '&#xf1d2; fa-git-square',
						'fa-github' => '&#xf09b; fa-github',
						'fa-github-alt' => '&#xf113; fa-github-alt',
						'fa-github-square' => '&#xf092; fa-github-square',
						'fa-gitlab' => '&#xf296; fa-gitlab',
						'fa-glass' => '&#xf000; fa-glass',
						'fa-glide' => '&#xf2a5; fa-glide',
						'fa-glide-g' => '&#xf2a6; fa-glide-g',
						'fa-globe' => '&#xf0ac; fa-globe',
						'fa-google' => '&#xf1a0; fa-google',
						'fa-google-plus' => '&#xf0d5; fa-google-plus',
						'fa-google-plus-square' => '&#xf0d4; fa-google-plus-square',
						'fa-google-wallet' => '&#xf1ee; fa-google-wallet',
						'fa-graduation-cap' => '&#xf19d; fa-graduation-cap',
						'fa-gratipay' => '&#xf184; fa-gratipay',
						'fa-h-square' => '&#xf0fd; fa-h-square',
						'fa-hacker-news' => '&#xf1d4; fa-hacker-news',
						'fa-hand-lizard-o' => '&#xf258; fa-hand-lizard-o',
						'fa-hand-o-down' => '&#xf0a7; fa-hand-o-down',
						'fa-hand-o-left' => '&#xf0a5; fa-hand-o-left',
						'fa-hand-o-right' => '&#xf0a4; fa-hand-o-right',
						'fa-hand-o-up' => '&#xf0a6; fa-hand-o-up',
						'fa-hand-paper-o' => '&#xf256; fa-hand-paper-o',
						'fa-hand-peace-o' => '&#xf25b; fa-hand-peace-o',
						'fa-hand-pointer-o' => '&#xf25a; fa-hand-pointer-o',
						'fa-hand-rock-o' => '&#xf255; fa-hand-rock-o',
						'fa-hand-scissors-o' => '&#xf257; fa-hand-scissors-o',
						'fa-hand-spock-o' => '&#xf259; fa-hand-spock-o',
						'fa-hashtag' => '&#xf292; fa-hashtag',
						'fa-hdd-o' => '&#xf0a0; fa-hdd-o',
						'fa-header' => '&#xf1dc; fa-header',
						'fa-headphones' => '&#xf025; fa-headphones',
						'fa-heart' => '&#xf004; fa-heart',
						'fa-heart-o' => '&#xf08a; fa-heart-o',
						'fa-heartbeat' => '&#xf21e; fa-heartbeat',
						'fa-history' => '&#xf1da; fa-history',
						'fa-home' => '&#xf015; fa-home',
						'fa-hospital-o' => '&#xf0f8; fa-hospital-o',
						'fa-hourglass' => '&#xf254; fa-hourglass',
						'fa-hourglass-end' => '&#xf253; fa-hourglass-end',
						'fa-hourglass-half' => '&#xf252; fa-hourglass-half',
						'fa-hourglass-o' => '&#xf250; fa-hourglass-o',
						'fa-hourglass-start' => '&#xf251; fa-hourglass-start',
						'fa-houzz' => '&#xf27c; fa-houzz',
						'fa-html5' => '&#xf13b; fa-html5',
						'fa-i-cursor' => '&#xf246; fa-i-cursor',
						'fa-ils' => '&#xf20b; fa-ils',
						'fa-inbox' => '&#xf01c; fa-inbox',
						'fa-indent' => '&#xf03c; fa-indent',
						'fa-industry' => '&#xf275; fa-industry',
						'fa-info' => '&#xf129; fa-info',
						'fa-info-circle' => '&#xf05a; fa-info-circle',
						'fa-inr' => '&#xf156; fa-inr',
						'fa-instagram' => '&#xf16d; fa-instagram',
						'fa-internet-explorer' => '&#xf26b; fa-internet-explorer',
						'fa-ioxhost' => '&#xf208; fa-ioxhost',
						'fa-italic' => '&#xf033; fa-italic',
						'fa-joomla' => '&#xf1aa; fa-joomla',
						'fa-jpy' => '&#xf157; fa-jpy',
						'fa-jsfiddle' => '&#xf1cc; fa-jsfiddle',
						'fa-key' => '&#xf084; fa-key',
						'fa-keyboard-o' => '&#xf11c; fa-keyboard-o',
						'fa-krw' => '&#xf159; fa-krw',
						'fa-language' => '&#xf1ab; fa-language',
						'fa-laptop' => '&#xf109; fa-laptop',
						'fa-lastfm' => '&#xf202; fa-lastfm',
						'fa-lastfm-square' => '&#xf203; fa-lastfm-square',
						'fa-leaf' => '&#xf06c; fa-leaf',
						'fa-leanpub' => '&#xf212; fa-leanpub',
						'fa-lemon-o' => '&#xf094; fa-lemon-o',
						'fa-level-down' => '&#xf149; fa-level-down',
						'fa-level-up' => '&#xf148; fa-level-up',
						'fa-life-ring' => '&#xf1cd; fa-life-ring',
						'fa-lightbulb-o' => '&#xf0eb; fa-lightbulb-o',
						'fa-line-chart' => '&#xf201; fa-line-chart',
						'fa-link' => '&#xf0c1; fa-link',
						'fa-linkedin' => '&#xf0e1; fa-linkedin',
						'fa-linkedin-square' => '&#xf08c; fa-linkedin-square',
						'fa-linux' => '&#xf17c; fa-linux',
						'fa-list' => '&#xf03a; fa-list',
						'fa-list-alt' => '&#xf022; fa-list-alt',
						'fa-list-ol' => '&#xf0cb; fa-list-ol',
						'fa-list-ul' => '&#xf0ca; fa-list-ul',
						'fa-location-arrow' => '&#xf124; fa-location-arrow',
						'fa-lock' => '&#xf023; fa-lock',
						'fa-long-arrow-down' => '&#xf175; fa-long-arrow-down',
						'fa-long-arrow-left' => '&#xf177; fa-long-arrow-left',
						'fa-long-arrow-right' => '&#xf178; fa-long-arrow-right',
						'fa-long-arrow-up' => '&#xf176; fa-long-arrow-up',
						'fa-low-vision' => '&#xf2a8; fa-low-vision',
						'fa-magic' => '&#xf0d0; fa-magic',
						'fa-magnet' => '&#xf076; fa-magnet',
						'fa-male' => '&#xf183; fa-male',
						'fa-map' => '&#xf279; fa-map',
						'fa-map-marker' => '&#xf041; fa-map-marker',
						'fa-map-o' => '&#xf278; fa-map-o',
						'fa-map-pin' => '&#xf276; fa-map-pin',
						'fa-map-signs' => '&#xf277; fa-map-signs',
						'fa-mars' => '&#xf222; fa-mars',
						'fa-mars-double' => '&#xf227; fa-mars-double',
						'fa-mars-stroke' => '&#xf229; fa-mars-stroke',
						'fa-mars-stroke-h' => '&#xf22b; fa-mars-stroke-h',
						'fa-mars-stroke-v' => '&#xf22a; fa-mars-stroke-v',
						'fa-maxcdn' => '&#xf136; fa-maxcdn',
						'fa-meanpath' => '&#xf20c; fa-meanpath',
						'fa-medium' => '&#xf23a; fa-medium',
						'fa-medkit' => '&#xf0fa; fa-medkit',
						'fa-meh-o' => '&#xf11a; fa-meh-o',
						'fa-mercury' => '&#xf223; fa-mercury',
						'fa-microphone' => '&#xf130; fa-microphone',
						'fa-microphone-slash' => '&#xf131; fa-microphone-slash',
						'fa-minus' => '&#xf068; fa-minus',
						'fa-minus-circle' => '&#xf056; fa-minus-circle',
						'fa-minus-square' => '&#xf146; fa-minus-square',
						'fa-minus-square-o' => '&#xf147; fa-minus-square-o',
						'fa-mixcloud' => '&#xf289; fa-mixcloud',
						'fa-mobile' => '&#xf10b; fa-mobile',
						'fa-modx' => '&#xf285; fa-modx',
						'fa-money' => '&#xf0d6; fa-money',
						'fa-moon-o' => '&#xf186; fa-moon-o',
						'fa-motorcycle' => '&#xf21c; fa-motorcycle',
						'fa-mouse-pointer' => '&#xf245; fa-mouse-pointer',
						'fa-music' => '&#xf001; fa-music',
						'fa-neuter' => '&#xf22c; fa-neuter',
						'fa-newspaper-o' => '&#xf1ea; fa-newspaper-o',
						'fa-object-group' => '&#xf247; fa-object-group',
						'fa-object-ungroup' => '&#xf248; fa-object-ungroup',
						'fa-odnoklassniki' => '&#xf263; fa-odnoklassniki',
						'fa-odnoklassniki-square' => '&#xf264; fa-odnoklassniki-square',
						'fa-opencart' => '&#xf23d; fa-opencart',
						'fa-openid' => '&#xf19b; fa-openid',
						'fa-opera' => '&#xf26a; fa-opera',
						'fa-optin-monster' => '&#xf23c; fa-optin-monster',
						'fa-outdent' => '&#xf03b; fa-outdent',
						'fa-pagelines' => '&#xf18c; fa-pagelines',
						'fa-paint-brush' => '&#xf1fc; fa-paint-brush',
						'fa-paper-plane' => '&#xf1d8; fa-paper-plane',
						'fa-paper-plane-o' => '&#xf1d9; fa-paper-plane-o',
						'fa-paperclip' => '&#xf0c6; fa-paperclip',
						'fa-paragraph' => '&#xf1dd; fa-paragraph',
						'fa-pause' => '&#xf04c; fa-pause',
						'fa-pause-circle' => '&#xf28b; fa-pause-circle',
						'fa-pause-circle-o' => '&#xf28c; fa-pause-circle-o',
						'fa-paw' => '&#xf1b0; fa-paw',
						'fa-paypal' => '&#xf1ed; fa-paypal',
						'fa-pencil' => '&#xf040; fa-pencil',
						'fa-pencil-square' => '&#xf14b; fa-pencil-square',
						'fa-pencil-square-o' => '&#xf044; fa-pencil-square-o',
						'fa-percent' => '&#xf295; fa-percent',
						'fa-phone' => '&#xf095; fa-phone',
						'fa-phone-square' => '&#xf098; fa-phone-square',
						'fa-picture-o' => '&#xf03e; fa-picture-o',
						'fa-pie-chart' => '&#xf200; fa-pie-chart',
						'fa-pied-piper' => '&#xf2ae; fa-pied-piper',
						'fa-pied-piper-alt' => '&#xf1a8; fa-pied-piper-alt',
						'fa-pied-piper-pp' => '&#xf1a7; fa-pied-piper-pp',
						'fa-pinterest' => '&#xf0d2; fa-pinterest',
						'fa-pinterest-p' => '&#xf231; fa-pinterest-p',
						'fa-pinterest-square' => '&#xf0d3; fa-pinterest-square',
						'fa-plane' => '&#xf072; fa-plane',
						'fa-play' => '&#xf04b; fa-play',
						'fa-play-circle' => '&#xf144; fa-play-circle',
						'fa-play-circle-o' => '&#xf01d; fa-play-circle-o',
						'fa-plug' => '&#xf1e6; fa-plug',
						'fa-plus' => '&#xf067; fa-plus',
						'fa-plus-circle' => '&#xf055; fa-plus-circle',
						'fa-plus-square' => '&#xf0fe; fa-plus-square',
						'fa-plus-square-o' => '&#xf196; fa-plus-square-o',
						'fa-power-off' => '&#xf011; fa-power-off',
						'fa-print' => '&#xf02f; fa-print',
						'fa-product-hunt' => '&#xf288; fa-product-hunt',
						'fa-puzzle-piece' => '&#xf12e; fa-puzzle-piece',
						'fa-qq' => '&#xf1d6; fa-qq',
						'fa-qrcode' => '&#xf029; fa-qrcode',
						'fa-question' => '&#xf128; fa-question',
						'fa-question-circle' => '&#xf059; fa-question-circle',
						'fa-question-circle-o' => '&#xf29c; fa-question-circle-o',
						'fa-quote-left' => '&#xf10d; fa-quote-left',
						'fa-quote-right' => '&#xf10e; fa-quote-right',
						'fa-random' => '&#xf074; fa-random',
						'fa-rebel' => '&#xf1d0; fa-rebel',
						'fa-recycle' => '&#xf1b8; fa-recycle',
						'fa-reddit' => '&#xf1a1; fa-reddit',
						'fa-reddit-alien' => '&#xf281; fa-reddit-alien',
						'fa-reddit-square' => '&#xf1a2; fa-reddit-square',
						'fa-refresh' => '&#xf021; fa-refresh',
						'fa-registered' => '&#xf25d; fa-registered',
						'fa-renren' => '&#xf18b; fa-renren',
						'fa-repeat' => '&#xf01e; fa-repeat',
						'fa-reply' => '&#xf112; fa-reply',
						'fa-reply-all' => '&#xf122; fa-reply-all',
						'fa-retweet' => '&#xf079; fa-retweet',
						'fa-road' => '&#xf018; fa-road',
						'fa-rocket' => '&#xf135; fa-rocket',
						'fa-rss' => '&#xf09e; fa-rss',
						'fa-rss-square' => '&#xf143; fa-rss-square',
						'fa-rub' => '&#xf158; fa-rub',
						'fa-safari' => '&#xf267; fa-safari',
						'fa-scissors' => '&#xf0c4; fa-scissors',
						'fa-scribd' => '&#xf28a; fa-scribd',
						'fa-search' => '&#xf002; fa-search',
						'fa-search-minus' => '&#xf010; fa-search-minus',
						'fa-search-plus' => '&#xf00e; fa-search-plus',
						'fa-sellsy' => '&#xf213; fa-sellsy',
						'fa-server' => '&#xf233; fa-server',
						'fa-share' => '&#xf064; fa-share',
						'fa-share-alt' => '&#xf1e0; fa-share-alt',
						'fa-share-alt-square' => '&#xf1e1; fa-share-alt-square',
						'fa-share-square' => '&#xf14d; fa-share-square',
						'fa-share-square-o' => '&#xf045; fa-share-square-o',
						'fa-shield' => '&#xf132; fa-shield',
						'fa-ship' => '&#xf21a; fa-ship',
						'fa-shirtsinbulk' => '&#xf214; fa-shirtsinbulk',
						'fa-shopping-bag' => '&#xf290; fa-shopping-bag',
						'fa-shopping-basket' => '&#xf291; fa-shopping-basket',
						'fa-shopping-cart' => '&#xf07a; fa-shopping-cart',
						'fa-sign-in' => '&#xf090; fa-sign-in',
						'fa-sign-language' => '&#xf2a7; fa-sign-language',
						'fa-sign-out' => '&#xf08b; fa-sign-out',
						'fa-signal' => '&#xf012; fa-signal',
						'fa-simplybuilt' => '&#xf215; fa-simplybuilt',
						'fa-sitemap' => '&#xf0e8; fa-sitemap',
						'fa-skyatlas' => '&#xf216; fa-skyatlas',
						'fa-skype' => '&#xf17e; fa-skype',
						'fa-slack' => '&#xf198; fa-slack',
						'fa-sliders' => '&#xf1de; fa-sliders',
						'fa-slideshare' => '&#xf1e7; fa-slideshare',
						'fa-smile-o' => '&#xf118; fa-smile-o',
						'fa-snapchat' => '&#xf2ab; fa-snapchat',
						'fa-snapchat-ghost' => '&#xf2ac; fa-snapchat-ghost',
						'fa-snapchat-square' => '&#xf2ad; fa-snapchat-square',
						'fa-sort' => '&#xf0dc; fa-sort',
						'fa-sort-alpha-asc' => '&#xf15d; fa-sort-alpha-asc',
						'fa-sort-alpha-desc' => '&#xf15e; fa-sort-alpha-desc',
						'fa-sort-amount-asc' => '&#xf160; fa-sort-amount-asc',
						'fa-sort-amount-desc' => '&#xf161; fa-sort-amount-desc',
						'fa-sort-asc' => '&#xf0de; fa-sort-asc',
						'fa-sort-desc' => '&#xf0dd; fa-sort-desc',
						'fa-sort-numeric-asc' => '&#xf162; fa-sort-numeric-asc',
						'fa-sort-numeric-desc' => '&#xf163; fa-sort-numeric-desc',
						'fa-soundcloud' => '&#xf1be; fa-soundcloud',
						'fa-space-shuttle' => '&#xf197; fa-space-shuttle',
						'fa-spinner' => '&#xf110; fa-spinner',
						'fa-spoon' => '&#xf1b1; fa-spoon',
						'fa-spotify' => '&#xf1bc; fa-spotify',
						'fa-square' => '&#xf0c8; fa-square',
						'fa-square-o' => '&#xf096; fa-square-o',
						'fa-stack-exchange' => '&#xf18d; fa-stack-exchange',
						'fa-stack-overflow' => '&#xf16c; fa-stack-overflow',
						'fa-star' => '&#xf005; fa-star',
						'fa-star-half' => '&#xf089; fa-star-half',
						'fa-star-half-o' => '&#xf123; fa-star-half-o',
						'fa-star-o' => '&#xf006; fa-star-o',
						'fa-steam' => '&#xf1b6; fa-steam',
						'fa-steam-square' => '&#xf1b7; fa-steam-square',
						'fa-step-backward' => '&#xf048; fa-step-backward',
						'fa-step-forward' => '&#xf051; fa-step-forward',
						'fa-stethoscope' => '&#xf0f1; fa-stethoscope',
						'fa-sticky-note' => '&#xf249; fa-sticky-note',
						'fa-sticky-note-o' => '&#xf24a; fa-sticky-note-o',
						'fa-stop' => '&#xf04d; fa-stop',
						'fa-stop-circle' => '&#xf28d; fa-stop-circle',
						'fa-stop-circle-o' => '&#xf28e; fa-stop-circle-o',
						'fa-street-view' => '&#xf21d; fa-street-view',
						'fa-strikethrough' => '&#xf0cc; fa-strikethrough',
						'fa-stumbleupon' => '&#xf1a4; fa-stumbleupon',
						'fa-stumbleupon-circle' => '&#xf1a3; fa-stumbleupon-circle',
						'fa-subscript' => '&#xf12c; fa-subscript',
						'fa-subway' => '&#xf239; fa-subway',
						'fa-suitcase' => '&#xf0f2; fa-suitcase',
						'fa-sun-o' => '&#xf185; fa-sun-o',
						'fa-superscript' => '&#xf12b; fa-superscript',
						'fa-table' => '&#xf0ce; fa-table',
						'fa-tablet' => '&#xf10a; fa-tablet',
						'fa-tachometer' => '&#xf0e4; fa-tachometer',
						'fa-tag' => '&#xf02b; fa-tag',
						'fa-tags' => '&#xf02c; fa-tags',
						'fa-tasks' => '&#xf0ae; fa-tasks',
						'fa-taxi' => '&#xf1ba; fa-taxi',
						'fa-television' => '&#xf26c; fa-television',
						'fa-tencent-weibo' => '&#xf1d5; fa-tencent-weibo',
						'fa-terminal' => '&#xf120; fa-terminal',
						'fa-text-height' => '&#xf034; fa-text-height',
						'fa-text-width' => '&#xf035; fa-text-width',
						'fa-th' => '&#xf00a; fa-th',
						'fa-th-large' => '&#xf009; fa-th-large',
						'fa-th-list' => '&#xf00b; fa-th-list',
						'fa-themeisle' => '&#xf2b2; fa-themeisle',
						'fa-thumb-tack' => '&#xf08d; fa-thumb-tack',
						'fa-thumbs-down' => '&#xf165; fa-thumbs-down',
						'fa-thumbs-o-down' => '&#xf088; fa-thumbs-o-down',
						'fa-thumbs-o-up' => '&#xf087; fa-thumbs-o-up',
						'fa-thumbs-up' => '&#xf164; fa-thumbs-up',
						'fa-ticket' => '&#xf145; fa-ticket',
						'fa-times' => '&#xf00d; fa-times',
						'fa-times-circle' => '&#xf057; fa-times-circle',
						'fa-times-circle-o' => '&#xf05c; fa-times-circle-o',
						'fa-tint' => '&#xf043; fa-tint',
						'fa-toggle-off' => '&#xf204; fa-toggle-off',
						'fa-toggle-on' => '&#xf205; fa-toggle-on',
						'fa-trademark' => '&#xf25c; fa-trademark',
						'fa-train' => '&#xf238; fa-train',
						'fa-transgender' => '&#xf224; fa-transgender',
						'fa-transgender-alt' => '&#xf225; fa-transgender-alt',
						'fa-trash' => '&#xf1f8; fa-trash',
						'fa-trash-o' => '&#xf014; fa-trash-o',
						'fa-tree' => '&#xf1bb; fa-tree',
						'fa-trello' => '&#xf181; fa-trello',
						'fa-tripadvisor' => '&#xf262; fa-tripadvisor',
						'fa-trophy' => '&#xf091; fa-trophy',
						'fa-truck' => '&#xf0d1; fa-truck',
						'fa-try' => '&#xf195; fa-try',
						'fa-tty' => '&#xf1e4; fa-tty',
						'fa-tumblr' => '&#xf173; fa-tumblr',
						'fa-tumblr-square' => '&#xf174; fa-tumblr-square',
						'fa-twitch' => '&#xf1e8; fa-twitch',
						'fa-twitter' => '&#xf099; fa-twitter',
						'fa-twitter-square' => '&#xf081; fa-twitter-square',
						'fa-umbrella' => '&#xf0e9; fa-umbrella',
						'fa-underline' => '&#xf0cd; fa-underline',
						'fa-undo' => '&#xf0e2; fa-undo',
						'fa-universal-access' => '&#xf29a; fa-universal-access',
						'fa-university' => '&#xf19c; fa-university',
						'fa-unlock' => '&#xf09c; fa-unlock',
						'fa-unlock-alt' => '&#xf13e; fa-unlock-alt',
						'fa-upload' => '&#xf093; fa-upload',
						'fa-usb' => '&#xf287; fa-usb',
						'fa-usd' => '&#xf155; fa-usd',
						'fa-user' => '&#xf007; fa-user',
						'fa-user-md' => '&#xf0f0; fa-user-md',
						'fa-user-plus' => '&#xf234; fa-user-plus',
						'fa-user-secret' => '&#xf21b; fa-user-secret',
						'fa-user-times' => '&#xf235; fa-user-times',
						'fa-users' => '&#xf0c0; fa-users',
						'fa-venus' => '&#xf221; fa-venus',
						'fa-venus-double' => '&#xf226; fa-venus-double',
						'fa-venus-mars' => '&#xf228; fa-venus-mars',
						'fa-viacoin' => '&#xf237; fa-viacoin',
						'fa-viadeo' => '&#xf2a9; fa-viadeo',
						'fa-viadeo-square' => '&#xf2aa; fa-viadeo-square',
						'fa-video-camera' => '&#xf03d; fa-video-camera',
						'fa-vimeo' => '&#xf27d; fa-vimeo',
						'fa-vimeo-square' => '&#xf194; fa-vimeo-square',
						'fa-vine' => '&#xf1ca; fa-vine',
						'fa-vk' => '&#xf189; fa-vk',
						'fa-volume-control-phone' => '&#xf2a0; fa-volume-control-phone',
						'fa-volume-down' => '&#xf027; fa-volume-down',
						'fa-volume-off' => '&#xf026; fa-volume-off',
						'fa-volume-up' => '&#xf028; fa-volume-up',
						'fa-weibo' => '&#xf18a; fa-weibo',
						'fa-weixin' => '&#xf1d7; fa-weixin',
						'fa-whatsapp' => '&#xf232; fa-whatsapp',
						'fa-wheelchair' => '&#xf193; fa-wheelchair',
						'fa-wheelchair-alt' => '&#xf29b; fa-wheelchair-alt',
						'fa-wifi' => '&#xf1eb; fa-wifi',
						'fa-wikipedia-w' => '&#xf266; fa-wikipedia-w',
						'fa-windows' => '&#xf17a; fa-windows',
						'fa-wordpress' => '&#xf19a; fa-wordpress',
						'fa-wpbeginner' => '&#xf297; fa-wpbeginner',
						'fa-wpforms' => '&#xf298; fa-wpforms',
						'fa-wrench' => '&#xf0ad; fa-wrench',
						'fa-xing' => '&#xf168; fa-xing',
						'fa-xing-square' => '&#xf169; fa-xing-square',
						'fa-y-combinator' => '&#xf23b; fa-y-combinator',
						'fa-yahoo' => '&#xf19e; fa-yahoo',
						'fa-yelp' => '&#xf1e9; fa-yelp',
						'fa-yoast' => '&#xf2b1; fa-yoast',
						'fa-youtube' => '&#xf167; fa-youtube',
						'fa-youtube-play' => '&#xf16a; fa-youtube-play',
						'fa-youtube-square' => '&#xf166; fa-youtube-square',
					),
				),
				array (
					'key' => 'field_572d5a26bf762',
					'label' => 'Service Heading',
					'name' => 'service_heading',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572d5a36bf763',
					'label' => 'Service Content',
					'name' => 'service_content',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about.php',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

endif;