<?php
/*
Plugin Name: VG MFP
Plugin URI: https://github.com/matt-chugg/vg-mfp
Version: 1.03
Author: Matt Chugg
Description: Multi-Function Plugin by Matt Chugg
Text Domain: vg-mfp
GitHub Plugin URI: https://github.com/matt-chugg/vg-mfp
*/

error_reporting(E_ALL);
ini_set('display_errors', '1');

    // If this file is called directly, abort.
    if (!defined('WPINC')) {die;}


    $vgmfp_file = __FILE__;
    

// Load Options
require_once("options/options.php");




// do header and footer functions
require_once("inc/foot.php");
require_once("inc/head.php");



// reporter
require_once("reporter/reporter.php");