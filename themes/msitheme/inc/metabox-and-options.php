<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

	// Set a unique slug-like ID
	$msitheme_options_prefix = 'msitheme_options';

	// Create options
	CSF::createOptions($msitheme_options_prefix, array(
		'menu_title' => 'Theme Options',
		'framework_title' => 'Theme Options',
		'menu_slug' => 'theme-options',
	));

	// Create a section
	CSF::createSection($msitheme_options_prefix, array(
		'title' => 'General',
		'fields' => array(
			// A text field
			array(
				'id' => 'socials',
				'type' => 'group',
				'title' => 'Social Links',
				'button_title' => 'Add New Link',
				'accordion_title' => 'Add New',
				'fields' => array(
					array(
						'id' => 'icon',
						'type' => 'icon',
						'title' => 'Select icon',
					),
					array(
						'id' => 'link',
						'type' => 'text',
						'title' => 'Link',
						'title' => esc_html__('Type social link', 'msitheme'),
					),
				)
			),
			array(
				'id' => 'phone',
				'type' => 'text',
				'title' => 'Phone number',
			)
		)
	));

	// Create a section
	CSF::createSection($msitheme_options_prefix, array(
		'title' => 'Backup',
		'fields' => array(
			// A textarea field
			array(
				'id' => 'backup',
				'type' => 'backup',
				'title' => 'Backup',
			),
		)
	));
} 

// Metabox 
if (class_exists('CSF')) {
	// Set a unique slug-like ID
	$msitheme_metabox_prefix = 'msitheme_page_meta';
	// Create a metabox
	CSF::createMetabox($msitheme_metabox_prefix, array(
		'title' => 'Page Options',
		'post_type' => 'page',
		'data_type' => 'serialize',
	));

	// Create a section
	CSF::createSection($msitheme_metabox_prefix, array(
		'fields' => array(
			// changing header menu color as per the page
			array(
				'id'     => 'header_menu_color',
				'type'   => 'color',
				'title'  => 'Change Header Menu Color',
				'output' => array( 
					'color' => '.main-navigation ul li a, .header-btn .theme-btn, .header-right-content .languages', 
					'border-color' => '.main-navigation ul ul li, .site-header .header-wrap, .header-btn .bordered-btn', 
					'background' => '.main-navigation ul ul li::before' 
				)
			),
			array(
				'id'     => 'header_drop_menu_color',
				'type'   => 'color',
				'title'  => 'Change Header Dropdown Menu Background Color',
				'output' => array( 'background' => '.main-navigation ul ul' )
			),
			array(
				'id'      => 'header-logo',
				'type'    => 'media',
				'title'   => 'Change header logo',
				'library' => 'image',
			),
			// array(
			// 	'id' => 'enable_page_title',
			// 	'type' => 'switcher',
			// 	'title' => 'Enable page title?',
			// 	'default' => true,
			// ),
			// array(
			// 	'id' => 'custom_title',
			// 	'type' => 'textarea',
			// 	'title' => esc_html__('Custom title', 'msitheme'),
			// 	'desc' => esc_html__('Type custom title here', 'msitheme'),
			// 	'dependency' => array('enable_page_title', '==', 'true'),
			// ),
			// array(
			// 	'id' => 'default_padding',
			// 	'type' => 'switcher',
			// 	'title' => 'Enable default padding?',
			// 	'default' => true,
			// ),
		)
	));


	// Metabox 
	// Set a unique slug-like ID
	$msitheme_post_metabox_prefix = 'msitheme_post_meta';
	// Create a metabox
	CSF::createMetabox($msitheme_post_metabox_prefix, array(
		'title' => 'Extra Post Options',
		'post_type' => 'post',
		'data_type' => 'serialize',
		'context'   => 'side',
	));

	// Create a section
	CSF::createSection($msitheme_post_metabox_prefix, array(
		'title' => esc_html__('Post small image', 'msitheme'),
		'fields' => array(
			array(
				'id' => 'post_extra_img',
				'type' => 'media',
				'title' => 'Upload image',
			),
		)
	));
	// Create a section
	CSF::createSection($msitheme_post_metabox_prefix, array(
		'title' => esc_html__('Post header customization', 'msitheme'),
		'fields' => array(
			// changing header menu color as per the page
			array(
				'id'     => 'header_menu_color',
				'type'   => 'color',
				'title'  => 'Change Header Menu Color',
				'output' => array( 
					'color' => '.main-navigation ul li a, .header-btn .theme-btn, .header-right-content .languages', 
					'border-color' => '.main-navigation ul ul li, .site-header .header-wrap, .header-btn .bordered-btn', 
					'background' => '.main-navigation ul ul li::before' 
				)
			),
			array(
				'id'     => 'header_drop_menu_color',
				'type'   => 'color',
				'title'  => 'Change Header Dropdown Menu Background Color',
				'output' => array( 'background' => '.main-navigation ul ul' )
			),
			array(
				'id'      => 'header-logo',
				'type'    => 'media',
				'title'   => 'Change header logo',
				'library' => 'image',
			),
		)
	));

} 