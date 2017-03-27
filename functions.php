<?php
	
function tb_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato|Lora' );
}
add_action( 'wp_enqueue_scripts', 'tb_enqueue_styles' );