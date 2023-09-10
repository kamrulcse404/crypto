      
      
<?php 
         

  $current_user = wp_get_current_user()->user_login; 
//   print_r($current_user) ;    
  global $wpdb; 
  $table_name = $wpdb->prefix . 'custom_registration'; // Use proper table prefix  
  $existing_products = $wpdb->get_var($wpdb->prepare("SELECT added_products FROM $table_name WHERE user_name = %s", $current_user));
  $product_array = json_decode($existing_products, true);

// print_r('hello') ;

// print_r($product_array) ;


if($product_array){
  $args = array(
    'post_type' => 'products', // Replace with your actual post type slug
    'post__in' => $product_array, // Array of specific post IDs
    'posts_per_page' => -1, // Display all posts of the product type
    'order' => 'ASC',
);


$query = new WP_Query($args);

if ($query->have_posts()) :
  while ($query->have_posts()) :
      $query->the_post();
?>





  <div class="col-xs-12 col-md-4">
      <h2 class="mt-4"><?php the_title(); ?></h2>
   <app-loan-account  _nghost-mem-c95="" class="ng-star-inserted" >
                                                <div _ngcontent-mem-c95=""
                                                  class="loan-account-container cs-card border-top-green mt-15 ng-star-inserted">
                                                  <div
                                                    _ngcontent-mem-c95=""
                                                    class="flex justify-between items-center"
                                                  >
                                                    <app-product-logo
                                                      _ngcontent-mem-c95=""
                                                      _nghost-mem-c93=""
                                                      ><div
                                                        _ngcontent-mem-c93=""
                                                        class="flex justify-center items-center content-center cursor-pointer"
                                                      >
                                                        <img
                                                          _ngcontent-mem-c93=""
                                                          alt=""
                                                          class="icon-size-32 mr-2 mb-2 d-none"
                                                          src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/production-build-and-save-icon.svg"
                                                        />
                                                        <div
                                                          _ngcontent-mem-c93=""
                                                          class="flex flex-col"
                                                        >
                                                          <span
                                                            _ngcontent-mem-c93=""
                                                            class="font-weight-700 line-height-16 font-16 color-gray-900"
                                                          >
                                                        <?php echo get_post_meta(get_the_id(), 'membership-subtitle', true);?>
                                                            <span
                                                              _ngcontent-mem-c93=""
                                                              class="font-weight-700 font-12 color-gray-800 line-height-12 ng-star-inserted"
                                                              >
                                                              $<?php echo get_post_meta(get_the_id(), 'membership-payment-limit', true);?>
                                                              </span
                                                            ><!----></span
                                                          ><span
                                                            _ngcontent-mem-c93=""
                                                            class="font-12 font-weight-700 line-height-12 ng-star-inserted"
                                                            style="color: rgb(47,132,198);">
                                                             <?php the_title() ?>
                                                            <span
                                                              _ngcontent-mem-c93=""
                                                              class="color-blue-1000 font-10 line-height-10 opacity-account-number"
                                                              ><span
                                                                _ngcontent-mem-c93="" class="color-blue-1000 font-10 line-height-10"></span>
                                                              
                                                            </span></span
                                                          ><!---->
                                                        </div>
                                                        <!---->
                                                      </div></app-product-logo
                                                    >
                                                    <div _ngcontent-mem-c95="">
                                                    <a href="<?php echo home_url('accounts');?>">
                                                      <i _ngcontent-mem-c95="" class="fa fa-chevron-right cursor-pointer font-20"></i>
                                                     </a>
                                                    </div>
                                                  </div>
                                                  <!---->
                                                  <div
                                                    _ngcontent-mem-c95=""
                                                    class="ng-star-inserted"
                                                  >
                                                    <div
                                                      _ngcontent-mem-c95=""
                                                      class="flex justify-center mt-15 d-none"
                                                    >
                                                      <div
                                                        _ngcontent-mem-c95=""
                                                        class="auto-pay-layout pt-4 pb-4 pl-14 pr-14 text-center flex auto-pay-layout-on"
                                                      >
                                                        <span _ngcontent-mem-c95="" class="color-gray-1200 font-10 d-block">
                                                          Autopay is
                                                          <span _ngcontent-mem-c95="" class="font-10 font-weight-600 color-green-400">On</span>
                                                            </span>
                                                      </div>
                                                    </div>
                                                    <div
                                                      _ngcontent-mem-c95=""
                                                      class="row mt-5"
                                                    >
                                                      <div
                                                        _ngcontent-mem-c95=""
                                                        class="col-xs-6 flex justify-center items-center"
                                                        style="
                                                          visibility: hidden;
                                                        "
                                                      >
                                                        <img
                                                          _ngcontent-mem-c95=""
                                                          src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/verified-paid-payment.svg"
                                                          alt=""
                                                          class="icon-size-10"
                                                        /><span
                                                          _ngcontent-mem-c95=""
                                                          class="color-green-300 font-weight-600 font-10"
                                                          >PAID</span
                                                        >
                                                      </div>
                                                    </div>
                                                    <div _ngcontent-mem-c95="">
                                                      <div
                                                        _ngcontent-mem-c95=""
                                                        class="row mt-5"
                                                      >
                                                        <div
                                                          _ngcontent-mem-c95=""
                                                          class="col-xs-12 flex flex-col items-center "
                                                        >
                                                          <span
                                                            _ngcontent-mem-c95=""
                                                            class="font-12 color-gray-1200 font-weight-600 text-center"
                                                            >Next payment</span
                                                          ><span
                                                            _ngcontent-mem-c95=""
                                                            class="paymentAmount-font-size color-gray-1200 font-weight-600"
                                                            >$<?php echo get_post_meta(get_the_id(), 'membership-payment', true);?></span
                                                          >
                                                          <div
                                                            _ngcontent-mem-c95=""
                                                            class="flex justify-around item-center w-full d-none"
                                                          >
                                                            <div
                                                              _ngcontent-mem-c95=""
                                                              class="flex flex-col justify-center items-center mr-10"
                                                            >
                                                              <span
                                                                _ngcontent-mem-c95=""
                                                                class="color-gray-1200 font-12"
                                                                >Due on</span
                                                              >
                                                            </div>
                                                            <span
                                                              _ngcontent-mem-c95=""
                                                              class="payment-date-layout flex flex-1"
                                                              ><div
                                                                _ngcontent-mem-c95=""
                                                                class="bg-yellow-400 color-yellow-300 font-10 border-right-seperate flex flex-1 justify-center items-center border-radius-top-bottom-left"
                                                              >
                                                                <span
                                                                  _ngcontent-mem-c95=""
                                                                  class="p-2"
                                                                  >SEP</span
                                                                >
                                                              </div>
                                                              <div
                                                                _ngcontent-mem-c95=""
                                                                class="font-10 color-gray-1200 flex flex-1 justify-center items-center text-center"
                                                              >
                                                                <span
                                                                  _ngcontent-mem-c95=""
                                                                  class="p-2"
                                                                  >05</span
                                                                >
                                                              </div></span
                                                            >
                                                          </div>
                                                        </div>
                                                        <div
                                                          _ngcontent-mem-c95=""
                                                          class="col-xs-6 flex flex-col items-center pl-5 pr-5 d-none"
                                                        >
                                                          <span
                                                            _ngcontent-mem-c95=""
                                                            class="font-12 color-gray-1200 font-weight-600"
                                                            >Progress</span
                                                          ><span
                                                            _ngcontent-mem-c95=""
                                                            class="paymentAmount-font-size color-gray-1200 font-weight-600"
                                                            >0
                                                          </span>
                                                          <div
                                                            _ngcontent-mem-c95=""
                                                            class="flex justify-around item-center w-full d-none"
                                                          >
                                                            <div
                                                              _ngcontent-mem-c95=""
                                                              class="flex flex-col justify-center"
                                                            >
                                                              <span
                                                                _ngcontent-mem-c95=""
                                                                class="color-gray-1200 font-12 text-center"
                                                                >On-Time Payment
                                                                Reported</span
                                                              >
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div _ngcontent-mem-c95="">
                                                      <div
                                                        _ngcontent-mem-c95=""
                                                        class="row mt-15"
                                                      >
                                                        <button _ngcontent-mem-c95=""
                                                          class="col-xs-8 col-xs-offset-2 button cs-btn-blue font-10 font-weight-600 line-height-14 make-payment-stripe">
                                                          Make a Payment
                                                        </button>
                                                      </div>
                                                      <div _ngcontent-mem-c95="" class="row">
                                                        <a href="<?php echo home_url('accounts');?>">
                                                        <span _ngcontent-mem-c95="" class="col-xs-8 col-xs-offset-2 color-blue-700 font-10 mt-10 text-center cursor-pointer font-weight-600">
                                                              Account Details
                                                        </span>
                                                        </a>
                                                      </div>
                                                    </div>
                                                    <div
                                                      _ngcontent-mem-c95=""
                                                      class="horizontal-seperator mt-15"
                                                    ></div>
                                                    <app-payment-progress
                                                      _ngcontent-mem-c95=""
                                                      _nghost-mem-c94="" class="d-none"
                                                      ><div
                                                        _ngcontent-mem-c94=""
                                                      >
                                                        <div
                                                          _ngcontent-mem-c94=""
                                                          class="flex justify-between items-center mt-10"
                                                        >
                                                          <span
                                                            _ngcontent-mem-c94=""
                                                            class="font-10 color-gray-1200 font-weight-600"
                                                            >Payment
                                                            Progress</span
                                                          >
                                                        </div>
                                                        <div
                                                          _ngcontent-mem-c94=""
                                                          class="flex justify-between mt-5"
                                                        >
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >S</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >O</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >N</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >D</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >J</span
                                                            >
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="flex flex-col items-center year-label ng-star-inserted"
                                                            >
                                                              <span
                                                                _ngcontent-mem-c94=""
                                                                class="font-10 color-blue-700 font-weight-600"
                                                                >2024</span
                                                              >
                                                            </div>
                                                            <!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >F</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >M</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >A</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >M</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >J</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >J</span
                                                            ><!---->
                                                          </div>
                                                          <div
                                                            _ngcontent-mem-c94=""
                                                            class="flex flex-col items-center flex-auto relative-layout pb-15 ng-star-inserted"
                                                          >
                                                            <!----><!---->
                                                            <div
                                                              _ngcontent-mem-c94=""
                                                              class="icon-size-10 flex justify-center items-center ng-star-inserted"
                                                            >
                                                              <div
                                                                _ngcontent-mem-c94=""
                                                                tooltip=""
                                                                position="bottom"
                                                                isscrollable="true"
                                                                tooltipclass="tooltip-custom"
                                                                minwidth="0px"
                                                                tooltiparrowclass="tooltip-arrow-none"
                                                                tooltiptextclass="tooltip-text"
                                                                class="gray-dot hidden-cursor fade-gray-dot"
                                                              ></div>
                                                            </div>
                                                            <!----><span
                                                              _ngcontent-mem-c94=""
                                                              class="color-gray-1400 font-10 mt-5 font-weight-600"
                                                              >A</span
                                                            ><!---->
                                                          </div>
                                                          <!---->
                                                        </div>
                                                      </div></app-payment-progress
                                                    >
                                                  </div>
                                                  <!---->
                                                </div>
                                                <!---->
                                              
  </app-loan-account> 


  </div>




  <?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'No memberships found.';
endif;


}


?>
  
