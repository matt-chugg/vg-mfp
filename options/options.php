<?php
    // If this file is called directly, abort.
    if (!defined('WPINC')) {die;}

    // hook admin menu
    add_action( 'admin_menu', 'create_vgmfp_options' );

    // create options
    function create_vgmfp_options() {
        // add pages
        add_options_page('Google Options', 'Google (ѵ)', 'manage_options', 'vgmfp_google_options', function(){
            if (!current_user_can('manage_options'))  {wp_die( __( 'You do not have sufficient permissions to access this page.' ));}
            include_once("pages/google.php");
        });
        
        add_options_page('Head Options', 'Head Tags (ѵ)', 'manage_options', 'vgmfp_head_options', function(){
            if (!current_user_can('manage_options'))  {wp_die( __( 'You do not have sufficient permissions to access this page.' ));}
            include_once("pages/head.php");
        });
        
        add_options_page('Clever Stuff', 'Clever Stuff (ѵ)', 'manage_options', 'vgmfp_clever_stuff', function(){
            if (!current_user_can('manage_options'))  {wp_die( __( 'You do not have sufficient permissions to access this page.' ));}
            include_once("pages/clever.php");
        });

        // create settings
        add_action( 'admin_init', function() {
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

            // reporting
            register_setting( 'vgmfp_clever_stuff', 'vgmfp_clever_stuff_links');
            register_setting( 'vgmfp_clever_stuff', 'vgmfp_clever_stuff_disable_xml-rpc');
            register_setting( 'vgmfp_clever_stuff', 'vgmfp_clever_stuff_queries');
            register_setting( 'vgmfp_clever_stuff', 'vgmfp_clever_stuff_clacks');   
        });
    }

    
    

