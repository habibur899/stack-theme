<?php
new \Kirki\Section(
	'client_section',
	[
		'title'       => esc_html__( 'Client', 'stack' ),
		'description' => esc_html__( 'Client section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'client_show_hide',
		'label'       => esc_html__( 'Client Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'client_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'client_title',
		'label'    => esc_html__( 'Client Title', 'stack' ),
		'section'  => 'client_section',
		'default'  => esc_html__( 'NOTABLE CLIENTS', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'client_sub_title',
		'label'    => esc_html__( 'Client Sub Title', 'stack' ),
		'section'  => 'client_section',
		'default'  => esc_html__( 'Over the last 20 years, we have helped and guided organisations to achieve outstanding results.', 'stack' ),
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'all_client',
		'label'        => esc_html__( 'Client List', 'stack' ),
		'section'      => 'client_section',
		'priority'     => 10,
		'choices'      => [
			'limit' => 4
		],
		'button_label' => esc_html__( 'Add New Client ', 'stack' ),
		'fields'       => [
			'image' => [
				'type'  => 'image',
				'label' => esc_html__( 'Image', 'stack' ),
			]
		],
	]
);