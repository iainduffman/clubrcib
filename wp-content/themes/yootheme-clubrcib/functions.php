<?php

// Add user id CSS class via http://codex.wordpress.org/Function_Reference/body_class
add_filter( 'body_class', 'my_class_names' );
function my_class_names( $classes ) {
	// add 'class-name' to the $classes array
	$classes[] = 'clubrcib';
	// return the $classes array
	return $classes;
}

?>