<?php  
/**
* Template Name: personal info
**/
get_header(); ?> 


<br> <br><br><br><br>

              <div class="container-fluid router-outlet router-outlet-bg router-outlet-consumer">
                <div  class="row">
                  <router-outlet ></router-outlet
                  ><app-myprofile class="ng-star-inserted"><div class="container pt-15 pb-30">
                     
                      <div class="row ng-star-inserted">
                        <app-personal-infomation _nghost-kni-c126=""
                          ><app-user-info
                            _ngcontent-kni-c126=""
                            _nghost-kni-c124=""
                            ><div
                              
                              class="col-md-12 font-20 font-weight-600 mb-20 color-gray-1200"
                            >
                              <?php 


                                $current_user = wp_get_current_user()->user_login;
                                echo $current_user ; 
                                
                                
                                // print_r(wp_get_current_user()) ;


                                global $wpdb;
                                $user_name = $current_user; // Replace with the actual user_name
                                $query = $wpdb->prepare("
                                    SELECT *
                                    FROM {$wpdb->prefix}custom_registration
                                    WHERE user_name = %s
                                ", $user_name);
                                 $user_data = $wpdb->get_row($query);


       

// $user_name = $current_user; // Replace with the actual user_name
// $user = get_user_by('login', $user_name);
// if ($user) {
//     $user_id = $user->ID;
// } 
// $new_email = 'newemail123@example.com'; // Replace with the new email address
// // Update the email address
// $user_data_update = array(
//     'ID'         => $user_id,
//     'user_email' => $new_email,
// );

// $update_result = wp_update_user($user_data_update);





                              ?>
                            </div>
                            <div  class="col-md-6 mb-15">
                              <div  class="cs-card">
                                <div
                                  
                                  class="font-weight-600 cs-card-header"
                                >
                                  <div >
                                    Personal Info 
                                  </div>
                                </div>
                                <div
                                  
                                  class="cs-card-content"
                                >
                                  <div >
                                    <div
                                      
                                      class="info-item"
                                    >
                                      <div
                                        
                                        class="relative ng-star-inserted"
                                      > 
                                      <a href="#" id="edit-address-icon">
                                        <img  src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/edit-24px.svg" alt="edit-icon" class="edit-icon"/> 
                                      </a>

                                      <a href="#" id="edit-address-icon-tick" class="d-none" ajax_url="<?php echo admin_url('admin-ajax.php');?>" username="<?php echo $current_user; ?>">
                                        <img  src="https://cryptocredit.pro/customer-account/wp-content/uploads/2023/09/tick.jpg" alt="edit-icon" height="20px" class="edit-icon"/> 
                                      </a>

                                        <div  class="info">
                                          <div  class="color-gray-800 font-12 mb-5">
                                            Home Address
                                          </div> 

                                          <div  class="color-gray-1200 font-20 font-weight-600">
                                          <p class="edit-address-text"> <?php echo $user_data->address; ?> </p>  
                                          <input type="text" value="<?php echo $user_data->address; ?>" class="d-none edit-address" id="edit-address" > 
                                          </div> 

                                          <div
                                            
                                            class="color-gray-1200 font-12 font-weight-600"
                                          ></div>
                                        </div>
                                      </div>
                                      <!----><!---->
                                    </div>
                                    <div  class="info-item" >
                                      <div  class="relative ng-star-inserted">
                                        <!-- <img  src="<?php echo get_template_directory_uri(); ?>/./personalinfo_files/edit-24px.svg"
                                          alt="edit-icon" class="edit-icon"/> -->
                                        <div class="info">
                                          <div class="color-gray-800 font-12 mb-5">
                                            Phone
                                          </div>
                                          <div class="color-gray-1200 font-12 font-weight-600">

                                          <p class="edit-address-text"> <?php echo $user_data->phone; ?> </p>  
                                          <input type="text" value="<?php echo $user_data->phone; ?>" class="d-none edit-address" id="edit-phone" >


                                          <?php // echo $user_data->phone; ?>
                                          
                                          </div>
                                        </div>
                                      </div>
                                      <!----><!---->
                                    </div>
                                    <div
                                      
                                      class="info-item"
                                    >
                                      <div
                                        
                                        class="relative ng-star-inserted"
                                      >
                                        <!---->
                                        <div
                                          
                                          class="ng-star-inserted"
                                        >
                                          <!-- <img
                                            src="<?php echo get_template_directory_uri(); ?>/./personalinfo_files/edit-24px.svg"
                                            alt="edit-icon"
                                            class="edit-icon"
                                          /> -->
                                        </div>
                                        <!---->
                                        <div
                                          
                                          class="info"
                                        >
                                          <div class="color-gray-800 font-12 mb-5">
                                            Email
                                          </div>
                                          <div class="color-gray-1200 font-12 font-weight-600 ng-star-inserted">
                                          <?php // echo $user_data->email; ?>

                                          <p class="edit-address-text"> <?php echo $user_data->email; ?> </p>  
                                          <input type="text" value="<?php echo $user_data->email; ?>" class="d-none edit-address" id="edit-email" >


                                          </div>
                                          <!----><!---->
                                        </div>
                                      </div>
                                      <!----><!---->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div></app-user-info
                          ><app-password>
                            <div class="col-md-6 mb-15">
                              <div class="cs-card">
                                <div
                                 
                                  class="font-weight-600 cs-card-header">
                                  <div>Password</div>
                                </div>
                                <div class="cs-card-content">
                                  <div>

                                    <div
                                     
                                      class="info-item ng-star-inserted"
                                    >
                                      <div
                                       
                                        class="relative"
                                      >
                                         <!--  <img src="<?php echo get_template_directory_uri(); ?>/./personalinfo_files/edit-24px.svg" alt="Edit" class="edit-icon"/> -->
                                        <div
                                         
                                          class="info"
                                        >
                                          <div class="color-gray-800 font-12 mb-5">
                                            Change your password <br>

                                            <p class="edit-address-text"> <?php echo $user_data->password; ?> </p>  
                                          <input type="text" value="<?php echo $user_data->password; ?>" class="d-none edit-address" id="edit-password" >



                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!----><!---->
                                  </div>
                                </div>
                              </div>
                            </div></app-password
                          ></app-personal-infomation
                        >
                      </div>
                      <!----><!----><!---->
                    </div></app-myprofile
                  ><!---->
                  
                  
                  
                
            
               
               
               
                  </div>
              </div>
             

<?php get_footer(); ?>