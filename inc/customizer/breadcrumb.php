<?php
new \Kirki\Section(
	'breadcrumb_section',
	[
		'title'       => esc_html__( 'Breadcrumb', 'stack' ),
		'description' => esc_html__( 'Breadcrumb section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'breadcrumb_show_hide',
		'label'       => esc_html__( 'Breadcrumb Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'breadcrumb_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'breadcrumb_section_background',
		'label'       => esc_html__( 'Background', 'stack' ),
		'description' => esc_html__( 'Set breadcrumb section background', 'stack' ),
		'section'     => 'breadcrumb_section',
		'default'     => [
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.page-header',
			],
		],
	]
);
