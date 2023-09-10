<?php

/**
 * Template Name: paymentmethod     
 **/
get_header(); ?>



<div class="container-fluid router-outlet router-outlet-bg router-outlet-consumer">
   <div class="row">
      <router-outlet></router-outlet>

      <app-myprofile class="ng-star-inserted">
         <div class="container pt-15 pb-30">
            <div class="row mb-30">


            </div>
            <!---->
            <div class="row ng-star-inserted">
               <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                  <app-payment-method _nghost-kni-c142="">



                     <?php

                     $current_user = wp_get_current_user()->user_login;
                     global $wpdb;
                     $db_query = $wpdb->prepare(
                        "SELECT * FROM {$wpdb->prefix}custom_registration WHERE user_name = %s",
                        $current_user
                     );
                     $results = $wpdb->get_results($db_query);

                     // echo '<pre>'; 
                     // print_r($results[0]) ;


                     ?>
                     <div class="mt-15 ng-star-inserted">
                        <div class="ng-star-inserted">

                           <app-payment-debit-card>
                              <div class="ng-star-inserted">
                                 <div class="cs-card mb-20">
                                    <div class="card-title-normal flex justify-between">
                                       <span class="font-16"> Stripe Details </span><!---->
                                    </div>
                                    <div>
                                       <!---->
                                       <div class="flex mt-20 ng-star-inserted">
                                          <span class="text-left gray-text-12 color-gray-700">
                                             <?php if ($results) {

                                                echo 'You are now connected with stripe';
                                             } else {

                                                echo 'You dont have any currently
                                                     linked Stripe  Account';
                                             } ?>

                                          </span>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                              <!---->
                           </app-payment-debit-card>
                        </div>
                     </div>
                     <div class="flex flex-col justify-center">

                        <div class="col-xs-12 col-sm-6 col-md-8 col-sm-offset-3 col-md-offset-2 mb-20">
                           <button class="cs-btn-blue w-full">
                              ADD CARD PAYMENT METHOD
                           </button>
                        </div>

                        <div class="content-edit ng-star-inserted">
                           <div class="pl-16 pr-16 pt-8">
                              <app-payment-method-edit-debit-card _nghost-crw-c200="">
                                 <div class="form-wrapper debit-card ng-star-inserted">
                                    <!---->
                                    <div class="form">



                                       <app-cybersource-payment _nghost-crw-c58="">
                                          <form class="ng-untouched ng-pristine ng-invalid">
                                             <div class="row">
                                                <div class="col-sx-12 col-md-12">
                                                   <div class="row mb-10">
                                                      <div class="form-group acb-label col-md-12">
                                                         <div>
                                                            <label for="cardName" class="color-gray-1200 text-15">Name for card</label>
                                                            <input id="payment_card_name" value="<?php echo $results[0]->payment_card_name; ?>" type="text" minlength="2" maxlength="120" class="ng-untouched ng-pristine ng-invalid _ar_hide_">
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                </div>

                                                <?php
                                                if (!isset($results[0]->payment_card_no)) {
                                                   $results[0]->payment_card_no = '';
                                                }
                                                ?>

                                                <div class="col-sx-12 col-md-12">
                                                   <div class="row mb-10">
                                                      <div class="form-group acb-label col-md-12">
                                                         <div>
                                                            <label for="cardName" class="color-gray-1200 text-15">Card No</label>
                                                            <input id="payment_card_no" value="<?php echo $results[0]->payment_card_no; ?>" type="text" minlength="2" maxlength="120" class="ng-untouched ng-pristine ng-invalid _ar_hide_">
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="col-sx-12 col-md-12">
                                                   <div class="row mb-10">
                                                      <div class="form-group acb-label col-md-12">
                                                         <div>
                                                            <?php  
                                                               // $ced = $results[0]->payment_card_expiry;
                                                               // $ced = explode("-",$ced);
                                                               // print_r($ced[0]);
                                                               $dateString = $results[0]->payment_card_expiry;
                                                               $parts = explode("-", $dateString); // Split the date string into an array

                                                               if (count($parts) === 3) {
                                                                  $year = substr($parts[0], -2); // Extract the last 2 characters of the year
                                                                  $month = $parts[1];
                                                                  $formattedDate = $month . "-" . $year;                                                 
                                                               }
                                                            ?>
                                                            <label for="cardName" class="color-gray-1200 text-15"> Card Expiry Date </label>
                                                            <input id="payment_card_expiry" value="<?php echo $formattedDate; ?>" type="text" minlength="2" maxlength="120" class="ng-untouched ng-pristine ng-invalid _ar_hide_" placeholder="12 - 99">
                                                            <p id="result">Enter date as Month - Year</p>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                </div>

                                                <?php
                                                if (!isset($results[0]->payment_card_cvc)) {
                                                   $results[0]->payment_card_cvc = '';
                                                }
                                                ?>

                                                <div class="col-sx-12 col-md-12">
                                                   <div class="row mb-10">
                                                      <div class="form-group acb-label col-md-12">
                                                         <div>
                                                            <label for="cardName" class="color-gray-1200 text-15"> Card Cvc No </label>
                                                            <input id="payment_card_cvc" value="<?php echo $results[0]->payment_card_cvc; ?>" type="text" minlength="2" maxlength="120" class="ng-untouched ng-pristine ng-invalid _ar_hide_">
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                </div>


                                                <div class="col-xs-12">
                                                   <div class="row mb-10">
                                                      <div class="form-group acb-label col-xs-12">
                                                         <div><label for="city" class="color-gray-1200 text-15">Add Card</label>
                                                            <select name="payment_card" id="payment_card_value">
                                                               <option value="tok_visa_debit" <?php if ($results[0]->payment_card_value == 'tok_visa') {
                                                                                                   echo 'selected';
                                                                                                } ?>> Visa </option>
                                                               <option value="tok_visa_debit" <?php if ($results[0]->payment_card_value == 'tok_visa_debit') {
                                                                                                   echo 'selected';
                                                                                                } ?>>Visa (debit)</option>
                                                               <option value="tok_mastercard" <?php if ($results[0]->payment_card_value == 'tok_mastercard') {
                                                                                                   echo 'selected';
                                                                                                } ?>>Mastercard</option>
                                                               <option value="tok_mastercard_debit" <?php if ($results[0]->payment_card_value == 'tok_mastercard_debit') {
                                                                                                         echo 'selected';
                                                                                                      } ?>>Mastercard (debit)</option>
                                                               <option value="tok_mastercard_prepaid" <?php if ($results[0]->payment_card_value == 'tok_mastercard_prepaid') {
                                                                                                         echo 'selected';
                                                                                                      } ?>>Mastercard (prepaid)</option>
                                                               <option value="tok_amex" <?php if ($results[0]->payment_card_value == 'tok_amex') {
                                                                                             echo 'selected';
                                                                                          } ?>>American Express</option>
                                                               <option value="tok_discover" <?php if ($results[0]->payment_card_value == 'tok_discover') {
                                                                                                echo 'selected';
                                                                                             } ?>>Discover</option>
                                                               <option value="tok_diners" <?php if ($results[0]->payment_card_value == 'tok_diners') {
                                                                                             echo 'selected';
                                                                                          } ?>>Diners Club</option>
                                                               <option value="tok_jcb" <?php if ($results[0]->payment_card_value == 'tok_jcb') {
                                                                                          echo 'selected';
                                                                                       } ?>>JCB</option>
                                                               <option value="tok_unionpay" <?php if ($results[0]->payment_card_value == 'tok_unionpay') {
                                                                                                echo 'selected';
                                                                                             } ?>>UnionPay</option>

                                                            </select>
                                                            <!-- <input  type="text" id="city" formcontrolname="city" maxlength="50" class="ng-untouched ng-pristine ng-invalid _ar_hide_" _ar_hide_="width:523px;height:50px;margin:0px;position:static;display:inline-block;"></div> -->

                                                         </div>




                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="row mt-10">
                                                   <div class="col-xs-8 col-md-6 col-xs-offset-2 col-md-offset-3">
                                                      <button id="add_stripe_details" ajax_url="<?php echo admin_url('admin-ajax.php'); ?>" class="cs-btn-outline-green w-full">
                                                         <span class="ng-star-inserted">LINK CARD</span><!----><!---->
                                                      </button>
                                                   </div>
                                                </div>
                                          </form>



                                       </app-cybersource-payment>
                                    </div>
                                 </div>
                                 <!---->
                                 <app-term-of-transfer-agreement _nghost-crw-c57="">
                                    <div _ngcontent-crw-c57="" class="term-of-transfer-agreement">
                                       <app-dialog-container _ngcontent-crw-c57="" _nghost-crw-c55="">
                                          <p-dialog _ngcontent-crw-c55="" showeffect="fade" header="" appendto="body" styleclass="sign-up-dialog" class="ng-tns-c48-39">
                                             <!---->
                                          </p-dialog>
                                       </app-dialog-container>
                                    </div>
                                 </app-term-of-transfer-agreement>
                              </app-payment-method-edit-debit-card>
                           </div>
                        </div>


                     </div>
               </div>
               <!----><!---->
            </div>
            <!----><!----><app-payment-activation-fee>
               <p-dialog showeffect="fade" appendto="body" styleclass="choose-loan-account" class="ng-tns-c48-4"><!---->
               </p-dialog></app-payment-activation-fee></app-payment-method>
         </div>
   </div>
   <!----><!---->
</div></app-myprofile><!---->

</div>
</div>





<?php get_footer(); ?>