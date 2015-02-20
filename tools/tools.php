<?php


add_action('admin_menu', 'create_vgmfp_tools');

function create_vgmfp_tools() {
	add_submenu_page( 'tools.php', 'Cron Jobs', 'Cron Jobs', 'manage_options', 'vgmfp_cron', 'create_vgmfp_tools_page_cron' );
        
        
}

function create_vgmfp_tools_page_cron() {
    include_once("pages/cron.php");

}

