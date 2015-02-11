<?php
if (!defined('WPINC')) {die;} 

function do_vgmfp_admin_queries(){
    global $wp_admin_bar;			

    // queries + timer
    $wp_admin_bar->add_menu( array(
        "id" => "vgmfp_admin_queries",
        "title" => "Q: " . get_num_queries() . " | T: "  .timer_stop(0, 2),
        "href" => "#"
    ));

	
}


$vgmfp_adminqueries = get_option("vgmfp_clever_stuff_queries","");
if($vgmfp_adminqueries) {
    add_action( 'wp_before_admin_bar_render', 'do_vgmfp_admin_queries', 999 );
}