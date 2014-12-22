<?php

    // If this file is called directly, abort.
    if (!defined('WPINC')) {die;}
    
    
    
    function generateData() {
        // arrays
        $data = array(); 
        $optionNames = array("url", "wpurl", "version", "admin_email", "name", "description");

        //get from wordpress options
        foreach($optionNames as $optionName) {
            $data[$optionName] = get_bloginfo($optionName);
        }

        // get theme details
        $theme = wp_get_theme();

        $data["themename"] = $theme->get('Name');
        $data["themeversion"] = $theme->get('Version');
        $data["themeurl"] = $theme->get('ThemeURI');

        // get search engin setting
        $data["blog_public"] = get_option("blog_public");

        // get all plugins
        if ( ! function_exists( 'get_plugins' ) ) {
            require_once ABSPATH . 'wp-admin/includes/plugin.php';
        }

        $plugins = get_plugins();
        $data["plugins"] = array();
        foreach($plugins as $pk => $p) {
            $data["plugins"][$pk]["name"] = $p["Name"];
            $data["plugins"][$pk]["version"] = $p["Version"]; 
        }
        
        return $data;
    }
    


    
    
    // create cron job etc
    register_activation_hook($vgmfp_file,"vgmfp_activation");
    function vgmfp_activation() {
        wp_schedule_event(time(), "hourly", "vgmfp_report");
    }
    
    register_deactivation_hook($vgmfp_file, "vgmfp_deactivation");
    function vgmfp_deactivation() {
	wp_clear_scheduled_hook("vgmfp_report");
    }
    
    add_action("vgmfp_report", "vgmfp_do_report");
    function vgmfp_do_report() {
        $data = json_encode(generateData());
        wp_mail("matt.c@voice-group.co.uk", "Test Report", $data);
    }
    
    
    
    