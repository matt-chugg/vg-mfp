<?php
/*
Plugin Name: VG MFP
Plugin URI: https://github.com/matt-chugg/vg-mfp
Version: 1.07
Author: Matt Chugg
Description: Multi-Function Plugin by Matt Chugg
Text Domain: vg-mfp
GitHub Plugin URI: https://github.com/matt-chugg/vg-mfp
*/



    // If this file is called directly, abort.
    if (!defined('WPINC')) {die;}


    $vgmfp_file = __FILE__;
    

// Load Options
require_once("options/options.php");




// do header and footer functions
require_once("inc/foot.php");
require_once("inc/head.php");



// do filters
require_once("inc/filters.php");


// do admin bar
require_once("inc/admin.php");