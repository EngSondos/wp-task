<?php 

/*
Plugin Name:owt-metabox
Description: description
Version: 1.0
*/
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
function wpl_owt_register_metabox()
{
	add_meta_box('owt-page-id','OWT PAGE','wpl_owt_pages_function','page','side');
}

add_action('add_meta_boxes','wpl_owt_register_metabox');


function wpl_owt_pages_function()
{
    ?>
    <a href="#">Click here</a>
    <?php
}


function news_metabox()
{
    add_meta_box('news-id','Colors','news_function','news','side');
}

add_action('add_meta_boxes_news','news_metabox');

function news_function(){

}