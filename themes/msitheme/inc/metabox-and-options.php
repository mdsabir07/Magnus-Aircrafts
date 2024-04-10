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

	// Header options
	CSF::createCustomizeOptions( $msitheme_options_prefix );
	CSF::createSection( $msitheme_options_prefix, array(
		'id'    => 'header-options',
		'title' => esc_html__( 'Header settings', 'msitheme' ),
		'icon'   => 'fab fa-wordpress-simple',
	) );
	CSF::createSection($msitheme_options_prefix, array(
		'parent' => 'header-options',
        'title'  => esc_html__('Header options', 'msitheme'),
        'icon'   => 'fas fa-file-code',
		'fields' => array(
			// A text field
			array(
				'id' => 'language',
				'type' => 'wp_editor',
				'title' => esc_html__('Insert language shortcode', 'msitheme'),
			),
			
			array(
				'id' => 'header_button',
				'type' => 'text',
				'title' => esc_html__('Header button text', 'msitheme'),
			),
			
			array(
				'id' => 'header_button_link',
				'type' => 'text',
				'title' => esc_html__('Header button link', 'msitheme'),
			),
		)
	));




	 // Footer options
	 CSF::createCustomizeOptions( $msitheme_options_prefix );
	 CSF::createSection( $msitheme_options_prefix, array(
		 'id'    => 'footer-options',
		 'title' => esc_html__( 'Footer settings', 'msitheme' ),
		 'icon'   => 'fab fa-wordpress-simple',
	 ) );
	CSF::createSection($msitheme_options_prefix, array(
		'parent' => 'footer-options',
        'title'  => esc_html__('Footer informations', 'msitheme'),
        'icon'   => 'fas fa-file-code',
		'fields' => array(
			// A text field
			
			array(
				'id' => 'logo_text',
				'type' => 'textarea',
				'title' => esc_html__('Type text for display under the logo', 'msitheme'),
			),
			
			array(
				'id' => 'address_head',
				'type' => 'text',
				'title' => esc_html__('Type address heading', 'msitheme'),
			),
			
			array(
				'id' => 'address_txt',
				'type' => 'textarea',
				'title' => esc_html__('Type address', 'msitheme'),
			),
			
			array(
				'id' => 'phone_number',
				'type' => 'text',
				'title' => esc_html__('Type phone number', 'msitheme'),
			),
			
			array(
				'id' => 'phone_link',
				'type' => 'text',
				'title' => esc_html__('Type phone link number', 'msitheme'),
			),
			
			array(
				'id' => 'email',
				'type' => 'text',
				'title' => esc_html__('Email', 'msitheme'),
			),
			
			array(
				'id' => 'email_link',
				'type' => 'text',
				'title' => esc_html__('Email link', 'msitheme'),
			),
		)
	));
	CSF::createSection($msitheme_options_prefix, array(
		'parent' => 'footer-options',
        'title'  => esc_html__('Social media', 'msitheme'),
        'icon'   => 'fas fa-file-code',
		'fields' => array(
			// A text field
			
			array(
				'id' => 'facebook',
				'type' => 'text',
				'title' => esc_html__('Insert facebook link', 'msitheme'),
			),
			
			array(
				'id' => 'linkedin',
				'type' => 'text',
				'title' => esc_html__('Insert linkedin link', 'msitheme'),
			),
			
			array(
				'id' => 'instagram',
				'type' => 'text',
				'title' => esc_html__('Insert instagram link', 'msitheme'),
			),
			
			array(
				'id' => 'twitter',
				'type' => 'text',
				'title' => esc_html__('Insert twitter link', 'msitheme'),
			),
			
			array(
				'id' => 'tiktok',
				'type' => 'text',
				'title' => esc_html__('Insert tiktok link', 'msitheme'),
			),
			
			array(
				'id' => 'youtube',
				'type' => 'text',
				'title' => esc_html__('Insert youtube link', 'msitheme'),
			),
		)
	));


	
	// 404 options
	CSF::createCustomizeOptions( $msitheme_options_prefix );
	CSF::createSection( $msitheme_options_prefix, array(
		'id'    => 'error-options',
		'title' => esc_html__( '404 page settings', 'msitheme' ),
		'icon'   => 'fab fa-wordpress-simple',
	) );
	CSF::createSection($msitheme_options_prefix, array(
		'parent' => 'error-options',
        'title'  => esc_html__('404 page options', 'msitheme'),
        'icon'   => 'fas fa-file-code',
		'fields' => array(
			// A text field
			array(
                'id'    => '404_main_img',
                'type'  => 'media',
                'title' => esc_html__('Add 404 image', 'msitheme'),
            ),
			array(
                'id'    => 'left_border_img',
                'type'  => 'media',
                'title' => esc_html__('Add 404 left border image', 'msitheme'),
            ),
			array(
                'id'    => 'right_border_img',
                'type'  => 'media',
                'title' => esc_html__('Add 404 right border image', 'msitheme'),
            ),
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

	// Dealer post Metabox 
	// Set a unique slug-like ID
	$msitheme_dealer_metabox_prefix = 'msitheme_dealer_meta';
	// Create a metabox
	CSF::createMetabox($msitheme_dealer_metabox_prefix, array(
		'title' => 'Dealer optons',
		'post_type' => 'dealer',
		'data_type' => 'serialize',
	));

	// Create a section
	CSF::createSection($msitheme_dealer_metabox_prefix, array(
		'title' => esc_html__('Dealer name and business', 'msitheme'),
		'fields' => array(
			array(
				'id' => 'dealer_name',
				'type' => 'text',
				'title' => 'Dealer name',
			),
			array(
				'id' => 'dealer_business',
				'type' => 'text',
				'title' => 'Dealer business',
			),
		)
	));

	// Create a section
	CSF::createSection($msitheme_dealer_metabox_prefix, array(
		'title' => esc_html__('Dealer contact informatons', 'msitheme'),
		'fields' => array(
			// phone 
			array(
				'id'      => 'phone_icon',
				'type'    => 'icon',
				'title'   => 'Select phone Icon',
				'default' => 'fa fa-phone'
			),
			array(
				'id'    => 'phone_num',
				'type'  => 'text',
				'title' => 'Phone number',
				// 'dependency' => array( 'info_field_type', '==', 'text' ),
			),
			array(
				'id'    => 'num_link',
				'type'  => 'text',
				'title' => 'Insert link (exam: tel:+34523542)',
				// 'dependency' => array( 'info_field_type', '==', 'link' ),
			),
			// email 
			array(
				'id'      => 'mail_icon',
				'type'    => 'icon',
				'title'   => 'Select email Icon',
				'default' => 'fa fa-heart'
			),
			array(
				'id'    => 'mail_name',
				'type'  => 'text',
				'title' => 'Insert email address',
				// 'dependency' => array( 'info_field_type', '==', 'text' ),
			),
			array(
				'id'    => 'email_link',
				'type'  => 'text',
				'title' => 'Insert link (exam: mailto:email@domain.com)',
				// 'dependency' => array( 'info_field_type', '==', 'link' ),
			),
			// address
			array(
				'id'      => 'address_icon',
				'type'    => 'icon',
				'title'   => 'Select address Icon',
				'default' => 'fa fa-heart'
			),
			array(
				'id'    => 'address_name',
				'type'  => 'textarea',
				'title' => 'Address',
				// 'dependency' => array( 'info_field_type', '==', 'text' ),
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