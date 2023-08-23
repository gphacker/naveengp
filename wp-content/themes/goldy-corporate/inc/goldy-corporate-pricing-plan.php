<?php
add_action("init","goldy_corporate_pricing_plan_customizer",12);
function goldy_corporate_pricing_plan_customizer(){
// Restaurant Menu
	new \Kirki\Section(
		'goldy_corporate_pricing_plan_section',
		[
			'title'       => esc_html__( 'Pricing Plan', 'goldy-corporate' ),
			'panel'       => 'globly_theme_option',
			'priority'    => 150,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'goldy_corporate_pricing_plan_main_title',
			'label'    => esc_html__( 'Pricing Plan Title', 'goldy-corporate' ),
			'section'  => 'goldy_corporate_pricing_plan_section',
			'default'  => esc_html__( 'Pricing Plan', 'goldy-corporate' ),
			'priority' => 5,
			'partial_refresh'    => [
				'goldy_corporate_pricing_plan_main_title' => [
					'selector'        => '.pricing_plan_title',
					'render_callback' => function() {
					    return true;
					}
				],
			],
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'goldy_corporate_pricing_plan_content',
			'label'    => esc_html__( 'Pricing Plan Content', 'goldy-corporate' ),
			'row_label' => array( 'value' => 'Info item' ),
			'section'  => 'goldy_corporate_pricing_plan_section',
			'priority' => 10,
			'default'  => [
				[
					'image'    => '',
					'price_value'    => '$120',
					'plan_time'    => 'Per Month',
					'plan_type'    => 'BASIC',
					'plan_description'    => 'Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.',	
					'link_text'    => 'Select Plan',	
					'link_url'    => '#',	
				],
				[
					'image'    => '',
					'price_value'    => '$160',
					'plan_time'    => 'Per Month',
					'plan_type'    => 'STANDARD',
					'plan_description'    => 'Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.',	
					'link_text'    => 'Select Plan',	
					'link_url'    => '#',	
				],
				[
					'image'    => '',
					'price_value'    => '$190',
					'plan_time'    => 'Per Month',
					'plan_type'    => 'PREMIUM',
					'plan_description'    => 'Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.',	
					'link_text'    => 'Select Plan',	
					'link_url'    => '#',	
				],
			],
			'fields'   => [
				'image'    => [
					'type'		  => 'image',
					'label'       => esc_html__( 'Image:', 'goldy-corporate' ),
				],
				'price_value'    => [
					'type'		  => 'text',
					'label'       => esc_html__( 'Plan Price:', 'goldy-corporate' ),
				],
				'plan_time'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Time', 'goldy-corporate' ),
				],
				'plan_type'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Plan Type', 'goldy-corporate' ),
				],
				'plan_description'    => [
					'type'        => 'textarea',
					'label'       => esc_html__( 'About Plan', 'goldy-corporate' ),
				],
				'link_text'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Link Text:', 'goldy-corporate' ),
				],
				'link_url'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Link URL:', 'goldy-corporate' ),
				],
			],
			'choices' => [
				'limit' => 3,
			]
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'goldy_corporate_pricing_plan_background_image',
			'label'       => esc_html__( 'Backgroung Image', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '',
			'priority'    => 15,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_corporate_pricing_plan_background_position',
			'label'       => esc_html__( 'Background Position', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => 'center center',
			'priority'    => 20,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-corporate' ),
			'choices'     => [
				'left top' => esc_html__( 'Left Top', 'goldy-corporate' ),
				'left center' => esc_html__( 'Left Center', 'goldy-corporate' ),
				'left bottom' => esc_html__( 'Left Bottom', 'goldy-corporate' ),
				'right top' => esc_html__( 'Right Top', 'goldy-corporate' ),
				'right center' => esc_html__( 'Right Center', 'goldy-corporate' ),
				'right bottom' => esc_html__( 'Right Bottom', 'goldy-corporate' ),
				'center top' => esc_html__( 'Center Top', 'goldy-corporate' ),
				'center center' => esc_html__( 'Center Center', 'goldy-corporate' ),
				'center bottom' => esc_html__( 'Center Bottom', 'goldy-corporate' ),
			],
			'output' => array(
				array(
					'element'  => '.corporate_pricing_plan_section',
					'property' => 'background-position',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_corporate_pricing_plan_background_attachment',
			'label'       => esc_html__( 'Background Attachment', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => 'scroll',
			'priority'    => 25,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-corporate' ),
			'choices'     => [
				'scroll' => esc_html__( 'Scroll', 'goldy-corporate' ),
				'fixed' => esc_html__( 'Fixed', 'goldy-corporate' ),
			],
			'output' => array(
				array(
					'element'  => '.corporate_pricing_plan_section',
					'property' => 'background-attachment',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_corporate_pricing_plan_background_size',
			'label'       => esc_html__( 'Background Size', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => 'cover',
			'priority'    => 30,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-corporate' ),
			'choices'     => [
				'auto' => esc_html__( 'Auto', 'goldy-corporate' ),
				'cover' => esc_html__( 'Cover', 'goldy-corporate' ),
				'contain' => esc_html__( 'Contain', 'goldy-corporate' ),
			],
			'output' => array(
				array(
					'element'  => '.corporate_pricing_plan_section',
					'property' => 'background-size',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_bg_color',
			'label'       => __( 'Background Color', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 35,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.corporate_pricing_plan_section',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_text_color',
			'label'       => __( 'Title Color', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#333',
			'priority'    => 40,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing_plan_title h2',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_content_bg_color',
			'label'       => __( 'Contain Background Color', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 45,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_content_price_color',
			'label'       => __( 'Contain Price Color', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 50,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_content h2, .pp_first_content p',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_content_hover_price_color',
			'label'       => __( 'Contain Price Hover Color', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 55,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_first_content h2, .pricing-plan-inner-wrapper:hover .pp_first_content p',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_content_text_color',
			'label'       => __( 'Contain Text Color', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#000000',
			'priority'    => 60,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_second_content',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_content_hover_text_color',
			'label'       => __( 'Contain Hover Text Color', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#000000',
			'priority'    => 65,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_second_content',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_button_bg_color',
			'label'       => __( 'Button Background Color', 'goldy-corporate' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#c5691a',
			'priority'    => 70,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_button_bg_hover_color',
			'label'       => __( 'Background Hover Color', 'kirki' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#214462',
			'priority'    => 75,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons::before',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_button_text_color',
			'label'       => __( 'Button Text Color', 'kirki' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 80,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_button_texthover_color',
			'label'       => __( 'Button Text Hover Color', 'kirki' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 85,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons:hover',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_button_border_color',
			'label'       => __( 'Button Border Color', 'kirki' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#c5691a',
			'priority'    => 90,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'border-color',
					'suffix' => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_corporate_pricing_plan_price_bg_color',
			'label'       => __( 'Price Background Color', 'kirki' ),
			'section'     => 'goldy_corporate_pricing_plan_section',
			'default'     => '#c76a1a',
			'priority'    => 95,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_content',
					'property' => 'background-color',
				),
			),
		]
	);
}

?>