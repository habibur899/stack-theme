<?php
new \Kirki\Section(
	'testimonial_section',
	[
		'title'       => esc_html__( 'Testimonial', 'stack' ),
		'description' => esc_html__( 'Testimonial section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'testimonial_show_hide',
		'label'       => esc_html__( 'Testimonial Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'testimonial_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'testimonial_background',
		'label'       => esc_html__( 'Background', 'stack' ),
		'description' => esc_html__( 'Testimonial background', 'stack' ),
		'section'     => 'testimonial_section',
		'default'     => [
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.testimonial',
			],
		],
	]
);
new \Kirki\Field\Repeater(
	[
		'settings'     => 'all_testimonial',
		'label'        => esc_html__( 'Testimonial List', 'stack' ),
		'section'      => 'testimonial_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'field' => 'name',
		],
		'button_label' => esc_html__( 'Add New Testimonial ', 'stack' ),
		'default'      => [
			[
				'name'        => esc_html__( 'Grenchen Pearce', 'stack' ),
				'designation' => esc_html__( 'Boston Brothers co.', 'stack' ),
				'content'     => esc_html__( 'Holisticly empower leveraged ROI whereas effective web-readiness.Completely enable emerging meta-services with cross-platform web services.Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness.', 'stack' ),
			]
		],
		'fields'       => [
			'image'       => [
				'type'  => 'image',
				'label' => esc_html__( 'Image', 'stack' ),
			],
			'name'        => [
				'type'        => 'text',
				'label'       => esc_html__( 'Name', 'stack' ),
				'description' => esc_html__( 'Type Testimonial Name', 'stack' ),
				'default'     => esc_html__( 'Grenchen Pearce', 'stack' ),
			],
			'designation' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Designation', 'stack' ),
				'description' => esc_html__( 'Type Testimonial Designation', 'stack' ),
				'default'     => esc_html__( 'Boston Brothers co.', 'stack' )
			],
			'content'     => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Tesrimonial Content', 'stack' ),
				'description' => esc_html__( 'Type Testimonial Content', 'stack' ),
				'default'     => esc_html__( 'Holisticly empower leveraged ROI whereas effective web-readiness.Completely enable emerging meta-services with cross-platform web services.Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness.', 'stack' )
			],
		],
	]
);