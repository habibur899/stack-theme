<?php
new \Kirki\Panel(
	'stack_options',
	[
		'priority'    => 160,
		'title'       => esc_html__( 'Stack Options', 'stack' ),
		'description' => esc_html__( 'Stack All Settings Here.', 'stack' ),
	]
);

require_once get_template_directory().'/inc/customizer/hero.php';
require_once get_template_directory().'/inc/customizer/about.php';
require_once get_template_directory().'/inc/customizer/services.php';
require_once get_template_directory().'/inc/customizer/video.php';
require_once get_template_directory().'/inc/customizer/team.php';
require_once get_template_directory().'/inc/customizer/counter.php';
require_once get_template_directory().'/inc/customizer/price.php';
require_once get_template_directory().'/inc/customizer/skill.php';
require_once get_template_directory().'/inc/customizer/work.php';
require_once get_template_directory().'/inc/customizer/testimonial.php';
require_once get_template_directory().'/inc/customizer/blog.php';
require_once get_template_directory().'/inc/customizer/client.php';
require_once get_template_directory().'/inc/customizer/breadcrumb.php';
require_once get_template_directory().'/inc/customizer/footer.php';
require_once get_template_directory().'/inc/customizer/copyright.php';