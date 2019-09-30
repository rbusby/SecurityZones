<?php

function resources_cpt() {

    $labels = array(
        'name'               => _x('Resources', 'post type general name'),
        'singular_name'      => _x('Resource', 'post type singular name'),
        'add_new'            => _x('Add New', 'Resource'),
        'add_new_item'       => __('Add New Resource'),
        'edit_item'          => __('Edit Resource'),
        'new_item'           => __('New Resource'),
        'view_item'          => __('View Resource'),
        'search_items'       => __('Search Resources'),
        'not_found'          => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => true,
        'has_archive'        => false,
        'menu_icon'          => 'dashicons-admin-customizer',
        'rewrite'            => true,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail')
      );

    register_post_type( 'resources' , $args );
}
add_action('init', 'resources_cpt');