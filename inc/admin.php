<?php

// don't allow this file to be accessed directly
if (!defined('WPINC')) {die;} 

// show queries and time in admin bar
$vgmfp_adminqueries = get_option("vgmfp_clever_stuff_queries","");
if($vgmfp_adminqueries) {
    add_action( 'wp_before_admin_bar_render', function() {
        global $wp_admin_bar;			

        // queries + timer
        $wp_admin_bar->add_menu( array(
            "id" => "vgmfp_admin_queries",
            "title" => "Q: " . get_num_queries() . " | T: "  .timer_stop(0, 2),
            "href" => "#"
        ));
    }, 999 );
}