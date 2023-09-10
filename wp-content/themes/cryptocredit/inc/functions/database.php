<?php 

// database create for registration field 


// Activation hook
function custom_theme_activation() {

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    // Define the custom table name
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_registration'; 

    // $table_name = $wpdb->prefix . 'custom_registration';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        first_name VARCHAR(100) NOT NULL, 
        last_name VARCHAR(100) NOT NULL,
        user_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        address TEXT,
        dob DATE,
        is_member_active INT(10),
        membership_planning VARCHAR(255) NOT NULL,
        added_products VARCHAR(255) NOT NULL,
        payment_card_value VARCHAR(100) NOT NULL,
        payment_card_name VARCHAR(100) NOT NULL,
        payment_card_no VARCHAR(100) NOT NULL,
        payment_card_expiry DATE,
        payment_card_cvc VARCHAR(100) NOT NULL,
        password VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta( $sql );
}

register_activation_hook( __FILE__, 'custom_theme_activation' );
add_action( 'after_switch_theme', 'custom_theme_activation' );






function create_crypto_payments_table() {

    // Define the custom table name
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table_name = $wpdb->prefix . 'crypto_payments';   
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        user_name VARCHAR(100) NOT NULL,
        membership_id INT, 
        payment_amount INT,   
        payment_from VARCHAR(100) NOT NULL,
        payment_system VARCHAR(100) NOT NULL, 
        payment_product_id VARCHAR(255) NOT NULL, 
        payment_date DATE,  
        next_payment_date DATE, 
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta( $sql );
}

register_activation_hook( __FILE__, 'create_crypto_payments_table' );
add_action( 'after_switch_theme', 'create_crypto_payments_table' );





?>