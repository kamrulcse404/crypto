<!DOCTYPE html>

<html lang="en" data-arp-injected="true" data-analytics-loaded="true">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!-- <script
      src="./crypto Strong_files/trellis-connect.js.download"
      data-testid="trellis-connect-script"
    ></script> -->




  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>

  <title>Credit Strong</title>
  <!--<base href="/">-->
  <base href="." />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
  <link rel="icon" type="image/png" sizes="32x32" href="https://apply.cryptocredit.pro/assets/favicon-self-service.png" />


  <?php include('css-file.php'); ?>

  <?php global $cryptocredit; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class() ?> id="rootBody" cz-shortcut-listen="true" wfd-invisible="true">

  <script wfd-invisible="true">
    setTimeout(() => {
      let node = document.createElement("script");
      node.id = "ze-snippet";
      node.src =
        "https://static.zdassets.com/ekr/snippet.js?key=05a5527b-cdfd-4392-9d01-27a8daba3477";
      node.type = "text/javascript";
      node.async = true;
      node.charset = "utf-8";
      document.getElementsByTagName("head")[0].appendChild(node);
    }, 10000);
  </script>
  <noscript>
    <iframe title="GTM" src="https://www.googletagmanager.com/ns.html?id=GTM-MZMG4DX" height="0" width="0" style="display: none; visibility: hidden"></iframe>
  </noscript>
  <app-root _nghost-mem-c19="" ng-version="9.1.13"><simple-notifications _ngcontent-mem-c19="">
      <div class="simple-notification-wrapper top right">
        <!---->
      </div>
    </simple-notifications><router-outlet _ngcontent-mem-c19=""></router-outlet><app-dashboard-section _nghost-mem-c139="" class="ng-star-inserted">
      <div _ngcontent-mem-c139="" class="dashboard-section">
        <div _ngcontent-mem-c139="" class="main-container flex-grow">
          <div _ngcontent-mem-c139="">
            <div _ngcontent-mem-c139="">
              <app-header-dashboard _ngcontent-mem-c139="" _nghost-mem-c88="">
                <div _ngcontent-mem-c88="" class="container-fluid">
                  <div _ngcontent-mem-c88="" class="fixed-header">
                    <div _ngcontent-mem-c88="" class="header-menu row">
                      <div _ngcontent-mem-c88="" class="col-md-3 col-sm-12 col-xs-12 flex pl-0 hidden-md hidden-lg items-center">


                        <div _ngcontent-mem-c88="" class="pr-16">
                          <i _ngcontent-mem-c88="" class="fa fa-bars text-24 cursor-pointer hidden-md hidden-lg header_bar_icon"></i>
                        </div>

                        <div _ngcontent-mem-c88="" class="flex justify-center-xs outline-none">
                          <img _ngcontent-mem-c88="" alt="logo-header 123" class="logo" src="<?php echo $cryptocredit['header-logo']['url']; ?>" />

                        </div>

                      </div>

                      <nav class="mobile-menu d-none" id="header_mobile_menu">
                        <ul class="menu-list">
                          <li><a href="<?php echo home_url(); ?>">Home</a></li>
                          <li><a href="<?php echo home_url('accounts'); ?>">Accounts</a></li>
                          <li><a href="<?php echo home_url('personal-info'); ?>">Personal Info</a></li>
                          <li><a href="<?php echo home_url('paymentmethod'); ?>">Payment Method</a></li>
                          <li><a href="<?php echo home_url('account-agreement'); ?>"> Account Agreement</a></li>
                          <li><a href="<?php echo home_url('help'); ?>">Help</a></li>
                          <li><a href="<?php echo home_url('memberships'); ?>"> Memberships </a></li>
                          <li><a href="<?php echo home_url('all-products'); ?>"> All Products </a></li>
                        </ul>

                      </nav>




                      <div _ngcontent-mem-c88="" class="col-md-12 hidden-sm hidden-xs flex pr-16 h-full">
                        <div _ngcontent-mem-c88="" class="flex-1 h-full">
                          <app-navbar _ngcontent-mem-c88="" _nghost-mem-c87="">
                            <div _ngcontent-mem-c87="" class="flex h-full justify-between items-center relative hidden-sm hidden-xs">
                              <div _ngcontent-mem-c87="" class="logo relative z-2">
                                <div _ngcontent-mem-c87="" class="flex justify-center-xs">
                                  <a _ngcontent-mem-c87="" href="<?php echo home_url(); ?>"><img _ngcontent-mem-c87="" alt="logo-header1" class="cursor-pointer" style="width: 60px" src="<?php echo get_template_directory_uri(); ?>/./images/logo.png" /></a>
                                </div>
                              </div>
                              <div _ngcontent-mem-c87="" class="absolute z-1 w-full h-full">
                                <?php
                                $current_user = wp_get_current_user()->user_login;

                                global $wpdb;
                                $results = $wpdb->get_results(
                                  $wpdb->prepare("SELECT is_member_active , membership_planning  FROM {$wpdb->prefix}custom_registration WHERE user_name = %s", $current_user)
                                );

                                $check_activity_membership = $results[0]->is_member_active;
                                $choosed_membership = $results[0]->membership_planning;



                                //  print_r($choosed_membership) ; 
                                ?>

                                <div _ngcontent-mem-c87="" class="main-menu flex justify-center h-full flex-1">
                                  <a _ngcontent-mem-c87="" class="menu-item active" href="<?php echo home_url(); ?>">
                                    Home
                                  </a>

                                  <?php if ($check_activity_membership == 1) { ?>
                                    <div _ngcontent-mem-c87="" class="menu-item position-relative">
                                      <span _ngcontent-mem-c87="" tabindex="0">
                                        <a href="<?php echo home_url('accounts'); ?>">Accounts</a></span></span><!---->

                                    </div>


                                    <!-- <a _ngcontent-mem-c87="" class="menu-item" href="<?php //echo home_url('score'); ?>">
                                      Credit Score
                                    </a> -->


                                  <?php } ?>

                                  <div _ngcontent-mem-c87="" class="menu-item">
                                    <span _ngcontent-mem-c87="">My Profile </span></span>
                                    <div _ngcontent-mem-c87="" class="sub-menu-container">
                                      <div _ngcontent-mem-c87="" class="sub-menu">
                                        <a _ngcontent-mem-c87="" class="sub-menu-item" href="<?php echo home_url('personal-info'); ?>"><span _ngcontent-mem-c87="">Personal Information</span></a><!----><a _ngcontent-mem-c87="" class="sub-menu-item" href="<?php echo home_url('paymentmethod'); ?>"><span _ngcontent-mem-c87="">Payment Methods</span></a><a _ngcontent-mem-c87="" class="sub-menu-item" href="<?php echo home_url('account-agreement'); ?>"><span _ngcontent-mem-c87="">Account Documents</span></a>
                                      </div>
                                    </div>
                                  </div>

                                  <?php if ($check_activity_membership == 1) { ?>
                                    <!-- <a _ngcontent-mem-c87="" id="btnRefAFriend" class="menu-item" href="refer.html">
                                      Refer a Friend
                                     </a> -->
                                    <a _ngcontent-mem-c87="" class="menu-item" href="<?php echo home_url('help'); ?>">
                                      Help
                                    </a>

                                  <?php } ?>



                                  <a _ngcontent-mem-c87="" class="menu-item" href="<?php echo home_url('memberships'); ?>">
                                    Memberships
                                  </a>

                                  <?php if ($check_activity_membership == 1) { ?>
                                    <a _ngcontent-mem-c87="" class="menu-item" href="<?php echo home_url('products'); ?>">
                                      Products
                                    </a>
                                  <?php } ?>

                                </div>
                              </div>
                              <div _ngcontent-mem-c87="" class="pull-right-menu relative z-2">
                                <div _ngcontent-mem-c87="" class="right-menu flex content-end items-center">
                                  <div _ngcontent-mem-c87="" class="mr-20 ng-star-inserted">
                                    <?php if ($choosed_membership) { ?>
                                      <button _ngcontent-mem-c87="" class="make-payment-stripe cs-btn-outline-yellow font-weight-800">
                                        Make a Payment
                                      </button>
                                    <?php } ?>
                                  </div>
                                  <!---->
                                  <div _ngcontent-mem-c87="" class="cursor-pointer font-weight-800 font-12 gray-color-1400">
                                    <a href="<?php echo wp_logout_url(home_url()); ?>" class="cursor-pointer font-weight-800 font-12 gray-color-1400">
                                      Log out</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </app-navbar>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </app-header-dashboard>
            </div>




            <!-- sidebar for payment start  -->

            <?php include('templates/payment-sidebar.php'); ?>

            <!-- sidebar for payment end   -->