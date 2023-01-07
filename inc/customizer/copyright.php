<?php
new \Kirki\Section(
	'copyright_section',
	[
		'title'       => esc_html__( 'Copyright', 'stack' ),
		'description' => esc_html__( 'Copyright section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'copyright_show_hide',
		'label'       => esc_html__( 'Copyright Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'copyright_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'footer_logo',
		'label'       => esc_html__( 'Footer Logo', 'stack' ),
		'description' => esc_html__( 'Select footer logo', 'stack' ),
		'section'     => 'copyright_section',
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'copyright_text',
		'label'    => esc_html__( 'Copyright Text', 'stack' ),
		'section'  => 'copyright_section',
		'default'  => esc_html__( 'Designed and Developed by Habibur', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'facebook_link',
		'label'    => esc_html__( 'Facebook Link', 'stack' ),
		'section'  => 'copyright_section',
		'default'  => 'https://www.facebook.com/',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'twitter_link',
		'label'    => esc_html__( 'Twitter Link', 'stack' ),
		'section'  => 'copyright_section',
		'default'  => 'https://twitter.com/',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'instagram_link',
		'label'    => esc_html__( 'Instagram Link', 'stack' ),
		'section'  => 'copyright_section',
		'default'  => 'https://www.instagram.com/',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'linkedin_link',
		'label'    => esc_html__( 'Linkedin Link', 'stack' ),
		'section'  => 'copyright_section',
		'default'  => 'https://www.linkedin.com/feed/',
		'priority' => 10,
	]
);
