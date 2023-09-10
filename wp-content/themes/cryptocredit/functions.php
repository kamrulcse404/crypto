<?php


function mytheme_enqueue_scripts() {
    // Enqueue CSS files
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), null, true );
    wp_localize_script( 'custom', 'custom_object',
    array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
    )
   );
}
  
  add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );



// ridirect to login page  
function redirect_unauthenticated_users() {
    // defined( 'ABSPATH' ) or die( 'This page cannot be accessed directly.' );
        if ((is_front_page()) && !is_user_logged_in()) {
            wp_redirect(home_url('/login'));
        }elseif((is_page('login') || is_page('registration-page') ) && is_user_logged_in()){
            wp_redirect(home_url());
        }
    }
add_action('template_redirect', 'redirect_unauthenticated_users');






    // after login function 

    function hide_admin_bar_for_subscribers() {
        // Get the current user object
        $current_user = wp_get_current_user();
        
        // Check if the user is a subscriber
        if (in_array('subscriber', $current_user->roles)) {
            show_admin_bar(false);
        }else{
            // show_admin_bar(true);
        }
    }
    add_action('after_setup_theme', 'hide_admin_bar_for_subscribers');




    // function for svg support 
    function allow_svg_upload( $mimes ) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter( 'upload_mimes', 'allow_svg_upload' );
  



    function add_loader_style(){
        global $cryptocredit;
        $img_link = $cryptocredit['processing-loader-img-link'];
        ?>
 
    <style>
        .processing-loader:after {
        position: absolute;
        content: '';
        background: rgb(0 0 0 / 15%);
        background-image: url(<?php echo $img_link;?>);
        background-position: 50% 20%;
        background-repeat: no-repeat;
        overflow: hidden;
        width: 100%;
        height: 100%;
        z-index: 9;
        top: 0;
        left: 0;
        right: 0;
    }

    </style>

    <?php }
    add_action('wp_footer','add_loader_style') ;



    
include_once("inc/ajax/ajax-data-processing.php");  
include_once("inc/functions/database.php"); 
include_once("inc/functions/custom-post-type.php");  

// redux Framework //
require_once('lib/framework/ReduxCore/framework.php');
require_once('lib/framework/sample/config.php');

//cmb2
include('metabox/init.php');
include('metabox/functions.php');



?>