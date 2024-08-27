<?php
function hello_elementor_child_enqueue_styles() {
    wp_enqueue_style( 'hello-elementor-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'hello-elementor-child-style', get_stylesheet_uri(), array( 'hello-elementor-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles' );
?>