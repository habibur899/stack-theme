<?php
new \Kirki\Section(
	'skill_section',
	[
		'title'       => esc_html__( 'Skill', 'stack' ),
		'description' => esc_html__( 'Skill section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'skill_show_hide',
		'label'       => esc_html__( 'Skill Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'skill_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'skill_image',
		'label'       => esc_html__( 'Image', 'stack' ),
		'description' => esc_html__( 'Set your skill image', 'stack' ),
		'section'     => 'skill_section',
		'default'     => '',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'skill_heading',
		'label'    => esc_html__( 'Skill Heading', 'stack' ),
		'section'  => 'skill_section',
		'default'  => esc_html__( 'OUR SKILL', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'skill_description',
		'label'    => esc_html__( 'Description', 'stack' ),
		'section'  => 'skill_section',
		'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, aut aspernatur modi minima alias provident obcaecati! Minima odio porro nemo magnam dolore minus asperiores veniam dolorum est! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nesciunt possimus quaerat ipsam, corporis architecto aspernatur non aut! Dolorum consectetur placeat excepturi, perspiciatis sunt.', 'stack' ),
	]
);


new \Kirki\Field\Repeater(
	[
		'settings'     => 'skill_lists',
		'label'        => esc_html__( 'Skill List', 'stack' ),
		'section'      => 'skill_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'field' => 'skill_heading',
		],
		'button_label' => esc_html__( 'Add New Skill ', 'stack' ),
		'default'      => [
			[
				'skill_heading' => esc_html__( 'STRATEGY & ANALYSIS', 'stack' ),
				'number'   => esc_html__( '90', 'stack' ),
			]
		],
		'fields'       => [
			'skill_heading' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Heading', 'stack' ),
				'description' => esc_html__( 'Type Skill Heading', 'stack' ),
				'default'     => esc_html__( 'STRATEGY & ANALYSIS', 'stack' ),
			],
			'number'   => [
				'type'        => 'number',
				'label'       => esc_html__( 'Skill Amount', 'stack' ),
				'description' => esc_html__( 'Type Skill Amount', 'stack' ),
				'default'     => esc_html__( '90', 'stack' )
			],
		],
	]
);