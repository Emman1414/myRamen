<?php

function myMichi_assets(){
    wp_enqueue_style('myMichi', get_template_directory_uri() . '/css/main.css', microtime());
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/toggleMenu.js', array(), microtime(), true);
    wp_enqueue_script('my_tae', get_template_directory_uri() . '/js/foodTabs.js', array(), microtime(), true);

}

add_action('wp_enqueue_scripts', 'myMichi_assets');