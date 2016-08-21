<?php 

function main_rescources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'main_rescources');


function main_theme_setup() {
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'main_theme_setup');