<?php if (!defined('WPINC')) {die;} 

    function vgmfp_do_header() {
        // google site verification code
        $vgmfp_gvc = get_option("vgmfp_google_verification","");
        if($vgmfp_gvc != "") {
            echo("\t<meta name=\"google-site-verification\" content=\"{$vgmfp_gvc}\" />\r\n");
        }
    }
    add_action('wp_head', 'vgmfp_do_header', 1000);
    
    
    
    if(get_option("vgmfp_head_hide_prev_next",0)) {
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
    }
    
    if(get_option("vgmfp_head_hide_rsd",0)) {
        remove_action('wp_head', 'rsd_link', 10, 0);
    }
    if(get_option("vgmfp_head_hide_wlw",0)) {
        remove_action('wp_head', 'wlwmanifest_link', 10, 0);
    }
    
    if(get_option("vgmfp_head_hide_shortlink",0)) {
        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    }

    if(get_option("vgmfp_head_hide_generator",0)) {
        remove_action('wp_head', 'wp_generator', 10, 0);
    }
    
    
    



