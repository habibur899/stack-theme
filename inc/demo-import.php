<?php
function stack_import_files() {
	return [
		[
			'import_file_name'             => 'Stack Demo Import',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-content/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-content/widget.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-content/customizer.dat',
			'import_preview_image_url'     => 'https://i.postimg.cc/nV7dtZSg/preview.png',
			'preview_url'                  => 'https://github.com/habibur899/stack-theme',
		]
	];
}

add_filter( 'ocdi/import_files', 'stack_import_files' );