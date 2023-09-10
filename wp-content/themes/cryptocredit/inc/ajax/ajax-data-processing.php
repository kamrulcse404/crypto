<?php

add_action('wp_ajax_register_new_client', 'register_new_client');
add_action('wp_ajax_nopriv_register_new_client', 'register_new_client');

function register_new_client()
{

    $formdata = [];
    wp_parse_str($_POST['register_new_client'], $formdata);

    global $wpdb;

    // Sanitize and validate data
    $first_name = sanitize_text_field($formdata['first_name']);
    $last_name = sanitize_text_field($formdata['last_name']);
    $user_name = sanitize_text_field($formdata['user_name']);
    $email = sanitize_email($formdata['email']);
    $phone = sanitize_text_field($formdata['phone']);
    $address = sanitize_text_field($formdata['address']);
    $password = sanitize_text_field($formdata['password']);
    $dob = sanitize_text_field($formdata['date']);

    //    echo '<pre>' ; 
    //    print_r($formdata) ;

    $username = $user_name;
    $table_name = $wpdb->prefix . 'custom_registration'; // Replace 'custom_registration' with your actual table name
    $email_exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE email = %s", $email));
    $username_exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE user_name = %s", $username));

    // print_r($username_exists) ;

    if ($email_exists > 0) {
        $data = array(
            'success' => false,
            'type' => 'email_error',
            'message' => 'This email exists'
        );
        wp_send_json($data);
    } elseif ($username_exists > 0) {
        $data = array(
            'success' => false,
            'type' => 'username_error',
            'message' => 'This Username exists'
        );
        wp_send_json($data);
    } else {

        // User information
        $user_data = array(
            'user_login' => $username,
            'user_email' => $email,
            'user_pass' => $password,
            'role' => 'subscriber', // Set the role to 'subscriber'
        );

        // Insert the new user
        $user_id = wp_insert_user($user_data);

        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'user_name' => $user_name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'password' => $password,
            'dob' => $dob,
        );

        // Insert data into the database
        $table_name = $wpdb->prefix . 'custom_registration'; // Use proper table prefix
        $wpdb->insert($table_name, $data);

        // Send a response
        wp_send_json_success('Registration Complete');
        wp_die();
    }

    wp_die();
}


// adding stripe  function  

add_action('wp_ajax_add_stripe', 'add_stripe');
add_action('wp_ajax_nopriv_add_stripe', 'add_stripe');

function add_stripe()
{


    $formdata = [];
    wp_parse_str($_POST['add_stripe'], $formdata);

    $payment_card_name = $formdata['payment_card_name'];
    $payment_card_value = $formdata['payment_card_value'];
    $payment_card_no = $formdata['payment_card_no'];
    $payment_card_expiry = $formdata['payment_card_expiry'];
    $payment_card_cvc = $formdata['payment_card_cvc'];


    $parts = explode("-", $payment_card_expiry);
    $payment_card_expiry_month = $parts[0];
    if ($payment_card_expiry_month < 1 || $payment_card_expiry_month > 12) {
        wp_send_json('Invalid Format');
        wp_die();
    }
    $payment_card_expiry_year = $parts[1]; // Example input 

    $converted_date = $payment_card_expiry_year . "-" . $payment_card_expiry_month . "-" . "01";

    $date = strtotime($converted_date);
    $payment_card_expiry = date("y-m-d", $date);


    $current_user = wp_get_current_user()->user_login;

    global $wpdb;
    $table_name_reg = $wpdb->prefix . 'custom_registration';
    $data = array(
        'payment_card_name' => $payment_card_name,
        'payment_card_value' => $payment_card_value,
        'payment_card_no' => $payment_card_no,
        'payment_card_expiry' => $payment_card_expiry,
        'payment_card_cvc' => $payment_card_cvc,
    );
    // print_r($data);

    $wpdb->update($table_name_reg, $data, array('user_name' => $current_user));


    wp_send_json('Card Successfully Added');
    wp_die();
}






// login function  


add_action('wp_ajax_get_login', 'get_login');
add_action('wp_ajax_nopriv_get_login', 'get_login');

function get_login()
{

    $formdata = [];
    wp_parse_str($_POST['get_login'], $formdata);


    // User login using email and password
    $user_email = $formdata['email'];
    $user_password = $formdata['password'];

    // Check if user exists with the provided email
    $user = get_user_by('email', $user_email);


    // print_r($user) ;
    if ($user) {
        // Attempt to log in the user using their email and password
        $login_result = wp_signon(array(
            'user_login'    => $user->user_login,
            'user_password' => $user_password,
            'remember'      => true // Set to true to remember the user's login
        ));

        if (is_wp_error($login_result)) {

            // print_r('hello') ;
            // wp_send_json_error($login_result->get_error_message());
            wp_send_json_error('Password is not correct.');
        } else {
            // print_r('no issue s') ;
            wp_send_json_success('Login Sucessfull');
        }
    } else {
        wp_send_json_error('User not found with the provided email.');
        // echo "User not found with the provided email.";
    }


    wp_die();
}




// make payment via stripe  
add_action('wp_ajax_make_payment', 'make_payment');
add_action('wp_ajax_nopriv_make_payment', 'make_payment');

function make_payment()
{
    $formdata = [];
    wp_parse_str($_POST['make_payment'], $formdata);


    global $wpdb;

    // Sanitize and validate data
    $user_name = sanitize_text_field($formdata['user_name']);
    $membership_id = $formdata['membership_id'];
    $payment_amount = $formdata['payment_amount'];
    $payment_from = $formdata['payment_from'];
    $payment_product_id = $formdata['payment_product_id'];


    $payment_type =  get_post_meta($payment_product_id, 'membership-payment-type', true);

    $current_user = wp_get_current_user()->user_login;
    global $wpdb;
    $db_query = $wpdb->prepare(
        "SELECT * FROM {$wpdb->prefix}custom_registration WHERE user_name = %s",
        $current_user
    );
    $results = $wpdb->get_results($db_query);

    global $cryptocredit;
    $secret_api_key = $cryptocredit['strip-api-secret-key'];


    // $stripe_payment_amount = $payment_amount * 100;
    // $exp_date = $results[0]->payment_card_expiry;
    // $timestamp = strtotime($exp_date);
    // $year = date("y", $timestamp);
    // $month = date("m", $timestamp);


    // // print_r($year);
    // // print_r($month);
    // // exit;

    // $card_number = $results[0]->payment_card_no;
    // $exp_month = $month;
    // $exp_year = $year;
    // $cvc = $results[0]->payment_card_cvc;
    // $token = $results[0]->payment_card_value;


    // try {

    //     // $token = $results[0]->payment_card_value; 


    //     $token = \Stripe\Token::create([
    //         'card' => [
    //             'number' => $card_number,
    //             'exp_month' => $exp_month,
    //             'exp_year' => $exp_year,
    //             'cvc' => $cvc,
    //         ],
    //     ]);

    //     // $new_token = $token['id'];

    //     print_r($token);
    //     exit;

    //     // Replace with the actual token ID or token object
    //     $data = \Stripe\Charge::create([
    //         "amount" => $stripe_payment_amount,
    //         "currency" => "usd",
    //         "description" => "Payment from'.$current_user.' ",
    //         "source" => $token,
    //     ]);

    //     // Process $data or handle success here
    //     // echo "Charge ID: " . $data['id'];


    // } catch (\Stripe\Exception\CardException $e) {
    //     echo "Card Error: " . $e->getMessage();
    // } catch (\Stripe\Exception\RateLimitException $e) {
    //     echo "Rate Limit Error: " . $e->getMessage();
    // } catch (\Stripe\Exception\InvalidRequestException $e) {
    //     echo "Invalid Request Error: " . $e->getMessage();
    // } catch (\Stripe\Exception\AuthenticationException $e) {
    //     echo "Authentication Error: " . $e->getMessage();
    // } catch (\Stripe\Exception\ApiConnectionException $e) {
    //     echo "API Connection Error: " . $e->getMessage();
    // } catch (\Stripe\Exception\ApiErrorException $e) {
    //     echo "API Error: " . $e->getMessage();
    // } catch (Exception $e) {
    //     echo "General Error: " . $e->getMessage();
    // }



    // print_r($data) ;  



    // $data = \Stripe\Charge::create(array(
    //     "amount" => 500,
    //     "currency" => "usd",
    //     "description" => "Tanvirul Karim Description",
    //     "source" => $token,
    // ));



    if ($payment_from == 'membership') {


        $product_membership_price_id =  get_post_meta($membership_id, 'membership-api-price-id', true);


        global $wpdb;
        $username = $user_name;
        $table_name = $wpdb->prefix . 'crypto_payments';

        // Get today's date
        if ($payment_type == 'monthly') {
            $today = date('Y-m-d');
            $nextMonth = date('Y-m-d', strtotime('+1 month'));
            $payment_date = $today;
            $next_payment_date = $nextMonth;
        } elseif ($payment_type == 'yearly') {
            $today = date('Y-m-d');
            $nextMonth = date('Y-m-d', strtotime('+12 month'));
            $payment_date = $today;
            $next_payment_date = $nextMonth;
        }


        $data = array(
            'user_name' => $user_name,
            'membership_id' => $membership_id,
            'payment_amount' => $payment_amount,
            'payment_from' => $payment_from,
            'payment_date' => $payment_date,
            'next_payment_date' => $next_payment_date,
            'payment_product_id' => $membership_id,
            'payment_system' => $payment_type,
        );
        // Insert data into the database
        $wpdb->insert($table_name, $data);


        $results = $wpdb->get_results(
            $wpdb->prepare("SELECT is_member_active FROM {$wpdb->prefix}custom_registration WHERE user_name = %s", $user_name)
        );



        $check_activity_membership = $results[0]->is_member_active;
        $current_user = wp_get_current_user()->user_login;

        if ($check_activity_membership == 0) {

            $data = array(
                'is_member_active' => 1,
            );
            $table_name_reg = $wpdb->prefix . 'custom_registration';
            $wpdb->update($table_name_reg, $data, array('user_name' => $current_user));
        }


        require_once('vendor/autoload.php'); // Include the Stripe PHP library        
        \Stripe\Stripe::setApiKey($secret_api_key); // Set your secret API key

        $YOUR_DOMAIN = 'https://cryptocredit.pro/customer-account/';




        try {


            $checkout_session = \Stripe\Checkout\Session::create([
                'line_items' => [[
                    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                    'price' => $product_membership_price_id,
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => $YOUR_DOMAIN . '/success.html',
                'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
            ]);

            $urls = $checkout_session->url;
            wp_send_json($urls);
            wp_die();
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle Stripe API errors
            http_response_code(500); // Set an appropriate HTTP error code
            echo json_encode(['error' => $e->getMessage()]);
            // Log the error for debugging
            error_log($e->getMessage());
        }



        //  print_r($checkout_session->url); 
        //  exit;

        // header("HTTP/1.1 303 See Other");
        // header("Location: " . $checkout_session->url);

















    } elseif ($payment_from == 'products') {

        // print_r('products') ; 

        $jsone_decoded_ids = json_decode($payment_product_id, true);
        //  print_r($jsone_decoded_ids) ; 
        //  exit ;  

        $product_price_ids = [];

        foreach ($jsone_decoded_ids as $jsone_decoded_id) {




            global $wpdb;
            $table_name = $wpdb->prefix . 'crypto_payments';
            $product_payment_type =  get_post_meta($jsone_decoded_id, 'membership-payment-type', true);
            $product_payment_amount =  get_post_meta($jsone_decoded_id, 'membership-payment', true);
            $product_membership_price_id =  get_post_meta($jsone_decoded_id, 'membership-api-price-id', true);

            $product_price_ids[] = $product_membership_price_id;




            if ($product_payment_type == 'monthly') {
                $today = date('Y-m-d');
                $nextMonth = date('Y-m-d', strtotime('+1 month'));
                $pro_payment_date = $today;
                $pro_next_payment_date = $nextMonth;
            } elseif ($product_payment_type == 'yearly') {
                $today = date('Y-m-d');
                $nextMonth = date('Y-m-d', strtotime('+12 month'));
                $pro_payment_date = $today;
                $pro_next_payment_date = $nextMonth;
            }

            $data = array(
                'user_name' => $user_name,
                'membership_id' => $membership_id,
                'payment_amount' => $product_payment_amount,
                'payment_from' => $payment_from,
                'payment_system' => $product_payment_type,
                'payment_date' => $pro_payment_date,
                'next_payment_date' => $pro_next_payment_date,
                'payment_product_id' => $jsone_decoded_id,

            );

            // echo '<pre>' ;
            // print_r($data) ;  
            // Insert data into the database
            $wpdb->insert($table_name, $data);
        }

        // print_r($product_price_ids);
        // exit;












        require_once('vendor/autoload.php'); // Include the Stripe PHP library        
        \Stripe\Stripe::setApiKey($secret_api_key); // Set your secret API key

        $YOUR_DOMAIN = 'https://cryptocredit.pro/customer-account/';



        try {



            try {
                $line_items = [];

                // Define the Price IDs for the three one-time prices
                $price_ids = $product_price_ids;


                // Loop through the Price IDs and add them to the line_items array
                foreach ($price_ids as $price_id) {
                    $line_items[] = [
                        'price' => $price_id,
                        'quantity' => 1,
                    ];
                }

                // Calculate the total amount (in cents) based on the prices
                $total_amount_cents = 0;
                foreach ($line_items as $item) {
                    $price = \Stripe\Price::retrieve($item['price']);
                    $total_amount_cents += $price->unit_amount * $item['quantity'];
                }

                try {
                    // Create the Checkout Session with the calculated total amount

                    $checkout_session = \Stripe\Checkout\Session::create([
                        'line_items' => $line_items,
                        'mode' => 'payment', // Set the mode to 'payment'
                        'success_url' => $YOUR_DOMAIN . '/success.html',
                        'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
                    ]);

                    // ...
                } catch (\Stripe\Exception\ApiErrorException $e) {
                    // Handle Stripe API errors
                    http_response_code(500); // Set an appropriate HTTP error code
                    echo json_encode(['error' => $e->getMessage()]);
                    // Log the error for debugging
                    error_log($e->getMessage());
                }


                $urls = $checkout_session->url;
                wp_send_json($urls);
                wp_die();

                // echo '<pre>' ;
                // print_r($checkout_session->url);
                // exit;


                // header("HTTP/1.1 303 See Other");
                // header("Location: " . $checkout_session->url);

            } catch (\Stripe\Exception\ApiErrorException $e) {
                // Handle Stripe API errors
                http_response_code(500); // Set an appropriate HTTP error code
                echo json_encode(['error' => $e->getMessage()]);
                // Log the error for debugging
                error_log($e->getMessage());
            }


            //  print_r($checkout_session->url); 
            //  exit;

            // header("HTTP/1.1 303 See Other");
            // header("Location: " . $checkout_session->url);


        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle Stripe API errors
            http_response_code(500); // Set an appropriate HTTP error code
            echo json_encode(['error' => $e->getMessage()]);
            // Log the error for debugging
            error_log($e->getMessage());
        }
    } elseif ($payment_from == 'products_membership') {



        // print_r('products_membership') ; 

        $jsone_decoded_ids = json_decode($payment_product_id, true);
        //  print_r($jsone_decoded_ids) ;
        $product_price_ids = [];
        foreach ($jsone_decoded_ids as $jsone_decoded_id) {



            $post_type = get_post_type($jsone_decoded_id);

            $payment_from = $post_type;
            // echo '<pre>' ;
            // print_r($post_type) ;
            // exit ;

            global $wpdb;
            $table_name = $wpdb->prefix . 'crypto_payments';
            $product_payment_type =  get_post_meta($jsone_decoded_id, 'membership-payment-type', true);
            $product_payment_amount =  get_post_meta($jsone_decoded_id, 'membership-payment', true);
            $product_membership_price_id =  get_post_meta($jsone_decoded_id, 'membership-api-price-id', true);

            $product_price_ids[] = $product_membership_price_id;


            if ($product_payment_type == 'monthly') {
                $today = date('Y-m-d');
                // $today = '2024-08-28';
                $nextMonth = date('Y-m-d', strtotime('+1 month'));
                $pro_payment_date = $today;
                $pro_next_payment_date = $nextMonth;
            } elseif ($product_payment_type == 'yearly') {


                $today = date('Y-m-d');
                // $today = '2024-08-28';
                $nextMonth = date('Y-m-d', strtotime('+12 month'));
                $pro_payment_date = $today;
                $pro_next_payment_date = $nextMonth;
                // print_r($pro_next_payment_date) ;
            }

            $data = array(
                'user_name' => $user_name,
                'membership_id' => $membership_id,
                'payment_amount' => $product_payment_amount,
                'payment_from' => $payment_from,
                'payment_system' => $product_payment_type,
                'payment_date' => $pro_payment_date,
                'next_payment_date' => $pro_next_payment_date,
                'payment_product_id' => $jsone_decoded_id,

            );

            // echo '<pre>' ;
            // print_r($data) ;  
            // Insert data into the database
            $wpdb->insert($table_name, $data);
        }






        require_once('vendor/autoload.php'); // Include the Stripe PHP library        
        \Stripe\Stripe::setApiKey($secret_api_key); // Set your secret API key

        $YOUR_DOMAIN = 'https://cryptocredit.pro/customer-account/';



        try {



            try {
                $line_items = [];

                // Define the Price IDs for the three one-time prices
                $price_ids = $product_price_ids;


                // Loop through the Price IDs and add them to the line_items array
                foreach ($price_ids as $price_id) {
                    $line_items[] = [
                        'price' => $price_id,
                        'quantity' => 1,
                    ];
                }

                // Calculate the total amount (in cents) based on the prices
                $total_amount_cents = 0;
                foreach ($line_items as $item) {
                    $price = \Stripe\Price::retrieve($item['price']);
                    $total_amount_cents += $price->unit_amount * $item['quantity'];
                }

                try {
                    // Create the Checkout Session with the calculated total amount

                    $checkout_session = \Stripe\Checkout\Session::create([
                        'line_items' => $line_items,
                        'mode' => 'payment', // Set the mode to 'payment'
                        'success_url' => $YOUR_DOMAIN . '/success.html',
                        'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
                    ]);

                    // ...
                } catch (\Stripe\Exception\ApiErrorException $e) {
                    // Handle Stripe API errors
                    http_response_code(500); // Set an appropriate HTTP error code
                    echo json_encode(['error' => $e->getMessage()]);
                    // Log the error for debugging
                    error_log($e->getMessage());
                }


                $urls = $checkout_session->url;
                wp_send_json($urls);
                wp_die();

                // echo '<pre>' ;
                // print_r($checkout_session->url);
                // exit;


                // header("HTTP/1.1 303 See Other");
                // header("Location: " . $checkout_session->url);

            } catch (\Stripe\Exception\ApiErrorException $e) {
                // Handle Stripe API errors
                http_response_code(500); // Set an appropriate HTTP error code
                echo json_encode(['error' => $e->getMessage()]);
                // Log the error for debugging
                error_log($e->getMessage());
            }


            //  print_r($checkout_session->url); 
            //  exit;

            // header("HTTP/1.1 303 See Other");
            // header("Location: " . $checkout_session->url);


        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle Stripe API errors
            http_response_code(500); // Set an appropriate HTTP error code
            echo json_encode(['error' => $e->getMessage()]);
            // Log the error for debugging
            error_log($e->getMessage());
        }
    }

    // Send a response
    wp_send_json_success('Payment Complete');
    wp_die();
}






// get membership function   
add_action('wp_ajax_choose_membership', 'choose_membership');
add_action('wp_ajax_nopriv_choose_membership', 'choose_membership');

function choose_membership()
{

    $membersip_id = $_POST['choose_membership'];
    // Check if user exists with the provided email
    $current_user = wp_get_current_user()->user_login;
    $data = array(
        'membership_planning' => $membersip_id,
    );

    global $wpdb;
    // Insert data into the database
    $table_name = $wpdb->prefix . 'custom_registration'; // Use proper table prefix       
    $wpdb->update($table_name, $data, array('user_name' => $current_user));

    wp_send_json('Membership activated successfully');
    wp_die();
}




// choose_products function   
add_action('wp_ajax_choose_products', 'choose_products');
add_action('wp_ajax_nopriv_choose_products', 'choose_products');

function choose_products()
{

    $product_id = $_POST['choose_products'];
    $json_encoded_data = json_encode($product_id);


    $current_user = wp_get_current_user()->user_login;
    global $wpdb;
    // Insert data into the database
    $table_name = $wpdb->prefix . 'custom_registration'; // Use proper table prefix  
    $existing_data = $wpdb->get_var($wpdb->prepare("SELECT added_products FROM $table_name WHERE user_name = %s", $current_user));
    // print_r($existing_data) ; 
    // exit; 



    if ($existing_data) {
        // Decode the existing JSON data to an array
        $existing_array = json_decode($existing_data, true);

        // Add the new data to the array
        $existing_array[] = $product_id;

        // Encode the updated array back to JSON
        $updated_json_data = json_encode($existing_array);

        // Update the database with the new JSON encoded data
        $data = array('added_products' => $updated_json_data);
        $wpdb->update($table_name, $data, array('user_name' => $current_user));
    } else {
        // If no existing data, create a new array with the new data
        $new_array = array($product_id);
        $new_json_data = json_encode($new_array);

        // Update the database with the new JSON encoded data
        $data = array('added_products' => $new_json_data);
        $wpdb->update($table_name, $data, array('user_name' => $current_user));
    }



    // Check if user exists with the provided email

    // $data = array(
    //     'added_products' => $json_encoded_data,
    // );    


    // $wpdb->update($table_name, $data, array('user_name' => $current_user)); 

    wp_send_json('Membership activated successfully');
    wp_die();
}







// update address  function   

add_action('wp_ajax_update_address', 'update_address');
add_action('wp_ajax_nopriv_update_address', 'update_address');

function update_address()
{


    $formdata = [];
    wp_parse_str($_POST['update_address'], $formdata);
    // User login using email and password


    $address = $formdata['address'];
    $phone = $formdata['phone'];
    $email = $formdata['email'];
    $password = $formdata['password'];

    $username = $formdata['username'];
    // Check if user exists with the provided email

    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_registration'; // Replace 'custom_registration' with your actual table name
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM $table_name WHERE user_name = %s",
            $username
        )
    );

    $results_2 = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM $table_name WHERE email = %s",
            $email,
        )
    );

    $get_current_name = $results_2[0]->user_name;
    $current_user = wp_get_current_user()->user_login;


    // $get_current_name
    // echo '<pre>';
    // print_r(empty($get_current_name)) ;  

    if (empty($get_current_name)) {
        $update_data = 1;
    } elseif ($current_user == $get_current_name) {
        $update_data = 1;
    } elseif ($current_user != $get_current_name) {
        $update_data = 0;
    }


    if (count($results) > 0) {

        if ($update_data == 0) {

            wp_send_json_error('Email already exists');
        } else {


            $user = get_user_by('login', $username);
            if ($user) {
                $user_id = $user->ID;
            }


            // print_r($user) ; 

            // Update the email address
            $user_data_update = array(
                'ID'         => $user_id,
                'user_email' => $email,
                'user_pass'  => $password,
            );


            $update_result = wp_update_user($user_data_update);

            $data = array(
                'address' => $address,
                'phone' => $phone,
                'email' => $email,
                'password' => $password,
            );

            $wpdb->update($table_name, $data, array('user_name' => $username));
            wp_send_json_success('Data updated successfully');
            wp_die();
        }
    }
}
