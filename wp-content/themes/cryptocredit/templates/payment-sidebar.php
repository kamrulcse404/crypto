      <?php



      $next_month = new DateTime('first day of next month');
      $last_day_of_next_month = $next_month->format('Y-m-t');
      // echo "Last day of next month: " . $last_day_of_next_month;

      $current_user = wp_get_current_user()->user_login;
      global $wpdb;
      $db_query = $wpdb->prepare(
         "SELECT * FROM {$wpdb->prefix}custom_registration WHERE user_name = %s",
         $current_user
      );
      $results = $wpdb->get_results($db_query);
      $current_membership = isset($results[0]->membership_planning) ? $results[0]->membership_planning : '';
      $is_member_active = $results[0]->is_member_active;
      print_r($is_member_active);
      if ($current_membership) {
         $membership_post = get_post($current_membership);

         $table_name = $wpdb->prefix . 'custom_registration'; // Use proper table prefix  
         $existing_products = $wpdb->get_var($wpdb->prepare("SELECT added_products FROM $table_name WHERE user_name = %s", $current_user));
         $product_array = json_decode($existing_products, true);
         if ($product_array) {
            $product_array = json_decode($existing_products, true);
            $args = array(
               'post_type' => 'products', // Replace with your actual post type slug
               'posts_per_page' => -1,     // Display all posts of the product type
               'post__in' => $product_array, // Array of 
               'order' => 'ASC',
            );
         } else {
            $product_array = [];
         }



      ?>



         <div role="complementary " class="d-none custom-form show_payment_div ng-tns-c86-16 ng-trigger ng-trigger-panelState make-payment-container ui-sidebar ui-widget ui-widget-content ui-shadow ui-sidebar-active ui-sidebar-right" aria-modal="true" style="z-index: 1001; opacity: 1;">
            <a tabindex="0" role="button" class="ng-tns-c86-16 ui-sidebar-close ui-corner-all ng-star-inserted" style="">
               <span class="fa fa-times ng-tns-c86-16 make-payment-stripe m-4"></span>
            </a><!---->
            <div _ngcontent-alv-c138="" class="flex h-full justify-center items-center ng-tns-c86-16">
               <div _ngcontent-alv-c138="" class="scroll-container">
                  <div _ngcontent-alv-c138="" class="flex-container">
                     <!----><!---->
                     <div _ngcontent-alv-c138="" class="ng-star-inserted" style="">
                        <app-input-amount _ngcontent-alv-c138="" _nghost-alv-c131="" class="ng-star-inserted">
                           <div _ngcontent-alv-c131="" class="relative">
                              <div _ngcontent-alv-c131="" class="font-20 color-gray-1200 mb-15 text-center font-weight-700"> How much would you like to pay to complete your order ? </div>
                              <div _ngcontent-alv-c131="" class="flex justify-center mb-15">
                                 <app-product-info _ngcontent-alv-c131="" _nghost-alv-c128="">
                                    <div _ngcontent-alv-c128="" class="flex justify-center items-center content-center product-item">
                                       <div _ngcontent-alv-c128="" class="flex flex-col">
                                          <span _ngcontent-alv-c128="" class="font-16 font-weight-700 line-height-16 color-gray-900">

                                             <?php



                                             $membership = $results[0]->membership_planning;
                                             $products = json_decode($results[0]->added_products, 'true');
                                             $products[] = $membership;


                                             //  echo '<pre>' ;
                                             // print_r($products) ;

                                             $db_query = $wpdb->prepare(
                                                "SELECT * FROM {$wpdb->prefix}crypto_payments WHERE user_name = %s",
                                                $current_user
                                             );
                                             $get_payments = $wpdb->get_results($db_query);

                                             $payment_product_ids = array();
                                             foreach ($get_payments as $payment) {
                                                $payment_product_ids[] = $payment->payment_product_id;
                                             }

                                             $counts = array_count_values($payment_product_ids);

                                             $filtered_values = array();
                                             foreach ($counts as $value => $count) {
                                                if ($count >= 0) {
                                                   $filtered_values[] = $value;
                                                }
                                             }


                                             $check_result = array_intersect($products, $filtered_values);
                                             if ($check_result == $products) {
                                                $check_value = 1;
                                             } else {
                                                $check_value = 0;
                                             }

                                             if ($is_member_active == 0) {

                                                // $payment_type =  get_post_meta($current_membership, 'membership-payment-type', true); 
                                                echo '<input type="hidden" class="payment_from" value="membership">';

                                                echo '<input type="hidden" class="payment_product_id" value="' . $current_membership . '">';
                                                $total_payment = get_post_meta($current_membership, 'membership-payment', true);
                                                echo get_post_meta($current_membership, 'membership-subtitle', true) . ' - ';
                                                echo '$' . $total_payment . '<br>';
                                             } elseif ($is_member_active == 1 &&  $check_value == 0) {
                                                echo '<input type="hidden" class="payment_from" value="products">';
                                                $total_payment = 0;
                                                $payment_product_id = array();
                                                $query = new WP_Query($args);
                                                if ($query->have_posts()) :
                                                   while ($query->have_posts()) :
                                                      $query->the_post();
                                                      $product_payment = get_post_meta(get_the_id(), 'membership-payment', true);
                                                      $total_payment += $product_payment; // Accumulate product payment 
                                                      $payment_product_id[] = get_the_id();

                                                      echo get_post_meta(get_the_id(), 'membership-subtitle', true) . ' - ';
                                                      echo '$' . $product_payment . '<br>';

                                                   endwhile;
                                                   wp_reset_postdata();
                                                else :
                                                   echo 'No products found.';
                                                endif;
                                                $json_encoded_id = json_encode($payment_product_id);
                                                echo '<input type="hidden" class="payment_product_id" value="' . $json_encoded_id . '">';
                                             } elseif ($is_member_active == 1 && $check_value == 1) {

                                                //   echo 'helloddffdfdf' ; 
                                                // echo '<pre>' ; 
                                                // print_r($filtered_values) ;        
                                                // exit ;
                                                // print_r($filtered_values) ; 
                                                echo '<input type="hidden" class="payment_from" value="products_membership">';
                                                $total_payment = 0;
                                                $payment_product_id = array();





                                                foreach ($filtered_values as $filtered_value) {


                                                   $payment_system = get_post_meta($filtered_value, 'membership-payment-type', true);

                                                   $db_query = $wpdb->prepare(
                                                      "SELECT * FROM {$wpdb->prefix}crypto_payments WHERE user_name = %s AND payment_product_id = %d",
                                                      $current_user,
                                                      $filtered_value
                                                   );

                                                   $get_payments = $wpdb->get_results($db_query);
                                                   $last_payment =   end($get_payments);
                                                   $next_payment_date = $last_payment->next_payment_date;



                                                   //  $today = date('Y-m-d'); 
                                                   $today = '2023-10-09';

                                                   // Create DateTime objects for the two dates
                                                   $date1 = new DateTime($today);
                                                   $date2 = new DateTime($next_payment_date);

                                                   // Calculate the difference in months
                                                   $month_difference = (($date1->format('Y') - $date2->format('Y')) * 12) + $date1->format('m') - $date2->format('m');

                                                   // echo "Month difference: " . $month_difference; 


                                                   // echo  $payment_system ;

                                                   if ($month_difference == 0) {

                                                      $product_payment = get_post_meta($filtered_value, 'membership-payment', true);
                                                      $total_payment += $product_payment; // Accumulate product payment 
                                                      $payment_product_id[] = $filtered_value;
                                                      echo get_post_meta($filtered_value, 'membership-subtitle', true) . ' - ';
                                                      echo '$' . $product_payment . '<br>';
                                                   }
                                                }

                                                $json_encoded_id = json_encode($payment_product_id);
                                                echo '<input type="hidden" class="payment_product_id" value="' . $json_encoded_id . '">';
                                             }

                                             // Display the total payment after the loop
                                             echo 'Total Payment: $' . $total_payment;


                                             // echo '<pre>' ;
                                             // print_r($filtered_values) ; 



                                             ?>


                                       </div>
                                       <!---->
                                    </div>
                                 </app-product-info>
                              </div>
                              <div _ngcontent-alv-c131="" class="ng-star-inserted ">
                                 <div _ngcontent-alv-c131="" class="payment-amount-container ng-star-inserted">
                                    <div _ngcontent-alv-c131="" class="payment-amount-option">
                                       <div _ngcontent-alv-c131="" class="label pl-0">Current Amount</div>
                                       <div _ngcontent-alv-c131="" class="input">
                                          <div _ngcontent-alv-c131="" class="amount">
                                             <div _ngcontent-alv-c131="" class="color-gray-1200 font-12 font-weight-700">
                                                $ <?php echo $total_payment; ?>
                                             </div>




                                             <div _ngcontent-alv-c131="" class="color-gray-800 font-10">Next Date : <?php echo $last_day_of_next_month;  ?></div>
                                          </div>
                                          <div _ngcontent-alv-c131="" class="radio"><span _ngcontent-alv-c131=""></span></div>
                                       </div>
                                    </div>
                                 </div>

                              </div>
                              <div _ngcontent-alv-c131="" class="ng-star-inserted">
                                 <div _ngcontent-alv-c131="" class="payment-amount-container ng-star-inserted">
                                    <div _ngcontent-alv-c131="" class="payment-amount-option">
                                       <div _ngcontent-alv-c131="" class="label pl-0">Other Amount</div>
                                       <div _ngcontent-alv-c131="" class="input">
                                          <div _ngcontent-alv-c131="" class="amount">
                                             <div _ngcontent-alv-c131="" class="w-full">

                                                <?php

                                                $current_user = wp_get_current_user()->user_login;
                                                global $wpdb;
                                                $db_query = $wpdb->prepare(
                                                   "SELECT * FROM {$wpdb->prefix}custom_registration WHERE user_name = %s",
                                                   $current_user
                                                );
                                                $results = $wpdb->get_results($db_query);

                                                // echo '<pre>'; 
                                                // print_r($results[0]->payment_card_value) ; 
                                                if (!empty($results[0]->payment_card_value)) {
                                                   if ($total_payment != 0) {
                                                ?>

                                                      <input _ngcontent-alv-c131="" type="text" placeholder="$0.00" id="get_current_amount" inputmode="decimal">

                                                <?php  }
                                                } else {
                                                   echo 'Your payment method is not active right now.please update the card details';
                                                }  ?>

                                             </div>




                                             <?php



                                             // Process the payment
                                             // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                             //     $token = $_POST['stripeToken'];

                                             //     print_r($token) ; 

                                             //     $data = \Stripe\Charge::create(array(
                                             //         "amount" => 500,
                                             //         "currency" => "usd",
                                             //         "description" => "Tanvirul Karim Description",
                                             //         "source" => $token,
                                             //     ));

                                             //     echo '<pre>';
                                             //     print_r($data);
                                             // }


                                             ?>






                                          </div>
                                          <div _ngcontent-alv-c131="" class="radio active"><span _ngcontent-alv-c131=""></span></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---->
                              </div>
                              <!----><!---->
                              <div _ngcontent-alv-c131="" class="payment-amount-container flex justify-content-between items-center">
                                 <div _ngcontent-alv-c131="" class="label pl-0">Payment Method</div>
                                 <div _ngcontent-alv-c131="" class="flex-1 text-right flex justify-end items-center">

                                    <!-- <img _ngcontent-alv-c131="" src="../../../../../assets/ach-icon.svg" alt="ACH" class="mr-10 ng-star-inserted"> -->

                                    <span _ngcontent-alv-c131="" class="font-12"><span _ngcontent-alv-c131="">Stripe</span>
                                       <!-- <span _ngcontent-alv-c131="" class="font-weight-700">*3832</span> -->
                                    </span>
                                 </div>
                              </div>
                              <div _ngcontent-alv-c131="" routerlink="/Consumer/my-profile/payment-method" class="text-right color-blue-700 font-10 mt-10 mb-10 cursor-pointer font-weight-700" tabindex="0"> <a class="text-decoration-none" href="<?php echo home_url('paymentmethod'); ?>"> Change Payment Method </a> </div>
                              <!-- <div _ngcontent-alv-c131="" class="font-gray-800 font-10 text-center mt-10 mb-15"> Your account is current! Your upcoming payment is due on: Sep 05, 2023. </div> -->
                              <!-- <div _ngcontent-alv-c131="" class="partial-payment-note mb-15 ng-star-inserted"> NOTE: A partial payment will not advance your due date. </div> -->
                              <!----><!---->
                              <div _ngcontent-alv-c131="" class="btn-container">

                                 <input type="hidden" id="get_crypto_user" value="<?php echo $current_user; ?>">
                                 <input type="hidden" id="get_crypto_membership_id" value="<?php echo $current_membership; ?>">
                                 <div _ngcontent-alv-c131="" class="mb-15 text-center">

                                    <?php if (!empty($results[0]->payment_card_value)) { ?>

                                       <button _ngcontent-alv-c131="" class="cs-btn-blue make_crypto_payments" ajax_url="<?php echo admin_url('admin-ajax.php'); ?>"> Make a Payment
                                       </button>




                                    <?php  } ?>







                                 </div>
                              </div>
                              <!---->
                           </div>
                        </app-input-amount>
                        <!----><!----><!----><!---->
                     </div>
                     <!----><!----><!----><!----><!---->
                  </div>
               </div>
            </div>
         </div>


      <?php


      } else {
         echo '<h2> No membership active.Please active from products page </h2>';
      } ?>