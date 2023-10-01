
<?php 
get_header();
/*
Template Name: Category
*/
?>
<div class = 'container'>
<h1> Categories </h1>
<?php


function getAllCategories()
{

     $args = array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,);

    $categories = get_categories($args);
    foreach ($categories as $category) {

        ?>
        <a href="<?=site_url()?>/products?cat=<?= $category->term_id?>"><?= $category->name ?></a>
   <?php }
}

add_action('my_action', 'getAllCategories');

do_action('my_action');

?> 
</div>

<?php
get_footer();