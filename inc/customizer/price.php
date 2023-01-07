<?php
new \Kirki\Section(
	'price_section',
	[
		'title'       => esc_html__( 'Price', 'stack' ),
		'description' => esc_html__( 'Price section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'price_show_hide',
		'label'       => esc_html__( 'Price Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'price_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'price_title',
		'label'    => esc_html__( 'Price Title', 'stack' ),
		'section'  => 'price_section',
		'default'  => esc_html__( 'BEST PRICING', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'price_sub_title',
		'label'    => esc_html__( 'Price Sub Title', 'stack' ),
		'section'  => 'price_section',
		'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'stack' ),
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'all_price_list',
		'label'        => esc_html__( 'Price List', 'stack' ),
		'section'      => 'price_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'field' => 'price_heading',
		],
		'button_label' => esc_html__( 'Add New Price List', 'stack' ),
		'default'      => [
			[
				'price_heading'     => esc_html__( 'BASIC', 'stack' ),
				'price_amount'      => esc_html__( '$12.90', 'stack' ),
				'price_time'        => esc_html__( '/ Month', 'stack' ),
				'price_button_text' => esc_html__( 'Get It', 'stack' ),
				'price_button_url'  => 'https://www.facebook.com/',
				'price_feature_1'   => esc_html__( 'Business Analyzing', 'stack' ),
				'price_feature_2'   => esc_html__( '24/7 Tech Suport', 'stack' ),
				'price_feature_3'   => esc_html__( 'Operational Excellence', 'stack' ),
				'price_feature_4'   => esc_html__( 'Business Idea Ready', 'stack' ),
				'price_feature_5'   => esc_html__( '2 Database', 'stack' ),
				'price_feature_6'   => esc_html__( 'Customer Support', 'stack' ),
			]
		],
		'fields'       => [
			'price_active'     => [
				'type'        => 'checkbox',
				'label'       => esc_html__( 'Is Active ?', 'stack' ),
				'description' => esc_html__( 'Active or deactivate price style', 'stack' ),
				'default'     => false,
			],
			'price_heading'     => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Heading', 'stack' ),
				'description' => esc_html__( 'Type Price Heading', 'stack' ),
				'default'     => esc_html__( 'BASIC', 'stack' ),
			],
			'price_amount'      => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Amount', 'stack' ),
				'description' => esc_html__( 'Type Price Amount With Symbol', 'stack' ),
				'default'     => esc_html__( '$12.90', 'stack' ),
			],
			'price_time'        => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Time', 'stack' ),
				'description' => esc_html__( 'Type Price Time (monthly/yearly)', 'stack' ),
				'default'     => esc_html__( '/ Month', 'stack' )
			],
			'price_button_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Title', 'stack' ),
				'description' => esc_html__( 'Button Title', 'stack' ),
				'default'     => esc_html__( 'Get It', 'stack' )
			],
			'price_button_url'  => [
				'type'        => 'url',
				'label'       => esc_html__( 'Button Url', 'stack' ),
				'description' => esc_html__( 'Button Url', 'stack' ),
				'default'     => 'https://www.facebook.com/'
			],
			'price_feature_1'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Feature 1', 'stack' ),
				'default'     => esc_html__( 'Business Analyzing', 'stack' )
			],
			'price_feature_2'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Feature 2', 'stack' ),
				'default'     => esc_html__( '24/7 Tech Suport', 'stack' )
			],
			'price_feature_3'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Feature 3', 'stack' ),
				'default'     => esc_html__( 'Operational Excellence', 'stack' )
			],
			'price_feature_4'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Feature 4', 'stack' ),
				'default'     => esc_html__( 'Business Idea Ready', 'stack' )
			],
			'price_feature_5'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Feature 5', 'stack' ),
				'default'     => esc_html__( '2 Database', 'stack' )
			],
			'price_feature_6'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Price Feature 6', 'stack' ),
				'default'     => esc_html__( 'Customer Support', 'stack' )
			],
		],
	]
);
new \Kirki\Field\Select(
	[
		'settings'    => 'price_column',
		'label'       => esc_html__( 'Select Column', 'stack' ),
		'section'     => 'price_section',
		'default'     => 'col-lg-4',
		'placeholder' => esc_html__( 'Choose an option', 'stack' ),
		'choices'     => [
			'col-lg-6' => esc_html__( 'Column 2', 'stack' ),
			'col-lg-4' => esc_html__( 'Column 3', 'stack' ),
			'col-lg-3' => esc_html__( 'Column 4', 'stack' )
		],
	]
);