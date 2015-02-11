<?php
    // If this file is called directly, abort.
    if (!defined('WPINC')) {die;}

    // hook admin menu
    add_action( 'admin_menu', 'create_vgmfp_options' );

    // create options
    function create_vgmfp_options() {
        // add pages
        add_options_page('Google Options', 'Google', 'manage_options', 'vgmfp_google_options', 'create_vgmfp_options_page_google');
        add_options_page('Head Options', 'Head Tags', 'manage_options', 'vgmfp_head_options', 'create_vgmfp_options_page_head');
        add_options_page('Clever Stuff', 'Clever Stuff', 'manage_options', 'vgmfp_clever_stuff', 'create_vgmfp_options_page_clever');

        // create settings
        add_action( 'admin_init', 'create_vgmfp_options_items' );
    }

    // create settings
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
        
        // reporting
        register_setting( 'vgmfp_clever_stuff', 'vgmfp_clever_stuff_links');
        register_setting( 'vgmfp_clever_stuff', 'vgmfp_clever_stuff_disable_xml-rpc');
        
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

    // Clever stuff
    function create_vgmfp_options_page_clever() {
        if (!current_user_can('manage_options'))  {wp_die( __( 'You do not have sufficient permissions to access this page.' ));}
        include_once("pages/clever.php");
    }