<?php
function kava_child_enqueue_styles() {
    // Enqueue the parent theme stylesheet
    wp_enqueue_style('kava-parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue the child theme stylesheet
    wp_enqueue_style('kava-child-style', get_stylesheet_uri(), array('kava-parent-style'));
}
add_action('wp_enqueue_scripts', 'kava_child_enqueue_styles');