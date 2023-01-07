<?php
new \Kirki\Section(
	'counter_section',
	[
		'title'       => esc_html__( 'Counter', 'stack' ),
		'description' => esc_html__( 'Counter section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'counter_show_hide',
		'label'       => esc_html__( 'Counter Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'counter_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'counter_section_background',
		'label'       => esc_html__( 'Background', 'stack' ),
		'description' => esc_html__( 'Set counter section background', 'stack' ),
		'section'     => 'counter_section',
		'default'     => [
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#counter',
			],
		],
	]
);
new \Kirki\Field\Repeater(
	[
		'settings'     => 'all_counter',
		'label'        => esc_html__( 'Counter List', 'stack' ),
		'section'      => 'counter_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'field' => 'sub_heading',
		],
		'button_label' => esc_html__( 'Add New Counter ', 'stack' ),
		'default'      => [
			[
				'icon_class'      => 'lni-users',
				'counter_heading' => esc_html__( '23576', 'stack' ),
				'sub_heading'     => esc_html__( 'Users', 'stack' ),
			]
		],
		'fields'       => [
			'icon_class'      => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'stack' ),
				'description' => esc_html__( 'Type icon class', 'stack' ),
				'default'     => 'lni-users',
			],
			'counter_heading' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Heading', 'stack' ),
				'description' => esc_html__( 'Type Counter Heading', 'stack' ),
				'default'     => esc_html__( '23576', 'stack' ),
			],
			'sub_heading'     => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Heading', 'stack' ),
				'description' => esc_html__( 'Type Counter Sub Heading', 'stack' ),
				'default'     => esc_html__( 'Users', 'stack' )
			],
		],
	]
);
new \Kirki\Field\Select(
	[
		'settings'    => 'counter_column',
		'label'       => esc_html__( 'Select Column', 'stack' ),
		'section'     => 'counter_section',
		'default'     => 'col-lg-3',
		'placeholder' => esc_html__( 'Choose an option', 'stack' ),
		'choices'     => [
			'col-lg-6' => esc_html__( 'Column 2', 'stack' ),
			'col-lg-4' => esc_html__( 'Column 3', 'stack' ),
			'col-lg-3' => esc_html__( 'Column 4', 'stack' )
		],
	]
);