<?php
function kaushal_css()
{
	wp_register_style('kaushal_css', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('kaushal_css');
}
add_action('wp_enqueue_scripts', 'kaushal_css');
