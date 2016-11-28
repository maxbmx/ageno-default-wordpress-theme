<?php
function enqueues() {

	/* Styles */
  wp_register_style('css', get_template_directory_uri() . '/build/style.min.css', false, null);
	wp_enqueue_style('css');

	/* Scripts */
	wp_register_script('js', get_template_directory_uri() . '/build/script.min.js', false, null, true);
	wp_enqueue_script('js');

}

add_action('wp_enqueue_scripts', 'enqueues', 100);
