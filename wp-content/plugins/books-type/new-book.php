<?php 
/*
Plugin Name:book-type
Description: description
Version: 1.0
*/

function add_custom_taxonomies() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('location', 'books', array(
      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,
      // This array of options controls the labels displayed in the WordPress Admin UI
      'labels' => array(
        'name' => _x( 'Authors', 'taxonomy general name' ),
        'singular_name' => _x( 'Authors', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Authors' ),
        'all_items' => __( 'All Authors' ),
        'parent_item' => __( 'Parent Author' ),
        'parent_item_colon' => __( 'Parent Author:' ),
        'edit_item' => __( 'Edit Author' ),
        'update_item' => __( 'Update Author' ),
        'add_new_item' => __( 'Add New Author' ),
        'new_item_name' => __( 'New Author Name' ),
        'menu_name' => __( 'Author' ),
      ),
      // Control the slugs used for this taxonomy
      'rewrite' => array(
        'slug' => 'authors', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
      ),
    ));
  }
  add_action( 'init', 'add_custom_taxonomies', 0 );

function  addTypeBook()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        );
        $labels = array(
        'name' => _x('books', 'plural'),
        'singular_name' => _x('books', 'singular'),
        'menu_name' => _x('books', 'admin menu'),
        'name_admin_bar' => _x('books', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New books'),
        'new_item' => __('New books'),
        'edit_item' => __('Edit books'),
        'view_item' => __('View books'),
        'all_items' => __('All books'),
        'search_items' => __('Search books'),
        'not_found' => __('No books found.'),
        );
        $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'books'),
        'has_archive' => true,
        'hierarchical' => false,
        'taxonomies'          => array( 'category' )
        );

        register_post_type('books',$args);
}

add_action('init','addTypeBook');

 function add_metabox ()
{
    add_meta_box('books-id','Page Numbers','add_content_to_meta');
}

add_action('add_meta_boxes_books','add_metabox');

function add_content_to_meta($book){
    wp_nonce_field(basename(__FILE__),"book_wp");
  $number_page =  get_post_meta($book->ID,'page_number',true);
?>

<input type="number" name="number_page" value="<?= $number_page ?>">
<?php
}

add_action('save_post_books','wpl_save_to_database',10,2);

function wpl_save_to_database($book_id,$book)
{
    if(!isset($_POST['book_wp']))
    {
        return $book_id;
    }

    if($book->post_type != 'books')
    {
        return;
    }
  //$number_page =0;

    if(isset($_POST['number_page']))
    {
        //var_dump($_POST['number_page']);
         $number_page = $_POST['number_page'];
    }
    update_post_meta($book_id,'page_number',$number_page);




}