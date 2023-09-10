<?php  
/**
* Template Name: help
**/
get_header(); ?> 

              <div
                _ngcontent-ote-c139=""
                class="container-fluid router-outlet router-outlet-bg router-outlet-consumer"
              >
                <div _ngcontent-ote-c139="" class="row">
                  <router-outlet _ngcontent-ote-c139=""></router-outlet
                  ><app-help _nghost-ote-c177="" class="ng-star-inserted"
                    ><div _ngcontent-ote-c177="" class="container pt-15 pb-30">
                      <div _ngcontent-ote-c177="" class="row">
                        <div _ngcontent-ote-c177="" class="col-md-12 help">
                          <div
                            _ngcontent-ote-c177=""
                            class="text-24 text-center color-gray-1200 font-weight-bold help-title"
                          >
                            Help
                          </div>
                       
                       
                       



                        </div>
                        <div _ngcontent-ote-c177="" class="faq ng-star-inserted">
                          <div _ngcontent-ote-c177="" class="col-md-12 mt-30 faq-container">
                            <app-faq-overview _ngcontent-ote-c177="">
                              <app-faq _nghost-ote-c101="">
                              <div _ngcontent-ote-c101="" class="cs-card">
                                 <div _ngcontent-ote-c101="" class="card-title-normal"> Overview </div>
                                   <div _ngcontent-ote-c101="" class="content">
                              



<div class="accordion accordion-flush" id="accordionFlushExample">
<?php
$overview_category = get_term_by('slug', 'overview', 'faq_category');

$args = array(
    'post_type'      => 'faqs',
    'posts_per_page' => -1, // Display all posts
    'tax_query'      => array(
        array(
            'taxonomy' => 'faq_category',
            'field'    => 'term_id',
            'terms'    => $overview_category->term_id,
        ),
    ),
);

$faqs_query = new WP_Query($args);

if ($faqs_query->have_posts()) :
    while ($faqs_query->have_posts()) : $faqs_query->the_post();
        ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading-<?php the_ID(); ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="flush-collapse-<?php the_ID(); ?>">
                    <?php the_title(); ?>
                </button>
            </h2>
            <div id="flush-collapse-<?php the_ID(); ?>" class="accordion-collapse collapse show" aria-labelledby="flush-heading-<?php the_ID(); ?>" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><?php the_content(); ?></div>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No FAQs found.</p>';
endif;
?>
</div>





                                  </div>
                                </div>
                              </app-faq>
                              </app-faq-overview>
                          </div>



                          <div _ngcontent-ote-c177="" class="col-md-12 mt-15 faq-container">
                            <app-faq-applying _ngcontent-ote-c177="">
                              <app-faq _nghost-ote-c101="">
                                <div _ngcontent-ote-c101="" class="cs-card">
                                  <div _ngcontent-ote-c101="" class="card-title-normal">
                                    Applying
                                  </div>
                                  <div _ngcontent-ote-c101="" class="content">




<div class="accordion accordion-flush" id="accordionFlushExample2">
<?php
$overview_category = get_term_by('slug', 'applying', 'faq_category');

$args = array(
    'post_type'      => 'faqs',
    'posts_per_page' => -1, // Display all posts
    'tax_query'      => array(
        array(
            'taxonomy' => 'faq_category',
            'field'    => 'term_id',
            'terms'    => $overview_category->term_id,
        ),
    ),
);

$faqs_query = new WP_Query($args);

if ($faqs_query->have_posts()) :
    while ($faqs_query->have_posts()) : $faqs_query->the_post();
        ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading-<?php the_ID(); ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="flush-collapse-<?php the_ID(); ?>">
                    <?php the_title(); ?>
                </button>
            </h2>
            <div id="flush-collapse-<?php the_ID(); ?>" class="accordion-collapse collapse show" aria-labelledby="flush-heading-<?php the_ID(); ?>" data-bs-parent="#accordionFlushExample2">
                <div class="accordion-body"><?php the_content(); ?></div>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No FAQs found.</p>';
endif;
?>
</div>






                                  </div>
                                </div></app-faq
                              ></app-faq-applying
                            >
                          </div>







                          <div
                            _ngcontent-ote-c177=""
                            class="col-md-12 mt-15 faq-container"
                          >
                            <app-faq-reporting _ngcontent-ote-c177=""
                              ><app-faq _nghost-ote-c101=""
                                ><div _ngcontent-ote-c101="" class="cs-card">
                                  <div _ngcontent-ote-c101="" class="card-title-normal">
                                         Reporting
                                  </div>
                                  <div _ngcontent-ote-c101="" class="content">
                               
                                  


<div class="accordion accordion-flush" id="accordionFlushExample3">
<?php
$overview_category = get_term_by('slug', 'reporting', 'faq_category');

$args = array(
    'post_type'      => 'faqs',
    'posts_per_page' => -1, // Display all posts
    'tax_query'      => array(
        array(
            'taxonomy' => 'faq_category',
            'field'    => 'term_id',
            'terms'    => $overview_category->term_id,
        ),
    ),
);

$faqs_query = new WP_Query($args);

if ($faqs_query->have_posts()) :
    while ($faqs_query->have_posts()) : $faqs_query->the_post();
        ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading-<?php the_ID(); ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="flush-collapse-<?php the_ID(); ?>">
                    <?php the_title(); ?>
                </button>
            </h2>
            <div id="flush-collapse-<?php the_ID(); ?>" class="accordion-collapse collapse show" aria-labelledby="flush-heading-<?php the_ID(); ?>" data-bs-parent="#accordionFlushExample3">
                <div class="accordion-body"><?php the_content(); ?></div>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No FAQs found.</p>';
endif;
?>
</div>





                                  </div>
                                </div></app-faq
                              ></app-faq-reporting
                            >
                          </div>
                          <div
                            _ngcontent-ote-c177=""
                            class="col-md-12 mt-15 faq-container"
                          >
                            <app-faq-payments _ngcontent-ote-c177=""
                              ><app-faq _nghost-ote-c101=""
                                ><div _ngcontent-ote-c101="" class="cs-card">
                                  <div
                                    _ngcontent-ote-c101=""
                                    class="card-title-normal"
                                  >
                                    Payments
                                  </div>
                                  <div _ngcontent-ote-c101="" class="content">
                                  
<div class="accordion accordion-flush" id="accordionFlushExample4">
<?php
$overview_category = get_term_by('slug', 'payments', 'faq_category');

$args = array(
    'post_type'      => 'faqs',
    'posts_per_page' => -1, // Display all posts
    'tax_query'      => array(
        array(
            'taxonomy' => 'faq_category',
            'field'    => 'term_id',
            'terms'    => $overview_category->term_id,
        ),
    ),
);

$faqs_query = new WP_Query($args);

if ($faqs_query->have_posts()) :
    while ($faqs_query->have_posts()) : $faqs_query->the_post();
        ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading-<?php the_ID(); ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="flush-collapse-<?php the_ID(); ?>">
                    <?php the_title(); ?>
                </button>
            </h2>
            <div id="flush-collapse-<?php the_ID(); ?>" class="accordion-collapse collapse show" aria-labelledby="flush-heading-<?php the_ID(); ?>" data-bs-parent="#accordionFlushExample4">
                <div class="accordion-body"><?php the_content(); ?></div>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No FAQs found.</p>';
endif;
?>
</div>



                                  </div>
                                </div></app-faq
                              ></app-faq-payments
                            >
                          </div>
                        </div>
                        <!----><!---->
                      </div>
                    </div></app-help
                  ><!----><app-sidebar _ngcontent-ote-c139="" _nghost-ote-c89=""
                    ><p-sidebar
                      _ngcontent-ote-c89=""
                      styleclass="sidebar-container"
                      position="left"
                      class="ng-tns-c86-18"
                      ><div
                        role="complementary"
                        class="ng-tns-c86-18 ng-trigger ng-trigger-panelState sidebar-container ui-sidebar ui-widget ui-widget-content ui-shadow ui-sidebar-left"
                        aria-modal="true"
                        style="opacity: 0"
                      >
                        <a
                          tabindex="0"
                          role="button"
                          class="ng-tns-c86-18 ui-sidebar-close ui-corner-all ng-star-inserted"
                          style=""
                          ><span class="pi pi-times ng-tns-c86-18"></span></a
                        ><!---->
                        <div
                          _ngcontent-ote-c89=""
                          class="container-fluid app-sidebar bg-white ng-tns-c86-18"
                        >
                          <div _ngcontent-ote-c89="" class="row menu-container">
                            <div _ngcontent-ote-c89="" class="col-xs-12 p-0">
                              <div _ngcontent-ote-c89="" class="header-menu">
                                <div _ngcontent-ote-c89="">
                                  <i
                                    _ngcontent-ote-c89=""
                                    class="fas fa-times text-24 cursor-pointer"
                                  ></i>
                                </div>
                                <div
                                  _ngcontent-ote-c89=""
                                  class="flex flex-1 justify-end"
                                >
                                  <img
                                    _ngcontent-ote-c89=""
                                    alt="logo"
                                    style="width: 135px"
                                    src="./images/logo.png"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              _ngcontent-ote-c89=""
                              class="col-xs-12 p-0 overflow-auto flex-1"
                            >
                              <div
                                _ngcontent-ote-c89=""
                                class="menu-item border-bottom"
                              >
                                <div _ngcontent-ote-c89="">
                                  <a
                                    _ngcontent-ote-c89=""
                                    href="https://apply.creditstrong.com/Consumer/home"
                                    >Home</a
                                  >
                                </div>
                              </div>
                              <div _ngcontent-ote-c89="" class="menu-item">
                                <div _ngcontent-ote-c89="">
                                  <span
                                    _ngcontent-ote-c89=""
                                    class="ng-star-inserted"
                                    style=""
                                    >Accounts</span
                                  ><!----><!----><span
                                    _ngcontent-ote-c89=""
                                    class="ng-star-inserted"
                                    style=""
                                    ><i
                                      _ngcontent-ote-c89=""
                                      class="fas fa-chevron-right"
                                    ></i></span
                                  ><!---->
                                </div>
                                <p-accordion
                                  _ngcontent-ote-c89=""
                                  styleclass="side-bar-accordion"
                                  ><div
                                    role="tablist"
                                    class="side-bar-accordion ui-accordion ui-widget ui-helper-reset"
                                  >
                                    <p-accordiontab
                                      _ngcontent-ote-c89=""
                                      class="ng-tns-c84-19 ng-star-inserted"
                                      style=""
                                      ><div
                                        class="ui-accordion-header ui-state-default ui-corner-all ng-tns-c84-19 ui-state-disabled"
                                      >
                                        <a
                                          role="tab"
                                          class="ng-tns-c84-19"
                                          tabindex="-1"
                                          id="ui-accordiontab-4"
                                          aria-controls="ui-accordiontab-4-content"
                                          aria-expanded="false"
                                          ><span
                                            class="ui-accordion-toggle-icon ng-tns-c84-19 pi pi-fw pi-chevron-right"
                                          ></span
                                          ><span
                                            class="ui-accordion-header-text ng-tns-c84-19 ng-star-inserted"
                                          >
                                          </span
                                          ><!----><!----></a
                                        >
                                      </div>
                                      <div
                                        role="region"
                                        class="ui-accordion-content-wrapper ng-tns-c84-19 ng-trigger ng-trigger-tabContent ui-accordion-content-wrapper-overflown"
                                        id="ui-accordiontab-4-content"
                                        aria-hidden="true"
                                        aria-labelledby="ui-accordiontab-4"
                                        style="height: 0px"
                                      >
                                        <div
                                          class="ui-accordion-content ui-widget-content ng-tns-c84-19"
                                        >
                                          <div
                                            _ngcontent-ote-c89=""
                                            class="sub-menu-item ng-star-inserted"
                                            style=""
                                          >
                                            <a
                                              _ngcontent-ote-c89=""
                                              href="https://apply.creditstrong.com/Consumer/accounts?number=8A75312237"
                                              ><span _ngcontent-ote-c89="">
                                                Instal 1,010 </span
                                              ><sup _ngcontent-ote-c89=""
                                                ><span
                                                  _ngcontent-ote-c89=""
                                                  class="color-blue-700"
                                                >
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
                                  _ngcontent-ote-c89=""
                                  class="border-bottom height-0 ng-star-inserted"
                                  style=""
                                ></div>
                                <!---->
                              </div>
                              <div
                                _ngcontent-ote-c89=""
                                class="menu-item border-bottom"
                              >
                                <div _ngcontent-ote-c89="">
                                  <a
                                    _ngcontent-ote-c89=""
                                    href="https://apply.creditstrong.com/Consumer/credit-score"
                                    >Credit Score</a
                                  >
                                </div>
                              </div>
                              <div _ngcontent-ote-c89="" class="menu-item">
                                <div _ngcontent-ote-c89="">
                                  <span _ngcontent-ote-c89="">My Profile</span
                                  ><span _ngcontent-ote-c89=""
                                    ><i
                                      _ngcontent-ote-c89=""
                                      class="fas fa-chevron-right"
                                    ></i
                                  ></span>
                                </div>
                                <p-accordion
                                  _ngcontent-ote-c89=""
                                  styleclass="side-bar-accordion"
                                  ><div
                                    role="tablist"
                                    class="side-bar-accordion ui-accordion ui-widget ui-helper-reset"
                                  >
                                    <p-accordiontab
                                      _ngcontent-ote-c89=""
                                      class="ng-tns-c84-20 ng-star-inserted"
                                      style=""
                                      ><div
                                        class="ui-accordion-header ui-state-default ui-corner-all ng-tns-c84-20"
                                      >
                                        <a
                                          role="tab"
                                          class="ng-tns-c84-20"
                                          tabindex="0"
                                          id="ui-accordiontab-5"
                                          aria-controls="ui-accordiontab-5-content"
                                          aria-expanded="false"
                                          ><span
                                            class="ui-accordion-toggle-icon ng-tns-c84-20 pi pi-fw pi-chevron-right"
                                          ></span
                                          ><span
                                            class="ui-accordion-header-text ng-tns-c84-20 ng-star-inserted"
                                          >
                                          </span
                                          ><!----><!----></a
                                        >
                                      </div>
                                      <div
                                        role="region"
                                        class="ui-accordion-content-wrapper ng-tns-c84-20 ng-trigger ng-trigger-tabContent ui-accordion-content-wrapper-overflown"
                                        id="ui-accordiontab-5-content"
                                        aria-hidden="true"
                                        aria-labelledby="ui-accordiontab-5"
                                        style="height: 0px"
                                      >
                                        <div
                                          class="ui-accordion-content ui-widget-content ng-tns-c84-20"
                                        >
                                          <div
                                            _ngcontent-ote-c89=""
                                            class="sub-menu-item ng-tns-c84-20"
                                          >
                                            <a
                                              _ngcontent-ote-c89=""
                                              href="https://apply.creditstrong.com/Consumer/my-profile/personal-information"
                                            >
                                              Personal Information
                                            </a>
                                          </div>
                                          <!---->
                                          <div
                                            _ngcontent-ote-c89=""
                                            class="sub-menu-item ng-tns-c84-20"
                                          >
                                            <a
                                              _ngcontent-ote-c89=""
                                              href="https://apply.creditstrong.com/Consumer/my-profile/payment-method"
                                            >
                                              Payment Methods
                                            </a>
                                          </div>
                                          <div
                                            _ngcontent-ote-c89=""
                                            class="sub-menu-item ng-tns-c84-20"
                                          >
                                            <a
                                              _ngcontent-ote-c89=""
                                              href="https://apply.creditstrong.com/Consumer/my-profile/account-agreement"
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
                                  _ngcontent-ote-c89=""
                                  class="border-bottom height-0 ng-star-inserted"
                                  style=""
                                ></div>
                                <!---->
                              </div>
                              <div
                                _ngcontent-ote-c89=""
                                class="menu-item border-bottom"
                              >
                                <div _ngcontent-ote-c89="">
                                  <a _ngcontent-ote-c89="" href=""
                                    >Refer a Friend
                                  </a>
                                </div>
                              </div>
                              <div
                                _ngcontent-ote-c89=""
                                class="menu-item border-bottom menu-item-active"
                              >
                                <div _ngcontent-ote-c89="">
                                  <a _ngcontent-ote-c89="" href="">Help</a>
                                </div>
                              </div>
                              <div _ngcontent-ote-c89="" class="p-30">
                                <div
                                  _ngcontent-ote-c89=""
                                  class="pl-30 pr-30 ng-star-inserted"
                                  style=""
                                >
                                  <button
                                    _ngcontent-ote-c89=""
                                    class="cs-btn-outline-yellow w-full font-weight-800"
                                  >
                                    Make a Payment
                                  </button>
                                </div>
                                <!---->
                                <div
                                  _ngcontent-ote-c89=""
                                  class="pl-30 pr-30 mt-15"
                                >
                                  <button
                                    _ngcontent-ote-c89=""
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
                  ><app-payment _ngcontent-ote-c139="" _nghost-ote-c138=""
                    ><p-sidebar
                      _ngcontent-ote-c138=""
                      styleclass="make-payment-container"
                      position="right"
                      class="ng-tns-c86-21"
                      ><div
                        role="complementary"
                        class="ng-tns-c86-21 ng-trigger ng-trigger-panelState make-payment-container ui-sidebar ui-widget ui-widget-content ui-shadow ui-sidebar-right"
                        aria-modal="true"
                        style="opacity: 0"
                      >
                        <a
                          tabindex="0"
                          role="button"
                          class="ng-tns-c86-21 ui-sidebar-close ui-corner-all ng-star-inserted"
                          style=""
                          ><span class="pi pi-times ng-tns-c86-21"></span></a
                        ><!---->
                        <div
                          _ngcontent-ote-c138=""
                          class="flex h-full justify-center items-center ng-tns-c86-21"
                        >
                          <div _ngcontent-ote-c138="" class="scroll-container">
                            <div _ngcontent-ote-c138="" class="flex-container">
                              <div
                                _ngcontent-ote-c138=""
                                class="ng-star-inserted"
                                style=""
                              >
                                <!----><!---->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div></p-sidebar
                    ></app-payment
                  >
                </div>
              </div>











<?php get_footer(); ?>