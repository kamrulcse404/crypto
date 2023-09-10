<?php 


// Custom post types 


// faq custom post type 

function custom_register_faqs_post_type() {
    $labels = array(
        'name'               => _x( 'FAQs', 'post type general name', 'your-theme-textdomain' ),
        'singular_name'      => _x( 'FAQ', 'post type singular name', 'your-theme-textdomain' ),
        'menu_name'          => _x( 'FAQs', 'admin menu', 'your-theme-textdomain' ),
        'name_admin_bar'     => _x( 'FAQ', 'add new on admin bar', 'your-theme-textdomain' ),
        'add_new'            => _x( 'Add New', 'FAQ', 'your-theme-textdomain' ),
        'add_new_item'       => __( 'Add New FAQ', 'your-theme-textdomain' ),
        'new_item'           => __( 'New FAQ', 'your-theme-textdomain' ),
        'edit_item'          => __( 'Edit FAQ', 'your-theme-textdomain' ),
        'view_item'          => __( 'View FAQ', 'your-theme-textdomain' ),
        'all_items'          => __( 'All FAQs', 'your-theme-textdomain' ),
        'search_items'       => __( 'Search FAQs', 'your-theme-textdomain' ),
        'parent_item_colon'  => __( 'Parent FAQs:', 'your-theme-textdomain' ),
        'not_found'          => __( 'No FAQs found.', 'your-theme-textdomain' ),
        'not_found_in_trash' => __( 'No FAQs found in Trash.', 'your-theme-textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'faqs' ), // Change the slug as needed
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'faqs', $args );
}
add_action( 'init', 'custom_register_faqs_post_type' );



// faq category taxonomy 
function custom_register_faq_category_taxonomy() {
    $labels = array(
        'name'              => _x( 'FAQ Categories', 'taxonomy general name', 'your-theme-textdomain' ),
        'singular_name'     => _x( 'FAQ Category', 'taxonomy singular name', 'your-theme-textdomain' ),
        'search_items'      => __( 'Search FAQ Categories', 'your-theme-textdomain' ),
        'all_items'         => __( 'All FAQ Categories', 'your-theme-textdomain' ),
        'parent_item'       => __( 'Parent FAQ Category', 'your-theme-textdomain' ),
        'parent_item_colon' => __( 'Parent FAQ Category:', 'your-theme-textdomain' ),
        'edit_item'         => __( 'Edit FAQ Category', 'your-theme-textdomain' ),
        'update_item'       => __( 'Update FAQ Category', 'your-theme-textdomain' ),
        'add_new_item'      => __( 'Add New FAQ Category', 'your-theme-textdomain' ),
        'new_item_name'     => __( 'New FAQ Category Name', 'your-theme-textdomain' ),
        'menu_name'         => __( 'FAQ Categories', 'your-theme-textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'faq-category' ), // Change the slug as needed
    );

    register_taxonomy( 'faq_category', array( 'faqs' ), $args );
}
add_action( 'init', 'custom_register_faq_category_taxonomy' );





// Register Custom Post Type for member ship
function custom_membership_post_type() {

    $labels = array(
        'name'                  => _x( 'Memberships', 'Post Type General Name', 'cryptocredit' ),
        'singular_name'         => _x( 'Membership', 'Post Type Singular Name', 'cryptocredit' ),
        'menu_name'             => __( 'Memberships', 'cryptocredit' ),
        'name_admin_bar'        => __( 'Membership', 'cryptocredit' ),
        'archives'              => __( 'Membership Archives', 'cryptocredit' ),
        'attributes'            => __( 'Membership Attributes', 'cryptocredit' ),
        'parent_item_colon'     => __( 'Parent Membership:', 'cryptocredit' ),
        'all_items'             => __( 'All Memberships', 'cryptocredit' ),
        'add_new_item'          => __( 'Add New Membership', 'cryptocredit' ),
        'add_new'               => __( 'Add New', 'cryptocredit' ),
        'new_item'              => __( 'New Membership', 'cryptocredit' ),
        'edit_item'             => __( 'Edit Membership', 'cryptocredit' ),
        'update_item'           => __( 'Update Membership', 'cryptocredit' ),
        'view_item'             => __( 'View Membership', 'cryptocredit' ),
        'view_items'            => __( 'View Memberships', 'cryptocredit' ),
        'search_items'          => __( 'Search Membership', 'cryptocredit' ),
        'not_found'             => __( 'Not found', 'cryptocredit' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'cryptocredit' ),
        'featured_image'        => __( 'Featured Image', 'cryptocredit' ),
        'set_featured_image'    => __( 'Set featured image', 'cryptocredit' ),
        'remove_featured_image' => __( 'Remove featured image', 'cryptocredit' ),
        'use_featured_image'    => __( 'Use as featured image', 'cryptocredit' ),
        'insert_into_item'      => __( 'Insert into membership', 'cryptocredit' ),
        'uploaded_to_this_item' => __( 'Uploaded to this membership', 'cryptocredit' ),
        'items_list'            => __( 'Memberships list', 'cryptocredit' ),
        'items_list_navigation' => __( 'Memberships list navigation', 'cryptocredit' ),
        'filter_items_list'     => __( 'Filter memberships list', 'cryptocredit' ),
    );
    $args = array(
        'label'                 => __( 'Membership', 'cryptocredit' ),
        'description'           => __( 'Custom post type for memberships', 'cryptocredit' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( '', '' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-id', // You can change the icon
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'membership', $args );

}
add_action( 'init', 'custom_membership_post_type', 0 );



// Register Custom Post Type
function custom_products_post_type() {
    $labels = array(
        'name'                  => _x( 'Products', 'Post Type General Name', 'cryptocredit' ),
        'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'cryptocredit' ),
        'menu_name'             => __( 'Products', 'cryptocredit' ),
        'name_admin_bar'        => __( 'Product', 'cryptocredit' ),
        'archives'              => __( 'Product Archives', 'cryptocredit' ),
        'attributes'            => __( 'Product Attributes', 'cryptocredit' ),
        'parent_item_colon'     => __( 'Parent Product:', 'cryptocredit' ),
        'all_items'             => __( 'All Products', 'cryptocredit' ),
        'add_new_item'          => __( 'Add New Product', 'cryptocredit' ),
        'add_new'               => __( 'Add New', 'cryptocredit' ),
        'new_item'              => __( 'New Product', 'cryptocredit' ),
        'edit_item'             => __( 'Edit Product', 'cryptocredit' ),
        'update_item'           => __( 'Update Product', 'cryptocredit' ),
        'view_item'             => __( 'View Product', 'cryptocredit' ),
        'view_items'            => __( 'View Products', 'cryptocredit' ),
        'search_items'          => __( 'Search Product', 'cryptocredit' ),
        'not_found'             => __( 'Not found', 'cryptocredit' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'cryptocredit' ),
        'featured_image'        => __( 'Featured Image', 'cryptocredit' ),
        'set_featured_image'    => __( 'Set featured image', 'cryptocredit' ),
        'remove_featured_image' => __( 'Remove featured image', 'cryptocredit' ),
        'use_featured_image'    => __( 'Use as featured image', 'cryptocredit' ),
        'insert_into_item'      => __( 'Insert into product', 'cryptocredit' ),
        'uploaded_to_this_item' => __( 'Uploaded to this product', 'cryptocredit' ),
        'items_list'            => __( 'Products list', 'cryptocredit' ),
        'items_list_navigation' => __( 'Products list navigation', 'cryptocredit' ),
        'filter_items_list'     => __( 'Filter products list', 'cryptocredit' ),
    );
    $args = array(
        'label'                 => __( 'Product', 'cryptocredit' ),
        'description'           => __( 'Products for your website', 'cryptocredit' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor',  ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'products', $args );
}
add_action( 'init', 'custom_products_post_type', 0 );


