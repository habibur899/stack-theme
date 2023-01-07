<?php
new \Kirki\Section(
	'video_section',
	[
		'title'       => esc_html__( 'Video', 'stack' ),
		'description' => esc_html__( 'Video section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'video_show_hide',
		'label'       => esc_html__( 'Video Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'video_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);

new \Kirki\Field\Background(
	[
		'settings'    => 'video_section_background',
		'label'       => esc_html__( 'Background', 'stack' ),
		'description' => esc_html__( 'Change video background', 'stack' ),
		'section'     => 'video_section',
		'default'     => [
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.video-promo',
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'video_heading',
		'label'    => esc_html__( 'Heading', 'stack' ),
		'section'  => 'video_section',
		'default'  => esc_html__( 'WATCH VIDEO', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'video_link',
		'label'    => esc_html__( 'Video Link', 'stack' ),
		'section'  => 'video_section',
		'default'  => 'https://www.youtube.com/watch?v=GFmyOSdVs5I',
		'priority' => 10,
	]
);