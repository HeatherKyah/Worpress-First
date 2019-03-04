<?php

//this should be an unique name!! for evry site
function awesome_script_enqueue(){

    //functions to call css and js pages, it is best practice to use functions like theese.
    wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/awesome.css', array() , '1.0.0', 'all' );
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue' );


function awesome_theme_setup()
{
//this csn go without function but its better practice to use functions!
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

//call the function after initial load
add_action('init', 'awesome_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');


