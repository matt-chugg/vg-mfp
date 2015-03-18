<?php
if (!defined('WPINC')) {die;} 

// various filters to remove pingback
$vgmfp_disablepingback = get_option("vgmfp_clever_stuff_disable_xml-rpc","");
if($vgmfp_disablepingback) {
    add_filter( "xmlrpc_methods", function( $methods ) {
        unset( $methods["pingback.ping"] );
        return $methods;
    });
    add_filter('wp_headers', function ($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
    add_filter( 'xmlrpc_enabled', '__return_false' );
    
}
        

// filter to add clacks overhead header
$vgmfp_clacks = get_option("vgmfp_clever_stuff_clacks","");
if($vgmfp_clacks) {
    add_filter( 'wp_headers', function ( $headers ) {
        $headers['X-Clacks-Overhead'] = 'GNU Terry Pratchett';
	return $headers;
    });
}


