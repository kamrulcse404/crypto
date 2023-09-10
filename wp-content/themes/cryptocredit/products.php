<?php

/**
* Template Name: products     
**/

get_header();

?>

  <br>
  <br>
  <br>
  <br>


<div class="container custom-form-pro">
<div class="card-deck mb-3 row">
    

<?php

$current_user = wp_get_current_user()->user_login;   
global $wpdb; 
$table_name = $wpdb->prefix . 'custom_registration'; // Use proper table prefix  
$existing_products = $wpdb->get_var($wpdb->prepare("SELECT added_products FROM $table_name WHERE user_name = %s", $current_user));


$product_array = json_decode($existing_products, true);
if($product_array){
    $product_array = json_decode($existing_products, true);
}else{
    $product_array = [];
}



$args = array(
    'post_type' => 'products', // Replace with your actual post type slug
    'posts_per_page' => -1,     // Display all posts of the product type
    'order' => 'ASC', 
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
        ?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h2 class="my-0 font-weight-normal">
                      
                    
                    <?php echo get_post_meta(get_the_ID(),'membership-subtitle', true); ?> </h2>

                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title"> $<?php echo get_post_meta(get_the_ID(),'membership-payment', true); ?>  <small class="text-muted">/ <?php echo get_post_meta(get_the_ID(),'membership-payment-type', true); ?></small></h1>
                    <ul class="credit_pr_bx mt-3 mb-4">

            <?php
            $entries = get_post_meta(get_the_ID(), 'spost_group_memmership', true);
            
            foreach ((array)$entries as $key => $entry) {
                $title = '';
                if (isset($entry['memmership-field-text'])) {
                    $title = esc_html($entry['memmership-field-text']);
                }

                if (!empty($entries)) { ?> 
                <li> <?php echo $title ; ?> </li>
              <?php }  }
               $get_pro_id = get_the_id(); 
            ?> 
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary choose_products " ajax_url="<?php echo admin_url('admin-ajax.php');?>" 
                product_id="<?php echo get_the_id(); ?>"
                <?php if (in_array($get_pro_id , $product_array)) { echo "disabled"; }?> 
                 > 
            <?php if (in_array($get_pro_id , $product_array)) { echo "choosed"; }else{ echo "Choose Plan" ; } ?> 
         </button>
        </div>
    </div>
</div>
<?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'No memberships found.';
endif;
?>







      </div>
</div>

                        


<?php 


get_footer();
