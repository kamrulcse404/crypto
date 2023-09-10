<?php

/**
* Template Name: Memberships     
**/
get_header();

?>

  <br>
  <br>
  <br>
  <br>


<div class="container">
<div class="card-deck mb-3 row">
<h1 class="text-center"> Please choose a membership </h1>            
<?php
$current_user = wp_get_current_user()->user_login;
global $wpdb;
$db_query = $wpdb->prepare(
    "SELECT * FROM {$wpdb->prefix}custom_registration WHERE user_name = %s",
    $current_user
); 
$results = $wpdb->get_results($db_query);
$current_membership = isset($results[0]->membership_planning) ? $results[0]->membership_planning : '';
$is_member_active = $results[0]->is_member_active;

// print_r($current_membership);

$args = array(
    'post_type' => 'membership', // Replace with your actual post type slug
    'posts_per_page' => -1,     // Display all posts of the membership type
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
              <?php } 
            }

//             echo '<pre>';
// print_r($results[0]);
// echo '</pre>';

            ?> 

         
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary choose_membership " ajax_url="<?php echo admin_url('admin-ajax.php');?>" 
                membership_id="<?php echo get_the_id(); ?>"  <?php if($current_membership){echo 'disabled' ; }?>
            >  <?php if($current_membership == get_the_id() && $is_member_active==0){echo 'Choosed' ; }elseif($current_membership == get_the_id() && $is_member_active==1){echo 'Active' ;}else{ echo 'Choose Plan';}?>  </button>
       
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
