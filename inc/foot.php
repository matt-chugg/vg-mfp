<?php
    if (!defined('WPINC')) {die;} 
    
    function vgmfp_do_footer() {
        // tag manager
        $vgmfp_gtm_container = get_option("vgmfp_google_container_id","");
        if($vgmfp_gtm_container != "") {
            require_once("gtm.php");
        }
        
        // clever links
        $vgmfp_clever_links = get_option("vgmfp_clever_stuff_links","");
        if($vgmfp_clever_links) {
            require_once("linkjs.php");
            
        }
        
    }
    add_action('wp_footer', 'vgmfp_do_footer',1000);



