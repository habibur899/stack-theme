<?php
new \Kirki\Section(
	'work_section',
	[
		'title'       => esc_html__( 'Work', 'stack' ),
		'description' => esc_html__( 'Work section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'work_show_hide',
		'label'       => esc_html__( 'Work Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'work_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'work_heading',
		'label'    => esc_html__( 'Work Title', 'stack' ),
		'section'  => 'work_section',
		'default'  => esc_html__( 'OUR WORKS', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'work_sub_heading',
		'label'    => esc_html__( 'Work Sub Title', 'stack' ),
		'section'  => 'work_section',
		'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'stack' ),
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'all_works',
		'label'        => esc_html__( 'Work List', 'stack' ),
		'section'      => 'work_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'field' => 'heading',
		],
		'button_label' => esc_html__( 'Add New Work ', 'stack' ),
		'default'      => [
			[
				'heading' => esc_html__( 'CREATIVE DESIGN', 'stack' ),
			]
		],
		'fields'       => [
			'heading'     => [
				'type'        => 'text',
				'label'       => esc_html__( 'Heading', 'stack' ),
				'description' => esc_html__( 'Type Work Heading', 'stack' ),
				'default'     => esc_html__( 'CREATIVE DESIGN', 'stack' ),
			],
			'small_image' => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'stack' ),
				'description' => esc_html__( 'Upload your small image', 'stack' ),
			],
			'big_image'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Big Image', 'stack' ),
				'description' => esc_html__( 'Upload your big small image', 'stack' ),
			],
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'work_column',
		'label'       => esc_html__( 'Select Column', 'stack' ),
		'section'     => 'work_section',
		'default'     => 'col-lg-4',
		'placeholder' => esc_html__( 'Choose an option', 'stack' ),
		'choices'     => [
			'col-lg-6' => esc_html__( 'Column 2', 'stack' ),
			'col-lg-4' => esc_html__( 'Column 3', 'stack' ),
			'col-lg-3' => esc_html__( 'Column 4', 'stack' )
		],
	]
);