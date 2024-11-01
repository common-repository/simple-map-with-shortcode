<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * SGMWS_Admin class.
 */
class SGMWS_Admin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'includes' ) );
		add_action( 'current_screen', array( $this, 'conditional_includes' ) );
		add_action( 'admin_init', array( $this, 'buffer' ), 1 );
	}

	/**
	 * Output buffering allows admin screens to make redirects later on.
	 */
	public function buffer() {
		ob_start();
	}

	/**
	 * Include any classes we need within admin.
	 */
	public function includes() {
		include_once( SGMWS_ADMIN_ABSPATH . '/class-admin-menus.php' );
		include_once( SGMWS_ADMIN_ABSPATH . '/class-scripts.php' );
		include_once( SGMWS_ABSPATH . 'includes/class-shortcode.php' );
	}

	/**
	 * Include admin files conditionally.
	 */
	public function conditional_includes() {
		$screen = get_current_screen();
		if ( ! $screen ) {
 			return;
		}
	}
}
return new SGMWS_Admin();