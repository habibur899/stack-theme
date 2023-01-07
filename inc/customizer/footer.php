<?php
new \Kirki\Section(
	'footer_section',
	[
		'title'       => esc_html__( 'Footer', 'stack' ),
		'description' => esc_html__( 'Footer section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'footer_show_hide',
		'label'       => esc_html__( 'Footer Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'footer_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_form_shortcode',
		'label'    => esc_html__( 'Contact Form Shortcode', 'stack' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( '[contact-form-7 id="199" title="Contact Form"]', 'stack' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'footer_top_title',
		'label'    => esc_html__( 'Contact Form Top Title', 'stack' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( 'We \'re a friendly bunch...', 'stack' ),
		'priority' => 10,
	]
);new \Kirki\Field\Text(
	[
		'settings' => 'footer_top_sub_title',
		'label'    => esc_html__( 'Contact Form Top Sub Title', 'stack' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( 'We create projects for companies and startups with a passion for quality', 'stack' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'footer_contact_address_title',
		'label'    => esc_html__( 'Contact Address Title', 'stack' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( 'CONTACT US', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'all_footer_address',
		'label'        => esc_html__( 'Address List', 'stack' ),
		'section'      => 'footer_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'field' => 'address',
		],
		'button_label' => esc_html__( 'Add New Address ', 'stack' ),
		'default'      => [
			[
				'icon'  => 'lni-map-marker',
				'address' => esc_html__( 'ADDRESS: 28 Green Tower, New York City, USA', 'stack' ),
			]
		],
		'fields'       => [
			'icon'  => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'stack' ),
				'description' => esc_html__( 'Type icon class', 'stack' ),
				'default'     => 'lni-map-marker',
			],
			'address' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'stack' ),
				'description' => esc_html__( 'Type Your Text', 'stack' ),
				'default'     => esc_html__( 'ADDRESS: 28 Green Tower, New York City, USA', 'stack' ),
			]
		],
	]
);
