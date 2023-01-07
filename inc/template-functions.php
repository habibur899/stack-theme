<?php
//Menu li class
function add_classes_on_li($classes, $item, $args) {
	$classes[] = 'nav-item';
	return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);