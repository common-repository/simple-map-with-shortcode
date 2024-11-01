<?php
/**
* Plugin Name: Simple Map With Shortcode
* Description: Create Google Maps in a minute with Simple Map With Shortcode WordPress plugin add google map with shortcode or php code
* Version: 1.0.0
* Tested up to: 5.9.2
* Requires PHP: 7.0
* Author: Arjun Soni
* License: GPL v2 or later
**/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! defined( 'SGMWS_PLUGIN_FILE' ) ) {
    define( 'SGMWS_PLUGIN_FILE', __FILE__ );
}

// Enable error reporting in development
if(getenv('WPAE_DEV')) {
    error_reporting(E_ALL ^ E_DEPRECATED );
    ini_set('display_errors', 1);
    // xdebug_disable();
}

// Include the main SimpleGoogleMapWithShortcode class.
if ( ! class_exists( 'SimpleGoogleMapWithShortcode', false ) ) {
    include_once(dirname( SGMWS_PLUGIN_FILE ) . '/includes/class-simple-map-with-shortcode.php');
}

// phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid.
function SGMWS() { 
    return SimpleGoogleMapWithShortcode::instance();
}



$GLOBALS['SimpleGoogleMapWithShortcode'] = SGMWS();
?>