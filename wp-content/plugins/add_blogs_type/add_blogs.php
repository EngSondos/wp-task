<?php 

// Plugin Name: Add Blogs


function addBlogs()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        );
        $labels = array(
        'name' => _x('Blogs', 'plural'),
        'singular_name' => _x('Blogs', 'singular'),
        'menu_name' => _x('Blogs', 'admin menu'),
        'name_admin_bar' => _x('Blogs', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New blogs'),
        'new_item' => __('New blogs'),
        'edit_item' => __('Edit blogs'),
        'view_item' => __('View blogs'),
        'all_items' => __('All blogs'),
        'search_items' => __('Search blogs'),
        'not_found' => __('No blogs found.'),
        );
        $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Blogs'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-format-aside'
        );

        register_post_type('Blogs',$args);
}

add_action('init','addBlogs');

