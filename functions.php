<?php

function PortfolioThemeViola_theme_support(){
//Adds dynamic title tag support; aka. you can name each page separately. A single title is not hardcoded onto the page.
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','PortfolioThemeViola_theme_support');


function PortfolioThemeViola_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"

    );

    register_nav_menus($locations);

}

add_action('init','PortfolioThemeViola_menus');




function PortfolioThemeViola_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('PortfolioThemeViola-style', get_template_directory_uri() . "/style.css", array('PortfolioThemeViola-bootstrap'), $version, 'all');
    wp_enqueue_style('PortfolioThemeViola-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('PortfolioThemeViola-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'PortfolioThemeViola_register_styles');

function PortfolioThemeViola_register_scripts(){

    wp_enqueue_script('PortfolioThemeViola-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1',true);
    wp_enqueue_script('PortfolioThemeViola-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0',true);
    wp_enqueue_script('PortfolioThemeViola-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1',true);
    wp_enqueue_script('PortfolioThemeViola-main',get_template_directory_uri()."/assets/js/main.js", array(), '1.0',true);

}

add_action( 'wp_enqueue_scripts', 'PortfolioThemeViola_register_scripts');

function PortfolioThemeViola_widget_areas(){


    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
        
}

add_action( 'widgets_init', 'PortfolioThemeViola_widget_areas')


?>