<?php
    if (!defined('WPINC')) {die;} 
    
    // footer things
    add_action('wp_footer', function() {
        // tag manager
        $vgmfp_gtm_container = get_option("vgmfp_google_container_id","");
        if($vgmfp_gtm_container != "") {
            require_once("gtm.php");
        }
        
        // clever links
        if(get_option("vgmfp_clever_stuff_links","")) {
            require_once("linkjs.php");
        }
    },1000);



