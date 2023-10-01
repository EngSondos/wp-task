<?php 
function add_file()
{
    wp_enqueue_script('my-script',get_theme_file_uri('/build/index.js'),null,'1.0',true);
    wp_enqueue_style('my-style-index',get_theme_file_uri("/build/style-index.css"));

    wp_enqueue_style('my-style',get_theme_file_uri("/build/index.css"));

    wp_enqueue_style('font-awsome',"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

    wp_enqueue_style('custom',"https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");

}
add_action('wp_enqueue_scripts','add_file');

function add_feature()
{
    register_nav_menu('my-menu','My Manue');

    add_theme_support('title-tag');
}
add_action('after_setup_theme','add_feature');