<?php
new \Kirki\Section(
	'services_section',
	[
		'title'       => esc_html__( 'Services', 'stack' ),
		'description' => esc_html__( 'Services section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'service_show_hide',
		'label'       => esc_html__( 'Service Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'services_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_heading',
		'label'    => esc_html__( 'Service Title', 'stack' ),
		'section'  => 'services_section',
		'default'  => esc_html__( 'OUR SERVICES', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'service_sub_heading',
		'label'    => esc_html__( 'Service Sub Title', 'stack' ),
		'section'  => 'services_section',
		'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'stack' ),
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'all_service',
		'label'        => esc_html__( 'Service List', 'stack' ),
		'section'      => 'services_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'field' => 'ser_heading',
		],
		'button_label' => esc_html__( 'Add New Service ', 'stack' ),
		'default'      => [
			[
				'icon_class'  => 'lni-pencil',
				'ser_heading' => esc_html__( 'WHAT WE DO', 'stack' ),
				'description' => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stack' ),
			]
		],
		'fields'       => [
			'icon_class'  => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'stack' ),
				'description' => esc_html__( 'Type icon class', 'stack' ),
				'default'     => 'lni-pencil',
			],
			'ser_heading' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Heading', 'stack' ),
				'description' => esc_html__( 'Type Service Heading', 'stack' ),
				'default'     => esc_html__( 'CONTENT WRITING', 'stack' ),
			],
			'description' => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description', 'stack' ),
				'description' => esc_html__( 'Type Service Description', 'stack' ),
				'default'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur', 'stack' )
			],
		],
	]
);

new \Kirki\Field\Radio_Buttonset(
	[
		'settings' => 'service_align',
		'label'    => esc_html__( 'Align', 'stack' ),
		'section'  => 'services_section',
		'default'  => 'center',
		'priority' => 10,
		'choices'  => [
			'text-left'   => esc_html__( 'Left', 'stack' ),
			'text-center' => esc_html__( 'Center', 'stack' ),
			'text-right'  => esc_html__( 'Right', 'stack' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'service_column',
		'label'       => esc_html__( 'Select Column', 'stack' ),
		'section'     => 'services_section',
		'default'     => 'col-lg-4',
		'placeholder' => esc_html__( 'Choose an option', 'stack' ),
		'choices'     => [
			'col-lg-6' => esc_html__( 'Column 2', 'stack' ),
			'col-lg-4' => esc_html__( 'Column 3', 'stack' ),
			'col-lg-3' => esc_html__( 'Column 4', 'stack' )
		],
	]
);