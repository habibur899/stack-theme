<?php
new \Kirki\Section(
	'about_section',
	[
		'title'       => esc_html__( 'About', 'stack' ),
		'description' => esc_html__( 'About section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'about_show_hide',
		'label'       => esc_html__( 'About Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'about_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_heading',
		'label'    => esc_html__( 'About Heading', 'stack' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'We are helping to grow your business.', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'about_description',
		'label'    => esc_html__( 'Description', 'stack' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.
', 'stack' ),
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'about_button_text',
		'label'    => esc_html__( 'Button Text', 'stack' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'More About Us', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'about_button_url',
		'label'    => esc_html__( 'Link', 'stack' ),
		'section'  => 'about_section',
		'default'  => 'https://github.com/habibur899',
		'priority' => 10,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'about_features',
		'label'        => esc_html__( 'Feature List', 'stack' ),
		'section'      => 'about_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'field' => 'feature_heading',
		],
		'button_label' => esc_html__( 'Add New Feature ', 'stack' ),
		'default'      => [
			[
				'icon_class'      => 'lni-microphone',
				'feature_heading' => esc_html__( 'WHAT WE DO', 'stack' ),
				'description'     => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stack' ),
			]
		],
		'fields'       => [
			'icon_class'      => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'stack' ),
				'description' => esc_html__( 'Type icon class', 'stack' ),
				'default'     => 'lni-microphone',
			],
			'feature_heading' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Heading', 'stack' ),
				'description' => esc_html__( 'Type Feature Heading', 'stack' ),
				'default'     => esc_html__( 'WHAT WE DO', 'stack' ),
			],
			'description'     => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description', 'stack' ),
				'description' => esc_html__( 'Type Feature Description', 'stack' ),
				'default'     => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stack' )
			],
		],
	]
);