<?php
/**
 * Template : functions
 *
 * @package WordPress
 * @subpackage Custom_Theme
 * @since Custom Theme 1.0
 */
?>

<?php

// define enqueue function for importing all the styles
function wp_bootstrap_enqueue() {
    wp_enqueue_style('bootstrap_css','//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap_js','//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_style('custom_css',get_stylesheet_uri());
}

// add the enqueue to enqueue scripts
add_action('wp_enqueue_scripts','wp_bootstrap_enqueue');

// custom_setup
function custom_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'customtheme'),
        'secondary' => __('Secondary Menu', 'customtheme')
    ));
    // add theme support for document title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme','custom_setup');

// adding widgets to widgets_init
function custom_widgets() {
    register_sidebar(array(
        'name' => __('Sidebar','customtheme'),
        'id' => 'sidebar-1',
        'description' => 'Add widgets to sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init','custom_widgets');

function custom_shortcode($attr, $content=null) {
    return '<div class="col-sm-4">'.$content.'</div>';
}
add_shortcode('one_third','custom_shortcode');

remove_filter('the_content','wpautop');

?>