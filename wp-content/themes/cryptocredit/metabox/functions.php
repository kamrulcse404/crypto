<?php

// repeater add more option for memmership  
add_action('cmb2_admin_init', 'service_ptypes_metaboxes');
function service_ptypes_metaboxes()
{

    $cmb = new_cmb2_box(array(
        'id' => 'repeater_demo',  // Belgrove Bouncing Castles
        'title' => 'Add More Option',
        'object_types' => array('membership','products'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'spost_group_memmership',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Field Title',
        'desc' => 'Enter the  text',
        'id' => 'memmership-field-text',
        'type' => 'text',
    ));



}











//metabox for footer social
function metabox_agreement_page(array $product_meta)
{
    $product_meta[] = array(
        'id' => 'account-agreement',
        'title' => 'Account Documents',
        'object_types' => array('membership','products'), // Set to 'page'
        // 'show_on' => array('key' => 'page-template', 'value' => 'accountagreement.php'), // Show on specific page template
        'fields' => array(
            array(
                'id' => 'account-loan',
                'name' => 'Upload Pdf File',
                'desc' => 'Upload Pdf File Here',
                'type' => 'file',
            ),
            array(
                'id' => 'account-savings',
                'name' => 'Savings Agreement File',
                'desc' => 'Upload Pdf File Here',
                'type' => 'file',
            ),

            array(
                'id' => 'account-additional',
                'name' => 'Additional Disclosures File',
                'desc' => 'Upload Pdf File Here',
                'type' => 'file',
            ),

            array(
                'id' => 'account-statements',
                'name' => 'Statements File',
                'desc' => 'Upload Pdf File Here',
                'type' => 'file',
            ),



        ),
    );
    

    return $product_meta;
}
add_filter('cmb2_meta_boxes', 'metabox_agreement_page');





//metabox for footer social
function metabox_for_membership(array $product_meta)
{
    $product_meta[] = array(
        'id' => 'account-membership',
        'title' => 'Extra Section',
        'object_types' => array('membership','products'), // Set to 'page'
        // 'show_on' => array('key' => 'page-template', 'value' => 'accountagreement.php'), // Show on specific page template
        'fields' => array(
            array(
                'id' => 'membership-subtitle',
                'name' => 'Subtitle',
                'desc' => 'Write here the subtitle',
                'type' => 'text',
            ), 

            array(
                'id' => 'membership-payment',
                'name' => 'Payment Amount',
                'desc' => 'Write here payment amount',
                'type' => 'text',
            ), 
            
            array(
                'id' => 'membership-payment-type',
                'name' => 'Payment Amount Type',
                'desc' => 'Select tne payment type',
                'type'             => 'select',
                'show_option_none' => true,
                'default'          => 'custom',
                'options'          => array(
                    'monthly' => __( 'Monthly', 'cmb2' ),
                    'yearly'   => __( 'Yearly', 'cmb2' ),
                    // 'lifetime'     => __( 'Lifetime', 'cmb2' ), 
                ),
              ),

              array(
                'id' => 'membership-payment-limit',
                'name' => 'Payment Amount Limit',
                'desc' => 'Write here payment amount limit',
                'type' => 'text',
             ),

             array(
                'id' => 'membership-month-limit',
                'name' => 'Payment Month Limit',
                'desc' => 'Write here payment Month limit',
                'type' => 'text',
             ),

             array(
                'id' => 'membership-api-price-id',
                'name' => 'Membership Api Price Id',
                'desc' => 'Write here membership price id',
                'type' => 'text',
             ),

          


        ),
    );
    

    return $product_meta;
}
add_filter('cmb2_meta_boxes', 'metabox_for_membership');


/*

Output=========
<?php echo get_post_meta(get_the_ID(),'developer', true); ?>

*/

 