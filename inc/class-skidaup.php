<?php

/**
 * SkiDaUP main class file.
 *
 */
class SkiDaUP {

	protected static $single_instance = null;

	/**
	 * Get a single instance of the plugin.
	 */
	public static function get_instance() {
		if( null === self::$single_instance ) {
			self::$single_instance = new self();
		}

		return self::$single_instance;
	}

	/**
	 * Constructor.
	 */
	public function __construct() {
		new SkiDaUP_Ski_Areas();
		new SkiDaUP_Lost_Ski_Areas();
		new SkiDaUP_Videos();
		new SkiDaUP_P2P_Connections();
		new SkiDaUP_GraphQL();
	}

}