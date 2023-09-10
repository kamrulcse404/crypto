<?php
	defined( 'ABSPATH' ) || exit;
	
	// Basic Settings //

    Redux::setSection( $opt_name, array(
        'title' => 'Default Settings',
        'id' => 'basic-settings',
        'fields' => array(

            array(
                'id' => 'strip-api-publisher-key',
                'type' => 'text',
                'title' => __('Stripe Api Publisher Key', 'cryptocredit'),
                'subtitle' => __('write your stripe publisher key', 'cryptocredit'),
               
            ),

            array(
                'id' => 'strip-api-secret-key',
                'type' => 'text',
                'title' => __('Stripe Api secret Key', 'cryptocredit'),
                'subtitle' => __('write your stripe secret key', 'cryptocredit'),
               
            ),
          
         
            array(
                'id' => 'processing-loader-img-link',
                'type' => 'text',
                'title' => __('Proccessing loader img link', 'cryptocredit'),
                'subtitle' => __('Set the image link', 'cryptocredit'),
            ),

            array(
                'id' => 'link-cancel-url',
                'type' => 'text',
                'title' => __('Link Cancel Url', 'cryptocredit'),
                'subtitle' => __('Add Payment Cancle Url', 'cryptocredit'),
            ),

            array(
                'id' => 'link-success-url',
                'type' => 'text',
                'title' => __('Link Success Url', 'cryptocredit'),
                'subtitle' => __('Add Payment Success Url', 'cryptocredit'),
            ),
            
            array(
                'id' => 'link-domain-url',
                'type' => 'text',
                'title' => __('Link Domain Url', 'cryptocredit'),
                'subtitle' => __('Add Payment Success Redirect Url', 'cryptocredit'),
            ),  

            


        ),
    ) );


    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header Settings', 'cryptocredit' ),
        'id'               => 'web-basic',
        'icon'             => 'fa fa-cog',
		'fields'           => array(

          
          
       

            array(
                'id' => 'header-logo',
                'type' => 'media',
                'title' => __('Logo Image Uploader', 'cryptocredit'),
                'subtitle' => __('Upload Your image', 'cryptocredit'),
                'compiler' => true,
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/img/logo.png',
                )
            ), 



            array(
                'id' => 'favicon-img',
                'type' => 'media',
                'title' => __('Favicon Image', 'cryptocredit'),
                'subtitle' => __('Upload Your favicon', 'cryptocredit'),
                'compiler' => true,
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/img/favicon.png',
                )
            ), 

          

            
		   
        )
    ) );



    // footer section start 
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer Section', 'cryptocredit' ),
        'id'               => 'footer-section',
        'icon'             => 'fa fa-cog',
		'fields'           => array(
		   
            array(
                'id' => 'footer-logo-left',
                'type' => 'media',
                'title' => __('Left Logo Image Uploader', 'cryptocredit'),
                'subtitle' => __('Upload Your image', 'cryptocredit'),
                'compiler' => true,
                'default' => array(
                    'url' => get_template_directory_uri() . '/crypto Strong_files/FDIC-EHL.svg',
                )
            ),



        array(
            'id' => 'footer-logo-right',
            'type' => 'media',
            'title' => __('Right Logo Image Uploader', 'cryptocredit'),
            'subtitle' => __('Upload Your image', 'cryptocredit'),
            'compiler' => true,
            'default' => array(
                'url' => get_template_directory_uri() . '/crypto Strong_files/logo_grey.svg',
            )
        ), 

            array(
                'id' => 'footer-desc-left',
                'type' => 'editor',
                'title' => __('Left Footer Short Info', 'cryptocredit'),
                'subtitle' => __('Write Footer Short Info', 'cryptocredit'),
                'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s. ',

            ),
        array(
            'id' => 'footer-desc-right',
            'type' => 'editor',
            'title' => __('Right Footer Short Info', 'cryptocredit'),
            'subtitle' => __('Write Footer Short Info', 'cryptocredit'),
            'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s. ',

        ),

            
            array(
                'id' => 'foot_copyright',
                'type' => 'textarea',
                'title' => 'Copyright Text',
                'default' => '© 2023 <a href="#">Domain</a>. All rights reserved.',
            ),         
        )
    ) );


 // footer section end 






 // Home page start
 Redux::setSection( $opt_name, array(
    'title'            => __( 'Home Sidebars 1', 'cryptocredit' ),
    'id'               => 'home-section-side',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
       
   

    array(
            'id' => 'hside_1_title',
            'type' => 'text',
            'title' => __('Sidebar 1 title', 'cryptocredit'),
            'subtitle' => __('Write title here', 'cryptocredit'),
            'default' => ' Explore Our Products ',

     ),

     array(
        'id' => 'hside_1_desc',
        'type' => 'textarea',
        'title' => __('Sidebar 1 description', 'cryptocredit'),
        'subtitle' => __('Write description here', 'cryptocredit'),
        'default' => ' How else can we help you build?',

    ), 

    array(
        'id' => 'hside_1_btn1title',
        'type' => 'text',
        'title' => __('Sidebar 1 button 1 title', 'cryptocredit'),
        'subtitle' => __('Write title here', 'cryptocredit'),
        'default' => 'Revolv ',

    ), 


    array(
        'id' => 'hside_1_btn1img',
        'type' => 'media',
        'title' => __('Image Uploader', 'cryptocredit'),
        'subtitle' => __('Upload Your button image', 'cryptocredit'),
        'compiler' => true,
        'default' => array(
            'url' => get_template_directory_uri() . '/crypto Strong_files/FDIC-EHL.svg',
        )
    ),


    array(
        'id' => 'hside_1_btn1desc',
        'type' => 'text',
        'title' => __('Sidebar 1 button 1 description', 'cryptocredit'),
        'subtitle' => __('Write description here', 'cryptocredit'),
        'default' => 'Build revolving credit',
    ), 


    array(
        'id' => 'hside_1_btn2title',
        'type' => 'text',
        'title' => __('Sidebar 1 button 2 title', 'cryptocredit'),
        'subtitle' => __('Write title here', 'cryptocredit'),
        'default' => 'CS Business',

    ),

    array(
        'id' => 'hside_1_btn2img',
        'type' => 'media',
        'title' => __('Image Uploader', 'cryptocredit'),
        'subtitle' => __('Upload Your button image', 'cryptocredit'),
        'compiler' => true,
        'default' => array(
            'url' => get_template_directory_uri() . '/crypto Strong_files/FDIC-EHL.svg',
        )
    ),

    array(
        'id' => 'hside_1_btn2desc',
        'type' => 'text',
        'title' => __('Sidebar 1 button 2 description', 'cryptocredit'),
        'subtitle' => __('Write description here', 'cryptocredit'),
        'default' => 'Build business credit',   
    ), 

    

    )
) );


// Home page section end 





 // Home page start
 Redux::setSection( $opt_name, array(
    'title'            => __( 'Home Sidebars 2', 'cryptocredit' ),
    'id'               => 'home-section-side-2',
    'icon'             => 'fa fa-cog',
    'subsection'               => 'true',
    'fields'           => array(
       
    array(
            'id' => 'hside_2_title',
            'type' => 'text',
            'title' => __('Sidebar 2 title', 'cryptocredit'),
            'subtitle' => __('Write title here', 'cryptocredit'),
            'default' => 'Save money on Car Insurance', 
       ),


       array(
        'id' => 'hside_2_txt1',
        'type' => 'text',
        'title' => __('Text 1', 'cryptocredit'),
        'subtitle' => __('Write text here', 'cryptocredit'),
        'default' => 'Log in with your current insurance ',

    ), 


     array(
        'id' => 'hside_2_txt2',
        'type' => 'text',
        'title' => __('Text 2', 'cryptocredit'),
        'subtitle' => __('Write text here', 'cryptocredit'),
        'default' => 'We’ll search for better deals that match your coverage ',

    ), 

    array(
        'id' => 'hside_2_txt3',
        'type' => 'text',
        'title' => __('Text 3', 'cryptocredit'),
        'subtitle' => __('Write text here', 'cryptocredit'),
        'default' => ' Switch to a better deal for FREE',

    ), 

    array(
        'id' => 'check-policy-link',
        'type' => 'text',
        'title' => __('Check policy link', 'cryptocredit'),
        'subtitle' => __('write your check policy link', 'cryptocredit'),
    ),


        
         
    )
) );


// Home page section end 



    //contact info  start
    // Redux::setSection( $opt_name, array(
    //     'title' => 'Contact Info ',
    //     'id' => 'contact-info',
    //     'fields' => array(
    //         array(
    //             'id' => 'contact-phone',
    //             'type' => 'text',
    //             'title' => __('Contact Phone', 'cryptocredit'),
    //             'subtitle' => __('Write here the phone number', 'cryptocredit'),
    //             'default' => '0190000000'
    //         ),  
            
    //         array(
    //             'id' => 'contact-email',
    //             'type' => 'text',
    //             'title' => __('Contact email', 'cryptocredit'),
    //             'subtitle' => __('Write here the email address', 'cryptocredit'),
    //             'default' => 'example@gmail.com'
    //         ),

    //         array(
    //             'id' => 'contact-location',
    //             'type' => 'text',
    //             'title' => __('Contact location', 'cryptocredit'),
    //             'subtitle' => __('Write here the location address', 'cryptocredit'),
    //             'default' => 'Test address'
    //         ),

    //     ),
    // ) );

    // end contact info 



?>