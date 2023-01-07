<?php
new \Kirki\Section(
	'blog_section',
	[
		'title'       => esc_html__( 'Blog', 'stack' ),
		'description' => esc_html__( 'Blog section setting', 'stack' ),
		'panel'       => 'stack_options',
		'priority'    => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'blog_show_hide',
		'label'       => esc_html__( 'Blog Show/ Hide', 'stack' ),
		'description' => esc_html__( 'Simple on/off section', 'stack' ),
		'section'     => 'blog_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'blog_heading',
		'label'    => esc_html__( 'Blog Title', 'stack' ),
		'section'  => 'blog_section',
		'default'  => esc_html__( 'LATEST BLOG', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'blog_sub_heading',
		'label'    => esc_html__( 'Blog Sub Title', 'stack' ),
		'section'  => 'blog_section',
		'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'stack' ),
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'read_more',
		'label'    => esc_html__( 'Button Label', 'stack' ),
		'section'  => 'blog_section',
		'default'  => esc_html__( 'Read More', 'stack' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'blog_column',
		'label'       => esc_html__( 'Select Column', 'stack' ),
		'section'     => 'blog_section',
		'default'     => 'col-lg-4',
		'placeholder' => esc_html__( 'Choose an option', 'stack' ),
		'choices'     => [
			'col-lg-6' => esc_html__( 'Column 2', 'stack' ),
			'col-lg-4' => esc_html__( 'Column 3', 'stack' ),
			'col-lg-3' => esc_html__( 'Column 4', 'stack' )
		],
	]
);