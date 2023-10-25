<?php
/**
 * Plugin Name:       Ski Da UP Functionality
 * Description:       Data and API Layer for Ski Da UP
 * Author:            Ski Da UP
 * Author URI:        https://skidaup.com
 * Version:           1.0.0
 * Requires at least: 4.4
 * Tested up to:      4.8
 */

define( 'SKIDAUP_PLUGIN_VERSION', '1.0.0' );
define( 'SKIDAUP_PLUGIN_SLUG', 'skidaup' );
define( 'SKIDAUP_PLUGIN_FILE', __FILE__ );
define( 'SKIDAUP_PLUGIN_DIR', plugin_dir_path( SKIDAUP_PLUGIN_FILE ) );
define( 'SKIDAUP_PLUGIN_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( SKIDAUP_PLUGIN_FILE ) ), basename( SKIDAUP_PLUGIN_FILE ) ) ) );

require_once( 'inc/class-skidaup.php' );
require_once( 'inc/class-skidaup-ski-areas.php' );
require_once( 'inc/class-skidaup-lost-ski-areas.php' );
require_once( 'inc/class-skidaup-videos.php' );
require_once( 'inc/class-skidaup-p2p-connections.php' );
require_once( 'inc/class-skidaup-graphql.php' );

if( class_exists( 'SkiDaUP' )  ) {
	function skidaup() {
		return SkiDaUP::get_instance();
	}

	add_action( 'plugins_loaded', 'skidaup' );
}