<?php
//Laddar in temats stylesheet
function hobby_styles(){ 
    wp_enqueue_style('style', get_stylesheet_uri());
}
//kopplar funktionen till wordpress för skripts och stilar
add_action('wp_enqueue_scripts', 'hobby_styles');
//Registrerar nav som används i headern
function hobby_menus(){
    register_nav_menus(array(
        'huvudmeny' => 'Huvudmeny'
    ));
}
add_action('after_setup_theme', 'hobby_menus');
//Aktiverar stöd för bilder på inlägg och sidor
add_theme_support('post-thumbnails');

add_theme_support('custom-logo');
//Registrerar en sidebar med widgets
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
//Registrerar en egen posttp för produkter
function hobby_post_types(){
    register_post_type('produkt', array(
        'labels' => array(
            'name' => 'Produkter',
            'add_new_item' => 'Lägg till ny produkt',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        //Gör posttypen tillgänglig i menyhanteraren
        'show_in_nav_menus' =>true,
    ));
}

add_action('init', 'hobby_post_types');