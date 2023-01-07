<?php
new \Kirki\Section(
	'team_section',
	[
		'title'       => esc_html__( 'Team', 'stack' ),
		'description' => esc_html__( 'Team section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'team_show_hide',
		'label'       => esc_html__( 'Team Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'team_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'team_heading',
		'label'    => esc_html__( 'Team Title', 'stack' ),
		'section'  => 'team_section',
		'default'  => esc_html__( 'MEET OUR TEAM', 'stack' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'team_subheading',
		'label'    => esc_html__( 'Team Subtitle', 'stack' ),
		'section'  => 'team_section',
		'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'stack' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings'     => 'all_team',
		'label'        => esc_html__( 'Team List', 'stack' ),
		'section'      => 'team_section',
		'priority'     => 10,
		'choices'      => [
			'limit' => 4
		],
		'row_label'    => [
			'type'  => 'field',
			'field' => 'name',
		],
		'button_label' => esc_html__( 'Add New Team ', 'stack' ),
		'default'      => [
			[
				'name'          => esc_html__( 'DAVID SMITH', 'stack' ),
				'designation'   => esc_html__( 'Chief Operating Officer', 'stack' ),
				'facebook_url'  => 'https://www.facebook.com/',
				'twitter_url'   => 'https://twitter.com/',
				'instagram_url' => 'https://www.instagram.com/',
			]
		],
		'fields'       => [
			'image'         => [
				'type'  => 'image',
				'label' => esc_html__( 'Image', 'stack' ),
			],
			'name'          => [
				'type'        => 'text',
				'label'       => esc_html__( 'Name', 'stack' ),
				'description' => esc_html__( 'Type Team Name', 'stack' ),
				'default'     => esc_html__( 'DAVID SMITH', 'stack' ),
			],
			'designation'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Designation', 'stack' ),
				'description' => esc_html__( 'Type Team Designation', 'stack' ),
				'default'     => esc_html__( 'Chief Operating Officer', 'stack' )
			],
			'facebook_url'  => [
				'type'        => 'url',
				'label'       => esc_html__( 'Facebook Link', 'stack' ),
				'description' => esc_html__( 'Give your facebook link here', 'stack' ),
				'default'     => 'https://www.facebook.com/',
			],
			'twitter_url'   => [
				'type'        => 'url',
				'label'       => esc_html__( 'Twitter Link', 'stack' ),
				'description' => esc_html__( 'Give your twitter link here', 'stack' ),
				'default'     => 'https://twitter.com/',
			],
			'instagram_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Instagram Link', 'stack' ),
				'description' => esc_html__( 'Give your instagram link here', 'stack' ),
				'default'     => 'https://www.instagram.com/',
			],
		],
	]
);
new \Kirki\Field\Select(
	[
		'settings'    => 'team_column',
		'label'       => esc_html__( 'Select Column', 'stack' ),
		'section'     => 'team_section',
		'default'     => 'col-lg-3',
		'placeholder' => esc_html__( 'Choose an option', 'stack' ),
		'choices'     => [
			'col-lg-6' => esc_html__( 'Column 2', 'stack' ),
			'col-lg-4' => esc_html__( 'Column 3', 'stack' ),
			'col-lg-3' => esc_html__( 'Column 4', 'stack' )
		],
	]
);