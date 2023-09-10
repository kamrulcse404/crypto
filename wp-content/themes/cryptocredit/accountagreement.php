<?php  
/**
* Template Name: Account agreement     
**/
get_header(); 
global $cryptocredit;
?> 



              <div
                
                class="container-fluid router-outlet router-outlet-bg router-outlet-consumer"
              >
                <div  class="row">
                  <router-outlet ></router-outlet
                  ><app-myprofile class="ng-star-inserted"
                    ><div class="container pt-15 pb-30">
                    
                      <!----><!---->
                      <div class="row ng-star-inserted">
                        <div class="col-md-12">
                          <app-account-agreements _nghost-kni-c143=""
                            ><div
                              
                              class="container ng-star-inserted"
                            >
                              <div  class="row">
                                <div
                                  
                                  class="col-md-6 mt-30 col-md-offset-3 ng-star-inserted"
                                >


                                <?php  
                                        $current_user = wp_get_current_user()->user_login;
                                        global $wpdb;
                                        $db_query = $wpdb->prepare(
                                            "SELECT * FROM {$wpdb->prefix}custom_registration WHERE user_name = %s",
                                            $current_user
                                        ); 
                                        $results = $wpdb->get_results($db_query);
                                        $current_products = isset($results[0]->added_products) ? $results[0]->added_products : '';

                                        // print_r(json_decode($current_products,true)) ;


                                        $added_products = json_decode($current_products,true) ;

                                    if($added_products){
                                     foreach ($added_products as $current_product){

                                     
                                  ?>


                                  <div  class="cs-card">
                                    <div class="card-title-normal">
                                      <div class="flex product-item">
                                        <div class="product-icon flex items-center">
                                         
                                        </div>
                                        <div >
                                          <div
                                            
                                            class="product-info flex-1"
                                          >
                                            <div >
                                              <span class="font-16 color-gray-900 font-weight-700">
                                                <?php echo get_the_title($current_product);?> </span ><span
                                                
                                                class="font-12 color-gray-800 font-weight-700 ng-star-inserted"></span
                                              ><!---->
                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div>



                                    

                                      <div  class="content ng-star-inserted contract_div_main">
                                         <div  class="contract">
                                        
                                        
                                        <div class="contract_div_tv">
                                          <div  class="contract-icon">
                                              <img
                                                alt="Contract"
                                                src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/loan-contracts.svg"
                                              />
                                            </div>
                                            <div  class="contract-name font-weight-600 text-12">
                                                Loan Agreement 
                                            </div> 
                                        </div>
                                        


                                          <div  id="contract-download" class="contract-download">
                                           <a target="blank" href="<?php echo get_post_meta($current_product,'account-loan', true); ?>"> 
                                              <img  alt="Download" src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/download-24px.svg"/>
                                           </a>
                                          </div>
                                        </div>
                                      </div>




                                      <div  class="content ng-star-inserted contract_div_main">
                                      <div  class="contract">
                                      <div class="contract_div_tv">
                                         <div  class="contract-icon">
                                            <img  alt="Contract"
                                              src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/saving-contracts.svg"/>
                                          </div>
                                          <div  class="contract-name font-weight-600 text-12">
                                            Savings Agreement
                                          </div>
                                        </div>



                                          <div id="contract-download" class="contract-download">
                                           <a target="blank" href="<?php echo get_post_meta($current_product,'account-savings', true); ?>"> 
                                              <img  alt="Download" src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/download-24px.svg"/>
                                           </a>
                                          </div>
                                        </div>
                                      </div>


                                      <div  class="content ng-star-inserted contract_div_main">
                                        <div  class="contract" >

                                        <div class="contract_div_tv">
                                          <div  class="contract-icon">
                                            <img  alt="Contract"
                                              src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/campaign-24px.svg"/>
                                          </div>
                                          <div  class="contract-name font-weight-600 text-12">
                                            Additional Disclosures
                                          </div>
                                        </div>



                                          <div
                                            
                                            id="contract-download"
                                            class="contract-download"
                                          >
                                          <a target="blank" href="<?php echo get_post_meta($current_product,'account-additional', true); ?>"> 
                                              <img  alt="Download" src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/download-24px.svg"/>
                                           </a>
                                          </div>
                                        </div>
                                      </div>



                                      <div  class="content ng-star-inserted contract_div_main">
                                        <div  class="contract" >

                                        <div class="contract_div_tv">
                                          <div  class="contract-icon">
                                            <img  alt="Contract"
                                              src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/campaign-24px.svg"/>
                                          </div>
                                          <div  class="contract-name font-weight-600 text-12">
                                             Statements 
                                          </div>
                                        </div>



                                          <div id="contract-download" class="contract-download">
                                            <a target="blank" href="<?php echo get_post_meta($current_product,'account-statements', true); ?>"> 
                                              <img  alt="Download" src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/download-24px.svg"/>
                                           </a>
                                          </div>
                                        </div>
                                      </div>



                                      <!---->
                                    </div>
                                    <div
                                      
                                      class="contract-statements"
                                    >
                                      
                                      
                                    </div>
                                  </div>



                                  <?php }  }else{ ?> 

                                    <br> <br> <br> <br> <br>
     
        <h2 class="text-center"> You have no selected products now. Go to the <a href="<?php echo home_url('all-products');?>">Products</a> Page now </h2> 
       
                                           

                              <?php     } ?>
                                </div>
                                <!----><!---->
                              </div>
                            </div>
                            <!----><!----></app-account-agreements
                          >
                        </div>
                      </div>
                      <!---->
                    </div></app-myprofile>
                    <!---->
                  
              
                 
                </div>
              </div>

              
<?php get_footer(); ?>