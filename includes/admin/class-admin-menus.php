<?php
/*
* Simple Google Map with Marker
*/
defined( 'ABSPATH' ) || exit;
if ( class_exists( 'SGMWS_Admin_Menus', false ) ) {
	return new SGMWS_Admin_Menus();
}

class SGMWS_Admin_Menus {
	public function __construct() {
		// Add menus.
		add_action( 'admin_menu', array( $this, 'admin_menu' ), 50 );
		
	}

	public function SimpleGoogleMap(){
		include( SGMWS_ADMIN_ABSPATH. 'views/google-map.php' );
	}
	
	/**
	 * Add menu items.
	 */
	public function admin_menu() {
		add_menu_page( __( 'Simple Google Map', 'Simple Google Map' ), __( 'Simple Google Map', 'Simple Google Map' ), 'edit_pages', 'simple-google-map', array( $this, 'SimpleGoogleMap' ), 'dashicons-location', '6' );
	}

	


}
return new SGMWS_Admin_Menus();
?>