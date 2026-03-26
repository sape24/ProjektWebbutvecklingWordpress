<?php
function hobby_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'hobby_styles');

function hobby_menus(){
    register_nav_menus(array(
        'huvudmeny' => 'Huvudmeny'
    ));
}
add_action('after_setup_theme', 'hobby_menus');

add_theme_support('post-thumbnails');

add_theme_support('custom-logo');

function hobby_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'before_widget' => '<div class = "widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'hobby_widgets');