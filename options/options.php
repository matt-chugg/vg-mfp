<?php

    


    // add image sizes for icons
    $vgmfp_touch_icon_sizes = array(16,32,57,60,72,76,96,114,120,144,152,196,160);
    foreach($vgmfp_touch_icon_sizes as $imageSize) {
        add_image_size("vgmfp_touch_{$imageSize}", $imageSize, $imageSize, true);
    }


    // add support for image uploader
    function add_media_support(){ wp_enqueue_media(); }
    add_action( 'admin_init', 'add_media_support' );




    // hook admin menu
    add_action( 'admin_menu', 'create_vgmfp_options' );


    // create options
    function create_vgmfp_options() {
        // add pages
        add_options_page( 'Google Options', 'Google', 'manage_options', 'vgmfp_google_options', 'create_vgmfp_options_page_google' );
        add_options_page( 'Head Options', 'Head Tags', 'manage_options', 'vgmfp_head_options', 'create_vgmfp_options_page_head' );

        
        // create settings
        add_action( 'admin_init', 'create_vgmfp_options_items' );
    }


    
    
    function create_vgmfp_options_items() {
        // google
	register_setting( 'vgmfp_google_options', 'vgmfp_google_verification');
	register_setting( 'vgmfp_google_options', 'vgmfp_google_container_id');
        register_setting( 'vgmfp_google_options', 'vgmfp_google_author');
        register_setting( 'vgmfp_google_options', 'vgmfp_google_publisher');
        
        // head
        register_setting( 'vgmfp_head_options', 'vgmfp_head_hide_generator');
        register_setting( 'vgmfp_head_options', 'vgmfp_head_hide_prev_next');
        register_setting( 'vgmfp_head_options', 'vgmfp_head_hide_wlw');
        register_setting( 'vgmfp_head_options', 'vgmfp_head_hide_shortlink');
        register_setting( 'vgmfp_head_options', 'vgmfp_head_hide_rsd');
        


    }
    
    
    
    /*
     * PAGES
     */

    // google
    function create_vgmfp_options_page_google() {
        if (!current_user_can('manage_options'))  {wp_die( __( 'You do not have sufficient permissions to access this page.' ));}
        include_once("pages/google.php");
    }
    
    
    
    // head
    function create_vgmfp_options_page_head() {
        if (!current_user_can('manage_options'))  {wp_die( __( 'You do not have sufficient permissions to access this page.' ));}
        include_once("pages/head.php");
    }
    
