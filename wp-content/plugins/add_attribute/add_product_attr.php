<?php 
/*
Plugin Name: add-attribute-product
Description: description
Version: 1.0
*/

function add_attribute()
{
    global $post;
    $vicode = get_post_meta($post->ID,'vicode',true);
    $args =array(
        'id'=>'custom_attr',
        'label'=>'vicode',
        'name'=>'vicode',
        'value'=>$vicode
    );
    woocommerce_wp_text_input($args);
}

add_action('woocommerce_product_options_general_product_data','add_attribute');


function add_vicode_to_meta($product_id){

  update_post_meta($product_id,'vicode',$_POST['vicode']);
}

add_action('save_post_product','add_vicode_to_meta');


function add_vicode()
{ global $post ; 
	$vicode = get_post_meta($post->ID,'vicode',true);
	if(!empty($vicode)){
	?>
	<p>code : <?= $vicode?></p>
	<?php
	}
}
add_action('woocommerce_before_add_to_cart_form','add_vicode');