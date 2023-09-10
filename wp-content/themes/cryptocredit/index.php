<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package metaswiss
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

global $cryptocredit ;

?>


<!-- index page start  -->

<div _ngcontent-mem-c139="" class="container-fluid router-outlet router-outlet-bg router-outlet-consumer">
                <div _ngcontent-mem-c139="" class="row">
                  <router-outlet _ngcontent-mem-c139=""></router-outlet
                  ><app-home _nghost-mem-c166="" class="ng-star-inserted"
                    ><div _ngcontent-mem-c166="" class="container pt-15 pb-30">
                      <!---->
                      <div
                        _ngcontent-mem-c166=""
                        class="row block-md flex-xs flex-column-reverse-xs flex-sm flex-column-reverse-sm"
                      >
                        <div _ngcontent-mem-c166="" class="col-md-3">
                          <div
                            _ngcontent-mem-c166=""
                            class="mb-15 hide-greeting"
                          >
                           
                            
                            <!----><!---->
                          </div>
                          <div
                            _ngcontent-mem-c166=""
                            class="mb-15 ng-star-inserted"
                          >
                            <app-raf-default-tile class="d-none"
                              _ngcontent-mem-c166=""
                              _nghost-mem-c113=""
                              ><div
                                _ngcontent-mem-c113=""
                                class="cs-card border-blue bg-blue"
                              >
                                <div
                                  _ngcontent-mem-c113=""
                                  class="card-icon card-icon-blue"
                                >
                                  <span
                                  class="fa-solid fa-volume-high"
                                  ></span>
                                  <!-- <i class="fa-solid fa-volume-high"></i> -->
                                </div>
                                <div
                                  _ngcontent-mem-c113=""
                                  class="card-content"
                                >
                                  <div
                                    _ngcontent-mem-c113=""
                                    class="color-white font-14 text-center mb-0"
                                  >
                                    Credit Strong Referral Program
                                  </div>
                                  <div
                                    _ngcontent-mem-c113=""
                                    class="color-white font-12 text-center mb-10 font-200"
                                  >
                                    Earn up to $10 per referral while helping
                                    your family &amp; friends build credit and
                                    savings!
                                  </div>
                                  <div
                                    _ngcontent-mem-c113=""
                                    class="color-white font-8 text-center mb-10 font-200"
                                  >
                                    These are the
                                    <span
                                      _ngcontent-mem-c113=""
                                      class="cursor-pointer"
                                      >Terms and Conditions</span
                                    >
                                    for the Credit Strong refer a Friend
                                    program. You can choose to opt-out if you do
                                    not want to participate by clicking here.
                                  </div>
                                  <button
                                    _ngcontent-mem-c113=""
                                    id="btnStartEarning"
                                    class="cs-btn-white custom-btn w-full"
                                  >
                                    <span _ngcontent-mem-c113=""
                                      >Start earning</span
                                    >
                                  </button>
                                </div>
                              </div>
                              <app-term-and-conditions-modal
                                _ngcontent-mem-c113=""
                                _nghost-mem-c91=""
                                ><div
                                  _ngcontent-mem-c91=""
                                  class="term-and-conditions-modal"
                                >
                                  <app-dialog-container
                                    _ngcontent-mem-c91=""
                                    _nghost-mem-c55=""
                                    ><p-dialog
                                      _ngcontent-mem-c55=""
                                      showeffect="fade"
                                      header=""
                                      appendto="body"
                                      styleclass="sign-up-dialog"
                                      class="ng-tns-c48-39"
                                      ><!----></p-dialog
                                    ></app-dialog-container
                                  >
                                </div></app-term-and-conditions-modal
                              ></app-raf-default-tile
                            >
                          </div>
                          <!----><!---->
                          <div
                            _ngcontent-mem-c166=""
                            class="mb-15 hidden-xs hidden-sm"
                          >

<?php 
 
 $current_user = wp_get_current_user()->user_login;
 global $wpdb;
 $results = $wpdb->get_results(
  $wpdb->prepare("SELECT is_member_active , membership_planning  FROM {$wpdb->prefix}custom_registration WHERE user_name = %s", $current_user)
 );

$check_activity_membership = $results[0]->is_member_active ;

if($check_activity_membership==1){



?>



                            <app-account-product-exploration _ngcontent-mem-c166="" _nghost-mem-c99=""><div
                                _ngcontent-mem-c99=""
                                class="cs-card bg-yellow border-yellow"
                              >
                                <div
                                  _ngcontent-mem-c99=""
                                  class="card-icon card-icon-yellow"
                                >
                                  <img
                                    _ngcontent-mem-c99=""
                                    src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/product-exploration.svg"
                                    alt=""
                                    class="icon-size-30"
                                  />
                                </div>
                                <div _ngcontent-mem-c99="" class="text-center">
                                  <div
                                    _ngcontent-mem-c99=""
                                    translate=""
                                    class="color-yellow-300 font-18 font-700">                
                                     <?php echo $cryptocredit['hside_1_title']; ?>
                                  </div>
                                  <div
                                    _ngcontent-mem-c99=""
                                     translate=""
                                    class="font-16 font-200 mb-20 mt-20 ng-star-inserted" >
                                    <?php echo $cryptocredit['hside_1_desc']; ?>
                                  </div>
                                  <div
                                    _ngcontent-mem-c99=""
                                    class="ng-star-inserted"
                                  >
                                    <!---->
                                    
                                    
                                    <button
                                      _ngcontent-mem-c99=""
                                      class="cs-btn-yellow mr-10 mt-10 mb-10 w-full reapply-pending-progress ng-star-inserted"
                                    >
                                      <div _ngcontent-mem-c99="" translate="" class="reapply-label ng-star-inserted"> 
                                      <a class="text-white text-decoration-none" href="<?php echo home_url('all-products'); ?>"> 
                                      <?php echo $cryptocredit['hside_1_btn1title']; ?>
                                        
                                        <br _ngcontent-mem-c99="" />
                                        <span
                                          _ngcontent-mem-c99=""
                                          translate="">
                                          <?php echo $cryptocredit['hside_1_btn1desc']; ?>
                                           </span>
                                        </a>
                                      </div>
                                      <!----><!---->
                                      <div _ngcontent-mem-c99="" class="reapply-img">
                                        <img
                                          _ngcontent-mem-c99="" src="<?php echo $cryptocredit['hside_1_btn1img']['url']; ?>" alt="" />
                                      </div>
                                      
                                      </button
                                      
                                      
                                      
                                      
                                      
                                    ><!----><!----><button
                                      _ngcontent-mem-c99=""
                                      class="cs-btn-blue mr-10 mt-10 mb-10 w-full reapply-pending-progress ng-star-inserted"
                                    >
                                      <div
                                        _ngcontent-mem-c99=""
                                        translate=""
                                        class="reapply-label ng-star-inserted"> 
                                        <a class="text-white text-decoration-none" href="<?php echo home_url('products'); ?>"> 
                                          <?php echo $cryptocredit['hside_1_btn2title']; ?> 
                                        <br _ngcontent-mem-c99=""/><span _ngcontent-mem-c99="" translate="">
                                          <?php echo $cryptocredit['hside_1_btn2desc']; ?> 
                                        </span>
                                        </a>
                                      </div>

                                      <div _ngcontent-mem-c99="" class="reapply-img ng-star-inserted">
                                        <img _ngcontent-mem-c99="" src="<?php echo $cryptocredit['hside_1_btn2img']['url']; ?> " alt=""/>
                                      </div>
                                      <!----><!----><!----></button
                                    ><!---->
                                  </div>
                                  <!----><!----><!---->
                                </div>
                              </div>
                            </app-account-product-exploration>


                     <?php }  ?> 








                            
                          </div>
                          <div _ngcontent-mem-c166="" class="mb-15">
                            <app-open-sky
                              _ngcontent-mem-c166=""
                              _nghost-mem-c122="" class="d-none"
                              ><div _ngcontent-mem-c122="" class="cs-card">
                                <div
                                  _ngcontent-mem-c122=""
                                  class="card-title blue-border-bottom text-center"
                                >
                                  <div _ngcontent-mem-c122="" class="color-blue-700 font-16 font-700">
                                    OpenSky® Secured Visa® Credit Card
                                  </div>
                                </div>
                                <div
                                  _ngcontent-mem-c122=""
                                  class="flex flex-col mt-20"
                                >
                                  <div _ngcontent-mem-c122="" class="row pl-10">
                                    <div
                                      _ngcontent-mem-c122=""
                                      class="col-xs-3 flex flex-col items-center"
                                    >
                                      <div
                                        _ngcontent-mem-c122=""
                                        class="back-ground-img"
                                      >
                                        <img
                                          _ngcontent-mem-c122=""
                                          alt=""
                                          src="<?php echo get_template_directory_uri(); ?>./images/icon-credit-card.svg"
                                          width="80%"
                                        />
                                      </div>
                                    </div>
                                    <div
                                      _ngcontent-mem-c122=""
                                      class="col-xs-8 flex flex-col items-center pl-5 pr-5 mt-15"
                                    >
                                      <div _ngcontent-mem-c122="">
                                        <span
                                          _ngcontent-mem-c122=""
                                          class="font-12 pull-left font-600"
                                          >A Secured Credit Card That Builds
                                          Credit
                                          <img
                                            _ngcontent-mem-c122=""
                                            alt=""
                                            src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/fast.svg"
                                        /></span>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-mem-c122="" class="mt-10">
                                    <ul
                                      _ngcontent-mem-c122=""
                                      class="font-12 color-gray-800"
                                    >
                                      <li _ngcontent-mem-c122="">
                                        No credit check
                                      </li>
                                      <li _ngcontent-mem-c122="">
                                        Security deposit required
                                      </li>
                                    </ul>
                                  </div>
                                  <div _ngcontent-mem-c122="" class="mt-10">
                                    <div
                                      _ngcontent-mem-c122=""
                                      class="font-12 font-700"
                                    >
                                      <button
                                        _ngcontent-mem-c122=""
                                        class="cs-btn-blue w-full"
                                      >
                                        Start Now
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div></app-open-sky
                            >
                          </div>
                          <div _ngcontent-mem-c166=""> 



<?php 
 
 if($check_activity_membership==1){

?>

                            <app-market-place _ngcontent-mem-c166="" _nghost-mem-c117=""> 



                              <div _ngcontent-mem-c117="" class="cs-card mb-15">
                                <div _ngcontent-mem-c117="" class="slide-item">
                                  <div
                                    _ngcontent-mem-c117=""
                                    class="insurance-2 insurance-bg-2 ng-star-inserted"
                                  >
                                    <div
                                      _ngcontent-mem-c117=""
                                      class="p-15 pb-0"
                                    >
                                      <div _ngcontent-mem-c117=""class="slide-header color-blue-700 font-24 pb-15 font-weight-bold">
                                        <?php echo $cryptocredit['hside_2_title']; ?>
                                      </div>
                                    </div>
                                    <div
                                      _ngcontent-mem-c117=""
                                      class="p-15 pb-0 font-14 font-weight-bold color-gray-1200"
                                    >
                                      <div
                                        _ngcontent-mem-c117=""
                                        class="pb-15 flex items-center"
                                      >
                                        <div
                                          _ngcontent-mem-c117=""
                                          class="mt-5 order-container"
                                        >
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order-border-before"
                                          ></div>
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order-border-after"
                                          ></div>
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order mr-10"
                                          >
                                            1
                                          </div>
                                        </div>
                                        <div
                                          _ngcontent-mem-c117=""
                                          class="font-14 font-weight-bold color-gray-1200 flex-1"
                                        >
                                        <?php echo $cryptocredit['hside_2_txt1']; ?>
                                        </div>
                                      </div>
                                      <div
                                        _ngcontent-mem-c117=""
                                        class="pb-15 flex items-center"
                                      >
                                        <div
                                          _ngcontent-mem-c117=""
                                          class="mt-5 order-container"
                                        >
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order-border-before"
                                          ></div>
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order-border-after"
                                          ></div>
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order mr-10"
                                          >
                                            2
                                          </div>
                                        </div>
                                        <div
                                          _ngcontent-mem-c117=""
                                          class="font-14 font-weight-bold color-gray-1200 flex-1"
                                        >
                                        <?php echo $cryptocredit['hside_2_txt2']; ?>
                                        </div>
                                      </div>
                                      <div
                                        _ngcontent-mem-c117=""
                                        class="flex items-center"
                                      >
                                        <div
                                          _ngcontent-mem-c117=""
                                          class="mt-5 order-container"
                                        >
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order-border-before"
                                          ></div>
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order-border-after"
                                        ></div>
                                          <div
                                            _ngcontent-mem-c117=""
                                            class="order mr-10"
                                          >
                                            3
                                          </div>
                                        </div>
                                        <div
                                          _ngcontent-mem-c117=""
                                          class="font-14 font-weight-bold color-gray-1200 flex-1"
                                        >
                                        <?php echo $cryptocredit['hside_2_txt3']; ?>
                                        </div>
                                      </div>
                                    </div>
                                    <div _ngcontent-mem-c117="" class="p-15">
                                      <a
                                        
                                        class="cs-btn-blue w-full text-decoration-none text-white"
                                        href="<?php echo $cryptocredit['check-policy-link']; ?>">
                                        Check my policy
                                        </a>
                                    </div>
                                  </div>
                                  <!----><!---->
                                </div>
                              </div>

                            </app-market-place> 

                            <?php } ?>

                          </div>
                          <div
                            _ngcontent-mem-c166=""
                            class="mb-15 ng-star-inserted">
                            <app-interest-selection class="d-none"
                              _ngcontent-mem-c166=""
                              _nghost-mem-c121=""
                              ><div _ngcontent-mem-c121="" class="cs-card">
                                <div
                                  _ngcontent-mem-c121=""
                                  class="card-title blue-border-bottom"
                                >
                                  <span
                                    _ngcontent-mem-c121=""
                                    class="color-blue-700 font-24 font-500"
                                    >Interests</span
                                  >
                                </div>
                                <div
                                  _ngcontent-mem-c121=""
                                  class="interest-selection flex flex-col mt-20"
                                >
                                  <div
                                    _ngcontent-mem-c121=""
                                    class="font-16 font-weight-bold color-gray-1200 pull-left"
                                  >
                                    What financial topics are you most
                                    interested in?
                                  </div>
                                  <div
                                    _ngcontent-mem-c121=""
                                    class="font-12 color-gray-800 pull-left mt-10"
                                  >
                                    Select as many as you’d like. Join our
                                    waitlist so we can share future
                                    opportunities with you.
                                  </div>
                                  <div
                                    _ngcontent-mem-c121=""
                                    class="selection-boxs mt-20 ml-14 mr-14"
                                  >
                                    <div
                                      _ngcontent-mem-c121=""
                                      class="ng-star-inserted"
                                    >
                                      <div
                                        _ngcontent-mem-c121=""
                                        class="flex flex-col"
                                      >
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="flex justify-between items-center boxs-item cursor-pointer"
                                        >
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex items-center"
                                          >
                                            <img
                                              _ngcontent-mem-c121=""
                                              alt=""
                                              class="box-image"
                                              src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/acb-interest-car.svg"
                                            /><span
                                              _ngcontent-mem-c121=""
                                              class="font-12 color-gray-1200"
                                              >Auto Loans</span>

                                             

                                          </div>
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex text-right"
                                          >
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                         </div>

                                          </div>
                                        </div>
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="vertical-seperate ng-star-inserted"
                                        ></div>
                                        <!---->
                                      </div>
                                    </div>
                                    <div
                                      _ngcontent-mem-c121=""
                                      class="ng-star-inserted"
                                    >
                                      <div
                                        _ngcontent-mem-c121=""
                                        class="flex flex-col"
                                      >
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="flex justify-between items-center boxs-item cursor-pointer"
                                        >
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex items-center"
                                          >
                                            <img
                                              _ngcontent-mem-c121=""
                                              alt=""
                                              class="box-image"
                                              src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/acb-interest-wallet.svg"
                                            /><span
                                              _ngcontent-mem-c121=""
                                              class="font-12 color-gray-1200"
                                              >Personal Loans</span
                                            >
                                          </div>
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex text-right"
                                          >
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                           </div>
                                          </div>
                                        </div>
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="vertical-seperate ng-star-inserted"
                                        ></div>
                                        <!---->
                                      </div>
                                    </div>
                                    <div
                                      _ngcontent-mem-c121=""
                                      class="ng-star-inserted"
                                    >
                                      <div
                                        _ngcontent-mem-c121=""
                                        class="flex flex-col"
                                      >
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="flex justify-between items-center boxs-item cursor-pointer"
                                        >
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex items-center"
                                          >
                                            <img
                                              _ngcontent-mem-c121=""
                                              alt=""
                                              class="box-image"
                                              src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/acb-interest-card.svg"
                                            /><span
                                              _ngcontent-mem-c121=""
                                              class="font-12 color-gray-1200"
                                              >Credit Cards</span
                                            >
                                          </div>
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex text-right"
                                          >
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                         </div>
                                          </div>
                                        </div>
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="vertical-seperate ng-star-inserted"
                                        ></div>
                                        <!---->
                                      </div>
                                    </div>
                                    <div
                                      _ngcontent-mem-c121=""
                                      class="ng-star-inserted"
                                    >
                                      <div
                                        _ngcontent-mem-c121=""
                                        class="flex flex-col"
                                      >
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="flex justify-between items-center boxs-item cursor-pointer"
                                        >
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex items-center"
                                          >
                                            <img
                                              _ngcontent-mem-c121=""
                                              alt=""
                                              class="box-image"
                                              src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/acb-interest-verify.svg"
                                            /><span
                                              _ngcontent-mem-c121=""
                                              class="font-12 color-gray-1200"
                                              >Life Insurance</span
                                            >
                                          </div>
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex text-right"
                                          >
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                         </div>
                                          </div>
                                        </div>
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="vertical-seperate ng-star-inserted"
                                        ></div>
                                        <!---->
                                      </div>
                                    </div>
                                    <div
                                      _ngcontent-mem-c121=""
                                      class="ng-star-inserted"
                                    >
                                      <div
                                        _ngcontent-mem-c121=""
                                        class="flex flex-col"
                                      >
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="flex justify-between items-center boxs-item cursor-pointer"
                                        >
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex items-center"
                                          >
                                            <img
                                              _ngcontent-mem-c121=""
                                              alt=""
                                              class="box-image"
                                              src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/acb-interest-insurance-home.svg"
                                            /><span
                                              _ngcontent-mem-c121=""
                                              class="font-12 color-gray-1200"
                                              >Property Insurance</span
                                            >
                                          </div>
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex text-right"
                                          >
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                         </div>
                                          </div>
                                        </div>
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="vertical-seperate ng-star-inserted"
                                        ></div>
                                        <!---->
                                      </div>
                                    </div>
                                    <div
                                      _ngcontent-mem-c121=""
                                      class="ng-star-inserted"
                                    >
                                      <div
                                        _ngcontent-mem-c121=""
                                        class="flex flex-col"
                                      >
                                        <div
                                          _ngcontent-mem-c121=""
                                          class="flex justify-between items-center boxs-item cursor-pointer"
                                        >
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex items-center"
                                          >
                                            <img
                                              _ngcontent-mem-c121=""
                                              alt=""
                                              class="box-image"
                                              src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/acb-interest-home.svg"
                                            /><span
                                              _ngcontent-mem-c121=""
                                              class="font-12 color-gray-1200"
                                              >Home Loans</span
                                            >
                                          </div>
                                          <div
                                            _ngcontent-mem-c121=""
                                            class="flex text-right"
                                          >
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                         </div>
                                          </div>
                                        </div>
                                        <!---->
                                      </div>
                                    </div>
                                    <!---->
                                  </div>
                                  <div
                                    _ngcontent-mem-c121=""
                                    class="text-center mt-20 mb-10"
                                  >
                                    <button
                                      _ngcontent-mem-c121=""
                                      class="mt-10 w-full cs-btn-outline-green">
                                      Contact me with Offers
                                    </button>
                                  </div>
                                </div>
                              </div></app-interest-selection
                            >
                          </div>
                          <!----><!---->
                          <div
                            _ngcontent-mem-c166=""
                            class="mb-15 hidden-md hidden-lg"
                          >
                            <div _ngcontent-mem-c166="" class="row m-0">
                            
                            
                        
                        
                        <?php  if($check_activity_membership==1){  ?>
                                    
                            
                              <app-account-product-exploration
                                _ngcontent-mem-c166=""
                                _nghost-mem-c99=""
                                ><div
                                  _ngcontent-mem-c99=""
                                  class="cs-card bg-yellow border-yellow"
                                >
                                  <div
                                    _ngcontent-mem-c99=""
                                    class="card-icon card-icon-yellow"
                                  >
                                    <img
                                      _ngcontent-mem-c99=""
                                      src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/product-exploration.svg"
                                      alt=""
                                      class="icon-size-30"
                                    />
                                  </div>
                                  <div
                                    _ngcontent-mem-c99=""
                                    class="text-center"
                                  >
                                    <div
                                      _ngcontent-mem-c99=""
                                      translate=""
                                      class="color-yellow-300 font-18 font-700"
                                    >
                                      
                                       <?php echo $cryptocredit['hside_1_title']; ?>
                                       
                                       
                                    </div>
                                    <div
                                      _ngcontent-mem-c99=""
                                      translate=""
                                      class="font-16 font-200 mb-20 mt-20 ng-star-inserted"> 
                                     <?php echo $cryptocredit['hside_1_desc']; ?> 
                                     
                                    </div>
                                    <div
                                      _ngcontent-mem-c99=""
                                      class="ng-star-inserted"
                                    >
                                      <!---->
                                      
                                      <a href="<?php echo home_url('all-products'); ?>"
                                        _ngcontent-mem-c99=""
                                        class="cs-btn-yellow mr-10 mt-10 mb-10 w-full reapply-pending-progress ng-star-inserted">
                                        <div
                                          _ngcontent-mem-c99=""
                                          translate=""
                                          class="reapply-label ng-star-inserted"
                                        > 
                                        
                                        <?php echo $cryptocredit['hside_1_btn1title']; ?>
                                          <br
                                            _ngcontent-mem-c99=""
                                          /><span
                                            _ngcontent-mem-c99=""
                                            translate=""
                                            >
                                            <?php echo $cryptocredit['hside_1_btn1desc']; ?>
                                            
                                            </span>
                                        </div>
                                        <!----><!---->
                                        <div
                                          _ngcontent-mem-c99=""
                                          class="reapply-img"
                                        >
                                          <img
                                            _ngcontent-mem-c99=""
                                            src="<?php echo $cryptocredit['hside_1_btn1img']['url']; ?>"
                                            alt=""
                                          />
                                        </div>
                                        </a>
                                        
                                        
                                        <!----><!----><a href="<?php echo home_url('all-products'); ?>" 
                                        _ngcontent-mem-c99=""
                                        class="cs-btn-blue mr-10 mt-10 mb-10 w-full reapply-pending-progress ng-star-inserted"
                                      >
                                        <div
                                          _ngcontent-mem-c99=""
                                          translate=""
                                          class="reapply-label ng-star-inserted"
                                        > 
                                        
                                        
                                     <?php echo $cryptocredit['hside_1_btn2title']; ?>
                                              
                                          
                                          <br
                                            _ngcontent-mem-c99=""
                                          /><span
                                            _ngcontent-mem-c99=""
                                            translate=""
                                            ><?php echo $cryptocredit['hside_1_btn2desc']; ?></span
                                          >
                                        </div>
                                        <div
                                          _ngcontent-mem-c99=""
                                          class="reapply-img ng-star-inserted"
                                        >
                                          <img
                                            _ngcontent-mem-c99=""
                                            src="<?php echo $cryptocredit['hside_1_btn2img']['url']; ?>"
                                            alt=""
                                          />
                                        </div>
                                        <!----><!----><!----></a>
                                        
                                        
                                        <!---->
                                    </div>
                                    <!----><!----><!---->
                                  </div>
                                </div>
                                </app-account-product-exploration>
                                
                                      <?php  }   ?>
                                
                                
                                
                                
                            </div>
                          </div>
                        </div>
                        <div _ngcontent-mem-c166="" class="col-md-9">
                          <div
                            _ngcontent-mem-c166=""
                            class="mb-15 hidden-md hidden-lg"
                          >
                            <rloc-greetings-tile
                              _ngcontent-mem-c166=""
                              _nghost-mem-c147=""
                              class="ng-star-inserted d-none"
                              ><div
                                _ngcontent-mem-c147=""
                                class="greetings-tile cs-card border-top-blue"
                              >
                                <div
                                  _ngcontent-mem-c147=""
                                  class="greetings-tile-title mb-15"
                                >
                                  <div
                                    _ngcontent-mem-c147=""
                                    class="font-weight-700 color-blue-700 font-size-title mr-15"
                                  >
                                    Revolv.
                                  </div>
                                  <div
                                    _ngcontent-mem-c147=""
                                    class="color-blue-700 font-14"
                                  >
                                    Build revolving credit,
                                    <br _ngcontent-mem-c147="" />
                                    without a credit card
                                  </div>
                                </div>
                                <div
                                  _ngcontent-mem-c147=""
                                  class="greetings-tile-content font-weight-700 font-14"
                                >
                                  <div _ngcontent-mem-c147="">
                                    <span
                                      _ngcontent-mem-c147=""
                                      class="icon-check"
                                    ></span
                                    ><span _ngcontent-mem-c147=""
                                      >Improve your utilization​</span
                                    >
                                  </div>
                                  <div _ngcontent-mem-c147="" class="mt-5">
                                    <span
                                      _ngcontent-mem-c147=""
                                      class="icon-check"
                                    ></span
                                    ><span _ngcontent-mem-c147=""
                                      >​Build credit and savings</span
                                    >
                                  </div>
                                  <div _ngcontent-mem-c147="" class="mt-5">
                                    <span
                                      _ngcontent-mem-c147=""
                                      class="icon-check"
                                    ></span
                                    ><span _ngcontent-mem-c147=""
                                      >​No monthly payment required</span
                                    >
                                  </div>
                                  <div _ngcontent-mem-c147="" class="mt-5">
                                    <span
                                      _ngcontent-mem-c147=""
                                      class="icon-check"
                                    ></span
                                    ><span _ngcontent-mem-c147=""
                                      >​Diversify credit mix</span
                                    >
                                  </div>
                                </div>
                                <div
                                  _ngcontent-mem-c147=""
                                  class="mt-15 w-full"
                                >
                                  <button
                                    _ngcontent-mem-c147=""
                                    class="button cs-btn-yellow w-full font-weight-700 custom-cs-btn"
                                  >
                                    Get Started
                                  </button>
                                </div>
                                <div _ngcontent-mem-c147="" class="mt-10">
                                  <a
                                    _ngcontent-mem-c147=""
                                    target="blank"
                                    class="learn-more color-blue-600 font-14"
                                    href="https://www.creditstrong.com/revolv-launch/"
                                  >
                                    Learn More
                                  </a>
                                </div>
                              </div></rloc-greetings-tile
                            ><!----><!---->
                          </div>
                          <div _ngcontent-mem-c166="" class="mb-15">




                          <?php 
 
 if($check_activity_membership==1){

?>



                            <app-progress-tracking
                              _ngcontent-mem-c166=""
                              _nghost-mem-c148=""
                              class="ng-star-inserted"
                              ><div _ngcontent-mem-c148="" class="cs-card">
                                <div
                                  _ngcontent-mem-c148=""
                                  class="progress-tracking"
                                >
                                  <div _ngcontent-mem-c148="" class="row">
                                    <div
                                      _ngcontent-mem-c148=""
                                      class="col-md-12 text-center progress-tracking__title"
                                    >
                                      Your Progress
                                    </div>
                                    <div
                                      _ngcontent-mem-c148=""
                                      class="col-md-12 text-center progress-tracking__sub-title"
                                    >
                                      What is your credit score goal?
                                    </div>
                                    <div
                                      _ngcontent-mem-c148=""
                                      class="col-md-12 text-center progress-tracking__description"
                                    >
                                      <p _ngcontent-mem-c148="">
                                        Tip! If you don’t know where to start,
                                        aim for 70 points above your current
                                        score.
                                      </p>
                                      <p _ngcontent-mem-c148="">
                                        You can always update your goal later.
                                      </p>
                                    </div>
                                    <div
                                      _ngcontent-mem-c148=""
                                      class="col-md-12 text-center progress-tracking__score flex justify-center"
                                    >
                                      <div _ngcontent-mem-c148="" class="left">
                                        <div
                                          _ngcontent-mem-c148=""
                                          class="credit_score_title"
                                        >
                                          Credit Score Goal
                                        </div>
                                        <div
                                          _ngcontent-mem-c148=""
                                          class="credit_score_number"
                                        >
                                          <input _ngcontent-mem-c148="" id="inputnumber_credit_score" inputmode="numeric" type="number" maxlength="3" class="ng-untouched ng-pristine ng-valid"/>
                                        </div>
                                      </div>
                                    
                                 


                                    </div>
                                    <div _ngcontent-mem-c148="" class="col-md-12 text-center flex justify-center btn_score mt-25">
                                      <button d_ngcontent-mem-c148="" id="credit_score_btn" class="cs-btn-green pt-10 pb-10 pl-75 pr-75">
                                        Set Credit Score Goal
                                      </button>
                                    </div>
                                  </div>
                                  <div
                                    _ngcontent-mem-c148=""
                                    id="line-chart"
                                  ></div>
                                </div></div>
                              
                              </app-progress-tracking>



   <div class="chart d-none" id="myjschart">
		<canvas id="myChart" class="" width="400" height="200"></canvas>
	</div>


         
  <div class="app-loan-account-class row">
      <?php  include('templates/home-loan-builder.php'); ?>
  </div>
                                            

                                
                            <?php  }else{ ?> 

                              <br> <br> <br> <br> <br>
     
     <h2 class="text-center"> You have no selected membership now. Go to the <a href="<?php echo home_url('memberships');?>">Membership</a> Page now </h2> 
    
                                      

                          <?php  } ?>

                                
                                
                                
                                
                                <!----><!---->
                          </div>
                          <div _ngcontent-mem-c166="" class="ng-star-inserted">
                            <div _ngcontent-mem-c166="" class="row">
                              <div
                                _ngcontent-mem-c166=""
                                class="col-md-12 pl-0 pr-0"
                              >
                                <app-home-accounts-grid _ngcontent-mem-c166=""
                                  ><div class="col-xs-12">
                                    <div class="ng-star-inserted">
                                      <div class="row ng-star-inserted">
                                        <app-home-account-tile
                                          class="ng-star-inserted">
                                          
                                          <!-- <div
                                            class=" p-0 mb-15 ng-star-inserted"> -->





                                            <!-- builer loan start   -->
                                              
                                            <div class="app-loan-account-class row">
                                               <?php  include('templates/home-loan-builder.php'); ?>
                                            </div>
                                            
                                              
                                           <!-- builer loan end  -->


                                           






                                            
                                          <!-- </div> -->
                                          <!----></app-home-account-tile
                                        ><!---->
                                      </div>
                                      <!----><!---->
                                    </div>
                                    <!---->
                                  </div></app-home-accounts-grid
                                >
                              </div>
                            </div>
                          </div>
                          <!---->
                        </div>
                      </div>
                      <!---->
                    </div>
                    <!----><!----><app-unsuccessful-payment-method-update
                      _ngcontent-mem-c166=""
                      _nghost-mem-c140=""
                      ><p-dialog
                        _ngcontent-mem-c140=""
                        showeffect="fade"
                        appendto="body"
                        styleclass="unsuccessful-payment-method-update-modal"
                        class="ng-tns-c48-30"
                        ><!----></p-dialog
                      ></app-unsuccessful-payment-method-update
                    ><app-referral-opt-out _ngcontent-mem-c166=""
                      ><div class="main">
                        <app-dialog-container _nghost-mem-c55=""
                          ><p-dialog
                            _ngcontent-mem-c55=""
                            showeffect="fade"
                            header=""
                            appendto="body"
                            styleclass="sign-up-dialog"
                            class="ng-tns-c48-31"
                            ><!----></p-dialog
                          ></app-dialog-container
                        >
                      </div></app-referral-opt-out
                    ><app-email-verification-step
                      _ngcontent-mem-c166=""
                      _nghost-mem-c141=""
                      ><p-dialog
                        _ngcontent-mem-c141=""
                        styleclass="custom-style-modal"
                        showeffect="fade"
                        appendto="body"
                        class="ng-tns-c48-32"
                        ><!----></p-dialog
                      ></app-email-verification-step
                    ><!----><rloc-advancement-modal
                      _ngcontent-mem-c166=""
                      _nghost-mem-c142=""
                      ><p-dialog
                        _ngcontent-mem-c142=""
                        showeffect="fade"
                        appendto="body"
                        styleclass="acb-dialog content-only dialog-payment payment-method-unpaid"
                        class="ng-tns-c48-33"
                        ><!----></p-dialog
                      ></rloc-advancement-modal
                    ><app-congratz _ngcontent-mem-c166="" _nghost-mem-c143=""
                      ><p-dialog
                        _ngcontent-mem-c143=""
                        styleclass="custom-style-modal"
                        showeffect="fade"
                        appendto="body"
                        class="ng-tns-c48-34"
                        ><!----></p-dialog
                      ></app-congratz
                    ><app-payment-method
                      _ngcontent-mem-c166=""
                      _nghost-mem-c144=""
                      ><p-dialog
                        _ngcontent-mem-c144=""
                        showeffect="fade"
                        appendto="body"
                        styleclass="acb-dialog content-only dialog-payment payment-method-unpaid"
                        class="ng-tns-c48-35"
                        ><!----></p-dialog
                      ></app-payment-method
                    ><app-business-credit-modal
                      _ngcontent-mem-c166=""
                      _nghost-mem-c127=""
                      ><p-dialog
                        _ngcontent-mem-c127=""
                        styleclass="business-credit-modal"
                        showeffect="fade"
                        appendto="body"
                        class="ng-tns-c48-36"
                        ><!----></p-dialog
                      ></app-business-credit-modal
                    ><app-payment-failed-modal
                      _ngcontent-mem-c166=""
                      _nghost-mem-c145=""
                      ><p-dialog
                        _ngcontent-mem-c145=""
                        showeffect="fade"
                        closeicon="pi pi-times"
                        appendto="body"
                        styleclass="acb-dialog content-only dialog-payment payment-method-unpaid"
                        class="ng-tns-c48-37"
                        ><!----></p-dialog
                      ></app-payment-failed-modal
                    ><!----><!----><!----><app-payment-membership-renewal
                      _ngcontent-mem-c166=""
                      _nghost-mem-c146=""
                      ><p-dialog
                        _ngcontent-mem-c146=""
                        showeffect="fade"
                        appendto="body"
                        styleclass="choose-loan-account"
                        class="ng-tns-c48-38"
                        ><!----></p-dialog
                      ></app-payment-membership-renewal
                    ></app-home
                  ><!----><app-sidebar _ngcontent-mem-c139="" _nghost-mem-c89=""
                    ><p-sidebar
                      _ngcontent-mem-c89=""
                      styleclass="sidebar-container"
                      position="left"
                      class="ng-tns-c86-26"
                      ><div
                        role="complementary"
                        class="ng-tns-c86-26 ng-trigger ng-trigger-panelState sidebar-container ui-sidebar ui-widget ui-widget-content ui-shadow ui-sidebar-left"
                        aria-modal="true"
                        style="opacity: 0"
                      >
                        <a
                          tabindex="0"
                          role="button"
                          class="ng-tns-c86-26 ui-sidebar-close ui-corner-all ng-star-inserted"
                          style=""
                          ><span class="pi pi-times ng-tns-c86-26"></span></a
                        ><!---->
                        <div
                          _ngcontent-mem-c89=""
                          class="container-fluid app-sidebar bg-white ng-tns-c86-26"
                        >
                          <div _ngcontent-mem-c89="" class="row menu-container">
                            <div _ngcontent-mem-c89="" class="col-xs-12 p-0">
                              <div _ngcontent-mem-c89="" class="header-menu">
                                <div _ngcontent-mem-c89="">
                                  <i
                                    _ngcontent-mem-c89=""
                                    class="fas fa-times text-24 cursor-pointer"
                                  ></i>
                                </div>
                                <div
                                  _ngcontent-mem-c89=""
                                  class="flex flex-1 justify-end"
                                >
                                  <img
                                    _ngcontent-mem-c89=""
                                    alt="logo"
                                    style="width: 135px"
                                    src="<?php echo get_template_directory_uri(); ?>./crypto Strong_files/logo.svg"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              _ngcontent-mem-c89=""
                              class="col-xs-12 p-0 overflow-auto flex-1"
                            >
                              <div
                                _ngcontent-mem-c89=""
                                class="menu-item border-bottom menu-item-active"
                              >
                                <div _ngcontent-mem-c89="">
                                  <a
                                    _ngcontent-mem-c89=""
                                    href=""
                                    >Home</a
                                  >
                                </div>
                              </div>
                              <div _ngcontent-mem-c89="" class="menu-item">
                                <div _ngcontent-mem-c89="">
                                  <span
                                    _ngcontent-mem-c89=""
                                    class="ng-star-inserted"
                                    style=""
                                    >Accounts</span
                                  ><!----><!----><span
                                    _ngcontent-mem-c89=""
                                    class="ng-star-inserted"
                                    style=""
                                    ><i
                                      _ngcontent-mem-c89=""
                                      class="fas fa-chevron-right"
                                    ></i></span
                                  ><!---->
                                </div>
                                <p-accordion
                                  _ngcontent-mem-c89=""
                                  styleclass="side-bar-accordion"
                                  ><div
                                    role="tablist"
                                    class="side-bar-accordion ui-accordion ui-widget ui-helper-reset"
                                  >
                                    <p-accordiontab
                                      _ngcontent-mem-c89=""
                                      class="ng-tns-c84-27 ng-star-inserted"
                                      style=""
                                      ><div
                                        class="ui-accordion-header ui-state-default ui-corner-all ng-tns-c84-27 ui-state-disabled"
                                      >
                                        <a
                                          role="tab"
                                          class="ng-tns-c84-27"
                                          tabindex="-1"
                                          id="ui-accordiontab-12"
                                          aria-controls="ui-accordiontab-12-content"
                                          aria-expanded="false"
                                          ><span
                                            class="ui-accordion-toggle-icon ng-tns-c84-27 pi pi-fw pi-chevron-right"
                                          ></span
                                          ><span
                                            class="ui-accordion-header-text ng-tns-c84-27 ng-star-inserted"
                                          >
                                          </span
                                          ><!----><!----></a
                                        >
                                      </div>
                                      <div
                                        role="region"
                                        class="ui-accordion-content-wrapper ng-tns-c84-27 ng-trigger ng-trigger-tabContent ui-accordion-content-wrapper-overflown"
                                        id="ui-accordiontab-12-content"
                                        aria-hidden="true"
                                        aria-labelledby="ui-accordiontab-12"
                                        style="height: 0px"
                                      >
                                        <div
                                          class="ui-accordion-content ui-widget-content ng-tns-c84-27"
                                        >
                                          <div
                                            _ngcontent-mem-c89=""
                                            class="sub-menu-item ng-star-inserted"
                                            style=""
                                          >
                                            <a
                                              _ngcontent-mem-c89=""
                                              href="accounts.html">
                                              <span _ngcontent-mem-c89="">Instal 1,010 </span
                                              ><sup _ngcontent-mem-c89=""><span _ngcontent-mem-c89="" class="color-blue-700"> 
                                                  &nbsp;-2237
                                                </span></sup
                                              ><!----></a
                                            >
                                          </div>
                                          <!----><!----><!---->
                                        </div>
                                      </div></p-accordiontab
                                    >
                                  </div></p-accordion
                                >
                                <div
                                  _ngcontent-mem-c89=""
                                  class="border-bottom height-0 ng-star-inserted"
                                  style=""
                                ></div>
                                <!---->
                              </div>
                              <div
                                _ngcontent-mem-c89=""
                                class="menu-item border-bottom"
                              >
                                <div _ngcontent-mem-c89="">
                                  <a
                                    _ngcontent-mem-c89=""
                                    href="https://apply.cryptocredit.pro/Consumer/credit-score"
                                    >Credit Score</a
                                  >
                                </div>
                              </div>
                              <div _ngcontent-mem-c89="" class="menu-item">
                                <div _ngcontent-mem-c89="">
                                  <span _ngcontent-mem-c89="">My Profile</span
                                  ><span _ngcontent-mem-c89=""
                                    ><i
                                      _ngcontent-mem-c89=""
                                      class="fas fa-chevron-right"
                                    ></i
                                  ></span>
                                </div>
                                <p-accordion
                                  _ngcontent-mem-c89=""
                                  styleclass="side-bar-accordion"
                                  ><div
                                    role="tablist"
                                    class="side-bar-accordion ui-accordion ui-widget ui-helper-reset"
                                  >
                                    <p-accordiontab
                                      _ngcontent-mem-c89=""
                                      class="ng-tns-c84-28 ng-star-inserted"
                                      style=""
                                      ><div
                                        class="ui-accordion-header ui-state-default ui-corner-all ng-tns-c84-28"
                                      >
                                        <a
                                          role="tab"
                                          class="ng-tns-c84-28"
                                          tabindex="0"
                                          id="ui-accordiontab-13"
                                          aria-controls="ui-accordiontab-13-content"
                                          aria-expanded="false"
                                          ><span
                                            class="ui-accordion-toggle-icon ng-tns-c84-28 pi pi-fw pi-chevron-right"
                                          ></span
                                          ><span
                                            class="ui-accordion-header-text ng-tns-c84-28 ng-star-inserted"
                                          >
                                          </span
                                          ><!----><!----></a
                                        >
                                      </div>
                                      <div
                                        role="region"
                                        class="ui-accordion-content-wrapper ng-tns-c84-28 ng-trigger ng-trigger-tabContent ui-accordion-content-wrapper-overflown"
                                        id="ui-accordiontab-13-content"
                                        aria-hidden="true"
                                        aria-labelledby="ui-accordiontab-13"
                                        style="height: 0px"
                                      >
                                        <div
                                          class="ui-accordion-content ui-widget-content ng-tns-c84-28"
                                        >
                                          <div
                                            _ngcontent-mem-c89=""
                                            class="sub-menu-item ng-tns-c84-28"
                                          >
                                            <a
                                              _ngcontent-mem-c89=""
                                              href="https://apply.cryptocredit.pro/Consumer/my-profile/personal-information"
                                            >
                                              Personal Information
                                            </a>
                                          </div>
                                          <!---->
                                          <div
                                            _ngcontent-mem-c89=""
                                            class="sub-menu-item ng-tns-c84-28"
                                          >
                                            <a
                                              _ngcontent-mem-c89=""
                                              href="https://apply.cryptocredit.pro/Consumer/my-profile/payment-method"
                                            >
                                              Payment Methods
                                            </a>
                                          </div>
                                          <div
                                            _ngcontent-mem-c89=""
                                            class="sub-menu-item ng-tns-c84-28"
                                          >
                                            <a
                                              _ngcontent-mem-c89=""
                                              href="https://apply.cryptocredit.pro/Consumer/my-profile/account-agreement"
                                            >
                                              Account Documents
                                            </a>
                                          </div>
                                          <!---->
                                        </div>
                                      </div></p-accordiontab
                                    >
                                  </div></p-accordion
                                >
                                <div
                                  _ngcontent-mem-c89=""
                                  class="border-bottom height-0 ng-star-inserted"
                                  style=""
                                ></div>
                                <!---->
                              </div>
                              <div
                                _ngcontent-mem-c89=""
                                class="menu-item border-bottom"
                              >
                                <div _ngcontent-mem-c89="">
                                  <a
                                    _ngcontent-mem-c89=""
                                    href="https://apply.cryptocredit.pro/Consumer/referred-friends"
                                    >Refer a Friend
                                  </a>
                                </div>
                              </div>
                              <div
                                _ngcontent-mem-c89=""
                                class="menu-item border-bottom"
                              >
                                <div _ngcontent-mem-c89="">
                                  <a
                                    _ngcontent-mem-c89=""
                                    href="https://apply.cryptocredit.pro/Consumer/help"
                                    >Help</a
                                  >
                                </div>
                              </div>
                              <div _ngcontent-mem-c89="" class="p-30">
                                <div
                                  _ngcontent-mem-c89=""
                                  class="pl-30 pr-30 ng-star-inserted"
                                  style=""
                                >
                                  <button
                                    _ngcontent-mem-c89=""
                                    class="cs-btn-outline-yellow w-full font-weight-800"
                                  >
                                    Make a Payment
                                  </button>
                                </div>
                                <!---->
                                <div
                                  _ngcontent-mem-c89=""
                                  class="pl-30 pr-30 mt-15"
                                >
                                  <button
                                    _ngcontent-mem-c89=""
                                    class="cs-btn-outline-none w-full font-weight-800"
                                  >
                                    Log out
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div></p-sidebar
                    ></app-sidebar
                  ><app-payment _ngcontent-mem-c139="" _nghost-mem-c138=""
                    ><p-sidebar
                      _ngcontent-mem-c138=""
                      styleclass="make-payment-container"
                      position="right"
                      class="ng-tns-c86-29"
                      ><div
                        role="complementary"
                        class="ng-tns-c86-29 ng-trigger ng-trigger-panelState make-payment-container ui-sidebar ui-widget ui-widget-content ui-shadow ui-sidebar-right"
                        aria-modal="true"
                        style="opacity: 0"
                      >
                        <a
                          tabindex="0"
                          role="button"
                          class="ng-tns-c86-29 ui-sidebar-close ui-corner-all ng-star-inserted"
                          style=""
                          ><span class="pi pi-times ng-tns-c86-29"></span></a
                        ><!---->
                        <div
                          _ngcontent-mem-c138=""
                          class="flex h-full justify-center items-center ng-tns-c86-29"
                        >
                          <div _ngcontent-mem-c138="" class="scroll-container">
                            <div _ngcontent-mem-c138="" class="flex-container">
                              <div
                                _ngcontent-mem-c138=""
                                class="ng-star-inserted"
                                style=""
                              >
                                <!----><!---->
                              </div>
                              <!----><!----><!----><!----><!----><!----><!---->
                            </div>
                          </div>
                        </div>
                      </div></p-sidebar
                    ></app-payment
                  >
                </div>
              </div>



<!--  index page end  -->





<?php get_footer(); ?>