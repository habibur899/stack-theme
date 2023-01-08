<?php
//Menu li class
function add_classes_on_li($classes, $item, $args) {
	$classes[] = 'nav-item';
	return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

//Comment Textarea move down
function stack_move_comment_field_to_bottom( $fields ) {
//	Unset cookie
	unset( $fields['cookies'] );
	// unset comment and reset down
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'stack_move_comment_field_to_bottom' );
