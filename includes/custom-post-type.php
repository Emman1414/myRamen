<?php


function ramen_custom_post(){

// RAMENS
    $ramen_lable = array(
        'name'          => __('Ramens', 'textdomain'),
        'singular_name' => __('Ramen', 'textdomain'),
        'add_new'       => __('Add Ramen', 'textdomain'),
        'add_new_items' => __('Add New Ramen', 'textdomain'),
        'edit_item'     => __('Edit Ramen', 'textdomain'),
        'all_items'     => __('Ramens', 'textdomain'),
        

    );

    $ramen_args = array(
        'labels'            => $ramen_lable,
        'public'            => true,
        'capability_type'   =>'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title','editor','thumbnail','excerpt'),
    );
    register_post_type('ramen', $ramen_args);

}

  add_action('init', 'ramen_custom_post');