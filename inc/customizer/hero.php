<?php
new \Kirki\Section(
	'hero_section',
	[
		'title'       => esc_html__( 'Hero', 'stack' ),
		'description' => esc_html__( 'Hero section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings'  => 'banner_heading_text',
		'label'     => esc_html__( 'Banner Heading Text', 'stack' ),
		'section'   => 'hero_section',
		'default'   => esc_html__( 'WE DISCOVER, DESIGN & BUILD DIGITAL PRESENCE OF BUSINESSES', 'stack' ),
		'priority'  => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.head-title',
				'function' => 'html',
			]
		]
	]
);
new \Kirki\Field\Text(
	[
		'settings'  => 'hero_button_text',
		'label'     => esc_html__( 'Button Text', 'stack' ),
		'section'   => 'hero_section',
		'default'   => esc_html__( 'EXPLORE', 'stack' ),
		'priority'  => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.hero-button-text ',
				'function' => 'html',
			]
		]

	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'hero_button_url',
		'label'    => esc_html__( 'Link', 'stack' ),
		'section'  => 'hero_section',
		'default'  => '#services',
		'priority' => 10,
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'hero_background_image',
		'label'       => esc_html__( 'Background Image', 'stack' ),
		'description' => esc_html__( 'Banner Background Image', 'stack' ),
		'section'     => 'hero_section',
		'default'     => [
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#hero-area',
			],
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'hero_image_url',
		'label'       => esc_html__( 'Banner Image', 'stack' ),
		'description' => esc_html__( 'Banner Foreground Image', 'stack' ),
		'section'     => 'hero_section',
		'default'     => '',
	]
);