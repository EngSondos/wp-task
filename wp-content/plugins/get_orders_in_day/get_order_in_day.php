<?php 

/*
Plugin Name: get-order-count-in-day
Description: description
Version: 1.0
*/



function get_order_count_in_day()
{
    include_once(WC()->plugin_path().'/includes/admin/reports/class-wc-admin-report.php');

    $wc_report = new WC_Admin_Report();

    // $sold_products = (array) $wc_report->get_order_report_data( array(
    //     'data' => array(
    //         'ID' => array(
    //             'type'     => 'post_data',
    //             'function' => 'COUNT',
    //             'name'     => 'count',
    //            // 'distinct' => true,
    //         ),
    //         'post_date' => array(
    //             'type'     => 'post_data',
    //             'function' => 'DATE',
    //             'name'     => 'post_date',
    //         ),
    //         '_order_total'=>array(
    //             'type'=>'meta',
    //             'function'=>'SUM',
    //             'name'=>'Total'
    //         ),
    
    //     ),
    //     'group_by'            => 'DATE(post_date)',
    //     'order_by'            => 'post_date ASC',
    //     'query_type'          => 'get_results',
    //     // 'filter_range'        => true,
    //     //'order_types'         => wc_get_order_types( 'order-count' ),
    //     'order_status'        => array( 'completed', 'processing', 'on-hold', 'refunded' ),
    // ) );


    // print_r($sold_products);
// die;



  //  print_r($sold_products);

//get  count orders in the day and total amount

//   $sold_products = (array) $wc_report->get_order_report_data( array(
//     'data' => array(
//         'ID' => array(
//             'type'     => 'post_data',
//             'function' => 'COUNT',
//             'name'     => 'count',
//            // 'distinct' => true,
//         ),
//         'post_date' => array(
//             'type'     => 'post_data',
//             'function' => 'DATE',
//             'name'     => 'post_date',
//         ),
//         '_order_total'=>array(
//             'type'=>'meta',
//             'function'=>'SUM',
//             'name'=>'Total'
//         ),

//     ),
//     'group_by'            => 'DATE(post_date)',
//     'order_by'            => 'post_date ASC',
//     'query_type'          => 'get_results',
//     // 'filter_range'        => true,
//     //'order_types'         => wc_get_order_types( 'order-count' ),
//     'order_status'        => array( 'completed', 'processing', 'on-hold', 'refunded' ),
// ) );


//  print_r($sold_products);


//   die ; 


global $wpdb;

$sold_products = (array) $wc_report->get_order_report_data(array(
    'data' => array(
        't.name' => array(
            'type'     => 'order_item_meta',
            'function' => '',
            'name'     => 'Category',
        ),
        'order_item_id' => array(
            'type'     => 'order_item_meta',
            'function' => 'COUNT',
            'name'     => 'Quantity',
        ),
    ),
    'join'         => array(
        array(
            'table'         => "{$wpdb->prefix}term_relationships",
            'alias'         => 'tr',
            'on'            => "tr.object_id = p.ID",
            'join_type'     => 'INNER',
        ),
        array(
            'table'         => "{$wpdb->prefix}term_taxonomy",
            'alias'         => 'tt',
            'on'            => 'tt.term_taxonomy_id = tr.term_taxonomy_id',
            'join_type'     => 'INNER',
        ),
        array(
            'table'         => "{$wpdb->prefix}terms",
            'alias'         => 't',
            'on'            => 't.term_id = tt.term_id',
            'join_type'     => 'INNER',
        ),
    ),
    'where'        => array(
        array(
            'key'      => 'tt.taxonomy',
            'value'    => 'product_cat',
            'operator' => '=',
        ),
    ),
    'group_by'     => 't.term_id',
    'query_type'   => 'get_results',
    'order_status' => array('completed'),
));

// print_r($sold_products);

//  print_r($sold_products);

//  foreach($sold_products as $key => $product)
//  {
//     if(has_term($product->Product_id))
//      $product->category = get_the_terms($product->Product_id , 'product_cat')[0]->name;

//      if($product->category == )
//  }

// print_r($sold_products);

//   die ; 
}
// add_action('wp','get_order_count_in_day');

