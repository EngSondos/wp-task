
<?php 
get_header();
/*
Template Name: Products
*/
?>
<div class = 'container'>
<h1> Products </h1>
<?php


function getProductByCategoryId()
{
    // if (isset($_GET['cat'])) {
    //     $category_id = intval($_GET['cat']);

    //     $args = array(
    //         'post_type' => 'product',
    //          'post_status'=>'publish',
    //         'tax_query' => array(
    //             array(
    //                 'taxonomy' => 'product_cat',
    //                 'field' => 'term_id',
    //                 'terms' => $category_id,
    //             ),
    //         ),
    //     );

    //     $query = new WP_Query($args);

    //     if ($query->have_posts()) {
    //         while ($query->have_posts()) {
    //             $query->the_post();
    //             the_title(); // Display the title of the product
    //             the_content(); // Display the content of the product
    //             echo "<br> <hr>";

    //         }
    //     } else {
    //         echo 'No products found for the specified category.';
    //     }

    //     wp_reset_postdata();



        $args = array(
            'post_type'=>'product',
            'post_status'=>'publish',
            'meta_query'=>array(
                array(
                'key' => '_price',
                'compare' => 'BETWEEN',
                'value' =>array(2,18),
                'type'=>'DECIMAL',
                )

            ),
        );

        $query = new WP_Query($args);
?> 
<div class='container'>
<?php
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                the_title(); // Display the title of the product
                the_content(); // Display the content of the product
                $price = get_post_meta(get_the_ID(),'_price',true);
                echo "Price : $price $ <br> <hr>";

            }
        } else {
            echo 'No products found for the specified category.';
        }

        wp_reset_postdata();
        ?>
        </div>
        <?php
    }


add_action('my_action', 'getProductByCategoryId');

do_action('my_action');

?> 
</div>

<?php
get_footer();