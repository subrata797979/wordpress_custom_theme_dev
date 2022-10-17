<?php

// define enqueue function for importing all the styles
function wp_bootstrap_enqueue() {
    wp_enqueue_style('bootstrap_css','//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap_js','//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_style('custom_css',get_stylesheet_uri());
}

// add the enqueue to enqueue scripts
add_action('wp_enqueue_scripts','wp_bootstrap_enqueue');

?>